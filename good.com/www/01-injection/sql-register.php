<?php
	session_start();

	$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
	$sql = "INSERT INTO user (username, password, admin) VALUES ('{$_POST['username']}', '{$_POST['password']}', 0)";
	if ( $_POST['username'] != '' && $_POST['password'] != '' ) {
		$db->exec($sql);
	}

	$_SESSION['reg_query'] = $sql;
	$_SESSION['reg_un'] = $_POST['username'];
	$_SESSION['reg_pw'] = $_POST['password'];
	header('location: ' . $_SERVER['HTTP_REFERER']);
