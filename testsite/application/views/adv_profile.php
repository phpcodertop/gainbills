<script>
$( document ).ready(function() {
	
  /*  var div = $("#answers span:first").remove();
  $("#answers").append(div);*/
  
  
	var adv_id=$('#adv_id').val();
	var clickable=$('#clickable').val();
	var user_id=$('#user_id').val();
	var clicks_num=$('#clicks_num').val();
	if(!user_id){
	  $('#ajax_result').html('Please login or sign up to earn more coins');

	}
	else if(user_id){
	if(clickable==0 && clicks_num>0){
		$('#ajax_result').html('you must pass 12 hours to last click on this advertise');
		return;
	}
	if(clickable==0 &&clicks_num==0 ){ 
	 //add coin////
	 document.getElementById('security_ques').style.display="block";
	}
  }
});

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
	var timer_fun=function () {
        //minutes = parseInt(timer / 60, 10)
        //seconds = parseInt(timer % 60, 10);
		seconds=timer;
        //minutes = minutes < 10 ? "0" + minutes : minutes;
		if(seconds<=0) {
			document.getElementById("timer_count").style.display = "none";
			return;
			}
        //seconds = seconds < 0 ? "0" + seconds : seconds;
        display.text(seconds);
        //display.text(minutes + ":" + seconds);
		--timer;
       /* if (--timer < 0) {
            timer = duration;
        }*/
		
		
    };
		 setInterval(timer_fun, 1000);
	
}

</script>
<style>
#ajax_result{background-color:#6fb3e0;color:#fff;font-weight:bold;font-size:14pt;}
</style>
<div id="security_ques" style="display:none">
<p>What is the image of tree??</p>
<span><img src="<?php echo base_url().'images/answers/animal1.jpg'?> "width="120" height="120" class="sec_ans"/></span>
<span><img src="<?php echo base_url().'images/answers/animal2.jpg'?>" width="120" height="120"  class="sec_ans" /></span>
<span><img src="<?php echo base_url().'images/answers/tree.jpg'?>" width="120" height="120"  class="sec_ans"  /></span>

<span><img src="<?php echo base_url().'images/answers/animal3.jpg'?>" width="120" height="120"  class="sec_ans"/></span>
<input id="ans_result" type="hidden" >
</div>
  <div id="timer_count" style="display:none">Wait <span id="time">60</span> seconds</div>
<div id="ajax_result"></div>
<?php foreach ($adv_url as $url){$link=$url->url;}?>
<div id="view_tab">
  <span>Viewing: <?php echo $link?></span>
 <i class="glyphicon glyphicon-remove"><a href="<?php echo base_url().'home'?>">Close</a></i>
</div>
<iframe id="frm" frameborder="0" src="<?php echo $link?>" style="position:absolute;width:80%;height:100%" hspace="0" vspace="0" marginwidth="0" marginheight="0" framespacing="0"></iframe>
<input type="hidden" id="adv_id" value="<?php echo $url->adv_id?>" />
<input type="hidden" id="clickable" value="<?php  if(isset($url->clickable)) echo $url->clickable; else echo 0;?>"/>
<input type="hidden" id="clicks_num" value="<?php if(isset($url->clicks_num))echo $url->clicks_num;?>"/>
<input type="hidden" id="user_id" value="<?php if(isset($user_id))echo $user_id;?>"/>
<script>
$('.sec_ans').click(function(){
	var result;
	var imgsrc= $(this).attr('src');
   if(imgsrc.indexOf("tree.jpg")>0)
   result='true answer';
   else if(imgsrc.indexOf("tree.jpg")<=0)
   result='false answer';
   
	 if(result=='true answer'){
	 document.getElementById("timer_count").style.display = "block";
	 jQuery(function ($) {
    var oneMinute = 60 * 1,
        display = $('#time');
   startTimer(oneMinute, display);
    });
	var info='id='+adv_id;
     setTimeout(function(){ 
	      $.ajax({
           type: "POST",
           url: "<?php echo  site_url ('ads/check_login')?>",
           data: info,
          success: function(result){
                $('#ajax_result').html(result);
           }
         // });

        });
	  }, 60000);
	  return;
    }
	else if(result=='false answer') alert('please choose correct answer to earn more coins');
		});
			
</script>