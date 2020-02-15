<?php	

	//session
	
	require_once("tema.php");
	require_once("../../backend/clase/producto.class.php");
	require_once("../../backend/clase/proveedor.class.php");

	$obj_pro = new producto;

	$cod_pro=$_REQUEST['cod_pro'];

	$obj_pro->asignar_valor();
	$obj_pro->puntero=$obj_pro->listar_modificar();
	$producto=$obj_pro->extraer_dato();

	$obj_edo = new proveedor;
	$obj_edo->estandar();
	$obj_edo->puntero=$obj_edo->listar_normal();

	encabezado("Filtrar Producto - ALCOR C.A.");

?>

	<div class="<?php echo $obj_edo->container; ?>">
		<div class="row pb-3 mb-3 bg-white">
			<div class="col-12 text-left">
				<button class="<?php echo $obj_edo->btn_atras; ?>" onClick="window.location.href='pro_menu.php'">Atras</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-12 col-md-8">
				<div class="<?php echo $obj_edo->card; ?>">
					<h2 class="<?php echo $obj_edo->titulocard; ?>">Filtrar Producto</h2>
					<hr>
					<div class="card-body">
						<form action="pro_filtrado.php" method="POST">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label for="nom_pro" class="<?php echo $obj_mod->for; ?>">Nombre:</label>
										<input type="text" name="nom_pro" id="nom_pro" placeholder="Nombre:" minlength="2" maxlength="50" require="" value="<?php echo $producto['nom_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="des_pro" class="<?php echo $obj_mod->for; ?>">Descripción:</label>
										<input type="" name="des_pro" id="des_pro" placeholder="Descripción:" minlength="3" maxlength="100" require="" value="<?php echo $producto['des_pro'] ?>>" class="<?php echo $obj_edo->input_text; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="pre_pro" class="<?php echo $obj_mod->for; ?>">Precio:</label>
										<input type="text" name="pre_pro" id="pre_pro" placeholder="Precio:" require="" value="<?php echo $producto['pre_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="can_pro" class="<?php echo $obj_mod->for; ?>">Cantidad:</label>
										<input type="text" name="can_pro" id="can_pro" placeholder="Cantidad:" require="" value="<?php echo $producto['cod_pro'] ?>" class="<?php echo $obj_edo->input_normal; ?>">
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label for="fky_proveedor" class="<?php echo $obj_mod->for; ?>">Proveedor:</label>
										<select name="fky_proveedor" id="fky_proveedor" class="<?php echo $obj_edo->input_normal; ?>">
											<option value="">Seleccione...</option>
											<?php while (($proveedor=$obj_edo->extraer_dato())>0)
												{
													echo "<option value='$proveedor[cod_edo]'>$proveedor[nom_edo]</option>";
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="row p-3 text-center">
								<div class="col-6">
									<div class="form-group">
										<button type="reset" name="ejecutar" id="ejecutar" value="limpiar" class="<?php echo $obj_edo->btn_limpiar; ?>">Limpiar</button>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<button type="submit" name="ejecutar" id="ejecutar" value="filtrar" class="<?php echo $obj_edo->btn_atras; ?> btn-lg">Filtrar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

<?php 
	
	pie();

?>