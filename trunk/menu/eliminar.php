<?php
header('Cache-Control: no-cache');
header('Pragma: no-cache'); 
?>
<html>
<head>
</head>
<body>
<? 
include ("../conectar.php"); 
include ("../funciones/fechas.php");

	$idmov=$_GET["idmov"];
	$codfactura=$_GET["codfactura"];
	$fechacobro=$_GET["fechacobro"];
	$importe=$_GET["importe"];
	$importe="-".$importe;
	$fecha=explota($fechacobro);

	$act_factura="DELETE FROM cobros WHERE id='$idmov' AND codfactura='$codfactura'";
	$rs_act=mysql_query($act_factura);
	
	//1 compra
	//2 venta
	
	$sel_libro="INSERT INTO librodiario (id,fecha,tipodocumento,coddocumento,codcomercial,codformapago,numpago,total) VALUES 
	('','$fecha','2','$codfactura','','','','$importe')";
	$rs_libro=mysql_query($sel_libro);

?>
</body>
</html>
