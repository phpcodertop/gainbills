<?php
class Feed extends Controller {

	function Feed(){
		parent::Controller();
		$this->load->model('FeedModel');	
		$this->load->helper('xml');	
	}
	
	function index(){
	        $data['encoding'] = 'utf-8';
	        $data['feed_name'] = 'www.technicalkeeda.com';
	        $data['feed_url'] = 'http://www.technicalkeeda.com';
	        $data['page_description'] = 'Welcome to www.technicalkeeda.com feed url page';
	        $data['page_language'] = 'en-ca';
	        $data['creator_email'] = 'yashwantchavan@gmail.com';
	        $query = $this->FeedModel->getFeedArticles();  
	        $data['ARTICLE_DETAILS'] = null;
		if($query){
			$data['ARTICLE_DETAILS'] =  $query;
		}  
	        header("Content-Type: application/rss+xml");
	        $this->load->view('rss', $data);
    }
function rss_loading()
{

/*$this->load->library('rssparser');                          // load library
$this->rssparser->set_feed_url('http://feeds.arstechnica.com/arstechnica/index/');  // get feed
$this->rssparser->set_cache_life(10);                       // Set cache life time in minutes
$rss = $this->rssparser->getFeed(6);
return $rss;*/
//$url = "http://feeds.arstechnica.com/arstechnica/index/";
//$url = "https://news.google.com/news/feeds?geo=71111&output=rss";
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
 $array  = json_decode( json_encode($doc),TRUE);
var_dump($array['channel'] );
      return $array;
//return $array;
    // $this->parseRSS($doc);
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