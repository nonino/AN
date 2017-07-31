<?php


class Site extends CI_Controller{

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
            $data = array(
                "firstname" => $this->session->userdata('firstname'),
                "logged_in" => $this->logged_in,
                "type" => $this->session->userdata('type'),

            );
            $this->load->model('product');
            $data['country']=$this->product->GetCountry();
            $data['catagory']=$this->product->GetCatagory();

            $this->load->view('wlecome_page',$data);
        }else{
            $this->load->model('utils');
            $data['product']=$this->utils->getProduct();
            $this->load->view('My_View',$data);
        }
    }
}