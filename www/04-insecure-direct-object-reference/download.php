<?php
include('../head.php');

// If no user
if(!isset($_SESSION['user'])) {
	header('HTTP/1.0 401 Unauthorized');
	echo "<h1>Access Denied</h1><p>Log in first</p>";
} else {
	echo "<h1>Access Granted</h1><p>File would be sent to browser at this point</p>";
}

include('../foot.php');
