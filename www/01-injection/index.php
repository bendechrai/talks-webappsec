<?php include('../head.php'); ?>

	<?php
		$db = new PDO('mysql:host=localhost;dbname=understanding', 'root', 'root');
		$sth = $db->prepare( 'SELECT * FROM user ORDER BY id DESC' );
		$sth->execute();
		$users = $sth->fetchAll( PDO::FETCH_ASSOC );
		$sth->closeCursor();
	?>

	<h1>Injection</h1>
	<p><strong>Sub-types</strong> SQL, LDAP, ORM, XML, SSI, Xpath, IMAP/SMTP, Code, OS Commanding, and Buffer Overflow.</p>
	<div class="row">
		<div class="col-md-4">
			<h2>SQL Injection: Register</h2>
			<form action="sql-register.php" method="post">
				<div><label>Username <input type="text" name="username" class="form-control"/></label></div>
				<div><label>Password <input type="password" name="password" class="form-control"/></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Create Account</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>SQL Injection: Login</h2>
			<form action="sql-login.php" method="post">
				<div><label>Username <input type="text" name="username" class="form-control"/></label></div>
				<div><label>Password <input type="password" name="password" class="form-control"/></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Login</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>SQL Injection: Data</h2>
			<?php if(isset($_SESSION['lastquery'])) : ?><p>Last query: <strong><?php echo htmlspecialchars($_SESSION['lastquery']) ?></strong></p><?php endif; ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Username</th>
						<th>Password</th>
						<th>Admin</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $users as $user ): ?>
					<tr>
						<td><?php echo htmlspecialchars( $user['username'] ) ?></td>
						<td><?php echo htmlspecialchars( $user['password'] ) ?></td>
						<td><?php echo htmlspecialchars( $user['admin'] ) ?></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<a class="btn btn-sm btn-danger" href="reset.php">Reset</a>
		</div>
	</div>
	
<?php include('../foot.php'); ?>
