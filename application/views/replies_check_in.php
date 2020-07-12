<?php if(!empty($replies)){
	foreach ($replies as $reply) { 
	?>		

							<div class="textbox_check">
								<div class="row">
									<div class="col-md-2 col-sm-2">
										<div class="profile_pic">
											<img class="img-responsive" src="/qt_web_app/application_resources/images/profile_pic.png">
											<!-- <img class="img-responsive" src="<?php echo base_url();?>/application_resources/images/<?php echo $reply->profile_pic?>"> -->
										</div>
									</div>
									<div class="col-md-7 col-sm-7">
										<h3><?php echo $reply->name ;?></h3>
										<div class="pub_date"><?php echo date('d M', strtotime($reply->modified_datetime));?></div>
									</div>
									<div class="col-md-3 col-sm-3 department"><p><?php echo $reply->department;?></p></div>
								</div>
								<div class="comments">
									<p><?php echo $reply->response_text;?></p>
										<!-- <ol>
											<li><p>Connection was choppy</p></li>
											<li><p>Issues with the landing page sign up form. Working with @glenda from our IT team.</p></li>
											<li><p>Laptop crashed.</p></li>
										</ol> -->
								</div>
							</div>
							
<?php }
}
?>