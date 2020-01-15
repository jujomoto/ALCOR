<?php 

	/*

		cod_for, nom_for, ape_for, ced_for, tel_for, cor_for, asu_for

		cod_for		INT(11)			NO		A_I		PK		->	Codigo del Formulario
		nom_for		VARCHAR(50)		SI						->	Nombre del Formulario
		ape_for		VARCHAR(50)		SI						->	Apellido del Formulario
		ced_for		VARCHAR(10)		SI						->	Cedula del Formulario
		tel_for		VARCHAR(12)		SI						->	Telefono del Formulario
		cor_for		VARCHAR(100)	NO						->	Correo del Formulario
		asu_for		TEXT 			NO						->	Asunto del Formulario

	*/

	require_once("utilidad.class.php");

	class formulario extends utilidad
	{
		
		public $cod_for;
		public $nom_for;
		public $ape_for;
		public $ced_for;
		public $tel_for;
		public $cor_for;
		public $asu_for;


		function insertar()
		{

			$this->que_dba="insert into formulario 
								(nom_for,
								ape_for,
								ced_for,
								tel_for,
								cor_for,
								asu_for)
							values
								('$this->nom_for',
								'$this->ape_for',
								'$this->ced_for',
								'$this->tel_for',
								'$this->cor_for',
								'$this->asu_for');";

			return $this->ejecutar();

		}// fin de insertar

		function listar()
		{

			$this->que_dba="select * from formulario";

			return $this->ejecutar();

		}// fin de listar

		function eliminar()
		{

			$this->que_bda = "delete from formulario
								where
									cod_for='$this->cod_for';";

			return $this->ejecutar();

		}// fin de eliminar

		public function filtrar()
        {

            $filtro1=($this->cod_for!="")?"and cod_for like '%$this->cod_for%'":"";
            $filtro2=($this->nom_for!="")?"and nom_for like '%$this->nom_for%'":"";
            $filtro3=($this->ape_for!="")?"and ape_for like '%$this->ape_for%'":"";
            $filtro4=($this->ced_for!="")?"and ced_for like '%$this->ced_for%'":"";
			$filtro5=($this->tel_for!="")?"and tel_for like '%$this->tel_for%'":"";
			$filtro6=($this->cor_for!="")?"and cor_for like '%$this->cor_for%'":"";
			$filtro7=($this->asu_for!="")?"and asu_for like '%$this->asu_for%'":"";

            $this->que_bda = "select * from formulario where 1=1 $filtro1 $filtro2 $filtro3 $filtro4 $filtro5 $filtro6 $filtro7;";

            return $this->ejecutar();

        }// fin de filtrar

	}

 ?>