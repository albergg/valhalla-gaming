 <?php 
 require_once 'registrer-controls.php';

 if ( isLogged() ) {
		header('location: perfil.php');
		exit;
	}

 $tituloPagina = 'Login | Valhalla Gaming';
 require_once 'partials/head.php';
 require_once 'partials/nav-bar.php';



  	// Persitencia de datos //
	$userEmailLogin = isset($_POST['userEmailLogin']) ? trim($_POST['userEmailLogin']) : '';
	$userPasswordLogin = isset($_POST['userPasswordLogin']) ? trim($_POST['userPasswordLogin']) : '';

  $errors = [];

	if ($_POST) {
		$errors = validateLoginForm($_POST);

		if ( count($errors) == 0) {
			$user = fetchByEmail($_POST['userEmail']);

			if( isset($_POST['rememberUser']) ) {
				setcookie('userLogged', $_POST['userEmailLogin'], time() + 3600);
			}

			logIn($user);
		}
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
									<input 
										type="email" 
										class="form-control text-center <?= isset($errors['email']) ? 'is-invalid' : ''; ?>" 
										value="<?= $userEmailLogin; ?>"
										name="userEmailLogin" 
										placeholder="Ingrese su email">
									<?php if (isset($errors['email'])): ?>
									<div class="alert alert-danger">
										<?= $errors['email'] ?>
									</div>
								<?php endif; ?>
								</div>
                </div>
                <div class="container ">    			
					<div class="row justify-content-center">
						<div class="col-md-8">
                <div class="form-group bg-dark rounded text-center ">
										<label>Contraseña</label>
										<input 
											type="password" 
											name="userPasswordLogin" 
											class="form-control text-center <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" 
											placeholder="Ingrese la contraseña" >
										<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
								</div>
            <!-- <a class="btn btn btn-dark miBoton " href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
						<!-- <button type="submit" class="btn btn-dark miBoton ">Ingresa al Valhalla!</button> -->
						<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="form-check bg-dark rounded text-center">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="rememberUser">
									Recordarme
							  </label>
							</div>
							<br>
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