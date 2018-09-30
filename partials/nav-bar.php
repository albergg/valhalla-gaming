<?php require_once 'registrer-controls.php'?>
<nav class="navbar sticky-top  navbar-expand-lg navbar-dark bg-dark miNavBar">
  <a class="navbar-brand" href="index.php"><img src="images/valhalla-logo.png" style= "width: 80px;"></a>
  <button class="navbar-toggler bg-dark miBorde" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon bg-dark ">
    </span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="btn btn-dark btn-lg btn-block miBoton " href="#">Campeonatos </a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miBoton " href="#">Ranking</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miBoton " href="#">Tienda</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miBoton " href="faq.php">Preguntas Frecuentes</a>
      </li>
    </ul>
  </div>
<?php 
  	// Persitencia de datos //
	$userEmailLogin = isset($_POST['userEmailLogin']) ? trim($_POST['userEmailLogin']) : '';
	$userPasswordLogin = isset($_POST['userPasswordLogin']) ? trim($_POST['userPasswordLogin']) : '';

  $errors = [];
// se comenta ya que el modal no esta validando los datos.
	// if ($_POST) {
	// 	$errors = validateLoginForm($_POST);
	// }
	?>
    <a class="btn btn-dark miBoton " href="registro.php" role="button">Registrarse</a>

  <!-- // se comenta ya que el modal no esta validando los datos. -->
<!-- <button type="button" class="btn btn-dark miBoton " data-toggle="modal" data-target="#modalIniciarSesion">
  Iniciar Sesion
</button> -->
    <a class="btn btn-dark miBoton " href="login.php" role="button">Iniciar Sesion</a>
</nav>

<!-- Modal iniciar sesion-->
<div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" miModal>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content miContainer">
      <div class="modal-header">
        <h5 class="modal-title bg-dark" id="modalIniciarSesionTitle">Bienvenido Vikingo!</h5>
        <button type="button" class="close miBoton " data-dismiss="modal">
        </button>
      </div>
      <div class="modal-body">
        		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<form class="" method="post">
						<div class="form-group rounded bg-dark text-center">
							<label>Correo Electronico</label>
							<input type="email" class="form-control text-center" name="userEmailLogin" placeholder="Ingresa Email" <?= isset($errors['email']) ? 'is-invalid' : ''; ?>value="<?= $userEmailLogin; ?>">
						</div>
						<div class="form-group rounded bg-dark text-center">
							<label>Contraseña</label>
							<input type="password" class="form-control text-center" name="userPasswordLogin" placeholder="Ingresa Contraseña">
            </div>
            <!-- <a class="btn btn btn-dark miBoton " href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
						<!-- <button type="submit" class="btn btn-dark miBoton ">Ingresa al Valhalla!</button> -->
					</form>
				</div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <!-- <a class="btn btn btn-dark miBoton " href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
        <button type="submit" class="btn btn-dark miBoton " data-dismiss="modal">Ingresa al Valhalla!</button>      
      </div>
    </div>
  </div>
</div>