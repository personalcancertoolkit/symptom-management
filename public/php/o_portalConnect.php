<?php

	$dbhost = 'localhost:8889';
	$dbuser = 'root';
	$dbpwd  = 'root';
	$dbname = 'o_portal';
	
	
	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

	if (!$link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
?>