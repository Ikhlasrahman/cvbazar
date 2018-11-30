<?php
	
	include "db.php";
	$id=$_GET["id"];
	mysqli_query($connection,"update job_seeker set status='no' where id=$id");
?>
<script type="text/javascript">
	window.location="admin_jobseeker_display.php";
</script>