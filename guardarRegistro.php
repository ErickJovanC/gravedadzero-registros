<?php
	require("conexion.php");

	class guardarRegistro extends conexion{
		function __construct(){
			parent::__construct();
		}
		function guardaRegistro(){			
			$fecha=$_POST["fecha"];
			$sucursal=$_POST["sucursal"];
			$cajainicial=$_POST["cajainicial"];
			$venta=$_POST["venta"];
			$internet=$_POST["internet"];
			$recargas=$_POST["recargas"];
			$registros=$_POST["registros"];
			$gastos=$_POST["gastos"];
			$concepto=$_POST["concepto"];
			$cajafinal=$_POST["cajafinal"];
			$entregado=$_POST["entregado"];
			$diferencia=$_POST["diferencia"];
			
			if($gastos==null){
				$gastos=0;
			}
			if($diferencia==null){
				$diferencia=0;
			}

			$sql="Insert Into registros (fecha, sucursal, cajainicial, venta, internet, recargas, registros, gastos, concepto, cajafinal, entregado, diferencia) Values (:fecha, :sucursal, :cajainicial, :venta, :internet, :recargas, :registros, :gastos, :concepto, :cajafinal, :entregado, :diferencia)";
			$resultado=$this->conexion_db->prepare($sql);
			$resultado->execute(array(":fecha"=>$fecha, ":sucursal"=>$sucursal,":cajainicial"=>$cajainicial, ":venta"=>$venta, ":internet"=>$internet, ":recargas"=>$recargas, ":registros"=>$registros, ":gastos"=>$gastos, ":concepto"=>$concepto, ":cajafinal"=>$cajafinal, ":entregado"=>$entregado, ":diferencia"=>$diferencia));
		}
	}
	$conectar=new guardarRegistro();
	$conectar->guardaRegistro();
	header("Location: formRegistros.php?exito")
?>