<?php
	session_start();
	unset($_SESSION['user']);
	$_SESSION=array();
	setcookie('remember', null, 0, '/');
	header('location: ' . $_SERVER['HTTP_REFERER']);
