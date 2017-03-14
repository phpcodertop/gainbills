<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		    parent::__construct();
	    	    $this->load->model('Cart_model');
                    $this->load->model('order_model');
                    $this->load->library('cart');
	}
	public function index()
	{	
             	$data['products'] = $this->Cart_model->retrieve_products();
		$this->load->view('shopping', $data);
	}
	 function add()
	{
         	$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		
               $this->cart->insert($insert_data);
	      $cart_check = $this->cart->contents();
               redirect('home');
	     }
	
		function remove($rowid) {
		if ($rowid==="all"){
                       // Destroy data which store in  session.
			$this->cart->destroy();
redirect('home');
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
                     // Update cart data, after cancle.
			$this->cart->update($data);
                redirect('home/show_cart'); 
		}
		return 1;
	}
	    function update_cart(){
                $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
		redirect('home/show_cart');        
	}
       
       function save_order()
      {     
        	$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone'));
           $cust_id = 0;	
           $order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);
                $ord_id = $this->order_model->insert_order($order);		
            	if($cart = $this->cart->contents()):
			   foreach($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		
		         $cust_id = $this->order_model->insert_order_detail($order_detail);
			endforeach;
		endif;
                $this->load->view('home');
      }  
   }