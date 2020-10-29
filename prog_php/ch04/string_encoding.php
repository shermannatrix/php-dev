<?php

	$input = <<< End
"Stop pulling my hair! Jane's eyes flashed.<p>
End;
	
	$double = htmlentities ($input);
	
	$both = htmlentities ($input, ENT_QUOTES);
	
	$neither = htmlentities ($input, ENT_NOQUOTES);
	
	print($double);
	print($both);
	print($neither);
