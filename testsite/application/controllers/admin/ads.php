<?php 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));
		$this->lang->load('auth');
		$this->load->model('admin_ads');
		/*if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
		
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'You must be an admin to view this page');
			redirect('auth/login');
		}*/
	}
	
	public function index(){
		$data["result"] = $this->admin_ads->show_ads();
		$vars['main_content']=$this->load->view('admin/ads/list',$data,true);
		$this->load->view('admin/home',$vars);
		}
	 public function add_edit() {
		 $id = $this->uri->segment(4);
		 
		 //edit category
		 if(isset($id)&&($id!=NULL)){
			// $this->ion_auth->is_autho('edit');
			 $data['result'] = $this->admin_ads->show_adv($id);
			 $vars['com_title'] = ' Edit Adv';
		}
		//add new category
		else {
			//$this->ion_auth->is_autho('add');
            $data['result'] = array();
            $vars['com_title'] = ' Add Adv';
		}	 
	    	
        $vars['main_content'] = $this->load->view('admin/ads/form', $data, true);
        $this->load->view('admin/home', $vars);
    }
	//save ads
    function save() {
            $ads_id = $_POST['id'];
            if ($ads_id == NULL) {
                ///////////add new video//////////

                $this->admin_ads->insert_update($ads_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'New Ad Add Successfully.');
                redirect('admin/ads');
            } else {

                ///update category//////////////

                $this->admin_ads->insert_update($ads_id);
                // Display success message
                $this->session->set_flashdata('flashSuccess', 'Ad Update Sucessfully.');
                redirect('admin/ads');
                //$this->index();
            }
        
    }
  function delete(){
	  $id=$_POST['id'];
	  $data=$this->admin_ads->show_adv($id);
	  foreach ($data as $d):

            $image_name= $d->image;

        endforeach;
		echo $image_name;
		     @unlink('./'.$image_name);

	      $this->admin_ads->delete($id);

	  
	  }			
}
?>