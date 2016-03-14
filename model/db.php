<?php 

	$dbuser = 'any_i'; // DB Username
	$dbpass = '112244'; // DB password
	$host="localhost"; // DB host
	$dbName="any_i";// Database name
	$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName, $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>