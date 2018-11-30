<?php
	include "includes/header.php";

?>
<?php
  

  include "db.php";
  if (isset($_POST['submit'])) {
    

    $fullname=$_POST['username'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    $sql="INSERT INTO admin (fullname,username,email,password)";
    $sql.=" VALUES ('$fullname','$username','$email','$password')";

    $result=mysqli_query($connection,$sql);
    if (!$result) {
      die('Username must be unique'.mysqli_error());
    }



  }


?>

	<div class="tr-breadcrumb bg-image section-before">
		<div class="container">
			<div class="breadcrumb-info text-center">
				<div class="page-title">
					<h1>Add new Admin</h1>
					
				</div>				
			</div>
		</div><!-- /.container -->
	</div><!-- tr-breadcrumb -->	

	<div class="tr-account section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="user-account">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs  nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#seeker" aria-controls="seeker" role="tab" data-toggle="tab">Add New Admin</a></li>
							
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="seeker">
								<div class="account-content">
									<form action="admin_signup.php" method="POST" class="tr-form">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
										</div>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Username" name="username">
										</div>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="your Email"  name="email">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password"  name="password">
										</div>
										
										
										<button type="submit" name="submit" class="btn btn-primary">Add Admin</button>
									</form>	
									
							</div>
						</div>				
					</div>			
				</div>
			</div><!-- /.row -->			
		</div><!-- container -->
	</div><!-- /.tr-account-->	

	<?php
	include"includes/footer.php";

?>
		