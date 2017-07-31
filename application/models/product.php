<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 19/06/2017
 * Time: 10:15 ص
 */
class  product extends CI_Model{

    function  GetCountry(){
        $q=$this->db->get('countries');
        return $q->result();
    }
    function GetCatagory(){
        $q=$this->db->get('catagory');
        return $q->result();
    }
    function SetProduct($info){
        $this->db->insert('product',$info);
       $this->db->select('product_id');
        $this->db->where($info);
        $q=$this->db->get('product');
        return $q->result()[0]->product_id;
    }
    function SetImage($info){
        $this->db->insert('image',$info);
    }



}