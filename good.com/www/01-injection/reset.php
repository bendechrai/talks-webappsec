<?php

	$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
	$db->exec("DROP  TABLE user");
	$db->exec("CREATE TABLE user (
		id integer primary key auto_increment,
		username varchar(255) unique,
		password varchar(255),
		guid varchar(255),
		admin integer
	)");

	$db->exec("INSERT INTO user (username, password, admin) VALUES ('ben', 'password', 0)");
	$db->exec("INSERT INTO user (username, password, admin) VALUES ('admin', 'complex', 1)");

	header('location: ' . $_SERVER['HTTP_REFERER']);
