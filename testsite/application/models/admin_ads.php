<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_ads extends CI_Model
{
	
	function show_ads(){
		 $query = $this->db
                ->select('id,title,url')
                ->from('ads');
		$result=$this->db->get();
	return $result->result_array();

	}
	function insert_update($id){
			//if(isset($_POST['published']) && $_POST['published'] == 'on'){$_POST['published']=1;}else{$_POST['published']=0;}
		
		if(isset($_POST['ads_desc']))$ads_desc=$_POST['ads_desc'];else $ads_desc='';
		 $data = array(
			'title'=>$_POST['ads_title'],
            'description' => $ads_desc,
			'url'=>$_POST['ads_link'],
        );
		 if (!empty($_FILES['ads_image']['name'])) {
                $updateResult = $this->upload('ads_image');
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
             $this->db->update('ads', $data);
		 }
		 else{
			 //insert new video
			try{
			$this->db->insert('ads', $data);
		}catch (Exception $e) {
			echo $this->db->_error_message();
		} 
		 }
	}
	function show_adv($id){
		  $query = $this->db
                ->select('*')
                ->from('ads')
                ->where('id', $id)
                ->get();

        return $query->result();
		}
	 private function upload($name) {
        $filename = md5(time());
        $config['upload_path'] = 'images/ads/';
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
            return array('path' => 'images/ads/' . $data['file_name']);
        }
    }	
  function delete($id){
	  $this->db->where('id',$id);
	  $this->db->delete('ads');
	  }		 			
}
?>