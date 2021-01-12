<?php
	include('connection.php');
 
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
 
	mysqli_query($connection,"update visitors set name='$name', email='$email', phone='$phone' where id='$id'");
	header('location:index.php');
 
?>