<?php
	include_once("modulos/Enrutador.php");
	include_once("modulos/Controlador.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Curso PDO con PHP</title>
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
		<h1>
			Bienvenido
		</h1>
			
		<section>
			<?php
				$enrutador = new Enrutador();
				if($enrutador->validarGET($_GET['cargar'])){
					$enrutador->cargarVista($_GET['cargar']);
					}
			?>
		</section>
	</body>
</html>