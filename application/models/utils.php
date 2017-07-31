<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/6/17
 * Time: 12:24 PM
 */
class utils extends CI_Model
{


    function getCities()
    {

        $this->db->select('city_name,city_id');
        $query = $this->db->get('city');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;

    }

    function getAreas()
    {

        $this->db->select('area_name,area_id');
        $query = $this->db->get('area');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;

    }

    function getCatgories()
    {

        $this->db->select('catagory_name,catagory_id');
        $query = $this->db->get('catagory');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        }
        return $data;

    }


    function getUserData($type,$email){
        switch ($type){
            case 1:
                $result=$this->db->get_where('client',array("client_email"=>$email));

                break;
            case 2:
                $result=$this->db->get_where('provider',array("provider_email"=>$email));

                break;
            case 0:
                $result=$this->db->get_where('amdin',array("email"=>$email));
                break;
        }

        return $result->row();
    }

    function getAddressData($email){
        $result=$this->db->get_where('address',array("email"=>$email));
        return $result->row();
    }

    function getClientCount(){
       $num_rows=  $this->db->count_all_results('client');
        return $num_rows;
    }
    function getProviderCount(){
        $num_rows=  $this->db->count_all_results('provider');
        return $num_rows;
    }
    function getProductCount(){
        $this->db->where('state', 0);
        $num_rows=  $this->db->count_all_results('product');
        return $num_rows;
    }

    function getProduct(){
        $result=$this->db->get_where('image',array("image_id"=>1));
        return $result->row();
    }

}