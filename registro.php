<?php require_once 'registrer-controls.php'?>
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
	$userNameLogin = isset($_POST['username']) ? trim($_POST['username']) : '';
	$userCountry = isset($_POST['userCountry']) ? trim($_POST['userCountry']) : '';
	
	$errors = [];

	if ($_POST) {
		$errors = validateRegistrerForm($_POST);
		if ( count($errors) == 0 ) {

			
			$user = saveUser($_POST);

		}
		
	}


	//debug
		echo 
		var_dump($userFullName . "<br>" . $userEmail . "<br>". $userNameLogin . "<br>". $userCountry);
		var_dump($errors);
?>
		

    <h3>registro</h3>
    			<div class="container ">    			
					<div class="row justify-content-center">
						<div class="col-12 col-md-8">
							<form method="post" enctype="multipart/form-data">
								<div class="form-group bg-dark rounded text-center ">
									<label> Nombre Completo</label>
									<input type="text" class="form-control  text-center <?= isset($errors['fullName']) ? 'is-invalid' : ''; ?>" name="userName" placeholder="Ingrese su nombre completo" value="<?= $userFullName; ?>">
									<?php if (isset($errors['fullName'])): ?>
									<div class="alert alert-danger">
										<?= $errors['fullName'] ?>
									</div>
								<?php endif; ?>
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Correo Electronico</label>
									<input type="email" class="form-control text-center" name="userEmail" placeholder="Ingrese su email" <?= isset($errors['email']) ? 'is-invalid' : ''; ?>value="<?= $userEmail; ?>">
									<?php if (isset($errors['email'])): ?>
									<div class="alert alert-danger">
										<?= $errors['email'] ?>
									</div>
								<?php endif; ?>
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Nombre de Usuario</label>
									<input type="text" name="username" class="form-control text-center <?= isset($errors['username']) ? 'is-invalid' : ''; ?>"  placeholder="Ingrese su usuario" value="<?= $userNameLogin; ?>">
									<?php if (isset($errors['username'])): ?>
									<div class="alert alert-danger">
										<?= $errors['username'] ?>
									</div>
								<?php endif; ?>
								</div>
								<div class="form-group bg-dark rounded text-center" data-toggle="tooltip" data-placement="top" title="La contraseña debe tener minimo de 4 caracteres">
										<label>Contraseña</label>
										<input type="password" name="userPassword" class="form-control text-center <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" placeholder="Ingrese la contraseña" >
										<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
								</div>
								<div class="form-group bg-dark rounded text-center"  data-toggle="tooltip" data-placement="top" title="La contraseña debe tener minimo de 4 caracteres">
										<label>Repita la contraseña</label>
										<input type="password" name="userRepeatPassword" class="form-control text-center <?= isset($errors['password']) ? 'is-invalid' : ''; ?>" placeholder="Repita la contraseña">
										<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
								</div>
								<div class="form-group bg-dark rounded text-center ">
									<label>Pais</label>
									<select class="form-control text-center" name="userCountry" >
										<option value=
										"">Selecciona un pais</option>
										<?php foreach ($countries as $code=>$country): ?>
										<option 
											<?= $code == $userCountry ? 'selected' : '' ?>
										value="<?= $code ?>"><?=$country ?></option>
										<?php endforeach; ?>
									</select>
									<?php if (isset($errors['country'])): ?>
									<div class="alert alert-danger">
										<?= $errors['country'] ?>
									</div>
								<?php endif; ?>
								</div>
							<div class="form-group bg-dark rounded text-center">
								<label>Imagen de perfil</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="userAvatar">
									<label class="custom-file-label">Selecciona una imagen</label>
									
								</div>
							</div>
						<div class="form-group">
						<section class="row">
						<button type="submit" class="btn btn-lg btn-dark miBoton  justify-content-center mx-auto">Registrarse</button>
					</form>
				</div>
			</div>
		</div>
</div>


<?php require_once 'partials/footer.php' ?>