<?php
	require("conexion.php");
	class eliminarUsuario extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function delUsuario($id){
			$sql="DELETE FROM usuarios WHERE id=:id";
			$resultado=$this->conexion_db->prepare($sql);
			$resultado->execute(array(":id"=>$id));
		}
	}
	$conectar=new eliminarUsuario();
	$conectar->delUsuario($_GET["id"]);
	header ("Location: usuarios.php");
?>