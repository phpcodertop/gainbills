<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_products_cat extends CI_Model
{
	
	function show_cats(){
		 $query = $this->db
                ->select('id,title,published,parent_id')
                ->from('products_cat');
		$result=$this->db->get();
	return $result->result_array();

	}
     function Get_all_Catgs($id)
     {
        	 $query = $this->db
                ->select('id,title,published,parent_id')
                ->where('published',1)
                ->where('parent_id',$id)
                ->from('products_cat');
	    	   $result=$this->db->get();
	    	   return $result->result_array();
	    	    
	 
     }
	function Get_num_Catgs($id)
	{
		$query = $this->db
			->select('id,title,published,parent_id')
			->where('published',1)
			->where('parent_id',$id)
			->from('products_cat');
		$result=$this->db->get();
		return $result->num_rows();


	}
	function show_Pub_cats(){
		 $query = $this->db
                ->select('id,title,published,parent_id')
                ->where('published',1)
                ->from('products_cat');
		$result=$this->db->get();
		return $result->result_array();

	}

	function insert_update($id){
			if(isset($_POST['published']) && $_POST['published'] == 'on'){$_POST['published']=1;}else{$_POST['published']=0;}
		
		if(isset($_POST['cat_desc']))$product_desc=$_POST['cat_desc'];else $product_desc='';
		 $data = array(
			'title'=>$_POST['cat_title'],
            'description' => $product_desc,
            'parent_id'    => $this->input->post('parent_id'),
			'published'=>$_POST['published']
        );
		
		if(isset($id)&&$id!=NULL){
			///update video
			 $this->db->where('id', $id);
             $this->db->update('products_cat', $data);
		 }
		 else{
			 //insert new video
			try{
			$this->db->insert('products_cat', $data);
		}catch (Exception $e) {
			echo $this->db->_error_message();
		} 
		 }
	}

	function show_cat($id){
		  $query = $this->db
                ->select('*')
                ->from('products_cat')
                ->where('id', $id)
                ->get();

        return $query->result();
		}
	
  function delete($id){
	  $this->db->where('id',$id);
	  $this->db->delete('products_cat');
	  }
	  function publish($id,$data) {
		  $this->db->where('id', $id);

        $this->db->update('products_cat', $data);
	  }
}
?>