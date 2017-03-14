<?php if(isset($rss_news))
{
?>
<ul id="newrs" class="img_size">
<?php  
  $cnt = count($rss_news->channel);
  //var_dump( $cnt);
    $channel_name = $rss_news->channel["description"];
echo "<li>".$channel_name."</li>"; 
    for($i=0; $i<$cnt; $i++)
    {
	 $url       = $rss_news->channel["item"][$i]["description"];  
	$title     = $rss_news->channel["item"][$i]["title"];
	//$desc   = $rss_news->description["description"];
         echo "<il>".$title."<br/>".$url."</li> ";
	}
}
else
{
var_dump($rss_news);
echo "NO news";
}
?>
</ul>