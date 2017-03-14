<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col">
				  <div class="signup-form">
         <h2><?php echo lang('create_user_heading');?></h2>

          <div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

         <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
         
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

            <?php echo lang('create_user_email_label', 'email');?><br />
            <?php echo form_input($email);?>
    
            <?php echo lang('create_user_phone_label', 'phone');?><br />
            <?php echo form_input($phone);?>
     
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
     
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?><br />
            <?php echo form_input($password_confirm);?>

			<button type="submit" class="btn btn-default">Signup</button>

<?php /*?>      <p><?php echo form_submit('submit', lang('create_user_submit_btn'),"class='form_submit'");?></p>
<?php */?>
<?php echo form_close();?>
   </div>
</div>
</div>
</div>
</section>