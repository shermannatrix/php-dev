<?php

	$names = array('Fred Flintsone',
			"Barney Rubble",
			"Wilma Flintstone",
			"Betty Rubble");
	$tidy = preg_replace('/(\w)\w* (\w+)/', '\1 \2', $names);
	print_r($tidy);