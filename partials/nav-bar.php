<nav class="navbar sticky-top  navbar-expand-lg navbar-dark bg-dark miNavBar">
  <a class="navbar-brand" href="index.php"><img src="images/valhalla-logo.png" style= "width: 80px;"></a>
  <button class="navbar-toggler bg-dark " type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon bg-dark ">
    </span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="btn btn-dark btn-lg btn-block miColor" href="#">Campeonatos </a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miColor" href="#">Ranking</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miColor" href="#">Tienda</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-dark btn-lg btn-block miColor" href="faq.php">Preguntas Frecuentes</a>
      </li>
    </ul>
  </div>
    <a class="btn btn-dark miColor miBorde" href="registro.php" role="button">Registrarse</a>
    <!-- <a class="btn btn-outline-dark" href="registro.php" role="button">Registrarse</a>
    <button type="button" class="btn btn-outline-dark">Iniciar Sesion</button> -->
    <!-- Button trigger modal -->

<button type="button" class="btn btn-dark miColor" data-toggle="modal" data-target="#modalIniciarSesion">
  Iniciar Sesion
</button>
</nav>

<!-- Modal iniciar sesion-->
<div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" miModal>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content miContainer">
      <div class="modal-header containerBlanco">
        <h5 class="modal-title bg-dark" id="modalIniciarSesionTitle">Bienvenido Vikingo!</h5>
        <button type="button" class="close miColor" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<form class="" method="post">
						<div class="form-group bg-dark">
							<label>Correo Electronico:</label>
							<input type="email" class="form-control" name="usuarioEmail" placeholder="Ingresa Email">
						</div>
						<div class="form-group bg-dark">
							<label>Contraseña:</label>
							<input type="email" class="form-control" name="usuarioPassword" placeholder="Ingresa Contraseña">
            </div>
            <!-- <a class="btn btn btn-dark miColor" href="perfil.php" role="button">Ingresa al Valhalla!</a> -->
						<!-- <button type="submit" class="btn btn-dark miColor">Ingresa al Valhalla!</button> -->
					</form>
				</div>
			</div>
		</div>
      </div>
      <div class="modal-footer containerBlanco">
        <a class="btn btn btn-dark miColor" href="perfil.php" role="button">Ingresa al Valhalla!</a>
        <!-- <button type="submit" class="btn btn-dark miColor" data-dismiss="modal">Ingresa al Valhalla!</button>       -->
      </div>
    </div>
  </div>
</div>