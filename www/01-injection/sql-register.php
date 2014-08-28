<?php
	session_start();

	$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
	$sql = "INSERT INTO user (username, password, admin) VALUES ('{$_POST['username']}', '{$_POST['password']}', 0)";
	if ( $_POST['username'] != '' && $_POST['password'] != '' ) {
		$db->exec($sql);
	}

	$_SESSION['lastquery'] = $sql;
	header('location: ' . $_SERVER['HTTP_REFERER']);
