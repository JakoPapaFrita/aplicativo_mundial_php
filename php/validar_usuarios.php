<?php

	#variables globales

	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$rpassword = $_POST["rpassword"];

	require('conectiondb.php');

	#variables de validación

	$sql = "SELECT * FROM usuarios WHERE nombreUsuarios = '".$nombre."'";
	$resultado = mysqli_query($enlace, $sql);
	$datosUsuario = mysqli_fetch_array($resultado);

	#validación

	if ($datosUsuario['nombreUsuarios']) {
		mysqli_close($enlace);
		header('Location: ../index.php?m=2');
	}else{

		if($rpassword == $password){

			$sql = "INSERT INTO usuarios VALUES('$nombre','$password','$email')";
			$resultado = mysqli_query($enlace, $sql);
			mysqli_close($enlace);
			header('Location: ../registro_usuario.php');

		}else{

			mysqli_close($enlace);
			header('Location: ../index.php?m=1');

		}

	}#end if
?>