<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Forgot Password</title>
    <style>

    /* start edit pro */

  .edit_pro input[type=text], input[type=password]{
      width:100%;
  }
  
  .feild {
    font-size: 20px;
    margin-top: 13px;
}

  .edit_pro .form-group {
    margin-bottom: 36px;
    font-size: 30px;
}
  
  /* End Edit Pro */

    </style>
    <?php include 'template/template.php';?>
    
    

</head>
<body scroll="no" style="overflow: hidden">

<div class="imgcontainer">
    <img class="img-responsive" src="/qt_web_app/application_resources/images/logo.png">
</div>
<div class="form">
<div class="container">
		<div class="row">
			<h1>Edit Profile</h1>
		</div>
	</div>
</div>
<?php 
$attributes = array('name' => 'login_data');

echo form_open_multipart('login/do_upload', $attributes);
?>
<div class="container edit_pro">
    <div class="row">
    <div class="col-md-3 col-sm-3 feild">NAME :   </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
                    <!-- <input type="hidden" name="id" class="form-control" value="<?php echo $user_detail->id;?>"> -->
        <input type="hidden" name="id" class="form-control" value="4">
        <input type="text" name="name" class="form-control" value="<?php echo $user_detail->name;?>">
     </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">designation : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
       <input type="text" name="designation" class="form-control" value="<?php echo $user_detail->designation;?>">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">User Name : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
    <input type="text" name="user_name" class="form-control" value="<?php echo $user_detail->user_name;?>">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">Department : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
    <input type="text" name="department" class="form-control" value="<?php echo $user_detail->department;?>">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">Email : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
    <input type="text" name="email" class="form-control" value="<?php echo $user_detail->email;?>">
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">Date Of Birth : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
    <input type="text" name="dob" class="form-control" value="<?php echo $user_detail->dob;?>">
    
    </div>
    </div>
    </div>

    <div class="row">
    <div class="col-md-3 col-sm-3 feild">Profile Picutre : </div>
    <div class="col-md-9 col-sm-9">
    <div class="form-group">
        <input type="file" name="image">
    </div>
    </div>
    </div>

    <div class="row">

                <div class="form-group">
                    <button class="btn btn-success" id="btn_upload" type="submit" style="margin-top: 40px;font-size: 30px;">Upload</button>
                </div>
    </div>
    </div>
                 
                 

                
    
</div>
</div>
