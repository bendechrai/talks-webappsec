<?php include('../head.php'); ?>

	<h1>Cross Site Request Forgeries</h1>
	<div class="row">
		<div class="col-md-4">
			<h2>What?</h2>
			<form action="add.php">
				<div><label>Product <select name="product" class="form-control">
					<option value="lt_shiny">Shiny Laptop ($2,000)</option>
					<option value="scr_big">Big Screen ($700)</option>
					<option value="keyb_cl">Cordless Keyboard ($100)</option>
					<option value="scr_cleaner">Screen Cleaning Cloth ($7)</option>
				</select></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Add Product</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>Where?</h2>
			<form action="setaddress.php">
				<textarea style="width: 100%; height: 8em" name="address"><?php echo htmlspecialchars($_SESSION['cart']['address']) ?></textarea>
				<div><button class="btn btn-sm btn-primary" type="submit">Set Address</button></div>
			</form>
		</div>
		<div class="col-md-4">
			<h2>Cart</h2>
			<?php foreach($_SESSION['cart']['items'] as $sku=>$qty): ?>
				<p><?php echo $sku . ' x ' . $qty ?></p>
			<?php endforeach; ?>
			<p>Total: $<?php echo $_SESSION['cart']['total'] ?></p>
			<form action="checkout.php" method="post">
				<div><button class="btn btn-sm btn-primary" type="submit">Check Out</button></div>
			</form>
		</div>
	</div>
	
<?php include('../foot.php'); ?>
