<?php

  if(isset($_GET['m'])){

    $m = $_GET['m'];

  }else{

    $m = 0;

  }

  $msj = "";
  if ($m == 1){
    $msj = "Las contraseñas no coinciden";
  }else if($m == 2){
    $msj = "El nombre de Usuario ingresado ya existe, digite uno diferente";
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
<body class="width:100%">
	<div class="container d-flex flex-column justify-content-center align-items-center another">
		<div class="border border-primary position-absolute px-2 text-center flex flex-justifycontent-center px-5">
			<h1 class="mt-3">Encuesta</h1>
 			<form id="form1" name="form1" method="POST" action="php/validar_usuarios.php">
          <!--*********************************************Nombre*********************************************-->
          <p><font color="red"><i><?php echo $msj?></i></font></p>
  				<table border="0">
          <tr>
            <td class="text-left">Nombre de Usuario</td>
            <td><input type="text" name="nombre" size="20" maxlenght="5" required></td>
          </tr>
          <tr>
            <td class="text-left">Email</td>
            <td><input type="email" name="email" size="20" maxlenght="5" required></td>
          </tr>
          <tr>
            <td class="text-left">Contraseña</td>
            <td><input type="password" name="password" size="20" maxlenght="5" required></td>
          </tr>
          <tr>
            <td class="text-left">Repetir contraseña</td>
            <td><input type="password" name="rpassword" size="20" maxlenght="5" required></td>
          </tr>
          <tr>
            <td><input type="submit" name="enviar" value="Registrar" class="btn btn-primary mt-2 my-3"></td>
          </tr>
        </table>
			</form>
      <!--***********************************************Ir a mundial***********************************************-->
      <a href="index.php" class="btn btn-primary mt-2 my-3">Volver</a>
		</div>
	</div>
</body>
</html>
