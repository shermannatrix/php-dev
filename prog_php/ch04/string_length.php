<?php

	$string = 'Hello';
	
	for ($i = 0; $i < strlen($string); $i++) {
		printf("The %dth character is %s\n", $i, $string[ $i ] );
	}