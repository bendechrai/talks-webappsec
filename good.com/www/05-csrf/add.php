<?php

session_start();

if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array(
	'address' => '',
	'items' => array(),
	'total' => 0
);

switch($_GET['product']) {
	case 'lt_shiny':
		if(!isset($_SESSION['cart']['items']['lt_shiny'])) $_SESSION['cart']['items']['lt_shiny'] = 0;
		$_SESSION['cart']['items']['lt_shiny']++;
		$_SESSION['cart']['total'] += 2000;
		break;
	case 'scr_big':
		if(!isset($_SESSION['cart']['items']['scr_big'])) $_SESSION['cart']['items']['scr_big'] = 0;
		$_SESSION['cart']['items']['scr_big']++;
		$_SESSION['cart']['total'] += 700;
		break;
	case 'keyb_cl':
		if(!isset($_SESSION['cart']['items']['keyb_cl'])) $_SESSION['cart']['items']['keyb_cl'] = 0;
		$_SESSION['cart']['items']['keyb_cl']++;
		$_SESSION['cart']['total'] += 100;
		break;
	case 'scr_cleaner':
		if(!isset($_SESSION['cart']['items']['scr_cleaner'])) $_SESSION['cart']['items']['scr_cleaner'] = 0;
		$_SESSION['cart']['items']['scr_cleaner']++;
		$_SESSION['cart']['total'] += 7;
		break;
}

header('location: ' . $_SERVER['HTTP_REFERER']);
