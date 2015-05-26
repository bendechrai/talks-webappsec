<?php include('../head.php'); ?>

	<h1>Cross Site Request Forgeries</h1>
	<div class="row">
		<div class="col-md-4">
			<h2>What?</h2>
			<?php foreach($_SESSION['cart']['items'] as $sku=>$qty): ?>
				<p><?php echo $sku . ' x ' . $qty ?></p>
			<?php endforeach; ?>
		</div>
		<div class="col-md-4">
			<h2>Where?</h2>
			<pre><?php echo htmlspecialchars($_SESSION['cart']['address']) ?></pre>
		</div>
		<div class="col-md-4">
			<h2>Amount Paid</h2>
			<p>Total: $<?php echo $_SESSION['cart']['total'] ?></p>
		</div>
	</div>

<?php unset($_SESSION['cart']); ?>

<p><a class="btn btn-sm btn-primary" href="./">Another order?</a></p>
	
<?php include('../foot.php'); ?>
