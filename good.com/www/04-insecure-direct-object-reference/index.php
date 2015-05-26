<?php include('../head.php'); ?>

	<h1>Insecure Direct Object Reference</h1>
	<p>This essentially refers to the direct linking to content, such as PDFs or data exports, without checking that the user is authorised to access the file.</p>
	<p>Rather than link directly to a PDF, use a gateway, such as <code>/file/download?documentId=123</code>, which will verify the user is logged in and then send the correct file directly to the browser.</p>
	<p><a href="download.php?documentId=123" class="btn btn-primary">Download a file</a></p>
<?php include('../foot.php'); ?>
