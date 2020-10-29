<?php

	$string = "Fred\tFlintstone (35)";
	$n = sscanf($string, "%s\t%s (%d)", $first, $last, $age);
	echo "Matched {$n} fields: {$first} {$last} is {$age} years old";