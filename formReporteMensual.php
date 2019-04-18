<?php
	session_start();
	if(!isset($_SESSION["identificado"])){
		header("Location: index.php");
	}
	$titulo = "Reporte Mensual - ";
	$icono = '<i class="fas fa-flag"></i>';
	require ("head.php");
?>
<div class="row">
	<div class="col-12">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-inline">
			<div class="form-group">
				<label for="sucursal">Sucursal</label>
				<select name="sucursal" id="sucursal" class="form-control mx-3">
					<option value="Arcos">Arcos</option>
					<option value="Centro">Centro</option>
					<option value="Santiago">Santiago</option>
					<option value="San Jeronimo">San Jerónimo</option>
				</select>
			</div>
			<div class="form-group ">
				<label for="mes">Mes</label>
				<select name="mes" id="mes" class="form-control mx-3">
					<!-- <option hidden>Mes</option> -->
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
			<div class="form-group ">
				<label for="anio">Año</label>
				<select name="anio" id="anio" class="form-control mx-3">
					<option value="2019">2019</option>
					<option value="2019">2020</option>
					<option value="2019">2021</option>
					<option value="2019">2022</option>
					<option value="2019">2023</option>
				</select>
			</div>
			<input class="btn btn-primary mx-3" type="submit" name="mostrar" value="Mostrar">
		</form>
	</div>
	<div class="col-12">
		<?php
			if(isset($_POST["mostrar"])){
				$mes=$_POST["mes"];
				$anio=$_POST["anio"];
				$sucursal=$_POST["sucursal"];
				require("getReporteMensual.php");
				$conectar=new reporteMensual();
				$registros=$conectar->getReporteMensual($mes, $anio, $sucursal);
				
				?>
					<table class="table table-responsive table-striped table-sm" style="font-size:12px">
						<tr>
							<th>Fecha</th>
							<th>Sucursal</th>
							<th>Caja Inicial</th>
							<th>Venta</th>
							<th>Internet</th>
							<th>Recargas</th>
							<th>Registros</th>
							<th>Gastos</th>
							<th>Concepto</th>
							<th>Caja Final</th>
							<th>Entregado</th>
							<th>Diferencia</th>
							<th></th>
						</tr>
					<?php
						$sumaVenta=0;
						$sumaInternet=0;
						$sumaRecargas=0;
						$sumaRegistros=0;
						$sumaGastos=0;

						foreach($registros as $registro):
							$sumaVenta+=$registro->venta;
							$sumaInternet+=$registro->internet;
							$sumaRecargas+=$registro->recargas;
							$sumaRegistros+=$registro->registros;
							$sumaGastos+=$registro->gastos;
					?>
						<tr>
							<td><?php echo $registro->fecha; ?></td>
							<td><?php echo $registro->sucursal; ?></td>
							<td><?php echo $registro->cajainicial; ?></td>
							<td><?php echo $registro->venta; ?></td>
							<td><?php echo $registro->internet; ?></td>
							<td><?php echo $registro->recargas; ?></td>
							<td><?php echo $registro->registros; ?></td>
							<td><?php echo $registro->gastos; ?></td>
							<td><?php echo $registro->concepto; ?></td>
							<td><?php echo $registro->cajafinal; ?></td>
							<td><?php echo $registro->entregado; ?></td>
							<td><?php echo $registro->diferencia; ?></td>
							<td><a href="<?php echo""; ?>"><button>Modificar</button></a></td>
						</tr>
					<?php
						endforeach; }
					?>
					</table>
	</div>
</div>
<?php
	require ("foot.php");
?>