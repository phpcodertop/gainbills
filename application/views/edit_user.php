  <div class="header">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/profilestyle.css'?>"/>  
  </div>
  <div class="body bg-gray">
    <div id="infoMessage"><?php echo $message;?></div>
      <?php echo form_open_multipart(uri_string());?>
    <div class="form-group">
		 <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="<?php if($user->image!=NULL)echo base_url().'images/profile_pic/'.$user->image;else echo base_url().'images/profile.jpg'?>" alt="<?php echo $user_name;?>">
<h3 id="profile_name"><?php echo $user_name;?></h3>
<input type="file" onchange="$('#imagefile').html(this.value)"  name="profile_pic" id="images" / >	
   	  </div>
	 <i class="fa fa-camera-retro choose_pc"></i>
         </label> 
                    <div class="imagefile" id="imagefile" > 
                    </div>
                <input  type="hidden" value="<?php if($user->image!=NULL) echo $user->image?>" name="userimage" id="imgid"/>
              <nav id="profiletabs">
        <ul class="clearfix">
    	  <li><a href="#Latest" class="sel">Latest</a></li>
          <li><a href="#activity">Activity</a></li>
          <li><a href="#MyProduct">MyProduct</a></li>
          <li><a href="#settings">Settings</a></li>
        </ul>
      </nav>
      <section id="Latest" >
      <div id="rssOutput">select to filter news</div>
      </section>
 <section id="MyProduct" class="hidden" >
       <h2>My Product</h2>
      </section>
     <section id="settings" class="hidden">
        <p>Edit your profile settings:</p>
        <p class="setting"><span><?php echo lang('edit_user_fname_label', 'first_name');?><img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span>   <?php echo form_input($first_name);?></p>
        <p class="setting"><span><?php echo lang('edit_user_lname_label', 'last_name');?> <img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span>  <?php echo form_input($last_name);?></p>
		<p class="setting"><span><?php echo lang('edit_user_email_label', 'email');?><img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span><?php  echo form_input($email);?></p>
        <p class="setting"><span><?php echo lang('edit_user_phone_label', 'phone');?><img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span> <?php echo form_input($phone);?></p>
		<p class="setting"><span><?php echo lang('edit_user_city_label', 'city');?><img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span><?php echo form_input($city);?></p>
		<p class="setting"><span><?php echo lang('edit_user_password_label', 'password');?><img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span> <?php echo form_input($password);?></p>
		<p class="setting"><span>Language <img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span> English(US)</p>
        <p class="setting"><span>Profile Status <img src="<?php echo base_url()?>images/edit.png" alt="*Edit*"></span> Public</p>       	
       <?php //echo lang('edit_user_password_label', 'password');?> 
<button type="submit" class="btn btn-default">Save Changes</button>	  
</section>
      </div>
	  </div>
        <?php echo form_close();?>

	  <script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) {
        $(this).addClass('hidden');
    }
    });
    $(newcontent).removeClass('hidden');
  });
});
</script>

  </div>
</div>