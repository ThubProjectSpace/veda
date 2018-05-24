

<!DOCTYPE html>
<html>
<head>
	<title>	Spot Registration</title>

	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--   <img src="images/image.jpg"> -->
	
<img src="images/image.jpg">	







<?php 	
error_reporting(0);
include 'api/config.php';

 ?>


 <?php 	
if (isset($_POST['submit'])) {


$insert="INSERT INTO `student` (`rollno`, `studentname`,`college`, `mobile`,`email`,`department`,`event_category`,`event`,`event_location`,`fee`) VALUES ('".$_POST['rollno']."', '".$_POST['studentname']."','".$_POST['college']."',  '".$_POST['mobile']."','".$_POST['email']."','".$_POST['department']."','".$_POST['event_category']."','".$_POST['event']."','".$_POST['event_location']."','".$_POST['fee']."')";
   $ins= mysqli_query($con,$insert);

     if($ins)
     {
     echo "<script>alert('Data inserted successfully');</script>";	
     }
     else
     {
     echo "<script>alert('Fail to insert');</script>";
     }	

  }

  ?>

</head>
<div class="container ">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center ">
					<h1 class="title">REGISTRATION</h1>
					<hr />
				</div>
			</div> 
			<div class="col-md-6 col-md-offset-4 ">
				<div class="main-login main-center">

	<form class="form-horizontal" method="post" >
			
		<div class="form-group  ">
			<label for="name" class="cols-sm-2 control-label">StudentId/Rollno </label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-id-card-o fa" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['rollno'];  ?>" class="form-control" name="studentid" id="studentid"  placeholder="Enter  id" required/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="cols-sm-2 control-label"> student name</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['studentname'];  ?>"class="form-control" name="studentname" id="studentname"  placeholder="Enter  name" required/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="username" class="cols-sm-2 control-label">College</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['college'];  ?>"class="form-control" name="college" id="college"  placeholder="Enter  college" required/>
				</div>
			</div>
		</div>

					<div class="form-group">
			<label for="confirm" class="cols-sm-2 control-label">Mobile</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-mobile fa-lg" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['mobile'];  ?>"class="form-control" name="mobile" id="mobile"  placeholder="Enter  Mobile" required/>
				</div>
			</div>
		</div>
			<div class="form-group">
			<label for="username" class="cols-sm-2 control-label">Email</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
					<input type="email" value="<?php  echo $fetch['email'];  ?>"class="form-control" name="email" id="email"  placeholder="Enter your email"required/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="confirm" class="cols-sm-2 control-label">Department</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-list fa-lg" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['department'];  ?>"class="form-control" name="department" id="department"  placeholder="Enter department"required/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label for="confirm" class="cols-sm-2 control-label">Select Event Category</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-snowflake-o fa-lg" aria-hidden="true"></i></span>
					<select name="event_category" class="form-control" id="event_category">
						<option value="digi">
						Digi
						</option>
						<option value="Sparks">
							Sparks
						</option>



					</select>
				</div>
			</div>
		</div>
				<div class="form-group">
			<label for="confirm" class="cols-sm-2 control-label">Select Event </label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-ravelry fa-lg" aria-hidden="true"></i></span>
					<select name="event" class="form-control"id="event">
						<option value="poster">
						poster
						</option>
						<option value="paper">
							paper
						</option>
						</select>
				</div>
			</div>
		</div>
				<div class="form-group">
			<label for="confirm" class="cols-sm-2 control-label">Location</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
					<select name="event_location" class="form-control" id="event_location">
						<option value="billgates">
					Billgates
						</option>
						<option value="cotton">
							Cotton
						</option>



					</select>
				</div>
			</div>

		</div>
			<div class="form-group">
			<label for="username" class="cols-sm-2 control-label">Fee</label>
			<div class="cols-sm-10">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-money fa" aria-hidden="true"></i></span>
					<input type="text" value="<?php  echo $fetch['fee'];  ?>"class="form-control" name="fee" id="fee"  placeholder="Enter  fee" required/>
				</div>
			</div>
		</div>

		<script></script>

<div class="form-group col-md-3 col-md-offset-2">

			<input type="submit" class="btn btn-success btn-lg btn-block login-button" name="submit" value="submit"required/>
		</div>

	</form>

</div>
</div>
</div>

</div>

</div>

<!-- <button id="alert" class="btn btn-info">getAlert</button> -->

<p id="test"></p>

<script>
	$(document).ready(function(){
		$('#studentid').keyup(function(){
			var rollno = $('#studentid').val();
			//$('#alert').css({'border':'2px solid red'});
			$('#test').load('ajax.php?action=getData&rollno='+rollno);
		});	
	});
</script>


</body>
</html>