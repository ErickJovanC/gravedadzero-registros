<?php
	require("conexion.php");
	class reporteMensual extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function getReporteMensual($mes, $anio, $sucursal){
			// Modificar la consulta para que devuelva los registros de todo un mes y no solo una fecha
			$sql="SELECT * FROM registros WHERE sucursal='$sucursal' AND fecha BETWEEN '".$anio."".$mes."01' AND '".$anio."".$mes."31' ORDER BY fecha";// AND sucursal=$sucursal";
			//echo $sql;
			$registros=$this->conexion_db->query($sql)->fetchAll(PDO::FETCH_OBJ);
			return $registros;
		}
	}
	/* La instancia deberia estar aqui o en el archivo solicitante?
	$conectar=new reporteMensual();
	/* Se debe obtener el valor de Mes y Año y concatenarlos para que realice la busqueda
	de la fecha en el formato correcto 
	$conectar->getReporteMensual($fecha, $sucursal);*/
?>