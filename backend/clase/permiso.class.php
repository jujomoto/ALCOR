<?php

	require_once("utilidad.class.php");

	class permiso extends utilidad
	{

		public $cod_per;
		public $cod_car;
		public $cod_mod;
		public $est_per;
		public $bas_per;

		
		function insertar()
		{
			$cre_per = date("y-m-d h:i:s");

			$this->que_bda = "insert into permiso
								(cod_car,
								cod_mod,
								cre_per,
								est_per,
								bas_per)
							values
								('$this->cod_car',
								'$this->cod_mod',
								'$cre_per',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar

		function modificar_normal()
		{
			$act_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
							set 
								cod_car='$this->cod_car',
								cod_mod='$this->cod_mod',
								act_per='$act_per',
								est_per='$this->est_per'
							where
								cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_restaurar()
		{
			$res_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
								set
									res_per='$res_per',
									bas_per='A'
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_per = date("y-m-d h:i:s");

			$this->que_bda = "update permiso
								set
									eli_per='$eli_per',
									bas_per='B'
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from permiso where bas_per='A';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_menu()
		{
			$this->que_bda = "select * from permiso where cod_car='$this->cod_car' and est_per='A' and bas_per='A';";

			return $this->ejecutar();

		}// fin de listar menu

		function listar_modificar()
		{
			$this->que_bda = "select * from permiso where cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from permiso where bas_per='B';";

			return $this->ejecutar();

		}// fin de listar eliminar

		function eliminar()
		{
			$this->que_bda = "delete from permiso
								where
									cod_per='$this->cod_per';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
		{
			$filtro1=($this->cod_per!="")?"and cod_per='$this->cod_per'":"";
			$filtro2=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro3=($this->cod_mod!="")?"and cod_mod='$this->cod_mod'":"";
			$filtro4=($this->est_per!="")?"and est_per='$this->est_per'":"";
			$filtro5=($this->bas_per!="")?"and bas_per='$this->bas_per'":"";
			
			$this->que_bda = "select * from permiso where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5;";

			return $this->ejecutar();

		}// fin de filtrar

		function listar_resp()
		{
			$this->que_bda = "select * from permiso_resp;";

			return $this->ejecutar();

		}// fin de listar respaldo

		function filtrar_resp()
		{
			
			$filtro1=($this->cod_per!="")?"and cod_per='$this->cod_per'":"";
			$filtro2=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro3=($this->cod_mod!="")?"and cod_mod='$this->cod_mod'":"";
			$filtro4=($this->est_per!="")?"and est_per='$this->est_per'":"";
			$filtro5=($this->bas_per!="")?"and bas_per='$this->bas_per'":"";
			
			$this->que_bda = "select * from permiso_resp where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5;";

			return $this->ejecutar();

		}// fin de filtrar respaldo

	}

 ?>