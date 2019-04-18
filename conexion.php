<?php
	require("config.php");
	class conexion {
		protected $conexion_db;
		public function __construct(){
			try{
				//$this->conexion_db=new PDO('mysql:host=localhost; dbname=gravedad', 'root', '');
				$this->conexion_db=new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NOMBRE.'', DB_USUARIO, DB_PASS);
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET ".DB_CHARSET);
				return $this->conexion_db;
			}
			catch(Exception $error) {
				echo "La linea de error es: ".$error->getLine();
			}
		}
	}
?>