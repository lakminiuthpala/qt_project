<!-- Tab content -->
<?php if(!empty($replies)){
	foreach ($replies as $reply) { 
	?>						
							<div class="row">
								<div class="comments_box">
									<div class="row">
										<div class="col-md-2 col-sm-2">
											<div class="profile_pic">
												<img class="img-responsive" src="<?php echo base_url();?>/application_resources/images/profile_pic.png">
												<!-- <img class="img-responsive" src="<?php echo base_url();?>/application_resources/images/<?php echo $reply->profile_pic?>"> -->
											</div>
										</div>
										<div class="col-md-7 col-sm-7">
											<h3><?php echo $reply->name ;?></h3>
											<div class="pub_date"><?php echo date('d M', strtotime($reply->modified_datetime));?></div>
										</div>
										<div class="col-md-3 col-sm-3 department"><p><?php echo $reply->department;?></p></div>
									</div>
									<div class="question">
										<p><?php echo $reply->title;?></p>
									</div>
									<div class="comments_wc">
										<p><?php echo $reply->response_text;?></p>
									</div>

									<?php if(!empty($watercoller_photo)){
										foreach ($watercoller_photo as $value) {
											if($value->user_response_id == $reply->id){?>
												<div class="com_img">
										<img class="img-responsive" src="<?php echo base_url();?>/application_resources/images/<?php echo $value->image;?>">
									</div>
									<?php		}
										}
									}?>
									
								</div>
							</div>
<?php }
}
?>