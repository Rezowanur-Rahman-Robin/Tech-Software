<?php 

session_start();

    include("includes/db.php");

?>

<script>
if(localStorage.getItem('phone')){
  window.open('examples/dashboard.php','_self');
}

</script>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Admin Login</title>
	  <link rel="shortcut icon" type="image/x-icon" href="../media/we_tech-logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Admin Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Are You Admin?</h3>
				<form action="" method="post" class="login-form">
		      		<div class="form-group">
		      			<input type="number" name="login_phn" class="form-control rounded-left" placeholder="Phone Number" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="login_pass" class="form-control rounded-left" placeholder="Password" required>
	            </div>

	            <div class="form-group">
	            	<input type="submit" value="Signin" name="login_submit" class="btn btn-primary rounded submit p-3 px-5"/>
	            </div>
	          </form>

			  <?php 
			  if(isset($_POST['login_submit'])){
				$login_phn = $_POST['login_phn'];
			  
				$login_pass = $_POST['login_pass'];


				$get_admin = "select * from admins where admin_phn='$login_phn' AND admin_pass='$login_pass'";
        
				$run_admin = mysqli_query($con,$get_admin);
				
				$count = mysqli_num_rows($run_admin);
				
				if($count==1){
					
					$_SESSION['admin_phn']=$login_phn;

					$t=$_SESSION['admin_phn'];

					if($row_admin = mysqli_fetch_array($run_admin)){
						$admin_id=$row_admin['admin_id'];
					

                    ?>
                    <script>

						localStorage.setItem('phone', '<?php echo $login_phn;?>'); 
						localStorage.setItem('admin_id', '<?php echo $admin_id;?>'); 

					</script>
					<?php 


					
					echo "<script>alert('Logged in. Welcome Back')</script>";
					
					echo "<script>window.open('examples/dashboard.php','_self')</script>";
					
					}
				
				}else{
					
					echo "<script>alert('Phone or Password is Wrong !')</script>";
					
				}
			  
				
			  
			  }
			 
			 ?>


	        </div>
				</div>
			</div>
		</div>
	</section>


	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

