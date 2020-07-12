<div id="Replies" class="">
	<div class="container">
		<div class="row">
			<div class="tab">
				<div class="col-md-6 col-sm-6">
					<button class="tablinks" onclick="open_water_cooler_mentions('1')">Watercooler</button>
				</div>
				<div class="col-md-6 col-sm-6">
					<button class="tablinks" onclick="open_water_cooler_mentions('2')">Check-in</button>
				</div>
				
			</div>
			<div id="Water-cooler" class="">
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	function open_water_cooler_mentions(data){

		 $.post('<?php echo base_url();?>index.php/profile/get_waterpooler_mentions',{question: data} ,function(msg) {
            $('#Water-cooler').html(msg);
        });
	}

</script>
