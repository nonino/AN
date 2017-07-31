<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/8/17
 * Time: 2:22 PM
 */
class login_model extends CI_Model
{
    public function checkUser(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $result=$this->db->get_where('users',array("user_email"=>$email));
        $row=$result->row();

        if($result->num_rows()===1){
            if($row->password===$password){
                $user_data=$this->getUserData($row->type_id,$email);

                $this->set_session($user_data,$row->type_id);

                return "logged in";

            }else{
                return "Wrong Password";
            }
        }else{
            return 'Not A Valid email';
        }

    }

    private function getUserData($type,$email){
        switch ($type){
            case 1:
                $result=$this->db->get_where('client',array("client_email"=>$email));

                break;
            case 2:
                $result=$this->db->get_where('provider',array("provider_email"=>$email));

                break;
            case 0:
                $result=$this->db->get_where('admin',array("admin_email"=>$email));
                break;
        }

        return $result->row();
    }

    private function set_session($user_data,$type){
        if($type == 1){
        $sess_data=array(
            "id"=>$user_data->id,
            "email"=>$user_data->client_email,
            "firstname"=>$user_data->client_first_name,
            "lastname"=>$user_data->client_last_name,
            "logged_in"=>1,
            "type"=>$type
        );
        }elseif($type==2){
            $sess_data=array(
                "id"=>$user_data->id,
                "email"=>$user_data->provider_email,
                "firstname"=>$user_data->provider_first_name,
                "lastname"=>$user_data->provider_last_name,
                "logged_in"=>1,
                "type"=>$type
            );
        }elseif ($type==0){
            $sess_data=array(
                "id"=>$user_data->id,
                "email"=>$user_data->admin_email,
                "firstname"=>$user_data->admin_first_name,
                "lastname"=>$user_data->admin_last_name,
                "logged_in"=>1,
                "type"=>$type,
                "rule"=>$user_data->prvilages
            );
        }

        $this->session->set_userdata($sess_data);
    }

}