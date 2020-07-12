<div id="Replies" class="">
	<div class="container">
		<div class="row">
			<div class="tab">
				<div class="col-md-6 col-sm-6">
					<button class="tablinks" onclick="open_water_cooler_replies('1')">Watercooler</button>
				</div>
				<div class="col-md-6 col-sm-6">
					<button class="tablinks" onclick="open_check_in_replies('2')">Check-in</button>
				</div>
				
			</div>
			<div id="Watercooler" class="">
				</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	function open_water_cooler_replies(data){

		 $.post('<?php echo base_url();?>index.php/profile/get_waterpooler_replies',{question: data} ,function(msg) {
            $('#Watercooler').html(msg);
        });
	}


	function open_check_in_replies(data){

		 $.post('<?php echo base_url();?>index.php/profile/get_waterpooler_replies',{question: data} ,function(msg) {
            $('#Watercooler').html(msg);
        });
	}
</script>
