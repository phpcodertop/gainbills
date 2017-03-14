<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>GainPills| Cpanel</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 75px;
  cursor: pointer;
  top:-12px;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  left:0; top: -3px;
  width: 65px; height: 30px;
  background: #DDDDDD;
  border-radius: 15px;
  transition: background-color .2s;
}
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 20px; height: 20px;
  transition: all .2s;
  border-radius: 50%;
  background: #7F8C9A;
  top: 2px; left: 5px;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background:#34495E; 
}
[type="checkbox"]:checked + label:after {
  background: #39D2B4;
  top: 2px; left: 40px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s;
}
[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px
}
[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #39D2B4;
}
[type="checkbox"]:focus + label:before {
  border: 1px dashed #777;
  box-sizing: border-box;
  margin-top: -1px;
}
</style>
        
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">
            <h1><?php echo lang('login_heading');?></h1>
                 </div>
                    
            <?php echo form_open("auth/admin_login");?>
                <div class="body bg-gray">
                <div id="infoMessage"><?php echo $message;?></div>
                    <div class="form-group">
                   <?php $identity['class'] = 'form-control';$identity['placeholder'] = 'email';echo form_input($identity);?>
                    </div>
                    <div class="form-group">
                       
						<?php $password['class'] = 'form-control';echo form_input($password);?>
                    </div>          
                    <div class="form-group">
                    <p><input type="checkbox"  value="1" id="remember" name="remember"  />
                    Remember me  <label for="remember"><span class="ui"></span></label>
                    </p>

                       
                    </div>
                </div>
                <div class="footer">                                                               
                  
                  <button class="btn bg-olive btn-block" type="submit">Sign me in</button>
                    <p><a href="forgot_password">forget password</a></p>
                    
                    
                </div>
            <?php echo form_close();?>

           
        </div>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
          <script src="<?php echo base_url();?>new/js/bootstrap.min.js" type="text/javascript"></script>       

    </body>
</html>