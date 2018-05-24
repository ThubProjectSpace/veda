<?php
include 'api/config.php';
	echo $rollno = $_REQUEST['rollno'];
	$query="SELECT * FROM `student` WHERE rollno='".$rollno."'";
	$result=mysqli_query($con,$query);


	$fetch= mysqli_fetch_array($result);


	?>
	<script>
		$(document).ready(function(){
			//alert('asdf');
			$('#studentname').val("<?php echo $fetch['studentname']; ?>")
			$('#college').val("<?php echo $fetch['college']; ?>")
			$('#mobile').val("<?php echo $fetch['mobile']; ?>")
			$('#email').val("<?php echo $fetch['email']; ?>")
			$('#department').val("<?php echo $fetch['department']; ?>")
			$('#event_category').val("<?php echo $fetch['event_category']; ?>")
			$('#event').val("<?php echo $fetch['event']; ?>")
			$('#event_location').val("<?php echo $fetch['event_location']; ?>")
			$('#fee').val("<?php echo $fetch['fee']; ?>")
			
		});
	</script>
	<?php

	// if($fetch['rollno']){


	// 	 echo $fetch['studentname'];

	// 	 echo $fetch['college'];

	// 	 echo $fetch['mobile'];

	// 	 echo $fetch['email'];

	// 	 echo $fetch['department'];
	// 	 echo $fetch['event_category'];
	// 	 echo $fetch['event'];
	// 	 echo $fetch['event_location'];
	// 	 echo $fetch['fee'];
		
	// }

	?>