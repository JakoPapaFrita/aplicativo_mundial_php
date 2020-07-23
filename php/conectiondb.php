<?php
	$host = "localhost"; //ip
	$usuario = "root";   //usuario de ingreso base de datos
	$clave = ""; //contraseña del usuario configurado en la base de datos
	$bd = "mundialxi07"; //base de datos

	#conexión con la base de datos
	$enlace = mysqli_connect($host,	$usuario, $clave, $bd);

	#comprobar conección
	if (mysqli_connect_errno()){
		printf("Conexión Fallida: %s\n", mysqli_connect_errno);
		exit();
	}
?>