<div class="form-box edit-form">
  <div class="header">
    <h1><?php echo 'user'.$user_name;?></h1>
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