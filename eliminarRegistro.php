<?php
	require("conexion.php");
	class eliminarRegistro extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function delEliminarRegistro($id){
			$sql="DELETE FROM registros WHERE id=:id";
			$eliminar=$this->conexion_db->prepare($sql);
			$eliminar->execute(array(":id"=>$id));
		}
	}
	$conectar=new eliminarRegistro();
	$conectar->delEliminarRegistro($_GET["id"]);
	header ("Location: formReporteMensual.php");
?>