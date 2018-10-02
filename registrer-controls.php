<?php 
require_once 'config.php';

session_start();

if ( isset($_COOKIE['userLogged'] ) ) {
		$user = fetchByEmail($_COOKIE['userLogged']);
		unset($user['id']);
		unset($user['password']);
		$_SESSION['user'] = $user;
	}
// funciones de validacion de formularios

function validateRegistrerForm($formData, $files) {
    $errors = [];

    $name = trim($formData ['userName']);
    $email = trim($formData ['userEmail']);
    $username = trim($formData ['username']);
    $password = trim($formData['userPassword']);
    $repeatPassword = trim($formData['userRepeatPassword']);
	$country = trim($formData['userCountry']);
	$avatar = $files['userAvatar'];

// validacion de nombre
    if (empty($name)) {
        $errors['fullName'] = 'Escribe tu nombre completo';
    }
// validacion de email
    if ( empty($email) ) {
			$errors['email'] = 'Escribe tu correo electrónico';
        } else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email'] = 'Escribe un correo válido';
    }else if (emailExist($email) ) {
			$errors['email'] = 'Ese email ya fue registrado';
		}

// validacion de nombre de usuario
    if (empty($username)) {
        $errors['username'] = 'El nombre de usuario no puede estar vacio';
    }elseif ( strlen($username) <6 ) {
			$errors['username'] = 'El usuario debe de contener minimo 6 caracteres';
		}else if (userExist($username) ) {
			$errors['username'] = 'Ese usuario ya fue registrado';
		}
// validacion de passwords
    if ( empty($password) || empty($repeatPassword) ) {
			$errors['password'] = 'La contraseña no puede estar vacía';
		} elseif ( $password != $repeatPassword) {
			$errors['password'] = 'Las contraseñas no coinciden';
		} elseif ( strlen($password) < 4 || strlen($repeatPassword) < 4 ) {
			$errors['password'] = 'La contraseña debe tener minimo 4 caracteres';
		}
// validacion de pais
    if ( empty($country) ) {
                $errors['country'] = 'Selecciona un país';
			}
// validacion de avatar
	if ( $avatar['error'] !== UPLOAD_ERR_OK ) {
			$errors['image'] = 'Debes de subir una imagen';
		} else {
			$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);
			if ( !in_array($ext, ALLOWED_IMAGE_TYPES) ) {
				$errors['image'] = 'Formato de imagen no valido';
			}
		}
    return $errors;
}
function validateLoginForm($formData) {
    $errors = [];

    $email = trim($formData ['userEmailLogin']);
    $password = trim($formData['userPasswordLogin']);

     if ( empty($email) ) {
			$errors['email'] = 'Escribe tu correo electrónico';
        } else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email'] = 'Escribe un correo electronico válido';
    }
    if ( empty($password) ) {
			$errors['password'] = 'La contraseña no puede estar vacía';
		}elseif( !fetchByEmail($email) ) {
			$errors['email'] = 'Email no existe';
		} else {
			$user = fetchByEmail($email);
			if ( !password_verify($password, $user['password']) ) {
				$errors['password'] = 'Contraseña incorrecta';
			}
		}
    return $errors;
}
// Función Crear Usuarios
	function newUser($data){
		$user = [
			'id' => getNextId(),
			'name' => $data['userName'],
			'email' => $data['userEmail'],
			'username' => $data['username'],
			'password' => password_hash($data['userPassword'], PASSWORD_DEFAULT),
			'country' => $data['userCountry'],
			 'avatar' => $data['avatar'],
		];

		return $user;
	}
// Función Guardar Usuario
	function saveUser($data){
		$finalUser = newUser($data);

		$userInJsonFormat = json_encode($finalUser);

		file_put_contents('data/users.json', $userInJsonFormat . PHP_EOL, FILE_APPEND);

		return $finalUser;
    }
    
// Función traer todos los Usuarios
	function fetchAll() {
		$allUsersString = file_get_contents('data/users.json');

		$usersInArray = explode(PHP_EOL, $allUsersString);
		array_pop($usersInArray);

		$finalUsersArray = [];

		foreach ($usersInArray as $oneUser) {
			$finalUsersArray[] = json_decode($oneUser, true);
		}

		return $finalUsersArray;
    }
    
// Función Generar ID
	function getNextId(){
		$allUsers = fetchAll();

		if( count($allUsers) == 0 ) {
			return 1;
		}

		$lastUser = array_pop($allUsers);

		return $lastUser['id'] + 1;
	}
	
// función traer al usuario por email
	function fetchByEmail($email) {
		$allUsers = fetchAll();

		foreach ($allUsers as $oneUser) {
			if ($oneUser['email'] === $email) {
				return $oneUser;
			}
		}

		return false;
	}

// Función si existe el email
	function emailExist($email) {
		$allUsers = fetchAll();

		foreach ($allUsers as $oneUser) {
			if ($email == $oneUser['email']) {
				return true;
			}
		}

		return false;
	}
// Función si existe el usuario
	function userExist($username) {
		$allUsers = fetchAll();

		foreach ($allUsers as $oneUser) {
			if ($username == $oneUser['username']) {
				return true;
			}
		}

		return false;
	}

// Función para subir la imagen
	function saveImage($image) {
		$imgName = $image['name'];
		$ext = pathinfo($imgName, PATHINFO_EXTENSION);

		$theOriginalFile = $image['tmp_name'];

		$finalName = uniqid('user_img_') .  '.' . $ext;

		$theFinalFile = USER_IMAGE_PATH . $finalName;

		move_uploaded_file($theOriginalFile, $theFinalFile);

		return $finalName;
	}
// function logear al usuario
	function logIn($user) {
		unset($user['id']);
		unset($user['password']);
		$_SESSION['user'] = $user;
		header('location: perfil.php');
		exit;
	}

// function está logueado
	function isLogged() {
		return isset($_SESSION['user']);
	}
?>