<?php
	file_put_contents(dirname(__FILE__).'/collect.txt', '');
	header('location: ' . $_SERVER['HTTP_REFERER']);
