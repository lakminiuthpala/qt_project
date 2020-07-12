<h3>Chat Status</h3>
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
					<li>Responded <?php echo $watercoller_respose_count->response_count; ?>/<?php echo $watercoller_invitation_count->invitation_count; ?></li>
					<li>Activity level Cheetah</li>
				</ul>
			</div>
			
			
			<?php if($respose_percentsge == 100){ ?>
			<div class="chat_status">
			<div class="status_wc">Hurray! you've responded to all tasks. Good job!</div>

			</div>
			<?php }else{ ?>
				<h3>Pending Watercooler Replies <span onclick="get_pending_questions('1')"><?php echo $pending_questions_count->pending_count;?></span></h3>
				<div id="pending-watercooler-questions"></div>


			<?php } ?>

	<script type="text/javascript">
		function get_pending_questions(data){

		$.post('<?php echo base_url();?>index.php/profile/get_pending_questions',{question: data} ,function(msg) {
            $('#pending-watercooler-questions').html(msg);
        });

		}

	</script>