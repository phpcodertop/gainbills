<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller {
  public function __construct() {
	          parent::__construct();
     $this->load->model('ads_model');
	 $this->load->library('session');
    }
	function index(){
		
       $meta = array ('title'=> 'Paid Ads');
       	$this->load->library('session');
		$user_id=0;
		if($this->session->userdata('email')){
			      $this->load->model('ion_auth_model');
				  $username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
				  foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   ////determine clickable adds
				   $this->ads_model->update_historow($user_id);
				   
			}
			else{
				 $data['user_name']='';
				  $data['user_id']='';
				}
				
       $data['ads'] = $this->ads_model-> get_ads();
	   if($user_id!=NULL)
	     $data['clickable_ads']=$this->ads_model->get_user_clickableds($user_id);
        else
			$data['clickable_ads']=array();
        // merge meta and data

        $data = array_merge($data,$meta);
          $vars['main_content'] = $this->load->view('ads',$data,true);
			$this->load->view('home', $vars);
	}
			
	 function adv_page($id){
		 $meta = array ('title'=> 'Paid Ads');
		 $user_id=0;
		 if($this->session->userdata('email')){
			     $this->load->model('ion_auth_model');
				  $username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
				  foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   
			}
			else{
				 $data['user_name']='';
				  $data['user_id']='';
				}
	     $data['adv_url'] = $this->ads_model-> get_adv($id,$user_id);
	     $data = array_merge($data,$meta);
	     $vars['main_content'] = $this->load->view('adv_profile',$data,true);
		 $this->load->view('home', $vars);
	}
	function check_login(){
		//$adv_id[]=$_POST['id'];
		//$clickable=$_POST['clickable'];
		if($this->session->userdata('email')){
			$user_email=$this->session->userdata('email');
			$this->ads_model-> add_coins($user_email);
			echo 'add 1 cent!!';
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

