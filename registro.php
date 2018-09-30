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
	]; 
	
	// Persitencia de datos //
	$userFullName = isset($_POST['userName']) ? trim($_POST['userName']) : '';
	$userEmail = isset($_POST['userEmail']) ? trim($_POST['userEmail']) : '';
	$userNameLogin = isset($_POST['userLogin']) ? trim($_POST['userLogin']) : '';
	$userCountry = isset($_POST['userCountry']) ? trim($_POST['userCountry']) : '';
	
	?>

	<?php 
		var_dump($userFullName .$userEmail . $userNameLogin . $userCountry);
	?>
	
 <!-- <?= $userFullName .$userEmail . $userNameLogin . $userCountry;?>  -->
	
	

    <h3>registro</h3>
    			<div class="container ">    			
					<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<form method="post" enctype="multipart/form-data">
								<div class="form-group bg-dark rounded text-center ">
									<label> Nombre Completo</label>
									<input type="text" class="form-control text-center" name="userName" placeholder="Ingrese su nombre completo" value="<?= $userFullName; ?>">
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Correo Electronico</label>
									<input type="email" class="form-control text-center" name="userEmail" placeholder="Ingrese su email" value="<?= $userEmail; ?>">
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Nombre de Usuario</label>
									<input type="text" class="form-control text-center" name="userLogin" placeholder="Ingrese su usuario" value="<?= $userNameLogin; ?>">
								</div>
								<div class="form-group bg-dark rounded text-center ">
										<label>Contraseña</label>
										<input type="password" name="userPassword" class="form-control text-center" placeholder="Ingrese la contraseña">
								</div>
								<div class="form-group bg-dark rounded text-center ">
										<label>Repita la contraseña</label>
										<input type="password" name="userRepeatPassword" class="form-control text-center" placeholder="Repita la contraseña">
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Pais</label>
									<select class="form-control text-center" name="userCountry" >
										<option value=
										"">Selecciona un pais</option>
										<?php foreach ($countries as $code=>$country): ?>
										<option 
										value="<?= $code ?>"><?=$country ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							<div class="form-group bg-dark rounded text-center">
								<label>Imagen de perfil</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="userAvatar">
									<label class="custom-file-label">Selecciona una imagen</label>
									
								</div>
							</div>
						<div class="form-group">
						<button type="submit" class="btn btn-dark miBoton  justify-content-center"><label>Registrarse</label></button>
					</form>
				</div>
			</div>
		</div>
</div>


<?php require_once 'partials/footer.php' ?>