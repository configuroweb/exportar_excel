<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		
		mysqli_query($conn, "INSERT INTO `member` VALUE('', '$firstname', '$lastname', '$address')") or die(mysqli_errno());
		header('location: index.php');
			
	}
?>