<?php
	
	require_once("utilidad.class.php");

	class empleado extends utilidad
	{

		public $cod_ado;
		public $nom_ado;
		public $ape_ado;
		public $gen_ado;
		public $nac_ado;
		public $tip_ado;
		public $ced_ado;
		public $tel_ado;
		public $cor_ado;
		public $cla_ado;
		public $dir_ado;
		public $cod_car;
		public $est_ado;
		public $bas_ado;
		

		function insertar()
		{
			$cre_ado = date("y-m-d h:i:s");

			$this->que_bda = "insert into empleado
								(nom_ado, 
								ape_ado, 
								gen_ado, 
								nac_ado,
								tip_ado, 
								ced_ado, 
								tel_ado, 
								cor_ado, 
								cla_ado, 
								dir_ado, 
								cod_car, 
								cre_ado,
								est_ado,
								bas_ado)
							values
								('$this->nom_ado', 
								'$this->ape_ado', 
								'$this->gen_ado', 
								'$this->nac_ado',  
								'$this->tip_ado',  
								'$this->ced_ado', 
								'$this->tel_ado', 
								'$this->cor_ado',  
								'$this->cla_ado', 
								'$this->dir_ado', 
								'$this->cod_car', 
								'$cre_ado',
								'A',
								'A');";

			return $this->ejecutar();

		}// fin de insertar
		
		function modificar_normal()
		{
			$act_ado = date("y-m-d h:i:s");

			$this->que_bda = "update empleado
								set
									nom_ado='$this->nom_ado',
									ape_ado='$this->ape_ado',
									gen_ado='$this->gen_ado',
									nac_ado='$this->nac_ado',
									tip_ado='$this->tip_ado',
									ced_ado='$this->ced_ado',
									tel_ado='$this->tel_ado',
									cor_ado='$this->cor_ado',
									cla_ado='$this->cla_ado',
									dir_ado='$this->dir_ado',
									cod_car='$this->cod_car',
									act_ado='$act_ado',
									est_ado='$this->est_ado'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar normal

		function modificar_datos()
		{
			$act_ado = date("y-m-d h:i:s");

			$this->que_bda = "update empleado
								set 
									tel_ado='$this->tel_ado',
									cor_ado='$this->cor_ado',
									dir_ado='$this->dir_ado',
									act_ado='$act_ado'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar datoscambiar_contrasena

		function modificar_contrasena()
		{
			$act_ado = date("y-m-d h:i:s");

			$this->que_bda = "update empleado
								set 
									cla_ado='$this->cla_ado',
									act_ado='$act_ado'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar contrasena

		function modificar_restaurar()
		{
			$res_ado = date("y-m-d h:i:s");

			$this->que_bda = "update empleado
								set
									res_ado='$res_ado',
									bas_ado='A'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar restaurar

		function modificar_eliminar()
		{
			$eli_ado = date("y-m-d h:i:s");

			$this->que_bda = "update empleado
								set
									eli_ado='$eli_ado',
									bas_ado='B'
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de modificar eliminar

		function listar_normal()
		{
			$this->que_bda = "select * from empleado where bas_ado='A'";

			return $this->ejecutar();

		}// fin de listar normal

		function listar_modificar()
		{
			$this->que_bda = "select * from empleado where cod_ado='$this->cod_ado'";

			return $this->ejecutar();

		}// fin de listar modificar

		function listar_eliminar()
		{
			$this->que_bda = "select * from empleado where bas_ado='B'";

			return $this->ejecutar();

		}// fin de listar eliminar

		function listar_sesion($cor_ado, $cla_ado)
		{
			$this->que_bda = "select cod_ado, cor_ado, cla_ado, cod_car, est_ado, bas_ado 
									from 
										empleado 
									where 
										cor_ado='$cor_ado' and 
										cla_ado='$cla_ado' and 
										est_ado='A' and 
										bas_ado='A';";

			return $this->ejecutar();

		}// fin de listar sesion

		function eliminar()
		{

			$this->que_bda = "delete from empleado
								where
									cod_ado='$this->cod_ado';";

			return $this->ejecutar();

		}// fin de eliminar

		function filtrar()
        {

            $filtro1=($this->cod_ado!="")?"and cod_ado like '%$this->cod_ado%'":"";
            $filtro2=($this->nom_ado!="")?"and nom_ado like '%$this->nom_ado%'":"";
            $filtro3=($this->ape_ado!="")?"and ape_ado like '%$this->ape_ado%'":"";
            $filtro4=($this->gen_ado!="")?"and gen_ado='$this->gen_ado'":"";
            $filtro5=($this->tip_ado!="")?"and tip_ado='$this->tip_ado'":"";
            $filtro6=($this->ced_ado!="")?"and ced_ado like '%$this->ced_ado%'":"";
			$filtro7=($this->tel_ado!="")?"and tel_ado like '%$this->tel_ado%'":"";
			$filtro8=($this->cor_ado!="")?"and cor_ado like '%$this->cor_ado%'":"";
			$filtro9=($this->dir_ado!="")?"and dir_ado like '%$this->dir_ado%'":"";
			$filtro10=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro11=($this->est_ado!="")?"and est_ado='$this->est_ado'":"";
			$filtro12=($this->bas_ado!="")?"and bas_ado='$this->bas_ado'":"";

            $this->que_bda = "select * from empleado where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9 $filtro10 $filtro11 $filtro12;";

            return $this->ejecutar();

        }// fin de filtrar

        function comprobar_datos()
		{
			$this->que_bda = "select * from empleado 
											where 
												cor_ado='$this->cor_ado' and 
												ced_ado='$this->ced_ado' and 
												tel_ado='$this->tel_ado' and 
												nac_ado='$this->nac_ado' and 
												est_ado='A' and 
												bas_ado='A';";

			return $this->ejecutar();

		}// fin de Comprobar Datos

        function listar_resp()
		{
			$this->que_bda = "select * from empleado_resp;";

			return $this->ejecutar();

		}// fin de listar respaldo

		function filtrar_resp()
		{
			
            $filtro1=($this->cod_ado!="")?"and cod_ado like '%$this->cod_ado%'":"";
            $filtro2=($this->nom_ado!="")?"and nom_ado like '%$this->nom_ado%'":"";
            $filtro3=($this->ape_ado!="")?"and ape_ado like '%$this->ape_ado%'":"";
            $filtro4=($this->gen_ado!="")?"and gen_ado='$this->gen_ado'":"";
            $filtro5=($this->tip_ado!="")?"and tip_ado='$this->tip_ado'":"";
            $filtro6=($this->ced_ado!="")?"and ced_ado like '%$this->ced_ado%'":"";
			$filtro7=($this->tel_ado!="")?"and tel_ado like '%$this->tel_ado%'":"";
			$filtro8=($this->cor_ado!="")?"and cor_ado like '%$this->cor_ado%'":"";
			$filtro9=($this->dir_ado!="")?"and dir_ado like '%$this->dir_ado%'":"";
			$filtro10=($this->cod_car!="")?"and cod_car='$this->cod_car'":"";
			$filtro11=($this->est_ado!="")?"and est_ado='$this->est_ado'":"";
			$filtro12=($this->bas_ado!="")?"and bas_ado='$this->bas_ado'":"";

            $this->que_bda = "select * from empleado_resp where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7 $filtro8 $filtro9 $filtro10 $filtro11 $filtro12;";

			return $this->ejecutar();

		}// fin de filtrar respaldo

	}
	
?>