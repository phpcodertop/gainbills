<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class CategoryController extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->library('pagination');
    }
    private function load_view($view,$data=''){
        $this->load->view('include/header');
        $this->load->view($view,$data);
        $this->load->view('include/footer');
    }
    function show_cat_products($id,$page=0){
       // $id=$_POST['id'];
        $config = array();
        $config["per_page"] = 2;
        $config['full_tag_open'] = '<div class="dataTables_paginate paging_bootstrap"><ul class="pagination">';

        $config['full_tag_close'] = '</ul></div>';

        $config['num_tag_open'] = '<li>';

        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';

        $config['cur_tag_close'] = '</a></li>';

        $config['next_link'] = '&gt;';

        $config['next_tag_open'] = '<li  class="next">';

        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&lt;';

        $config['prev_tag_open'] = '<li class="prev">';

        $config['prev_tag_close'] = '</li>';
        $config['base_url'] = base_url() . 'CategoryController/show_cat_products/'.$id;
        // merge meta and data
      //  $config['total_rows']=$this->products_model->get_cat_products($id,$config["per_page"],$page,'total');
        $data['products'] = $this->products_model->get_cat_products($id,$config["per_page"],$page,'result');
        $this->pagination->initialize($config);
        //$data["links"] = $this->pagination->create_links();
        $data['product_cats']=$this->products_model->get_cat_names();
       // $data['total_rows']=$this->products_model-> get_cat_products($id,$config["per_page"],$page,'total');
        $data['main_content']='';
        //$data = array_merge($data,$meta);

        $this->load_view('category',$data);
        // $this->load->view('home',$vars);
    }
}
