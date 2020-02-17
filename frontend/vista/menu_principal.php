<?php
	
	require_once("tema.php");
	require_once("../../backend/clase/empleado.class.php");

	$obj_ado = new empleado;
	$obj_ado->estandar();

	encabezado("Menu principal - ALCOR C.A.");

?>

		<div class="<?php echo $obj_ado->container; ?>">
		<div class="row py-4"><div class="col-12"></div></div>
		<h2 class="<?php echo $obj_ado->titulos; ?>">Menú</h2>
		<div class="row">
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_ado->card; ?>">
					<h2 class="<?php echo $obj_ado->titulocard; ?>">Menú</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='car_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='car_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='car_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='car_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_ado->card; ?>">
					<h2 class="<?php echo $obj_ado->titulocard; ?>">Menú</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='mod_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='mod_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='mod_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='mod_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="<?php echo $obj_ado->card; ?>">
					<h2 class="<?php echo $obj_ado->titulocard; ?>">Menú</h2>
					<hr>
					<div class="card-body">
						<div class="row p-1 m-1">
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='per_registrar.php'">Registrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='per_listartodo.php'">Lista</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='per_filtrar.php'">Filtrar</button>
							</div>
							<div class="col-12 p-1 m-1">
								<button class="<?php echo $obj_ado->btn_enviarg; ?>" onClick="window.location.href='per_listarpapelera.php'">Papelera</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row py-4"><div class="col-12"></div></div>
	</div>

<?php 

	pie();

?>