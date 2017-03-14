<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_cat extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$this->load->model('admin_products_cat');
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
		$data["result"] = $this->admin_products_cat->show_cats();
		$vars['main_content']=$this->load->view('admin/products_cat/list',$data,true);
		$this->load->view('admin/home',$vars);
		}
	 public function add_edit() {
		 $id = $this->uri->segment(4);
		 
		 //edit category
		 if(isset($id)&&($id!=NULL)){
			// $this->ion_auth->is_autho('edit');
			$data['category'] = $this->admin_products_cat->show_cats();
			 $data['result'] = $this->admin_products_cat->show_cat($id);
			 
			 $vars['com_title'] = ' Edit Category';
		}
		//add new category
		else {
			//$this->ion_auth->is_autho('add');
            $data['result'] = array();
            $data['category'] = $this->admin_products_cat->show_Pub_cats();
            $vars['com_title'] = ' Add Category';
		}	 
	    	
        $vars['main_content'] = $this->load->view('admin/products_cat/form', $data, true);
        $this->load->view('admin/home', $vars);
    }
	//save ads
    function save() {

            $cat_id = $_POST['id'];
            if ($cat_id == NULL) {
                ///////////add new video//////////

                $this->admin_products_cat->insert_update($cat_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'New Category Add Successfully.');
                redirect('admin/products_cat');
            } else {
                ///update category//////////////

                $this->admin_products_cat->insert_update($cat_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'Category Update Sucessfully.');
                redirect('admin/products_cat');
                //$this->index();
            }
        
    }
  function delete(){
	  $id=$_POST['id'];
	      $this->admin_products_cat->delete($id);

	  
	  }	
	  public function publish($id,$s){
			if($s == 'true'){$s=1;}else{$s=0;}	
		$record['published'] = $s;
		$this->admin_products_cat->publish($id, $record);
		$this->session->set_flashdata('flashSuccess', 'Category Published Sucessfully.');
		redirect('admin/products_cat');
	}		
}
?>