<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Guardar Gastos</title>
</head>
<body>
	<?php 
		include_once("navbar.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 col-xl-4">
				<form action="guardarGastos.php" method="post">
					<div class="form-group">
						<label for="Sucursal">Sucursal</label>
						<br><input type="radio" name="sucursal" value="Arcos" required> Arcos
						<br><input type="radio" name="sucursal" value="Centro"> Centro
						<br><input type="radio" name="sucursal" value="Santiago"> Santiago
						<br><input type="radio" name="sucursal" value="San Jeronimo"> San Jerónimo
					</div>
					<div class="form-group">
						<label for="anio">Año</label>
						<select name="anio" id="anio" class="form-control">
							<option value="2019">2019</option>
							<option value="2019">2020</option>
							<option value="2019">2021</option>
							<option value="2019">2022</option>
							<option value="2019">2023</option>
						</select>
					</div>
					<div class="form-group">
						<label for="mes">Mes</label>
						<select name="mes" id="mes" class="form-control">
							<option value="01">Enero</option>
							<option value="02">Febrero</option>
							<option value="03">Marzo</option>
							<option value="04">Abril</option>
							<option value="05">Mayo</option>
							<option value="06">Junio</option>
							<option value="07">Julio</option>
							<option value="08">Agosto</option>
							<option value="09">Septiembre</option>
							<option value="10">Octubre</option>
							<option value="11">Noviembre</option>
							<option value="12">Diciembre</option>
						</select>
					</div>
					<div class="form-group">
						<label for="renta">Renta</label>
						<input class="form-control" type="text" name="renta">
					</div>
					<div class="form-group">
						<label for="luz">Luz</label>
						<input class="form-control" type="text" name="luz">
					</div>
					<div class="form-group">
						<label for="Internet">Internet</label>
						<input class="form-control" type="text" name="internet">
					</div>
					<div class="form-group">
						<label for="personal">Personal</label>
						<input class="form-control" type="text" name="personal">
					</div>
					<div class="form-group">
						<label for="otros">Otros</label>
						<input class="form-control" type="text" name="otros">
					</div>
					<div class="form-group">
						<label for="reinversion">Porcentaje de Reinversión</label>
						<input class="form-control" type="text" name="reinversion" value="30">
					</div>
					<button class="btn btn-primary" type="submit">Guardar</button>
					<a href="registrarUsuario.php">Registrarse</a>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>