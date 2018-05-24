<?php
include 'api/config.php';

session_start();

if (@$_SESSION['username']!="" && @$_SESSION['user_id']!="") {
	echo "<script>location.href='register.php';</script>";
}



if(isset($_POST['Login'])){

	$username=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$query="SELECT * FROM `admin` WHERE `email`= '".$username."' AND `password`= '".$password."'";
	$result=mysqli_query($con,$query);
	$count=mysqli_num_rows($result);


	if($count==1){
		$fetch=mysqli_fetch_array($result);

		if($username==$fetch['email'] && $password==$fetch['password']){

			$_SESSION['username']=$fetch['name'];
			$_SESSION['user_id']=$fetch['id'];
			echo "<script> alert('login success');location.href='register.php'</script>";
		}
		else {
			echo "<script>alert('failed');</script>";
		}
	}
	else{
		echo "<script>alert('failed');</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<titleLogin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<!--  -->
<script>
	$(document).ready(function() {
		$("#next").click(function() {
			var email = $("#email").val();
			$(".email-warning").load("check_email.php?email="+email);
		});
	});
</script>


</head>
<body>




	<div class="login">
		<div class="container">

			<center><h3>VEDA SPOT REGISTRATION </h3></center><br><br>
			<div class="login-bottom">
				<div class="col-md-4 col-md-offset-4 bg-info">
					<h2 class="text-center">Login</h2><br><br>
					<form method="post">


						<div class="col-md-8 col-md-offset-2 ">
							<div class="login-mail">
								<input type="text" id="email" name="email" placeholder="Email" required>
								
								<i class="fa fa-envelope"></i>
							</div>
							<i class="text-danger email-warning" style="display: none;"></i>
							<br><br>
							<div class="login-mail">
								<input type="password" name="password" placeholder="Password" required>
								<i class="fa fa-lock"></i>
							</div>
							<br>
							<div class="col-md-8 col-md-offset-2">
								<button class="btn btn-success hvr-shutter-in-horizontal" id="next" name="Login" type="submit"><i class="fa fa-eye"></i> Submit</button>
							</div><br>
							<br><br>
							<a class="news-letter " href="forgt.php">
								<label class="checkbox1"><input type="checkbox" name="checkbox" ><i> </i>Forget Password</label>
							</a>


						</div>
						<div class="clearfix"> </div><br><br>



					</div>
				</div><br><br>
			</div>
		</form>
	</div>

<!-- 	<div class="copy-right">
		<p>
			&copy; 2018  All Rights Reserved | Design by <a href="https://technicalhub.io/" target="_blank"><img src="images/technicalhub.png"></a> 
		</p>
	</div>   -->
	
</body>
</html>

