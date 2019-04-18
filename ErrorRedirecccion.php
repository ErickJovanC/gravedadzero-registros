<?php
	require("conexion.php");
	class loginConexion extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function verificaLogin(){
			$sql="SELECT * FROM usuarios WHERE usuario = :usuario";
			$resultado=$this->conexion_db->prepare($sql);
			$usuario=$_POST["usuario"];
			$password=$_POST["password"];
			$resultado->execute(array("usuario"=>$usuario));
			$contador=0;
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				if(password_verify($password,$registro['password'])){
					if($registro["status"]==1){
						$contador++;
					}
					else{
						header("Location: index.php?inactivo");
						//echo "Usuario inactivo";
					}
				}
			}
			if($contador>0){
				session_start();
				$_SESSION["identificado"]=true;
				header("Location: formRegistros.php");
			}
			else{
				header("Location: index.php?error");
				//echo "Error";
			}
		}
	}
	$conectar=new loginConexion();
	$conectar->verificaLogin();
?>