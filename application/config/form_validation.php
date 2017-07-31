<?php
$config = array(
    'add_product'=>array(
        array(
            'field' => 'product_name',
            'label' => '<strong>product name</strong>',
            'rules' => 'required|min_length[3]'),

        array(
            'field' => 'product_quantity',
            'label' => '<strong>product quantity</strong>',
            'rules' => 'required|integer'),
      array(
            'field' => 'product_price',
            'label' => '<strong>product price</strong>',
            'rules' => 'required|integer'),
        array(
            'field' => 'conutry_id',
            'label' => '<strong>conutry</strong>',
            'rules' => 'required|integer'),
  array(
            'field' => 'catagory_id',
            'label' => '<strong>catagory</strong>',
            'rules' => 'required|integer'),


    ),







);