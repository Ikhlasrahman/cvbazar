<?php
	include "includes/header.php";

?>
<?php include "db.php"; ?>


<?php
    if(isset($_POST['submit1'])){
    $count=0;
    $res=mysqli_query($connection,"select * from admin where username='$_POST[username]' && password='$_POST[password]'");
    $count=mysqli_num_rows($res);

    if($count==0){
    ?>
    <div class="alert alert-danger text-center">
    Invalid Username Or Password.
</div>
    <?php

}else{
	?>
	<script type="text/javascript">
		window.location="admin_display.php";
	</script>
	<?php
    
}
}
?>


	<div class="tr-breadcrumb bg-image section-before">
		<div class="container">
			<div class="breadcrumb-info text-center">
				<div class="page-title">
					<h1>Admin SIGN IN</h1>
					
				</div>				
			</div>
		</div><!-- /.container -->
	</div><!-- tr-breadcrumb -->	

	<div class="tr-account section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="user-account">
						<div class="account-content">
							<form action="#" method="POST" class="tr-form">
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Please Enter Your username">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
												
								<button type="submit1" name="submit1" class="btn btn-primary">Login</button>
							</form>	
							
						</div>
					</div>			
				</div>
			</div><!-- /.row -->			
		</div><!-- container -->
	</div><!-- /.tr-account-->	


<?php
	include "includes/footer.php";

?>	

	
		