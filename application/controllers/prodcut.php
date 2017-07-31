<?php
class  prodcut extends  CI_Controller{

    function index(){
        if($this->session->userdata('firstname')) {
            echo 1;
            
            
        }
        else{
            echo 2;
        }



    }






}