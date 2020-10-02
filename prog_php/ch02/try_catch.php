<?php

	try {
		$dbhandle = new PDO('mysql:host=localhost;dbname=library', 'root', 'Pa55w0rd!');
		doDB_Work($dbhandle);   // call function on gaining a connection
		$dbhandle = null;       // release handle when done
	} catch (PDOException $error) {
		print "Error!: " . $error->getMessage () . "<br />";
		die();
	}