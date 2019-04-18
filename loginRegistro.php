<?php
	require("conexion.php");
	class registrarUsuario extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function registrar(){
			$usuario=$_POST["usuario"];
			$password=password_hash($_POST["password"], PASSWORD_DEFAULT);
			$email=$_POST["email"];
			$sql="INSERT INTO usuarios (usuario, password, email, tipo, status) VALUES	(:usuario, :password, :email, 'user', '0')";
			$resultado=$this->conexion_db->prepare($sql);
			$resultado->execute(array(":usuario"=>$usuario, ":password"=>$password,":email"=>$email));
		}
	}
	$registrar=new registrarUsuario();
	$registrar->registrar();
	$usuario=$_POST["usuario"];
	header("Location: index.php?registro=".$usuario);
?>