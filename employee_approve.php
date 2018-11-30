<?php
	
	include "db.php";
	$id=$_GET["id"];
	mysqli_query($connection,"update employees set status='yes' where id=$id");
?>
<script type="text/javascript">
	window.location="admin_employees_display.php";
</script>