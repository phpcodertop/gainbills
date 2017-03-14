<div class="form-box edit-form">
  <div class="header">
    <h1><?php echo $user_name;?></h1>
  </div>
 
  <div class="body bg-gray">
    <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open_multipart(uri_string());?>
      <p class="sub_title">Personla Information<?php //echo lang('edit_user_subheading');?></p>
       <div class="form-group">
            <?php echo lang('edit_user_fname_label', 'first_name');?> 
            <?php echo form_input($first_name);?>
            <span class="second_col" style="float:right">
            <?php echo lang('edit_user_lname_label', 'last_name');?> 
            <?php echo form_input($last_name);?>
            </span>
      </div>


       <div class="form-group">
         
            <?php echo lang('edit_user_phone_label', 'phone');?> 
            <?php echo form_input($phone);?>

             <span class="second_col" style="float:right">
            <?php echo lang('edit_user_city_label', 'city');?> 
            <?php echo form_input($city);?>
            </span>
      </div>
        <div class="form-group">
            <?php echo lang('edit_user_country_label', 'country');?> 
            <?php echo form_input($country);?>
         <span class="second_col" style="float:right">
            <?php echo lang('edit_user_date_label', 'date');?> 
            <?php echo form_input($date);?>
         </span>   
      </div>
      <p class="sub_title">Login Information</p>
        <div class="form-group">
            <?php echo lang('edit_user_email_label', 'email');?> 
            <?php echo form_input($email);?>
      </div>
      <div class="form-group">
            <?php echo lang('edit_user_password_label', 'password');?> 
            <?php echo form_input($password);?>
      </div>

      <?php /*?><div class="form-group">
            <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
            <?php echo form_input($password_confirm);?>
      </div><?php */?>
      <p class="sub_title">Recover Password</p>
       <div class="form-group">
            <?php echo lang('edit_secretQ_label', 'secret question');?><br />
            <?php echo  form_dropdown('secret_question',$secret_question);?>
      </div>
      <div class="form-group">
            <?php echo lang('edit_secretans_label', 'secret answer');?><br />
            <?php echo form_input($secret_answer);?>
      </div>
      <p class="sub_title">Avatar</p>
      <div class="form-group">
       <label for="images" class="fileContainer btn btn-info btn-large"  >Choose your profile picture<br />
         <img src="<?php if($user->image!=NULL)echo base_url().'images/profile_pic/'.$user->image;else echo base_url().'images/profile.jpg'?>" width="250" height="250" />
         <input type="file" onchange="$('#imagefile').html(this.value)"  name="profile_pic" id="images" / >
         </label> 
                    <div class="imagefile" id="imagefile" > 
                    </div>
                   <input  type="hidden" value="<?php if($user->image!=NULL) echo $user->image?>" name="userimage" id="imgid">

            <?php //echo lang('edit_image_label', 'avatar');?>
            <?php //echo form_input($image);?>
      </div>
      <p class="sub_title">Payment Method</p>
      <div class="form-group">
                 <label id="payment_label">PayPal Method:</label><br />
          <?php  $js ='onChange="message(this.value)"';
            echo "<script type=\"text/javascript\" > 
                   function message(payment){ 
                     if(payment=='pay_pal')
                     document.getElementById('payment_label').innerHTML='PayPal Email:';
					 else if(payment=='contact_number')
					  document.getElementById('payment_label').innerHTML='Contact Number:';
                   }
           </script>";
		   ?>
           
            <?php echo form_dropdown('payment',$payment,'pay_pal',$js);?>
      </div>
      <div class="form-group">
      <label id="payment_label">PayPal Email:</label>
            <?php 
			echo form_input($payment_contact);?>
      </div>
      <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'),"class='form_submit'");?></p>

  <?php echo form_close();?>
  </div>
</div>
<style>
<style>
.fileContainer {
    overflow: hidden;
    position: relative;
}

.fileContainer [type=file] {
    cursor:inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position:relative;
	height:0px;width:0px;
    right: 0;
    text-align: right;
    top: 0;
}
</style>
<script>
$(document).ready(function() {
// Datepicker Popups calender to Choose date.
$(function() {
// Pass the user selected date format.
$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
});
});
</script>