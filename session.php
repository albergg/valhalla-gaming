<?php
	require_once 'register-controls.php';

	// setcookie('temporal', '', time() - 10);

	session_start();
	
    $_SESSION['miGalletita'] = $_COOKIE['temporal'];
    
    ?>