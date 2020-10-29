<?php

	$contractions = array("/don't/i", "/won't/i", "/can't/i");
	$expansions = array('do not', 'will not', 'can not');
	$string = "Please don't yell - I can't jump while you won't speak";
	$longer = preg_replace($contractions, $expansions, $string);
	print($longer);