<?php 

// funciones de validacion de formularios

function validateRegistrerForm($formData) {
    $errors = [];

    $name = trim($formData ['userName']);
    $email = trim($formData ['userEmail']);
    $username = trim($formData ['username']);
    $password = trim($formData['userPassword']);
    $repeatPassword = trim($formData['userRepeatPassword']);
    $country = trim($formData['userCountry']);
// validacion de nombre
    if (empty($name)) {
        $errors['fullName'] = 'Escribe tu nombre completo';
    }
// validacion de email
    if ( empty($email) ) {
			$errors['email'] = 'Escribe tu correo electrónico';
        } else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email'] = 'Escribe un correo válido';
    }

// validacion de nombre de usuario
    if (empty($username)) {
        $errors['username'] = 'El nombre de usuario no puede estar vacio';
    }elseif ( strlen($username) <6 ) {
			$errors['username'] = 'El usuario debe de contener minimo 6 caracteres';
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
    return $errors;
}
function validateLoginForm($formData) {
    $errors = [];

    $email = trim($formData ['userEmailLogin']);
    $password = trim($formData['userPasswordLogin']);

     if ( empty($email) ) {
			$errors['email'] = 'Escribe tu correo electrónico';
        } else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            $errors['email'] = 'Escribe un correo válido';
    }
    if ( empty($password) ) {
			$errors['password'] = 'La contraseña no puede estar vacía';
		}
    return $errors;
}
// Función Crear Usuarios
	function newUser($data){
		$user = [
			'id' => getNextId(),
			'name' => $data['userName'],
			'email' => $data['userEmail'],
			'password' => password_hash($data['userPassword'], PASSWORD_DEFAULT),
			'country' => $data['userCountry'],
			// 'avatar' => $data['avatar'],
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
?>