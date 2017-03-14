<div id="security_ques" style="display:none">
<p>What is the image of tree??</p>
<span><img src="<?php echo base_url().'images/answers/animal1.jpg'?> "width="120" height="120" class="sec_ans"/></span>
<span><img src="<?php echo base_url().'images/answers/animal2.jpg'?>" width="120" height="120"  class="sec_ans" /></span>
<span><img src="<?php echo base_url().'images/answers/tree.jpg'?>" width="120" height="120"  class="sec_ans"  /></span>

<span><img src="<?php echo base_url().'images/answers/animal3.jpg'?>" width="120" height="120"  class="sec_ans"/></span>
<input id="ans_result" type="hidden" >
</div>
<?php foreach ($adv_url as $url){$link=$url->url; $title_adv=$url->title;}?>

  <div id="timer_count" style="display:none">Wait <span id="time"><?php echo $url->duration?></span> Seconds</div>
<div id="ajax_result"></div>
<div id="view_tab">
  <span>Viewing: <?php echo $title_adv?></span>
 <i class="glyphicon glyphicon-remove"><a href="<?php echo base_url().'home'?>">Close</a></i>
</div>
<div class="frmw" style="left: 15px; bottom: 0px;  right: 15px; top: 200px;height:700px;">
<iframe id="frm" style="width:100%" hspace="0" vspace="0" marginwidth="0" marginheight="0" framespacing="0"  frameborder="0" src="<?php echo $link?>"onload="iframeLoaded()"></iframe>
</div>
<?php if(isset($url->clickable)) $clickable=$url->clickable; else $clickable=0;?>
<?php if(isset($url->clicks_num))  $clicks_num=$url->clicks_num; else $clicks_num=0;?>
<?php if(isset($user_id))  $user_id=$user_id; else $user_id='';?>
<style>
#ajax_result{color:black;font-size:14pt; padding:0px; margin-bottom:1px;}
#view_tab{margin-bottom:15px;}
span#time{background: #fe980f none repeat scroll 0 0;border-radius: 54px;color: #fff;font-size: 16pt;
font-weight: bold;padding-left: 7px;padding-right: 7px; }
</style>
<script>

$( document ).ready(function() { 
        document.getElementById('ajax_result').style.display="none";
	var clickable=<?php echo json_encode($clickable); ?>;
	var user_id=<?php echo json_encode($user_id); ?>;
	var clicks_num=<?php echo json_encode($clicks_num); ?>;
	if(!user_id){
		document.getElementById('ajax_result').style.display="block";
	  $('#ajax_result').html('Please login or sign up to join gainbills');
	}
	else if(user_id){
	if(clickable==0 && clicks_num>0){
		document.getElementById('ajax_result').style.display="block";
		$('#ajax_result').html('you must pass 12 hours to last click on this advertise');	
            return;
           }
	if(clickable==0 &&clicks_num==0 ){ 
	 //add coin////
	 document.getElementById('security_ques').style.display="block";
        return;
	}
  }
});
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
	//var timer_fun=function () {
        
		var interval=setInterval(function () {
			//minutes = parseInt(timer / 60, 10)
        //seconds = parseInt(timer % 60, 10);
		seconds=timer;
        //minutes = minutes < 10 ? "0" + minutes : minutes;
		if(seconds==0) {
				clearInterval(interval);
				var points=<?php echo (json_encode($url->points));?>;
	         var adv_id=<?php echo json_encode($url->adv_id); ?>;
			var info='id='+adv_id+'&points='+points;
			 $.ajax({
           type: "POST",
           url: "<?php echo  site_url ('ads/check_login')?>",
           data: info,
          success: function(result){
                $('#user_points i').html(result);
				document.getElementById("timer_count").style.display = "none";
				document.getElementById('security_ques').style.display='none';
				 document.getElementById('ajax_result').style.display="block";
	             $('#ajax_result').html('Advertise Points add successfully..');
				   // location.reload();

           }
         // });

        });
	}
			//return;
			//}
        display.text(seconds);
		if (document.hasFocus ()) {
		--timer;
		}
			},1000);
}	

$('.sec_ans').one("click",function(){
	var clickable=<?php echo json_encode($clickable); ?>;
	var user_id=<?php echo json_encode($user_id); ?>;
	var clicks_num=<?php echo json_encode($clicks_num); ?>;
	if(clickable==0 && clicks_num>0){
		$('#ajax_result').html('you must pass 12 hours to last click on this advertise');
		return;
	}
	var result;
	var duration = <?php echo json_encode($url->duration); ?>;
	var points=<?php echo (json_encode($url->points));?>;
	var adv_id=<?php echo json_encode($url->adv_id); ?>;
	var imgsrc= $(this).attr('src');
   if(imgsrc.indexOf("tree.jpg")>0)
   result='true answer';
   else if(imgsrc.indexOf("tree.jpg")<=0)
   result='false answer';
   
	 if(result=='true answer'){
	 document.getElementById("timer_count").style.display = "block";
	 jQuery(function ($) {
    var time = duration,
        display = $('#time');
   startTimer(time, display);
    });
	  //return;
    }
	else if(result=='false answer') alert('please choose correct answer');
		});
	 function iframeLoaded() {
      var iFrameID = document.getElementById('frm');
      if(iFrameID) {
            // here you can make the height, I delete it first, then I make it again
            iFrameID.height = "100%";
          //  iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
      }   
  }		
</script>