<?php
	require("php/conectiondb.php");
	$consulta = "SELECT * FROM v_estadiosysedes3";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Mi Primera Pagina en php</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos_estadios.css">
</head>
<body>
	<div class="border border-primary position-absolute text-center d-flex flex-column align-items-center contenedor">
		<h1 class="display-1 px-5">INFORMACIÓN MUNDIAL 2020</h1>
		<table class="table">
  			<thead>
    			<tr>
      				<th scope="col">Codigo Estadio</th>
      				<th scope="col">Nombre Estadio</th>
      				<th scope="col">Nombre Sede</th>
    			</tr>
  			</thead>
  			<tbody>
		<?php
			#validar consulta
			if ($resultado = mysqli_query($enlace, $consulta)) {

				#Visualizar la información obtenida
				#Con un solo resultado la información obtenida se visualizará con if
				while($datos = mysqli_fetch_assoc($resultado)){
					echo'
    					<tr>
    						<th scope="row">'.$datos["Codigo_Partido"]."</th>
    						<td>".$datos["nombre_Estadio"]."</td>
    						<td>".$datos["lugar_Sede"]."</td>
    					</tr>"; 
				}

			}else{
				echo"Error: No es posible generar la consulta";
			}
			#liberar el conjunto de resultados
			mysqli_free_result($resultado);
			#cerrar enlace
			mysqli_close($enlace);
		?>
			</tbody>
		</table>
		<a href="index.php" class="btn btn-primary my-3 btn-volver">Volver</a>
	</div>
</body>
</html>
