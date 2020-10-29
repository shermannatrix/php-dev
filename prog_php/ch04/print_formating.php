<?php

	printf('%.2f', 27.452);
	print("<br />");
	printf('The hex value of %d is %x', 214, 214);
	print("<br />");
	printf('Bond. James Bond. %03d.', 7);
	print("<br />");
	$month = 2;
	$day = 15;
	$year = 2020;
	printf('%0d2/%02d/%04d', $month, $day, $year);
	print("<br />");
	printf('%.2f%% Complete', 2.1);
	print("<br />");
	printf('You\'ve spent $%5.2f so far', 4.1);
	print("<br />");
	// Using sprintf()
	$date = sprintf("%02d/%02d/%04d", $month, $day, $year);
	print $date;