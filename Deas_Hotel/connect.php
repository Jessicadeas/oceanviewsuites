<?php
	$dsn = 'mysql:host=localhost;dbname=jdeas6_myHotel';
	$username = 'jdeas6_phpuser';
	$password = 'password';
	
	try {
		$db = new PDO($dsn, $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		echo 'ERROR connecting to database!' . $e->getMessage();
		exit();
	}
?>