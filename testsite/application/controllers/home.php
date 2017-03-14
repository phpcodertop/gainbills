<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function index(){
			 $this->load->library('session');

		 $data = array();
	
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

        // merge meta and data

        $data = array_merge($data,$meta);

            
 
         $vars['main_content'] = $this->load->view('products',$data,true);
		 $this->load->view('home',$vars);
	}
}

