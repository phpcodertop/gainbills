<!-- <body class="bg-black">
-->
        <div class="form-box" id="login-box">
            <div class="header">
              <h1><?php echo lang('login_heading');?></h1>
            </div>
            <div class="body bg-gray">
            <?php echo form_open("auth/login");?>

            
                 <div id="infoMessage"><?php echo $message;?></div>
                  <div class="form-group">
                     <?php echo lang('login_identity_label', 'identity');?>
                     <?php echo form_input($identity);?>
                  </div>
                  <div class="form-group">
                     <?php echo lang('login_password_label', 'password');?>
                      <?php echo form_input($password);?>
                  </div>
                  <div class="form-group">
                       <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                        <?php echo lang('login_remember_label', 'remember');?>
                        
                  </div> 
                  <div class="form-group"> 
                <p><?php echo form_submit('submit', lang('login_submit_btn'),"class='form_submit'");?></p>
                <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
             <?php echo form_close();?>
            </div> 
                  
            </div> 
            
           

        </div>
<!--</body>                       
-->
