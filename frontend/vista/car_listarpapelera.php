<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/cargo.class.php");

	$obj_car = new cargo;
	$obj_car->estandar();
	$obj_car->puntero=$obj_car->listar_eliminar();

	encabezado("Cargos Eliminados");

	comprobar("Roles");

?>

	<div class="<?php echo $obj_car->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_car->btn_atras; ?>" onClick="window.location.href='rol_menu.php'"><i class="icon ion-md-arrow-round-back"></i></button>
			</div>
		</div>
		<div class="<?php echo $obj_car->card; ?>">
			<h2 class="<?php echo $obj_car->titulocard; ?>">Cargos Eliminados</h2>
			<hr>
			<div class="row p-3 m-3">
				<div class="col-12">
					<div class="table-responsive">
						<table class="<?php echo $obj_car->tabla; ?>">
							<thead>
								<tr>
									<th>Código</th>
									<th>Nombre</th>
									<th>Fecha de Creación</th>
									<th>Ultima Modificación</th>
									<th>Fecha de Eliminado</th>
									<th>Fecha de Restauración</th>
									<th>Estatus</th>
									<th>Restaurar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									while(($cargo=$obj_car->extraer_dato())>0)
									{
										echo "<form action='../../backend/controlador/cargo.php' method='POST'>
												<tr>
													<input type='hidden' name='cod_car' value='$cargo[cod_car]'>
													<td>$cargo[cod_car]</td>
													<td>$cargo[nom_car]</td>
													<td>$cargo[cre_car]</td>
													<td>$cargo[act_car]</td>
													<td>$cargo[eli_car]</td>
													<td>$cargo[res_car]</td>
													<td>$cargo[est_car]</td>
													<td><button type='submit' class='$obj_car->btn_restaurar' name='ejecutar' value='modificar_restaurar'><i class='icon ion-md-refresh'></i></button></td>
													<td><button type='submit' class='$obj_car->btn_eliminar' name='ejecutar' value='eliminar'><i class='icon ion-md-trash'></i></button></td>
												</tr>
											</form>
										";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	
	pie();

?>