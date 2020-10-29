<?php

	$known = "Fred";
	$query = "Phred";
	
	if (soundex($known) == soundex($query)) {
		print "soundex: {$known} sounds like {$query}<br>";
	} else {
		print "soundex: {$known} doesn't sound like {$query}<br>";
	}
	
	if (metaphone($known) == metaphone($query)) {
		print "metaphone: {$known} sounds like {$query}<br>";
	} else {
		print "metaphone: {$known} doesn't sound like {$query}<br>";
	}