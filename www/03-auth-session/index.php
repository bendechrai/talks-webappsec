<?php include('../head.php'); ?>

	<h1>Weak Authentication and Session Management</h1>
	<p><strong>Sub-types</strong> User Enumeration, Guessable User Account, Brute Force, Vulnerable Remember/Password Reset, Authentication/Authorisation Bypass, Logout and Cache Management, CAPTCHA, Multiple Factor Authentication, Race Conditions, Session Management Schema, Cookies attributes, Session Fixation, Exposed Session Variables, Privilege Escalation.</p>
	<div class="row">
		<div class="col-md-4">
			<h2>Remember Me</h2>
			<form action="../01-injection/sql-login.php" method="post">
				<div><label>Username <input type="text" name="username" class="form-control" value="<?php echo $_GET['user'] ?>"/></label></div>
				<div><label>Password <input type="password" name="password" class="form-control"/></label></div>
				<div><label>Remember Me <input type="checkbox" name="remember" value="1"/></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Login</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>Remember Me</h2>
			<form action="../01-injection/sql-login.php" method="post">
				<div><label>Username <input type="text" name="username" class="form-control" value="<?php echo $_GET['user'] ?>"/></label></div>
				<div><label>Password <input type="password" name="password" class="form-control"/></label></div>
				<div><label>Remember Me <input type="checkbox" name="remember-guid" value="1"/></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Login</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>Session Data</h2>
			<textarea style="width: 100%; height: 30em">Session: <?php echo htmlspecialchars(print_r($_SESSION, true)) ?>Cookie: <?php echo htmlspecialchars(print_r($_COOKIE, true)) ?>
			</textarea>
		</div>
	</div>
	
<?php include('../foot.php'); ?>
