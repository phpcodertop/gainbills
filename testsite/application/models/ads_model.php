<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ads_model extends CI_Model
{
	
	public function __construct()
	{
	}
	public function get_ads(){
		 $this->db
		->select('ads.id as ads_id,title,description')
        ->from('ads');
        $query = $this->db->get()->result_array();
        return $query;
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
	public function get_adv($id,$user_id){
		
		
		if($user_id!=NULL){
			 $clicks=$this->db 
		                 ->select('clicks_num')
						 ->from('user_history')
						 ->where('adv_id',$id)
						 ->where('user_id',$user_id)
						 ->get()
						 ->result();
		   
        if(!empty($clicks))	{
		$query= $this->db
		             ->select('ads.id as adv_id,url,clickable,user_id,clicks_num')
		             ->from('ads')
		             ->join('user_history','ads.id=user_history.adv_id','left')
                     ->where('user_history.adv_id',$id)
		             ->where('user_history.user_id',$user_id)
		             ->get()
		             ->result();
					 $clicksnum=$clicks[0]->clicks_num+1;
		 // print_r($data);
           $this->db->where('adv_id', $id);
		   $this->db->where('user_id', $user_id);
		   $this->db->set('clicks_num',$clicksnum);
           $this->db->update('user_history');
					
        }
		else if(empty($clicks)){
			$query= $this->db
		                  ->select('id as adv_id,url')
		                  ->from('ads')
                          ->where('id',$id)
		                  ->get()
		                  ->result();
		}
		 
		   
		}
		else{
		 $query= $this->db
		              ->select('ads.id as adv_id,url')
		              ->from('ads')
                      ->where('ads.id',$id)
		              ->get()
		              ->result();	
		}
       
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
		 			
}
?>