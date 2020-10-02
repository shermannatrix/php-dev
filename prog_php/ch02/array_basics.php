<?php
	$person = array("Edison", "Wankel", "Crapper");
	$creator = array('Light bulb' => "Edison",
			'Rotary Engine' => "Wankel",
			'Toilet' => "Crapper");
	
	foreach($person as $name) {
		echo "Hello, {$name}<br />";
	}
	
	foreach($creator as $invention => $inventor) {
		echo "{$inventor} invented the {$invention}<br />";
	}