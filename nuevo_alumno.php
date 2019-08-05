<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Asistencia</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		body {
		  display: -ms-flexbox;
		  display: -webkit-box;
		  display: flex;
		  -ms-flex-align: center;
		  -ms-flex-pack: center;
		  -webkit-box-align: center;
		  align-items: center;
		  -webkit-box-pack: center;
		  justify-content: center;
		  padding-top: 40px;
		  padding-bottom: 40px;
		  background-color: #f5f5f5;
		}

		.form-signin {
		  width: 100%;
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
	</style>
</head>
<body>
	<?php

		$cnx = new mysqli('localhost','jlsistem_sa','S1st3m@s011108','jlsistem_asistencia');
		if ($_POST['submit']) {
			
			$matricula = $_POST['matricula'];
			$nombre = $_POST['nombre'];

			$existe_asistencia = "SELECT * FROM alumnos WHERE Matricula = '$matricula'";
			$resultado = $cnx->query($existe_asistencia) or die (mysqli_error());
			if (mysqli_num_rows($resultado)>0){

				echo "<label class='alert alert-warning text-center'><h2><img src='https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/cancel.png' width='25%'> <br/> <strong>Mensaje: </strong> Matrícula Duplicada!</h2></label>";
				header("REFRESH:2; URL=./alumnos.php");

			}else{

				$guardar_alumno = $cnx->query("INSERT INTO alumnos VALUES(NULL, '$matricula', '$nombre')");

				if ($guardar_alumno == false) {
					echo "<label class='alert alert-danger text-center'><h2><img src='https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/cancel.png' width='25%'> <br/> <strong>Mensaje: </strong> Ocurrio un error al guardar</h2></label>";
					header("REFRESH:2; URL=./alumnos.php");
				}else{
					echo "<label class='alert alert-success text-center'><h2><img src='https://cdn4.iconfinder.com/data/icons/meBaze-Freebies/512/ok.png' width='25%'> <br/> <strong>Mensaje: </strong> Alumno Registrado!</h2></label>";
					header("REFRESH:2; URL=./alumnos.php");
				}

			}

		}

	?>
</body>
</html>