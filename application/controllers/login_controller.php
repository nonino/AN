<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/8/17
 * Time: 1:29 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller
{
    public function index()
    {
        $data["pass_msg"]="";
        $data["email_msg"]="";
        $this->load->view('login');
    }

    public function user_login()
    {
        $this->load->library('form_validation');


        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[6]|max_length[15]');

        if($this->form_validation->run()== false){
            $this->index();
        }else{
            $this->load->model('login_model');
           $result= $this->login_model->checkUser();

           switch ($result){
               case "logged in":
                   if($this->session->userdata('type')==1||$this->session->userdata('type')==2){

                           redirect('Site');
                   }else{

                       redirect('admin_Controller');

                   }
                    break;
                    case "Wrong Password":

                       $data["pass_msg"]="Wrong Password";
                        $data["email_msg"]="";
                        $this->load->view('login',$data);
                    break;
                    case "Not A Valid email":

                       $data["pass_msg"]="";
                       $data["email_msg"]="Not A Valid email";
                        $this->load->view('login',$data);
                    break;




           }
        }
    }


    public function logOut()
    {
        $this->session->sess_destroy();
        redirect('Site');
    }

}