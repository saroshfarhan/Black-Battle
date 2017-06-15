<?php 
	include 'dbconnect.php';
	$id = $_POST['secondUnique'];
	// echo $id;

	$res=mysqli_query($conn,"SELECT * FROM users WHERE email_ID='$id'");
	$row=mysqli_fetch_array($res);
	$count = mysqli_num_rows($res);

	if($row['mobile']==0){
		include 'updateProfile.php';
	} else {
			include 'allMembers.php';

	}


 ?>
 