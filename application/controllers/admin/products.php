<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$this->load->model('admin_products');
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
		$data["result"] = $this->admin_products->show_products();
		$vars['main_content']=$this->load->view('admin/products/list',$data,true);
		$this->load->view('admin/home',$vars);
		}
	 public function add_edit() {
		 $id = $this->uri->segment(4);
		 $this->load->model('admin_products_cat');
		 $data['cats']=$this->admin_products_cat->show_cats();

		 //edit category
		 if(isset($id)&&($id!=NULL)){
			// $this->ion_auth->is_autho('edit');
			 $data['result'] = $this->admin_products->show_product($id);
			 $vars['com_title'] = ' Edit Product';
		}
		//add new category
		else {
			//$this->ion_auth->is_autho('add');
            $data['result'] = array();
            $vars['com_title'] = ' Add Product';
		}	 
	    	
        $vars['main_content'] = $this->load->view('admin/products/form', $data, true);
        $this->load->view('admin/home', $vars);
    }
	//save ads
    function save() {
            $product_id = $_POST['id'];
            if ($product_id == NULL) {
                ///////////add new video//////////

                $this->admin_products->insert_update($product_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'New Product Add Successfully.');
                redirect('admin/products');
            } else {

                ///update category//////////////

                $this->admin_products->insert_update($product_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'Product Update Sucessfully.');
                redirect('admin/products');
                //$this->index();
            }
        
    }
  function delete(){
	  $id=$_POST['id'];
	  $data=$this->admin_products->show_product($id);
	  foreach ($data as $d):

            $image_name= $d->image;

        endforeach;
		//echo $image_name;
		     @unlink('./'.$image_name);

	      $this->admin_products->delete($id);

	  
	  }			
}
?>