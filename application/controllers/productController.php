<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');


class ProductController extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('products_model');


    }

    private function load_view($view,$data=''){
        $this->load->view('include/header');
        $this->load->view($view,$data);
        $this->load->view('include/footer');
    }

    function product_page($id){
        $data['product'] = $this->products_model->get_product($id);
        if(empty($data['product']))redirect('home');
        //$data['recommended']=$this->products_model->get_recommended($ads_title,$id);
        $data['product_cats']=$this->products_model->get_cat_names();
        $this->load_view('product', $data);
    }


}