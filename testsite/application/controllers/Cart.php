<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function index(){
			$this->load->model('Cart_model'); // Load our cart model for our entire class

		    $data['products'] = $this->Cart_model->retrieve_products(); // Retrieve an array with all products
   print_r($data['products']); // Print out the array to see if it works (Remove this line when done testing)

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */