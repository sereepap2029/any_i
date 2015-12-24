<?php 

	$dbuser = 'any_i';
	$dbpass = '112244';
	$dbh = new PDO('mysql:host=202.170.126.247;dbname=any_i', $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>