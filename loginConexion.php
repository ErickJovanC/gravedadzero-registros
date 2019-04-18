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
			$resultado->execute(array(":usuario"=>$usuario));
			$contador=0;
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				if(password_verify($password,$registro['password'])){
					$contador++;
					$estado=$registro["status"];
					$tipo=$registro["tipo"];
				}
			}
			if($contador>0){
				if($estado==1){
					session_start();
					$_SESSION["identificado"]=true;
					if($tipo=="admin"){
						$_SESSION["tipo"]="admin";
						$url="usuarios.php";
					}
					else{
						$url="formRegistros.php";
					}
				}
				else{
					$url="index.php?inactivo";
					//echo "Estoy en Inactivo";
				}
			}
			else{
				$url="index.php?error";
				//echo "Estoy en Error";
			}
			return $url;
		}
	}
	$conectar=new loginConexion();
	$url=$conectar->verificaLogin();
	header("Location: $url");
	//echo $url;
?>