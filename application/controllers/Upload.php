<?php
/**
 * Created by PhpStorm.
 * User: ammar
 * Date: 18/06/2017
 * Time: 01:09 م
 */
class Upload extends CI_Controller
{

    function upload1()

    {
      

        if($this->form_validation->run('add_product') == true){
        if($this->input->post('product_offer') == null) $product_offer=0;
            else $product_offer=1;
         $info=array(
             'product_name'=>$this->input->post('product_name'),
             'product_quantily'=>$this->input->post('product_quantity'),
             'product_price'=>$this->input->post('product_price'),
             'product_factor'=>$this->input->post('conutry_id'),
             'product_offer'=>$product_offer,
             'catagory_id'=>$this->input->post('catagory_id'),
             'provider_id'=>$this->session->userdata('id'),
             'state'=>0,
         );
        echo '<pre>';
        print_r($info);
        echo '</pre>';
        $this->load->model('product');
         $id_pro=$this->product->SetProduct($info);
         echo $id_pro;
        $name_array = array();
        $count = count($_FILES['file']['name']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {
                $_FILES['file']['name'] = $value['name'][$s];
                $_FILES['file']['type'] = $value['type'][$s];
                $_FILES['file']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['file']['error'] = $value['error'][$s];
                $_FILES['file']['size'] = $value['size'][$s];
                $config['remove_spaces'] = TRUE;
                $config['encrypt_name'] = TRUE; // for encrypting the name
                $config['upload_path'] = './images/.';
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '78000';
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {

                    $data = array(
                        "firstname" => $this->session->userdata('firstname'),
                        "logged_in" => $this->session->userdata('logged_in'),
                        "type" => $this->session->userdata('type'),
                        'error'=>$this->upload->display_errors()
                    );
                    $this->load->model('product');
                    $data['country']=$this->product->GetCountry();
                    $data['catagory']=$this->product->GetCatagory();

                    $this->load->view('wlecome_page',$data);
                } else {

                    $da = $this->upload->data();
                    $info_img=array(
                        'image_name'=>$da['file_name'],
                        'image_full_path'=>$da['file_path'],
                        'prodcut_id'=>$id_pro
                    );

                $this->product->SetImage($info_img);
                }
            }
    }
    else{
        if ($this->session->userdata('logged_in')) {
            $data = array(
                "firstname" => $this->session->userdata('firstname'),
                "logged_in" => $this->session->userdata('logged_in'),
                "type" => $this->session->userdata('type'),

            );
            $this->load->model('product');
            $data['country']=$this->product->GetCountry();
            $data['catagory']=$this->product->GetCatagory();

            $this->load->view('wlecome_page',$data);
        }else{
            $this->load->view('My_View');
        }

    }





}
}
