<?php
	
	require("../clase/empleado.class.php");

	$obj_ado = new empleado;

	$correo=$_POST['cor_ado'];
	$clave=$_POST['cla_ado'];

	$obj_ado->puntero=$obj_ado->listar_session($correo, $clave);


	switch ($_REQUEST["ejecutar"])
	{
		case 'session':		$usuarios=$obj_ado->extraer_dato();

							if($usuarios['cor_ado']==$correo && $usuarios['cla_ado']==$clave && $usuarios['est_ado']=='A' && $usuarios['bas_ado']=='A')
							{
								session_start();
								$_SESSION['activo'] = true;
								$_SESSION['correo'] = $correo;

								header('Location: ../../frontend/vista/menu_principal.php');
							}
							else
							{
								header('Location: ../../frontend/vista/usu_session.php');
							}						
		break;
	}
?>