<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<?php include 'template/template.php';?>

</head>
<body scroll="no" style="overflow: hidden">

<div class="imgcontainer">
    <img class="img-responsive" src="/application_resources/images/logo.png">
</div>
<div class="form_tab">
	<div class="row">
		<div class="col-md-6 col-sm-6"><button class="tablink" onclick="openPage('Login', this, 'white')" id="defaultOpen">Login</button></div>
		<div class="col-md-6 col-sm-6"><button class="tablink" onclick="openPage('Signup', this, 'white')">Signup</button></div>
	</div>
</div>
<div id="Login" class="tabcontent">
  <?php include 'template/form.php';?>
</div>

<div id="Signup" class="tabcontent">
  <h3>Signup</h3>
  <p>Some news this fine day!</p> 
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


</body>
</html>