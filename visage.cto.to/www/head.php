<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Visage</title>
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
          <a class="navbar-brand" href="/">Visage</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
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
