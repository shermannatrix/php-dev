<?php

	$names = array("Fred", "Barney", "Wilma", "Betty");
	
	function &findOne($n) {
		global $names;
		
		return $names[$n];
	}
	
	$person =& findOne(1);      // Barney
	$person = "Barnetta";