<?php 
	include 'dbconnect.php';
	if(isset($_POST['userName']))
	{
	    $uName = $_POST['userName'];
	    $uEmail = $_POST['userEmail'];
	    $uPhoto = $_POST['userPhoto'];
	    $uVerified = $_POST['userVerified'];
	    echo $uName;
	    echo $uEmail;
	    echo $uPhoto;
	    echo $uVerified;


	}


?>	