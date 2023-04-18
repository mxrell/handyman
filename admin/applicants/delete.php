<?php 

	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `tbljobregistration` where REGISTRATIONID='$id'");
	header('location:index.php');
 
?>