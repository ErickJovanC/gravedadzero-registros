<?php
	require("conexion.php");
	class activarUsuarios extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function activaUsuario(){
			$id=$_GET["id"];
			$sql="UPDATE usuarios SET status=:status WHERE id=:id";
			$resultado=$this->conexion_db->prepare($sql);
			$resultado->execute(array(":status"=>1, ":id"=>$id));
		}
	}
	$conexion=new activarUsuarios();
	$conexion->activaUsuario();
	header("Location: usuarios.php");
?>