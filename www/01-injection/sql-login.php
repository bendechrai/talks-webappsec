<?php
	session_start();
	$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
	$sql = "SELECT * FROM user WHERE username='{$_POST['username']}' AND password='{$_POST['password']}' LIMIT 1";
	$results = $db->query($sql, PDO::FETCH_ASSOC);

	foreach( $results as $user ) {

		if($_POST['remember']==1) {
			setcookie('remember', $user['id'], strtotime('+30 minute'), '/');
		}

		if($_POST['remember-guid']==1) {
			$guid = sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
			$sql = "UPDATE user SET guid='{$guid}' WHERE username='{$user['username']}'";
			$db->exec($sql);
			setcookie('remember', $guid, strtotime('+30 minute'), '/');
		}

		$_SESSION['user'] = $user;

	}

	$_SESSION['lastquery'] = $sql;
	header('location: ' . $_SERVER['HTTP_REFERER']);
