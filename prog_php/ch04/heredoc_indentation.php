<?php

	function sayIt() {
		$ws = <<< "StuffToSay"
		The quick brown fox
		Jumps over the lazy dog.
		StuffToSay;
		
		return $ws;
	}
	
	echo sayIt();