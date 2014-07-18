<?php
	header("HTTP/1.0 404 Not Found");
	header('Content-Type: application/json');
	include('errors.php');
	echo show_error(2);
?>
