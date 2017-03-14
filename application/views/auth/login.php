
        <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
                      <h2><?php echo lang('login_heading');?></h2>
                      <?php echo form_open("auth/login");?>
                     <div id="infoMessage"><?php echo $message;?></div>
                     <?php echo lang('login_identity_label', 'identity');?>
                     <?php echo form_input($identity);?>
                     <?php echo lang('login_password_label', 'password');?>
                      <?php echo form_input($password);?>
                      <span>
                       <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                        <?php echo lang('login_remember_label', 'remember');?>
                        </span>
                             <button type="submit" class="btn btn-default">Login</button>

<?php /*?>                        <?php echo form_submit('submit', lang('login_submit_btn'),"class='btn btn-default'");?>
<?php */?><?php /*?>                <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
<?php */?>             <?php echo form_close();?>
            </div> 
             </div>
             </div>
            </div> 
       
<script>
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
      if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
FB.login(function(){
  // Note: The call will only work if you accept the permission request
}, {scope: 'publish_actions'});       
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '994746940598671',
    cookie     : true, 
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use version 2.2
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me?fields=name,email', function(response) {
    FB_LOGIN(response.email,response.name)
    });

  }
function FB_LOGIN(email,name){
	 $.ajax({
         type: "POST",
         datatype:"string",
         url: "<?php echo  base_url ().'auth/face_login_book/'?>",
        data:"email="+email+"&name="+name,
    		error: function(jqXHR, textStatus, errorThrown) {	
 },
   success: function(result){
     document.location = "<?php echo  base_url ().'ads'?>"
 }
 });
}
</script>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>    
<div>
<fb:login-button scope="public_profile,email" onclick="checkLoginState();" >
</fb:login-button>
</div> 
</section>
<!--</body>                       
-->