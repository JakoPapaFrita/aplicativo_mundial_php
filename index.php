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
 			<form id="form1"name="form1" method="POST" action="recibidos.php">
          <!--*********************************************Nombre*********************************************-->
  				<div class="form-group">
    				<label for="exampleInputEmail1">Nombre</label>
    				<input type="text" class="form-control" name="nombreUsuario" id="exampleInputEmail1">
  				</div>
          <!--********************************************Municipio********************************************-->
  				<select class="form-control mb-4" id="exampleFormControlSelect1" name="municipio">
     				<option value="Ninguno">Elija un municipio</option>
    				<option value="Bello">Bello</option>
      			<option value="Medellín">Medellín</option>
        		<option value="Envigado">Envigado</option>
        		<option value="Sabaneta">Sabaneta</option>
    			</select>
          <!--**********************************************Genero**********************************************-->
          <label for="form-check-label">Elija un genero</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio1" name="genero" value="Masculino"> 
            <label class="form-check-label" for="inlineRadio1">Masculino</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" id="inlineRadio2" name="genero" value="Femenino">
            <label class="form-check-label" for="inlineRadio2">Femenino</label>
          </div><br>
          <!--*******************************************Con quién vive*******************************************-->
          <label for="form-check-label">Elija con quién vive</label><br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="compañia" value="Madre">
            <label class="form-check-label" for="inlineCheckbox1">Mamá</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="compañia2" value="Padre">
            <label class="form-check-label" for="inlineCheckbox2">Papá</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="compañia3" value="Solo">
            <label class="form-check-label" for="inlineCheckbox2">Solo</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="compañia4" value="Otro Familiar">
            <label class="form-check-label" for="inlineCheckbox2">Otro</label>
          </div>
          <br>
          <!--***********************************************Boton***********************************************-->
  				<button type="submit" name="enviar" value="enviar" class="btn btn-primary my-4">Submit</button>
			</form>
      <!--***********************************************Ir a mundial***********************************************-->
      <a href="estadios.php" class="btn btn-primary mt-2 my-3">Ir a mundial</a>
      <a href="formulario.php" class="btn btn-primary mt-2 my-3">Registrarse</a>
		</div>
	</div>
</body>
</html>
