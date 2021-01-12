<?php
 

$connection = mysqli_connect("localhost","root","","visitors_journal");
if (!$connection) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>