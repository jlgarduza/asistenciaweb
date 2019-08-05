<!DOCTYPE html>
<html lang="es">
<head>
	<title>Asistencia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		.btn.md-12 { font-size: 12px; }

		.material-icons.md-12 { font-size: 12px; }
		.material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; }
        .material-icons.md-36 { font-size: 36px; }
        .material-icons.md-48 { font-size: 48px; }

        /* Rules for using icons as black on a light background. */
        .material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
        .material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }

        /* Rules for using icons as white on a dark background. */
        .material-icons.md-light { color: rgba(255, 255, 255, 1); }
        .material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }
	</style>
</head>
<body>
	<div class="container" align="center">
		<div class="row">
			<div class="table-responsive">
				<h2>Alumnos</h2>
				<?php
					$cnx = new mysqli('localhost','root','','asistencia');

					$buscar_alumnos = $cnx->query("SELECT * FROM alumnos");
				?>
				<a href="nuevo_alumno.html" class="btn btn-primary md-12"><b><i class="material-icons">perm_identity</i></b></a>
				<a href="./" class="btn btn-primary md-12"><b><i class="material-icons">arrow_back</i></b></a>
				<table class="table table-bordered">
					<thead class="bg-primary text-white text-center">
						<th>ID</th>
						<th>Matrícula</th>
						<th>Nombre</th>
						<th colspan="2">Acciones</th>
					</thead>
					<?php while($listar_alumnos = mysqli_fetch_object($buscar_alumnos)){ ?>
					<tbody style="font-size: 12px;">
						<td><?php echo $listar_alumnos->idAlumno ?></td>
						<td><?php echo $listar_alumnos->Matricula ?></td>
						<td><?php echo $listar_alumnos->Nombre ?></td>
						<td class="text-center"><a href="#" class="btn btn-primary md-12"><i class="material-icons md-18" style="color: white;">edit</i></a></td>
						<td class="text-center"><a href="#" class="btn btn-danger md-12"><i class="material-icons md-18" style="color: white;">delete</i></a></td>
					</tbody>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>