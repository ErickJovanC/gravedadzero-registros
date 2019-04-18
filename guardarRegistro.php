<?php
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

	try{
		//$base=new PDO('mysql:host=localhost; dbname=id7150052_gravedad','id7150052_erickjovan','palmz22');
		$base=new PDO('mysql:host=localhost; dbname=gravedad','root','');
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("set character set utf8");
		$sql="Insert Into registros (fecha, sucursal, cajainicial, venta, internet, recargas, registros, gastos, concepto, cajafinal, entregado, diferencia) Values (:fecha, :sucursal, :cajainicial, :venta, :internet, :recargas, :registros, :gastos, :concepto, :cajafinal, :entregado, :diferencia)";
		$resultado=$base->prepare($sql);
		$resultado->execute(array(":fecha"=>$fecha, ":sucursal"=>$sucursal,":cajainicial"=>$cajainicial, ":venta"=>$venta, ":internet"=>$internet, ":recargas"=>$recargas, ":registros"=>$registros, ":gastos"=>$gastos, ":concepto"=>$concepto, ":cajafinal"=>$cajafinal, ":entregado"=>$entregado, ":diferencia"=>$diferencia));
		echo "Registro insertado<br>
		<a href='formRegistros.php'>Registrar mas días</a>";
	}
	catch(Exception $e){
		die('Error: '.$e->GetMessage());
	}
	finally{
		$base=null;
	}
?>