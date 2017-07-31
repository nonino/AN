<?php

/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/17/17
 * Time: 4:35 PM
 */
class Edit_user extends CI_Model
{


    private function updateAddress($email)
    {

        $city = $this->input->post('city');
        $area = $this->input->post('area');
        $street = $this->input->post('street');
        $building = $this->input->post('building');
        $notes = $this->input->post('notes');


        $data = array(
            'address_street' => $street,
            'address_building' => $building,
            'area_id' => $area,
            'city_id' => $city,
            'address_note' => $notes,
            //'email' => $email
        );

        $this->db->where('email', $email);
        $this->db->update('address', $data);

    }

    public function updateClient()
    {
        $fisrtname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $mobile = $this->input->post('mobile');
        $tele = $this->input->post('tele');
        $email = $this->session->userdata['email'];


        $data = array(
            'client_first_name' => $fisrtname,
            'client_last_name' => $lastname,
            'client_tele' => $tele,
            'client_mobile' => $mobile,
            //'address_id' => $address_id,
            // 'client_email' => $email
        );
        $this->updateAddress($email);

        $this->db->where('client_email', $email);
        $result = $this->db->update('client', $data);

        if ($result) {
            $this->set_session($fisrtname, $lastname, $email, $this->session->userdata['type']);
            //print_r($this->session->all_userdata());
            return $fisrtname;
        }

        return false;
    }

    public function updateCompany()
    {
        $fisrtname = $this->input->post('firstname');
        $companyname = $this->input->post('companyname');
        $lastname = $this->input->post('lastname');
        $catagory = $this->input->post('catagory');
        $mobile = $this->input->post('mobile');
        $tele = $this->input->post('tele');
        $email = $this->session->userdata['email'];


        $data = array(
            'provider_first_name' => $fisrtname,
            'provider_last_name' => $lastname,
            'provider_tele' => $tele,
            'provider_mobile' => $mobile,
            'provider_company_name' => $companyname,
            'catagory_id' => $catagory
        );
        $this->updateAddress($email);

        $this->db->where('provider_email', $email);
        $result = $this->db->update('provider', $data);

        if ($result) {
            $this->set_session($fisrtname, $lastname, $email, $this->session->userdata['type']);
            //print_r($this->session->all_userdata());
            return $fisrtname;
        }

        return false;
    }


    private function set_session($firtname, $lastname, $email, $type)
    {
        if ($type == 1) {
            $sess_data = array(
                "email" => $email,
                "firstname" => $firtname,
                "lastname" => $lastname,
                "logged_in" => 1,
                "type" => $type
            );
        } elseif ($type == 2) {
            $sess_data = array(
                "email" => $email,
                "firstname" => $firtname,
                "lastname" => $lastname,
                "logged_in" => 1,
                "type" => $type
            );
        }

        $this->session->set_userdata($sess_data);
    }

    public function updatePassword()
    {
        $password = $this->input->post('password');
        $email = $this->session->userdata['email'];

        $data = array(
            'user_email' => $email,
            'password' => $password
        );

        $this->db->where('user_email', $email);
        $result = $this->db->update('users', $data);
        if ($result) {
            return true;
        }

    }


}