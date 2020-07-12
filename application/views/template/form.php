<div class="form">
	<div class="container">
		<div class="row">
			<h1>Hello! </h1>
			<p>Sign in with your work email to access your company's portal</p>
		</div>
	</div>
  	<div class="container"><span class="dot"></span>
  		<div class="login">
  			<form id="login-form" name="login_form" method="post" action="<?php echo base_url();?>index.php/login/authenticate_user">
		  	<div class="row">
			    <input type="text" placeholder="Work email address" name="user_name" required>

			    <input type="password" placeholder="Enter Password" name="password" required>
			    <span class="psw"><a href="#"><p>Forgot  password?</p></a></span>

			    <button type="submit">Login</button>
			    <label>
			      <p> By continuing, you agree to QuickTeam's Terms  and Privacy Policy</p>
			    </label>
			</div>
			</form>
			<div class="row footer">
		  		<div class="col-md-9 col-sm-7"><p>Help</p></div>
		  		<div class="col-md-2 col-sm-2"><p>Terms</p></div>
		  		<div class="col-md-1 col-sm-3"><p>Privacy</p></div>
	  		</div>
		</div>
  	</div>
  </div>