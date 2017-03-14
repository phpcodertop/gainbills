<!-- <body class="bg-black">
-->
        <div class="form-box" id="login-box">
            <div class="header">
              <h1><?php echo lang('login_heading');?></h1>
            </div>
            <div class="body bg-gray">
            <?php echo form_open("auth/admin_login");?>

            
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
<style>
/* 
    Page: register and login
*/
.form-box {
  width: 360px;
  margin: 90px auto 0 auto;
}
.form-box .header {
  -webkit-border-top-left-radius: 4px;
  -webkit-border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 0;
  -webkit-border-bottom-left-radius: 0;
  -moz-border-radius-topleft: 4px;
  -moz-border-radius-topright: 4px;
  -moz-border-radius-bottomright: 0;
  -moz-border-radius-bottomleft: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  background: #3d9970;
  box-shadow: inset 0px -3px 0px rgba(0, 0, 0, 0.2);
  padding: 20px 10px;
  text-align: center;
  font-size: 26px;
  font-weight: 300;
  color: #fff;
}
.form-box .body,
.form-box .footer {
  padding: 10px 20px;
  background: #fff;
  color: #444;
}
.form-box .body > .form-group,
.form-box .footer > .form-group {
  margin-top: 20px;
}
.form-box .body > .form-group > input,
.form-box .footer > .form-group > input {
  border: #fff;
}
.form-box .body > .btn,
.form-box .footer > .btn {
  margin-bottom: 10px;
}
.form-box .footer {
  -webkit-border-top-left-radius: 0;
  -webkit-border-top-right-radius: 0;
  -webkit-border-bottom-right-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-topleft: 0;
  -moz-border-radius-topright: 0;
  -moz-border-radius-bottomright: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
@media (max-width: 767px) {
  .form-box {
    width: 90%;
  }
}

</style>
