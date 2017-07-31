<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/8/17
 * Time: 1:29 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_Controller extends CI_Controller
{

    private $logged_in;

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('logged_in')){
            $this->logged_in=true;
        }else{
            $this->logged_in=false;
        }
    }

    public function index()
    {
        if ($this->logged_in) {
            $this->load->model('utils');

            $data = array(
                "firstname" => $this->session->userdata('firstname'),
                "logged_in" => $this->logged_in,
                "type" => $this->session->userdata('type'),
                "rule" =>$this->session->userdata('rule'),
                "client_count"=>$this->utils->getClientCount(),
                "provider_count"=>$this->utils->getProviderCount(),
                "product_count"=>$this->utils->getProductCount()
            );

            $this->load->view('admin',$data);
        }else{
            redirect('Site');
        }
    }



}