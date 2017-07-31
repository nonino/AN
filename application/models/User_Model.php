<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 5/8/17
 * Time: 6:22 PM
 */

class User_Model extends CI_Model{
    function getDetials(){
        $this->load->database();
      //  $quer=$this->db->query("select * from user");

        $query=$this->db->get_where("user",array("name" => "ammar"));
//        echo "<pre>";
//        print_r($quer->result_array());
//        echo"</pre>";
       // return $quer->result_array();
        return $query->result();
    }
}