<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Visitors journal</strong></center></span>
		<span class="pull-left"><a href="#create" data-toggle="modal" class="btn btn-primary">Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
			<?php
				include('connection.php');
				
				$query=mysqli_query($connection,"select * from `visitors`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($row['name']); ?></td>
						<td><?php echo ucwords($row['email']); ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning">Edit</a> 
							<?php include('views/editTable.php'); ?>
						</td>
						<td>
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
							<?php include('views/deleteTable.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('views/createTable.php'); ?>
</div>
</body>
</html>


