<?php
	session_start();

	// If no user and remember cookie
	if(!isset($_SESSION['user']) && isset($_COOKIE['remember'])) {
		if(strpos($_COOKIE['remember'], '-') === false) {
			$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
			$sql = "SELECT * FROM user WHERE id=" . $_COOKIE['remember'];
			$results = $db->query($sql, PDO::FETCH_ASSOC);
			foreach( $results as $row ) {
				$_SESSION['user'] = $row;
			}
		} elseif(isset($_COOKIE['remember'])) {
			$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
			$sql = "SELECT * FROM user WHERE guid='" . $_COOKIE['remember'] . "'";
			$results = $db->query($sql, PDO::FETCH_ASSOC);
			foreach( $results as $row ) {
				$_SESSION['user'] = $row;
			}
		}
	}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Web Application Security: Demos</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/navbar-fixed-top.css" rel="stylesheet">
    <link href="/css/webappsec.css" rel="stylesheet">
  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">WebAppSec</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Demos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/01-injection">1: Injection</a></li>
                <li><a href="/02-xss">2: Cross Site Scripting</a></li>
                <li><a href="/03-auth-session">3: Weak Authentication and Session Management</a></li>
                <li><a href="/04-insecure-direct-object-reference">4: Insecure Direct Object Reference</a></li>
                <li><a href="/05-csrf">5: Cross Site Request Forgery</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['user'])): ?>
              <li class="<?php echo $_SESSION['user']['admin']==1?'admin':'' ?>"><a href="/logout.php"><?php echo $_SESSION['user']['username'] ?></a></li>
            <?php endif; ?>
            <li><img src="/img/logo.png" width="50" height="50" /></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
