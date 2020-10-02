<?php

	function updateCounter() {
		$GLOBALS['counter']++;
	}
	
	$counter = 10;
	updateCounter ();
	echo $counter;