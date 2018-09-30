<?php 

// validamos el registro

function registrerValidate($formData) {
    $errors = [];

    $name = trim($formData ['userName']);
    $mail = trim($formData ['userEmail']);

    if (empty($name)) {
        $errors['fullName'] = 'Escribe tu nombre completo';
    }

    return $errors;
}


?>