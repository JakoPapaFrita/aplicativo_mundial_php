<?php
	if ($_POST["nombreUsuario"] == "") {
		$nombre = "Ninguno";
	}else{
		$nombre = $_POST["nombreUsuario"];
	}
	
	$municipio = $_POST["municipio"];
	$genero = $_POST["genero"];

	if(!isset($_POST["compañia"])) {
		$compañia = "";
	}else{
		$compañia = $_POST["compañia"];
	}

	if (!isset($_POST["compañia2"])) {
		$compañia2 = "";
	}else{
		$compañia2 = $_POST["compañia2"];
	}

	if (!isset($_POST["compañia3"])) {
		$compañia3 = "";
	}else{
		$compañia3 = $_POST["compañia3"];
	}

	if (!isset($_POST["compañia4"])){
		$compañia4 = "";
	}else{
		$compañia4 = $_POST["compañia4"];
	}

	$compañias = array("$compañia", "$compañia2", "$compañia3", "$compañia4");
	$verificador = 0;
	$indice = 0;
	$concatenada = "";

	while($indice < 4){

		if($verificador == 1){
			if ($compañias[$indice] != "") {
				$concatenada = "$concatenada, ".$compañias[$indice];
			}
		}else{

			if($compañias[$indice] != ""){
				$concatenada = "$concatenada".$compañias[$indice];
				$verificador = 1;
			}

		}

		$indice = $indice + 1;

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>

	<title>Mi Primera Pagina en php</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="another d-flex flex-column justify-content-center align-items-center">
	<div class="border border-primary position-absolute text-center d-flex flex-column align-items-center">
		<h1 class="display-1 px-5">El nombre del usuario es: <?php echo"$nombre";?></h1>
		<h1 class="display-4 px-5 my-2">El municipio del usuario es: <?php echo"$municipio";?></h1> 
		<h1 class="display-4 px-5 my-2">El genero del usuario es: <?php echo"$genero";?></h1> 
		<h1 class="display-4 px-5 my-2">El usuario vive con: <?php echo"$concatenada";?></h1> 
		<a href="index.php" class="btn btn-primary my-5 btn-volver">Volver</a>
	</div>
	</div>
</body>
</html>
<!--isset importante-->