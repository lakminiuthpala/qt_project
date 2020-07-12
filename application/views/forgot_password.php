<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
	<?php include 'template/template.php';?>

</head>
<body scroll="no" style="overflow: hidden">

<div class="imgcontainer">
    <img class="img-responsive" src="/application_resources/images/logo.png">
</div>
<div class="form">
	<div class="container">
		<div class="row">
			<h1>Forgot Password?</h1>
			<p>Enter your work email address to reset your password</p>
		</div>
	</div>
  	<div class="container"><span class="dot"></span>
  		<div class="login">
		  	<div class="row">
			    <input type="email" placeholder="Work email address" name="email" required>
			    
			    <button type="submit">Reset Password </button>
			</div>
			<div class="row footer">
		  		<div class="col-md-9 col-sm-7"><p>Help</p></div>
		  		<div class="col-md-2 col-sm-2"><p></p></div>
		  		<div class="col-md-1 col-sm-3"><p></p></div>
	  		</div>
		</div>
  	</div>
</div>

</body>

