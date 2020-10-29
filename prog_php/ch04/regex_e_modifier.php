<?php

	$string = 'It was 5C outside, 20C inside';
	echo preg_replace('/(\d+)C\b/e', '$1*9/5+32', $string);