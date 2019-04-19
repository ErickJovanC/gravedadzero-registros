<?php
	require("conexion.php");
	class actulizarRegistro extends conexion{
		public function __construct(){
		parent::__construct();			
		}
		public function setActulizarRegistro(){
			$id=$_POST["id"];
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

			//$sql="UPDATE registros SET (fecha, sucursal, cajainicial, venta, internet, recargas, registros, gastos, concepto, cajafinal, entregado, diferencia) Values (:fecha, :sucursal, :cajainicial, :venta, :internet, :recargas, :registros, :gastos, :concepto, :cajafinal, :entregado, :diferencia)";
			$sql = "UPDATE registros SET fecha = ?, sucursal = ?, cajainicial = ?, venta = ?, internet = ?, recargas = ?, registros = ?, gastos = ?, concepto = ?, cajafinal = ?, entregado = ?, diferencia = ? WHERE id = $id";
			$resultado=$this->conexion_db->prepare($sql);
			//$resultado->execute(array(":fecha"=>$fecha, ":sucursal"=>$sucursal,":cajainicial"=>$cajainicial, ":venta"=>$venta, ":internet"=>$internet, ":recargas"=>$recargas, ":registros"=>$registros, ":gastos"=>$gastos, ":concepto"=>$concepto, ":cajafinal"=>$cajafinal, ":entregado"=>$entregado, ":diferencia"=>$diferencia));
			$resultado->execute(array($fecha, $sucursal, $cajainicial, $venta, $internet, $recargas, $registros, $gastos, $concepto, $cajafinal, $entregado, $diferencia));
		}
	}
$conectar= new actulizarRegistro();
$conectar->setActulizarRegistro();
header("Location: formReporteMensual.php?update");
?>