<div class="container">
	<div class="row">
		<div class="status">
		<div class="tab">
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="get_watercooler_status_by_profile('1')">Watercooler</button>
			</div>
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="get_watercooler_status_by_profile('2')">Check- In</button>
			</div>
		</div>
</div>
		<div id="watercooler_status" class="">
		

		</div>

		<div id="checkin_status" class="tabcontentstatus">
		
		</div>



<script>
	
function openstatus(evt, statusName) {
  var i, tabcontentstatus, tabstatus;
  tabcontentstatus = document.getElementsByClassName("tabcontentstatus");
  for (i = 0; i < tabcontentstatus.length; i++) {
    tabcontentstatus[i].style.display = "none";
  }
  tabstatus = document.getElementsByClassName("tabstatus");
  for (i = 0; i < tabstatus.length; i++) {
    tabstatus[i].className = tabstatus[i].className.replace(" active", "");
  }
  document.getElementById(statusName).style.display = "block";
  status.currentTarget.className += " active";
}

function get_watercooler_status_by_profile(data){

		 $.post('<?php echo base_url();?>index.php/profile/get_watercooler_status_by_profile',{question: data} ,function(msg) {
            $('#watercooler_status').html(msg);
        });
	}

</script>
