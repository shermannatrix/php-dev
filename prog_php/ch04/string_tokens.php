<?php

	$string = "Fred,Flintstone,35,Wilma";
	$token = strtok($string, ",");
	
	while ($token !== false) {
		echo ("{$token}<br />");
		$token = strtok(",");
	}