<?php
/**
 * Created by PhpStorm.
 * User: nicola
 * Date: 6/17/17
 * Time: 3:02 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profile extends CI_Controller
{
    public function index()
    {
        $this->load->model('utils');
        $data['user'] = $this->utils->getUserData($this->session->userdata('type'), $this->session->userdata('email'));
        $data['address'] = $this->utils->getAddressData($this->session->userdata('email'));
        $data['city'] = $this->utils->getCities();
        $data['area'] = $this->utils->getAreas();
        if ($this->session->userdata['type'] == 1) {
            $this->load->view('edit_client', $data);
        } else {
            $data['catagory'] = $this->utils->getCatgories();
            $this->load->view('edit_company', $data);
        }
    }


    public function editClinet()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha|min_length[3]|max_length[15]');
        //   $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.user_email]');
        //  $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        //   $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('tele', 'Telephone number', 'required|numeric|exact_length[7]');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');

        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $this->index();
        } else {
            $this->load->model('Edit_user');
            $result = $this->Edit_user->updateClient();
            if ($result) {
                redirect('Site');
            }

        }

    }


    public function editCompany()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('companyname', 'Company name', 'required|min_length[3]|max_length[20]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha|min_length[3]|max_length[15]');
        //   $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.user_email]');
        //  $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        //   $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('tele', 'Telephone number', 'required|numeric|exact_length[7]');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('catagory', 'Catagory', 'required');

        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $this->index();
        } else {
            $this->load->model('Edit_user');
            $result = $this->Edit_user->updateCompany();
            if ($result) {
                redirect('Site');
            }

        }

    }




}