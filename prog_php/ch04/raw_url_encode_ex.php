<?php

	$name = "Programming PHP";
	$output = rawurlencode($name);
	echo "http://localhost/{$output}";
	
	$encoded = 'Programming%20PHP';
	echo rawurldecode ($encoded);