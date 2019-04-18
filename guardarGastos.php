<?php
	require("conexion.php");
	class guardarGastos extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function setGuardarGastos(){
			$sucursal=$_POST["sucursal"];
			$mes=$_POST["mes"];
			$anio=$_POST["anio"];
			$renta=$_POST["renta"];
			$luz=$_POST["luz"];
			$internet=$_POST["internet"];
			$personal=$_POST["personal"];
			$reinversion=$_POST["reinversion"];
			$otros=$_POST["otros"];
			
			if($renta==null){
				$renta = 0;
			}
			if($luz==null){
				$luz = 0;
			}
			if($internet==null){
				$internet = 0;
			}
			if($personal==null){
				$personal = 0;
			}
			if($reinversion==null){
				$reinversion = 0;
			}
			if($otros==null){
				$otros = 0;
			}

			$sql="INSERT INTO gastos (sucursal, anio, mes, renta, internet, luz, personal, reinversion, otros) VALUES (:sucursal, :anio, :mes, :renta, :internet, :luz, :personal, :reinversion, :otros)";
			$resultado=$this->conexion_db->prepare($sql);
			$resultado->execute(array(":sucursal"=>$sucursal, ":anio"=>$anio, ":mes"=>$mes, ":renta"=>$renta, ":internet" =>$internet, ":luz"=>$luz, ":personal"=>$personal, ":reinversion"=>$reinversion, ":otros"=>$otros));
			echo "Gastos Registrado";
		}
	}
	$conectar=new guardarGastos();
	$conectar->setGuardarGastos();
?>