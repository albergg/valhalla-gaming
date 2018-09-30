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
			$errors['password'] = 'La contraseña debe tener más de 4 caracteres';
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


?>