<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct() {
	          parent::__construct();
                    $this->load->model('products_model');
                    $this->load->model('Admin_products_cat');
	                  $this->load->library(array('session','My_PHPMailer','pagination','ion_auth'));
	                  $this->load->helper('url');
                    $this->load->library('cart');
	     }

    public function load_view($view,$data=''){
    
      $this->load->view('include/header',$data);
        $this->load->view($view,$data);
    	$this->load->view('include/footer');
    }

    public function show_cat_products($catid){
        $data['products'] = $this->products_model-> get_cat_products($catid,10,0,'result');
        $data['productsNum'] = $this->products_model-> get_cat_products($catid,10,0,'total');
        $data['product_cats']=$this->products_model-> get_cat_names();
        $this->load_view('category',$data);
    }

	  public function index(){
      $id = null;
      $data['category'] = $this->Admin_products_cat->Get_all_Catgs($id);
      $this->load_view('content',$data);
	  }

	function contact_us(){
		$user_info=$this->tool_bar();
		$data['product_cats']=$this->products_model-> get_cat_names();
		$meta = array ('title'=> 'Contact Us');
		$data = array_merge($data,$user_info,$meta);
	     $vars['main_content'] = $this->load->view('contact_us',$data,true);
		 $this->load->view('home', $vars);

		}
public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "mail.gainbills.com";      // setting GMail as our SMTP server
        //$mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = " support@gainbills.com";  // user email address
        $mail->Password   = "password";            // password in GMail
        $mail->SetFrom('info@yourdomain.com', 'Firstname Lastname');  //Who is sending the email
        $mail->AddReplyTo("response@yourdomain.com","Firstname Lastname");  //email address that receives the response
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML message
";
        $mail->AltBody    = "Plain text message";
        $destino = "addressee@example.com"; // Who is addressed the email to
        $mail->AddAddress($destino, "John Doe");
         $mail->IsHTML(true);
       // $mail->AddAttachment("images/phpmailer.gif");      // some attached files
       // $mail->AddAttachment("images/phpmailer_mini.gif"); // as many as you want
        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
			echo "Error: " . $mail->ErrorInfo;
        } else {
echo 'done!!';
            $data["message"] = "Message sent correctly!";
        }
       // $this->load->view('sent_mail',$data);
    }
	function tool_bar(){
        $user_id=0;
		if($this->session->userdata('email')){
			       $this->load->model('ion_auth_model');
				   if (!$this->ion_auth->is_admin())
		             {
				  $username_arr= $this->ion_auth_model->getusername($this->session->userdata('email'));
				  $user_points[]=$this->products_model->get_user_points($this->session->userdata('email'));
				  foreach($user_points as $points){$my_points =$points[0]->points;}
				  foreach($username_arr as $name){
					  $user_name=$name->username;
					  $user_id=$name->id;
					  }
                   $data['user_name']=$user_name;
				   $data['user_id']=$user_id;
				   $data['user_points']=$my_points;
					 }
					else {
						 $data['user_name']='';
				         $data['user_id']='';
						 $data['user_points']='';
						}
			}
			else{
				 $data['user_name']='';
				 $data['user_id']='';
				 }
				 return $data;
				// $this->load->view('home', $data);

		}
function rss_loading()
{
 $url = "http://www.alriyadh.com/section.main.xml";
 $ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $url);
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HEADER, 0);
 $contents = curl_exec($ch);
$doc = new SimpleXmlElement($contents , LIBXML_NOCDATA);
if (curl_errno($ch)) {
  echo curl_error($ch);
  echo "\n<br />";
  $contents = '';
} else {
  curl_close($ch);
}
if (!is_string($contents) || !strlen($contents)) {
echo "Failed to get contents.";
$contents = '';
}
if(isset($doc->channel))
{
//$rss_news = simplexml_load_string($doc->asXML() );
$rss_news = json_decode( json_encode($doc),TRUE);
  $data['rss_news'] = (object)$rss_news;
  $vars['main_rss'] = $this->load->view('rssview',$data,true);
   $this->load->view('home',$vars);
 // return $doc->asXML();
}
if(isset($doc->entry))
{
	return  $doc->entry;
  //  $this->parseAtom($doc);
}
}
 private function parseRSS($xml)
{
  echo "<strong>".$xml->channel->title."</strong>";
    $cnt = count($xml->channel->item);
    for($i=0; $i<$cnt; $i++)
    {
	$url 	= $xml->channel->item[$i]->link;
	$title 	= $xml->channel->item[$i]->title;
	$desc = $xml->channel->item[$i]->description;
//	echo '<a href="'.$url.'">'.$title.'</a>'.$desc.'';
echo $desc;
echo '<br/>';
    }
}
public function show_cart()
{

    $this->load->model('Cart_model');
    $data['products'] = $this->Cart_model->retrieve_products();
    $vars["cart_lst"] = $this->load->view("shopping",$data['products'],true);
    $vars['product_cats']=$this->products_model-> get_cat_names();
    $this->load->view('home', $vars);
}
public function show_orders()
{
    $vars["order_lst"] = $this->load->view("order_cart",true);
    $vars['product_cats']=$this->products_model-> get_cat_names();
    $this->load->view('home', $vars);
}
private function parseAtom($xml)
{
    echo "<strong>".$xml->author->name."</strong>";
    $cnt = count($xml->entry);
    for($i=0; $i<$cnt; $i++)
    {
	$urlAtt = $xml->entry->link[$i]->attributes();
	$url	= $urlAtt['href'];
	$title 	=  $xml->entry->title;
	$desc	= strip_tags($xml->entry->content);
	echo '<img src="'.$url.'">'.$title.'</img>'.$desc.'';
        echo '<br/>';

}
}
}
?>