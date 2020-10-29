<?php

	$bits = parse_url ("http://me:secret@example.com/cgi-bin/board?user=fred");
	print_r($bits);