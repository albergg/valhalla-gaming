<?php require_once 'registrer-controls.php'?>
<?php $tituloPagina = 'Login | Valhalla Gaming'; ?>
<?php require_once 'partials/head.php'?>
<?php require_once 'partials/nav-bar.php'?>


<?php 
  	// Persitencia de datos //
	$userEmailLogin = isset($_POST['userEmailLogin']) ? trim($_POST['userEmailLogin']) : '';
	$userPasswordLogin = isset($_POST['userPasswordLogin']) ? trim($_POST['userPasswordLogin']) : '';

  $errors = [];

	if ($_POST) {
		$errors = validateLoginForm($_POST);
    }
    
    		echo 
		var_dump($userEmailLogin . "<br>" . $userPasswordLogin . "<br>");
		var_dump($errors);
	?>

<!-- Modal iniciar sesion-->
<!-- <div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" miModal>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content miContainer">
      <div class="modal-header">
        <h5 class="modal-title bg-dark" id="modalIniciarSesionTitle">Bienvenido Vikingo!</h5>
        <button type="button" class="close miBoton " data-dismiss="modal">
        </button>
      </div>
      <div class="modal-body"> -->
    			<div class="container ">    			
					<div class="row justify-content-center">
						<div class="col-md-8">
							<form method="post" enctype="multipart/form-data">
								<div class="form-group bg-dark rounded text-center ">
                                    <label>Correo Electronico</label>
									<input type="email" class="form-control text-center" name="userEmailLogin" placeholder="Ingrese su email" <?= isset($errors['userEmailLogin']) ? 'is-invalid' : ''; ?>value="<?= $userEmailLogin; ?>">
									<?php if (isset($errors['userEmailLogin'])): ?>
									<div class="alert alert-danger">
										<?= $errors['userEmailLogin'] ?>
									</div>
								<?php endif; ?>
								</div>
                </div>
                <div class="container ">    			
					<div class="row justify-content-center">
						<div class="col-md-8">
                <div class="form-group bg-dark rounded text-center ">
										<label>Contraseña</label>
										<input type="password" name="userPasswordLogin" class="form-control text-center <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" placeholder="Ingrese la contraseña" >
										<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
								</div>
            <!-- <a class="btn btn btn-dark miBoton " href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
						<!-- <button type="submit" class="btn btn-dark miBoton ">Ingresa al Valhalla!</button> -->
                        <section class="row">
                        <button type="submit" class="btn btn-dark miBoton mx-auto">Ingresa al Valhalla!</button>   
                        </section>
					</form>
				</div>
			</div>
		</div>
      </div>
      <!-- <div class="modal-footer"> -->
        <!-- <a class="btn btn btn-dark miBoton " href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
        <!-- <button type="submit" class="btn btn-dark miBoton " data-dismiss="modal">Ingresa al Valhalla!</button>       -->
        <!-- </section> -->
      </div>
    </div>
  </div>
</div>


<?php require_once 'partials/footer.php' ?>