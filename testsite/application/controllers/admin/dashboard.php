<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/admin_login');
		}
		
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('auth/admin_login');
		}
	}
	public function index(){
		/*if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('auth/login');
		}*/
		//else{
		$this->load->view('admin/home');
		//}

		}
	public function ads_list(){
		$data=array();
		$vars['main_content']=$this->load->view('admin/ads/list',$data,true);
		$this->load->view('admin/home',$vars);
		}	
}
?>