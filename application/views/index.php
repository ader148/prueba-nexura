<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inventory</title>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div class="container mt-4">
			<button class="btn btn-dark" onclick="location.href='CrearEmpleado'">Crear Empleado</button>
		<div id="app" class="container m-2">
			<table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th colspan="2"><i class="fas fa-user">&nbsp</i>Nombre</th>
						<th><i class="fas fa-at">&nbsp</i>Email</th>
						<th><i class="fas fa-venus-mars">&nbsp</i>Sexo</th>
						<th><i class="fas fa-briefcase">&nbsp</i>Área</th>
						<th><i class="fas fa-envelope">&nbsp</i>Boletín</th>
						<th>Modificar<th>
						<th>Eliminar<th>
					</tr>
					<?php foreach ($data as $value) {?>
					<tr>
						<td colspan="2"><?= $value->nombre;?></td>
						<td><?= $value->email;?></td>
						<td><?= $value->sexo;?></td>
						<td><?= $value->area;?></td>
						<td>Si</td>
						<td><a href="Editarempleado?emp=<?=$value->empid;?>" class="item edit"><i class="far fa-edit"></i></a></td>
						<td><a onclick="EliinarEmpleado(<?php echo $value->empid ?>);" class="item delete"><i class="fas fa-trash-alt"></i></a></td>
					</tr>
					<?php } ?>
				</thead>
				<tbody id="item-list">
				</tbody>
			</table>
			<nav id="pag">

			</nav>
		</div>
	</div>

<?php include("layouts/modal.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
<script src="https://kit.fontawesome.com/0134f2a200.js" crossorigin="anonymous"></script>
</body>
</html>