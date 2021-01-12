<?php
	include('connection.php');

	$errors = array();
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];

	// if (isset($_POST['submit'])){
	// 	if (empty($name)) {
	// 		header('location:index.php');
	// 	}

	// 	if (count($errors) == 0) {
	// 		mysqli_query($connection,"insert into visitors (name, email, phone) values ('$name', '$email', '$phone')");
	// 		header('location:index.php');
	// 	}
	// }

	mysqli_query($connection,"insert into visitors (name, email, phone) values ('$name', '$email', '$phone')");
	header('location:index.php');

?>