<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products_model extends CI_Model
{
	
	public function __construct()
	{
	}
	public function get_products($limit,$offeset,$t='result'){
		 /* $result = $this->db
		                 ->select('id,title,description,image,price')
                          ->from('products');*/
		//$this->db->group_by('cat_id');	
		$this->db->order_by('order', 'asc');
					  
		if($t == 'result'){

        $this->db->limit($limit, $offeset);
		

		 }
		  $result = $this->db->get('products');
		 
		 if($t == 'result'){

			return $result->result_array();

		}else if($t=='total'){

			return $result->num_rows();

		}
		}
	public function get_user_clickableds($user_id){
		$this->db
		->select('adv_id')
        ->from('user_history')
		->where('user_id',$user_id)
		->where('clickable',0);
        $query = $this->db->get()->result_array();
        return $query;
	}	
	public function get_product($id){
		
		
		
		 $query= $this->db
		              ->select('products.id as product_id,products.title as title,products.description,price,image,products_cat.title as cat')
		              ->from('products')
					  ->join('products_cat','products.cat_id=products_cat.id','left')
                      ->where('products.id',$id)
		              ->get()
		              ->row();	
		
       
        return $query;
		
		}
   public function add_coins($email){
	   //get account coins
	   $this->db
	        ->select('coins')
			->where('email',$email)
			->from('users');
		$coins_arr= $this->db->get()->result();
		foreach($coins_arr as $coins):
		$user_coin=$coins->coins;
		endforeach;
		///add value to user coin
		$data = array(
               'coins' =>$user_coin+1,
            );
        $this->db->where('email', $email);
       $this->db->update('users', $data); 
		
	   }
     public function add_historow($adv_id,$user_id){
		 $this->db
		       -> select('adv_id,clickable,clicks_num')
		      ->from('user_history')
			  ->where('user_id',$user_id)
			  ->where('adv_id',$adv_id);
	   $query = $this->db->get()->result();
	    if(empty($query)){
	    $data = array(
      'user_id' => $user_id ,
      'adv_id' => $adv_id,
     'created'=>date('Y-m-d H:i:s'),
	 //'clicks_num'=>0
     );
   if($user_id!=NULL &&$user_id!=0)  {//have user account--first time this user click on this ads
   $this->db->insert('user_history', $data); 
   echo 'first click!!';
   }
   
		}
		
	   else if($query[0]->adv_id!=NULL){
		    if($query[0]->clickable==1){
		    $data = array(
               'clickable' =>0,
			   'created'=>date('Y-m-d H:i:s'),
			  // 'clicks_num'=>$query[0]->clicks_num+1
            );
             $this->db->where('adv_id', $adv_id);
			 $this->db->where('user_id',$user_id);
             $this->db->update('user_history', $data);
               echo 'update!!'	;		 
			}
              /*else if ($query[0]->clickable==0)	{
				   $data = array(
			   'clicks_num'=>$query[0]->clicks_num+1
            );
             $this->db->where('adv_id', $adv_id);
			 $this->db->where('user_id',$user_id);
             $this->db->update('user_history', $data);
			 echo 'update';
			  }	*/	
	   }
	}
	public function update_historow($user_id){
		$this->db
		     ->select('id,created')
			 ->where('user_id',$user_id)
			 ->from('user_history');
	  $query = $this->db->get()->result_array();
	  foreach($query as $ads){
		$ads_created=$ads['created'];
		$current_date= date('Y-m-d H:i:s');
		$diff = abs(strtotime($current_date) - strtotime($ads_created));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        $hours_deff=floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24-$days*60*60*24)/(60*60));
		$ads['year_deff']=$years;
		$ads['month_deff']=$months;
		$ads['days_deff']=$days;
		$ads['hours_deff']=$hours_deff;
		//update row
		$data = array(
               'clickable' =>0
            );
		/*if($ads['hours_deff']<=12&&$ads['days_deff']==0)
		 $data = array(
               'clickable' =>2
            );*/
         if($ads['hours_deff']>12 ||($ads['days_deff']>=1) ||($ads['month_deff']>=1)||($ads['year_deff']>=1)){//update after 12 hours or after 1day or after 1 month or after 1year
			 $data = array(
               'clickable' =>1,
			   'clicks_num' =>0
            );
             $this->db->where('id', $ads['id']);
             $this->db->update('user_history', $data);
		    }
		//select updated row
		 	
		 }
           $this->db
		     ->select('adv_id,clickable')
			 ->where('user_id',$user_id)
			 ->from('user_history');	
			 $updated_arr= $this->db->get()->result_array();
			 return $updated_arr; 
		} 
		function get_user_points($email){
		$this->db
		     ->select('points')
			 ->where('email',$email)
			 ->from('users');	
			 $user_points= $this->db->get()->result();
			 return $user_points;
		}
		public function get_cat_names(){
			 $query= $this->db
		              ->select('id,title as cat_title')
		              ->from('products_cat')
		              ->get()
		              ->result();	
		
       
        return $query;
		}
	 public function get_cat_products($id,$limit,$offeset,$t='result'){
		 if($t == 'result'){

        $this->db->limit($limit, $offeset);
		 }
		 $result= $this->db
		              ->select('products.id as id,products.title as title,products.description,price,image,cat_id')
		              ->from('products')
					  ->join('products_cat','products.cat_id=products_cat.id','left')
                      ->where('products_cat.id',$id)
		              ->get();
		  			   if($t == 'result'){

			            return $result->result_array();

		                }else if($t=='total'){

			              return $result->num_rows();

		}
		 }	
		 function get_recommended($title,$id){
			  $result= $this->db
		              ->select('products.id as id,products.title as title,products.description,price,image,cat_id')
		              ->from('products')
					  ->where_not_in('id',$id)
					  ->like('products.title',$title)
		              ->get();
			    return $result->result_array();
			 } 			
}
?>