<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 5/8/17
 * Time: 6:11 PM
 */

class user_detials extends CI_Controller{
    public function index(){
        $this->load->model('User_Model');
        $data['userArray']=$this->User_Model->getDetials();
        $this->load->view('my_View',$data);
    }
}