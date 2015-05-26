<?php

session_start();

if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array(
	'address' => '',
	'items' => array(),
	'total' => 0
);

$_SESSION['cart']['address'] = $_GET['address'];
header('location: ' . $_SERVER['HTTP_REFERER']);
