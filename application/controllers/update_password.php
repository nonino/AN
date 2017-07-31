<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/17/17
 * Time: 3:02 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class update_password extends CI_Controller{

    public function index(){

        $this->load->view('change_password');
    }

    public function update(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');

        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $this->index();
        } else {
            $this->load->model('Edit_user');
            $result = $this->Edit_user->updatePassword();
            if ($result) {
                redirect('Site');
            }

        }


    }

}