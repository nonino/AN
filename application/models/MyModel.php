<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 5/5/17
 * Time: 9:44 PM
 */
class MyModel extends CI_Model{

    public function getFirstName()
    {
        $lastname=$this->getLastName();
        return "nicola ".$lastname;
    }

    private function getLastName(){
        return "hanna";
    }

}