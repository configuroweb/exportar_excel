<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://www.configuroweb.com/desarrollo/">ConfiguroWeb</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Cómo exportar a Excel desde PHP
</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form action="save.php" method="POST">
				<div class="form-group">
					<label>Nombre</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
				<div class="form-group">
					<label>Apellido</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Dirección</label>
					<input type="text" class="form-control" name="address" required="required"/>
				</div>
				<center><button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Guardar</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<form method="POST" action="create_excel.php">
				<button class="btn btn-success pull-right" name="export"><span class="glyphicon glyphicon-print"></span> Exportar a Excel</button>
			</form>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Dirección</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						
						$query = mysqli_query($conn, "SELECT * FROM `member`");
						while($fetch = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><?php echo $fetch['address']?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>