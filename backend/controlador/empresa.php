<?php
	
	require("../clase/empresa.class.php");

	$obj_emp = new empresa;

	$obj_emp->asignar_valor();

	switch ($_REQUEST["ejecutar"])
	{
		case 'insertar':	$obj_emp->insertar();
		break;

		case 'modificar':	$obj_emp->modificar();
		break;

		case 'eliminar':	$obj_emp->eliminar();
		break;
	}
	
?>