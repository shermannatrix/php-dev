<?php

	echo preg_match('/I like (?i:PHP)/', 'I like pHp', $match);
	print_r($match);