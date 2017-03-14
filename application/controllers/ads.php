<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {
  public function __construct() {
	          parent::__construct();
     $this->load->model('ads_model');
	 $this->load->library(array('session','pagination','ion_auth'));
	 if($this->ion_auth->is_admin()) redirect('admin/dashboard/index');
	 require('home.php');
    }
	function index($page=0){
		$this->load->model('products_model');
        $meta = array ('title'=> 'gainpills');
		///load toolbar/////
	    $Home =  new Home();
	    $user_info=$Home->tool_bar(); 
		///pagination//////
		 $config = array();
        $config["per_page"] = 10;
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
		$config['base_url'] = base_url() . 'ads/index/';
		$config['total_rows']=$this->ads_model-> get_ads($config["per_page"],$page,'total');		
       $data['ads'] = $this->ads_model-> get_ads($config["per_page"],$page,'result');
	   $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
	   $data['product_cats']=$this->products_model-> get_cat_names();
	   $user_id=$user_info['user_id'];
	   if($user_id!=NULL)
	     $data['clickable_ads']=$this->ads_model->get_user_clickableds($user_id);
        else
			$data['clickable_ads']=array();
        // merge meta and data

        $data = array_merge($data,$user_info,$meta);
          $vars['main_content'] = $this->load->view('ads',$data,true);
			$this->load->view('home', $vars);
	}
			
	 function adv_page($id){
		 if(!isset($id)||$id==NULL) redirect('ads/index');
		 $meta = array ('title'=> 'gainpills');
		  $this->load->model('products_model');
		///load toolbar/////
	    $Home =  new Home();
	    $user_info=$Home->tool_bar(); 
		  $data['product_cats']=$this->products_model-> get_cat_names();
		  $user_id=$user_info['user_id'];		
	     $data['adv_url'] = $this->ads_model-> get_adv($id,$user_id);
		 if(empty($data['adv_url'])) redirect('ads/index');
	     $data = array_merge($data,$user_info,$meta);
	     $vars['main_content'] = $this->load->view('adv_profile',$data,true);
		 $this->load->view('home', $vars);
	}
	function check_login(){
		//$adv_id[]=$_POST['id'];
		//$clickable=$_POST['clickable'];
		$points=$_POST['points'];
		if($this->session->userdata('email')){
			$user_email=$this->session->userdata('email');
			$point_arr=$this->ads_model-> add_coins($user_email,$points);
			foreach($point_arr as $points)$user_point=$points->points;
			echo $user_point.' Points';
			}
			//$this->session->unset_userdata('email');
	}
	function add_row(){
		$adv_id=$_POST['adv_id'];
		$user_id=$_POST['user_id'];
		$result=$this->ads_model-> add_historow($adv_id,$user_id);
           echo $result;
    }
}
