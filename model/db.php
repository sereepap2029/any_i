<?php 

	$dbuser = 'anyicorp_anyi'; // DB Username
	$dbpass = 'tY2HyaF8'; // DB password
	$host="localhost"; // DB host
	$dbName="anyicorp_anyi";// Database name
	$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName, $dbuser, $dbpass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>