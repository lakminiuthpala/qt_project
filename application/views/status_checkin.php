<h3>Check-in Stats</h3>
		<div class="chat_status">
			
				<div class="progress">
					<?php
					$respose_percentsge = 0;
					if($watercoller_invitation_count->invitation_count > 0){
						$respose_percentsge =  ($watercoller_respose_count->response_count / $watercoller_invitation_count->invitation_count)* 100;
					}
					?>
					 
					<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $respose_percentsge; ?>%">
					<span class="sr-only"><?php echo $respose_percentsge; ?>% Complete</span>
					</div>
				</div>
				<ul>
					<li>Check-ins <?php echo $watercoller_respose_count->response_count; ?>/<?php echo $watercoller_invitation_count->invitation_count; ?></li>
					<li>Compliance <?php echo $respose_percentsge; ?>%</li>
				</ul>
			</div>
			
			
			<?php if($respose_percentsge == 100){ ?>
			<div class="chat_status">
			<div class="status_wc">Yes! all check-in's done.  Keep it up!</div>

			</div>
			<?php }else{ ?>
				<h3>Yet to Check-In <span onclick="get_pending_questions('2')"><?php echo $pending_questions_count->pending_count;?></span></h3>
				<div id="pending-questions"></div>
			<?php } ?>
			



	<script type="text/javascript">
		function get_pending_questions(data){

		$.post('<?php echo base_url();?>index.php/profile/get_pending_questions',{question: data} ,function(msg) {
            $('#pending-questions').html(msg);
        });

		}

	</script>