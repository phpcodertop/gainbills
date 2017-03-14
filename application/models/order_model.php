<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class order_model extends CI_Model { 
        public function get_all()
	{
		$query = $this->db->get('products');
		return $query->result_array();
	}
	public function insert_customer($data)
	{
		$this->db->insert('users', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	public function insert_order($data)
	{
		$this->db->insert('orders', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}
	public function insert_order_detail($data)
	{
		$this->db->insert('order_detail', $data);
	}
}