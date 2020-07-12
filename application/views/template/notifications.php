<div class="container">
	<div class="row">
		<div class="status">
		<div class="tab">
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="load_watercooler_notifications('1')">Watercooler</button>
			</div>
			<div class="col-md-6 col-sm-6">
				<button class="tabstatus" onclick="load_watercooler_notifications('2')">Check- In</button>
			</div>
		</div>
</div>
		<div id="watercooler-notifications" class="">
			

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


function load_watercooler_notifications(data){

	$.post('<?php echo base_url();?>index.php/profile/get_watercooler_notifications',{question: data} ,function(msg) {
            $('#watercooler-notifications').html(msg);
        });
	}

</script>
