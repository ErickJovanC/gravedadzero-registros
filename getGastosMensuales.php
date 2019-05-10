<?php
	include_once("conexion.php");
	class gastoMensual extends conexion{
		public function __cosntruct(){
			parent::__cosntruct();
		}
		public function getGastoMensual($sucursal, $anio, $mes){
			$sql="SELECT * FROM gastos WHERE sucursal='$sucursal' AND anio=$anio AND mes=$mes";
			//echo $sql;
			$gastos=$this->conexion_db->query($sql)->fetchAll(PDO::FETCH_OBJ);
			return $gastos;
		}
	}
?>