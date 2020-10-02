<?php
// This file provides the information for accessing the database and connecting to MySQL.
// First, we define the constants:
Define ('DB_USER', 'root');     // or whatever userid you created
Define ('DB_PASSWORD', 'Pa55w0rd!');    // or whatever password you created
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'simpledb');

// Next we assign the database connection to a variable that we will call $dbcon:
try {
	$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	mysqli_set_charset ($dbcon, 'utf-8');
	// more code will go here later
} catch (Exception $e) {
	// print "An Exception occurred. Message: " . $e -> getMessage();
	print "An Exception occurred. Message: " . $e->getMessage();
}
catch (Error $e) {
	// print "An Error occurred. Message: " . $e->getMessage();
	print "An Exception occurred. Message: " . $e->getMessage();
}