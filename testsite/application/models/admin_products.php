<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_products extends CI_Model
{
	
	function show_products(){
		 $query = $this->db
                ->select('id,title,price')
                ->from('products');
		$result=$this->db->get();
	return $result->result_array();

	}
	function insert_update($id){
			//if(isset($_POST['published']) && $_POST['published'] == 'on'){$_POST['published']=1;}else{$_POST['published']=0;}
		
		if(isset($_POST['product_desc']))$product_desc=$_POST['product_desc'];else $product_desc='';
		 $data = array(
			'title'=>$_POST['product_title'],
            'description' => $product_desc,
			'price'=>$_POST['product_price'],
			'cat_id'=>$_POST['product_cat']
        );
		 if (!empty($_FILES['product_image']['name'])) {
                $updateResult = $this->upload('product_image');
                if (isset($updateResult['error'])) {
//                    TODO fix how the error appeared 
                    var_dump($updateResult['error']);
                } else {
                    $data['image'] = $updateResult['path'];
                }
            }
       

		//print_r($data);exit;

       
		if(isset($id)&&$id!=NULL){
			///update video
			 $this->db->where('id', $id);
             $this->db->update('products', $data);
		 }
		 else{
			 //insert new video
			try{
			$this->db->insert('products', $data);
		}catch (Exception $e) {
			echo $this->db->_error_message();
		} 
		 }
	}
	function show_product($id){
		  $query = $this->db
                ->select('*')
                ->from('products')
                ->where('id', $id)
                ->get();

        return $query->result();
		}
	 private function upload($name) {
        $filename = md5(time());
        $config['upload_path'] = 'images/products/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '0';
        $config['max_width'] = '1024';
        $config['max_height'] = '1024';
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload($name)) {
            echo 'uplode not go right'.$this->upload->display_errors();
            die;
            return array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            return array('path' => 'images/products/' . $data['file_name']);
        }
    }	
  function delete($id){
	  $this->db->where('id',$id);
	  $this->db->delete('products');
	  }		 			
}
?>