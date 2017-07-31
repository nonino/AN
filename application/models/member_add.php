<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/5/17
 * Time: 1:20 PM
 */
class member_add extends CI_Model
{


    private function addUser($email,$type)
    {

        $password = $this->input->post('password');
        $data = array(
            'user_email' => $email,
            'password' => $password,
            'type_id' => $type
        );
        $this->db->insert('users', $data);


        $this->db->select('user_id');
        $user_id = $this->db->get_where('users', array('user_email' => $email));
        return $user_id = $user_id->row()->user_id;

    }

    private function addAddress($email)
    {

        $city = $this->input->post('city');
        $area = $this->input->post('area');
        $street = $this->input->post('street');
        $building = $this->input->post('building');
        $notes = $this->input->post('notes');


        $data = array(
            'address_street' => $street,
            'address_building' => $building,
            'area_id' => $area,
            'city_id' => $city,
            'address_note' => $notes,
            'email' => $email
        );

        $result = $this->db->insert('address', $data);

        $this->db->select('address_id');
        $address_id = $this->db->get_where('address', array('email' => $email));
       return $address_id = $address_id->row()->address_id;
    }


    public function addNewClient()
    {
        $fisrtname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $mobile = $this->input->post('mobile');
        $tele = $this->input->post('tele');
        $email = $this->input->post('email');

       $user_id=$this->addUser($email,1);
        $address_id=$this->addAddress($email);




        $data = array(
            'client_first_name' => $fisrtname,
            'client_last_name' => $lastname,
            'client_tele' => $tele,
            'client_mobile' => $mobile,
            'address_id' => $address_id,
            'client_email' => $email,
            'id'=>$user_id
        );

        $result = $this->db->insert('client', $data);

        if ($result) {
            $this->set_session($email,$fisrtname,$lastname,$user_id);
            //print_r($this->session->all_userdata());
            return $fisrtname;
        }

        return false;
    }

    public function addNewAdmin()
    {
        $fisrtname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');

       $user_id=$this->addUser($email,0);





        $data = array(
            'admin_first_name' => $fisrtname,
            'admin_last_name' => $lastname,
            'admin_email' => $email,
            'prvilages' => 0,
            'id'=>$user_id
        );

        $result = $this->db->insert('admin', $data);

        if ($result) {
            $this->set_session($email,$fisrtname,$lastname,$user_id);
            //print_r($this->session->all_userdata());
            return $fisrtname;
        }

        return false;
    }

    public function addNewCompany()
    {
        $fisrtname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $mobile = $this->input->post('mobile');
        $tele = $this->input->post('tele');
        $email = $this->input->post('email');
        $companyname = $this->input->post('companyname');
        $catagory = $this->input->post('catagory');


       $user_id=$this->addUser($email,2);
        $address_id=$this->addAddress($email);




        $data = array(
            'provider_first_name' => $fisrtname,
            'provider_last_name' => $lastname,
            'provider_tele' => $tele,
            'provider_mobile' => $mobile,
            'address_id' => $address_id,
            'provider_email' => $email,
            'provider_company_name'=>$companyname,
            'catagory_id'=>$catagory,
            'id'=>$user_id

        );

        $result = $this->db->insert('provider', $data);

        if ($result) {
            $this->set_session($email,$fisrtname,$lastname,$user_id);
            //print_r($this->session->all_userdata());
            return $companyname;
        }

        return false;
    }

    function set_session($email,$firstname,$lastname,$user_id){
        $sess_data=array(
            "email"=>$email,
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "logged_in"=>0,
            "id"=>$user_id

        );
        $this->session->set_userdata($sess_data);
    }

}