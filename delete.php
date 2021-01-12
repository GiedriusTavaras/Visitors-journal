<?php
	include('connection.php');
	$id=$_GET['id'];
	mysqli_query($connection,"delete from visitors where id='$id'");
	header('location:index.php');
 
?>