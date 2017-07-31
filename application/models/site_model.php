<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 5/26/17
 * Time: 1:41 PM
 */
 class site_model extends CI_Model{

     public function getData()
     {
         $q=$this->db->get('test');

         if($q->num_rows()>0){
             foreach ($q->result() as $row){
                 $data[] = $row;
             }
         }
         return $data;
     }
     public function getDataW($name)
     {
         $q=$this->db->get_where('test',array("firstname"=>$name));

         if($q->num_rows()>0){
             foreach ($q->result() as $row){
                 $data = $row;
             }
         }
         return $data;
     }


 }