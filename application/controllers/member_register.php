<?php


class member_register extends CI_Controller
{

    public function index()
    {
        echo "helllo";
    }

    public function client_register()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.user_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('tele', 'Telephone number', 'required|numeric|exact_length[7]');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');


        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $this->load->model('utils');
            $data['city'] = $this->utils->getCities();
            $data['area'] = $this->utils->getAreas();
            $this->load->view('client_register', $data);
        } else {
            $this->load->model('member_add');
            $result = $this->member_add->addNewClient();
            if ($result) {
                redirect('login_controller');
            }

        }
    }


    public function company_register()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.user_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');
        $this->form_validation->set_rules('mobile', 'Mobile number', 'required|numeric|exact_length[10]');
        $this->form_validation->set_rules('tele', 'Telephone number', 'required|numeric|exact_length[7]');
        $this->form_validation->set_rules('street', 'Street', 'required');
        $this->form_validation->set_rules('building', 'Building', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('area', 'Area', 'required');
        $this->form_validation->set_rules('catagory', 'Catagory', 'required');
        $this->form_validation->set_rules('facebookpage', 'Facebook Page', 'valid_url');
        $this->form_validation->set_rules('companyname', 'Company name', 'required|alpha|min_length[3]|max_length[15]');


        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $this->load->model('utils');
            $data['city'] = $this->utils->getCities();
            $data['area'] = $this->utils->getAreas();
            $data['catagory'] = $this->utils->getCatgories();
            $this->load->view('company_register', $data);
        } else {
            $this->load->model('member_add');
            $result = $this->member_add->addNewCompany();
            if ($result) {
               redirect('login_controller');
            }

        }


    }
    public function admin_register()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'First name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|alpha|min_length[3]|max_length[15]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[users.user_email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');
        $this->form_validation->set_rules('passconf', 'Password Confrmation', 'required|matches[password]');



        if ($this->form_validation->run() == false) {
            //redirect('Site');
            $data['done']=0;
            $this->load->view('admin_add',$data);
        } else {
            $this->load->model('member_add');
            $result = $this->member_add->addNewAdmin();
            if($result) {
                $data['done'] = 1;
                $this->load->view('admin_add', $data);
            }

        }


    }
}