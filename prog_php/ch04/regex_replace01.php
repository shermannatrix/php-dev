<?php

	$better = preg_replace('/<.*?>/', '!', 'do <b>not</b> press the button');
	print($better);