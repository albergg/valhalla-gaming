<?php
	session_start();
	session_destroy();
	setcookie('userLogged', '', time() - 100);

	header('location: index.php');
	exit;
