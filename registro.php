<?php $tituloPagina = 'Registro | Valhalla Gaming'; ?>
<?php require_once 'partials/head.php'?>
<?php require_once 'partials/nav-bar.php'?>
<?php 	$countries = [
		'ar' => 'Argentina',		
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
        've' => 'Venezuela',
        'ot' => 'Otro'
	]; ?>
<body>
    


    <h3>registro</h3>
    			<div class="container ">    			
				<div class="row justify-content-center">
				<div class="col-12 col-md-6">
					<form class="" method="get">
						<div class="form-group bg-dark rounded rounded text-center ">
							<label ><h4> Nombre Completo</h4></label>
							<input type="text" class="form-control text-center" name="nombreUsuario" placeholder="Ingrese su nombre completo">
						</div>
						<div class="form-group bg-dark rounded text-center ">
							<label><h4>Correo Electronico</h4></label>
							<input type="email" class="form-control text-center" name="emailUsuario" placeholder="Ingrese su email">
						</div>
						<div class="form-group bg-dark rounded text-center ">
							<label><h4>Nombre de Usuario</h4></label>
							<input type="text" class="form-control text-center" name="emailUsuario" placeholder="Ingrese su usuario">
						</div>

						<div class="form-group bg-dark rounded text-center ">
								<label><b><h4>Contraseña</h4></b></label>
								<input type="password" name="password" class="form-control text-center" placeholder="Ingrese la contraseña">
						</div>
						<div class="form-group bg-dark rounded text-center ">
								<label><b><h4>Repita la contraseña</h4></b></label>
								<input type="password" name="rePassword" class="form-control text-center" placeholder="Repita la contraseña">
						</div>
						<div class="form-group bg-dark rounded text-center ">
							<label><h4>Pais</h4></label>
							<select class="form-control text-center" name="paisUsuario" >
								<option value="ar">Argentina</option>
								<option value="ve">Venezuela</option>
								<option value="co">Colombia</option>
								<option value="br">Brasil</option>
								<option value="uy">Urugay</option>
								<option value="ot">Otro</option>
							</select>
						</div>
						<div class="form-group">
						<button type="submit" class="btn btn-dark miBoton  justify-content-center"><h4>Registrarse</h4></button>
					</form>
				</div>
			</div>
		</div>
</div>


<?php require_once 'partials/footer.php' ?>
</body>