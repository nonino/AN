<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 5/5/17
 * Time: 9:40 PM
 */
class Mycontroller extends CI_Controller
{

    public function index()
    {
        $this->load->model('site_model');
        $data['records']=$this->site_model->getData();
        $this->load->view('test',$data);

    }



    public function getName()
    {
        $this->load->model('MyModel');
        $firstname = $this->MyModel->getFirstName();
        echo "first name is " . $firstname;
    }
}
