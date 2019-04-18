<?php
	require("conexion.php");
	class usuarios extends conexion{
		public function __construct(){
			parent::__construct();
		}
		public function getUsuarios(){
			$sql="SELECT * FROM usuarios";
			$registros=$this->conexion_db->query($sql)->fetchAll(PDO::FETCH_OBJ);
			return $registros;
		}
	}
?>	