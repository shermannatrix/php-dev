<?php

	$input = 'The <b>bold</b> tags will <i>stay</i><p></p>';
	$output = strip_tags ($input, '<b>');
	print($output);