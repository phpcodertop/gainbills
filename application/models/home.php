<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct() {
	          parent::__construct();
              $this->load->model('products_model');
	          $this->load->library(array('session','My_PHPMailer','pagination'));
			  $this->load->helper('url');
    }
	function index($page=0){
		     $data = array();
             $meta = array ('title'=> 'gainbills');
		     $this->load->library('ion_auth');


        $user_id=0;
		if($this->session->userdata('email')){
			       $this->load->model('ion_auth_model');
				   if (!$this->ion_auth->is_admin())
		             {
				  $username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
				  $user_points[]=$this->products_model->get_user_points($this->session->userdata('email'));
				  foreach($user_points as $points){$my_points =$points[0]->points;}
				  foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   $data['user_points']=$my_points;
					 }
					else {
						 $data['user_name']='';
				         $data['user_id']='';
						 $data['user_points']='';
						} 
			}
			else{
				 $data['user_name']='';
				 $data['user_id']='';			
				 }

        // merge meta and data
		//$page = $this->input->get('page');
		 $config = array();
        $config["per_page"] = 6;
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

		//$config['page_query_string'] = TRUE;

       // $config['query_string_segment']='page';
		$config['base_url'] = base_url() . 'home/index/';
		$config['total_rows']=$this->products_model-> get_products($config["per_page"],$page,'total');
        $data['products'] = $this->products_model-> get_products($config["per_page"],$page,'result');
	    $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
	    $data['product_cats']=$this->products_model-> get_cat_names();
        $data = array_merge($data,$meta);
         $vars['main_content'] = $this->load->view('products',$data,true);
		 $this->load->view('home',$vars);
	}
	function show_cat_products($page=0){
		$id=$_POST['id'];
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
		$config['base_url'] = base_url() . 'home/index/show_cat_products/'.$id;
        // merge meta and data
		$config['total_rows']=$this->products_model-> get_cat_products($id,$config["per_page"],$page,'total');
        $data['products'] = $this->products_model-> get_cat_products($id,$config["per_page"],$page,'result');
	    $this->pagination->initialize($config);
        $data["links"] = $this->pagination->create_links();
	    $data['product_cats']=$this->products_model-> get_cat_names();
	    $data['main_content']='';
        //$data = array_merge($data,$meta);

         $this->load->view('products',$data);
		// $this->load->view('home',$vars);
	}
	 function product_page($id){
		 $meta = array ('title'=> 'gainbills');
		 $user_id=0;
		 if($this->session->userdata('email')){
			     $this->load->model('ion_auth_model');
				  $username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
				  $user_points[]=$this->products_model->get_user_points($this->session->userdata('email'));
				  foreach($user_points as $points){$my_points =$points[0]->points;}
				  foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   $data['user_points']=$my_points;
			}
			else{
				 $data['user_name']='';
				  $data['user_id']='';
				}
	     $data['product'] = $this->products_model-> get_product($id);
		  $data['product_cats']=$this->products_model-> get_cat_names();
	     $data = array_merge($data,$meta);
	     $vars['main_content'] = $this->load->view('product_profile',$data,true);
		 $this->load->view('home', $vars);
	}
	function contact_us(){
		if($this->session->userdata('email')){
			$this->load->model('ion_auth_model');
			$username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
			$user_points[]=$this->products_model->get_user_points($this->session->userdata('email'));
			foreach($user_points as $points){$my_points =$points[0]->points;}
               foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   $data['user_points']=$my_points;
			}
			else{
				 $data['user_name']='';
				  $data['user_id']='';
				}
		$data['product_cats']=$this->products_model-> get_cat_names();
		$meta = array ('title'=> 'Contact Us');
		$data = array_merge($data,$meta);
	     $vars['main_content'] = $this->load->view('contact_us',$data,true);
		 $this->load->view('home', $vars);
		
		}
public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "mail.gainbills.com";      // setting GMail as our SMTP server
        //$mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = " support@gainbills.com";  // user email address
        $mail->Password   = "password";            // password in GMail
        $mail->SetFrom('info@yourdomain.com', 'Firstname Lastname');  //Who is sending the email
        $mail->AddReplyTo("response@yourdomain.com","Firstname Lastname");  //email address that receives the response
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML message
";
        $mail->AltBody    = "Plain text message";
        $destino = "addressee@example.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "John Doe");
         $mail->IsHTML(true);
       // $mail->AddAttachment("images/phpmailer.gif");      // some attached files
       // $mail->AddAttachment("images/phpmailer_mini.gif"); // as many as you want
        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo; 
			echo "Error: " . $mail->ErrorInfo;
        } else {
echo 'done!!';
            $data["message"] = "Message sent correctly!";
        }
       // $this->load->view('sent_mail',$data);
    }

}
