<?php

	$name = 'Fred';
	$str = 'Hello, $name<br>';      // single-quoted
	echo $str;
	
	$name = 'Tim O\'Reilly<br>';
	echo $name;
	$path = 'C:\\WINDOWS<br>';  // escaped backslash
	echo $path;
	
	$nope = '\n';   // not an escape
	echo $nope;