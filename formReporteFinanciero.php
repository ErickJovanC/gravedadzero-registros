<?php
	session_start();
	if(!isset($_SESSION["identificado"])){
		header("Location: index.php");
	}
	elseif($_SESSION["tipo"]!="admin"){
		header("Location: formRegistros.php");
	}
	$titulo = "Reporte Financiero - ";
	$icono = '<i class="fas fa-wallet"></i>';
	require ("head.php");
?>
<div class="row">
	<div class="col justify-content-center">
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-inline form-control-sm mb-2">
			<div class="form-group">
				<label for="sucursal">Sucursal</label>
				<select name="sucursal" id="sucursal" class="form-control-sm mx-2">
					<option value="Arcos">Arcos</option>
					<option value="Centro">Centro</option>
					<option value="Santiago">Santiago</option>
					<option value="San Jeronimo">San Jerónimo</option>
				</select>
			</div>
			<div class="form-group">
				<label for="mes">Mes</label>
				<select name="mes" id="mes" class="form-control-sm mx-2">
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
			<div class="form-group">
				<label for="anio">Año</label>
				<select name="anio" id="anio" class="form-control-sm mx-2">
					<option value="2019">2019</option>
					<option value="2019">2020</option>
					<option value="2019">2021</option>
					<option value="2019">2022</option>
					<option value="2019">2023</option>
				</select>
			</div>
			<input class="btn btn-primary btn-sm mx-3" type="submit" name="mostrar" value="Mostrar">
		</form>
	</div>
</div>
<!--Reporte Financiero Inicio-->
<div class="row">
	<?php
		if(isset($_POST["mostrar"])){
			$mes=$_POST["mes"];
			$anio=$_POST["anio"];
			$sucursal=$_POST["sucursal"];
			require("getReporteMensual.php");
			$conectar=new reporteMensual();
			$registros=$conectar->getReporteMensual($mes, $anio, $sucursal);
	?>
	<div class="col justify-content-center">
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
				<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal<?php echo $registro->id; ?>"><i class="fas fa-edit"></i> Modificar</button></td>
			</tr>
		<?php
			require("formModalModificarRegistro.php");
			endforeach;
		?>
		</table>
	</div>
	<!--Tabla de resultados inicio-->
	<?php
		include("getGastosMensuales.php");
		$gastosMensuales = new gastoMensual();
		$gastos=$gastosMensuales->getGastoMensual($sucursal, $anio, $mes);
		$ingresos=$sumaVenta+$sumaInternet+($sumaRecargas*0.065+$sumaRegistros);
		//var_dump($gastos);
		//echo "Elemntos: ".count($gastos);
		if(count($gastos)!=0){
			foreach ($gastos as $gasto) {
			$renta=$gasto->renta;
			$luz=$gasto->luz;
			$internetGasto=$gasto->internet;
			$personal=$gasto->personal;
			$otros=$gasto->otros;
			$reinversion=$gasto->reinversion;
			}
			$egresos=$renta+$luz+$internetGasto+$personal+$otros+($sumaVenta/100*$reinversion);
			//+$sumaGastos;
		
		
	?>
	<div class="col justify-content-center">
		<table class="table table-responsive table-striped table-sm">
			<tr>
				<th>Sucursal</th>
				<th><?php echo $sucursal; ?></th>
				<th>Mes</th>
				<th><?php echo $mes; ?></th>			</tr>
			<tr>
				<th>Venta</th>
				<td><?php echo $sumaVenta; ?></td>
				<td><small>Gastos Mensuales</small></td>
				<td><small><?php echo $sumaGastos; ?></small></td>
			</tr>
			<tr>
				<th>Internet</th>
				<td><?php echo $sumaInternet; ?></td>
				<th>Renta</th>
				<td><?php echo $renta; ?></td>
			</tr>
			<tr>
				<td><small>Recargas</small></td>
				<td><small><?php echo $sumaRecargas; ?></small></td>
				<th>Luz</th>
				<td><?php echo $luz; ?></td>
			</tr>
			<tr>
				<td><small>Registros</small></td>
				<td><small><?php echo $sumaRegistros; ?></small></td>
				<th>Internet</th>
				<td><?php echo $internetGasto; ?></td>
			</tr>
			<tr>
				<th>Utilidad Recargas</th>
				<td><?php echo $sumaRecargas*0.065+$sumaRegistros; ?></td>
				<th>Personal</th>
				<td><?php echo $personal; ?></td>
			</tr>
			<tr>
				<th></th>
				<td></td>
				<th>Reinversión</th>
				<td><?php echo $sumaVenta/100*$reinversion; ?></td>
			</tr>
			<tr>
				<th></th>
				<td></td>
				<th>Otros</th>
				<td><?php echo $otros; ?></td>
			</tr>
			<tr>
				<th>Totales</th>
				<td><?php echo $ingresos; ?></td>
				<td></td>
				<td><?php echo $egresos; ?></td>
			</tr>
			<tr>
				
			</tr>
			<tr>
				<th>Utilidad estimada</th>
				<td><?php echo $ingresos-$egresos; ?></td>
			</tr>
		</table>
	</div>
	<!--Tabla de resultados Fin-->
	<?php
			}
			else{
				Echo '
					<div class="col-12 justify-content-center">
					<p>Aun no se ha registrado el gasto del mes y no se puede mostrar la "Tabla de Resultados"</p>
					</div>';
			}
		}
	?>
</div>
<!--Reporte Financiero Fin-->
<?php
	require("foot.php");
?>