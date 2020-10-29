<?php

	$input = <<< END
name = 'Tim O\'Reilly';
END;
	
	$pattern = <<< END
' # opening quote
( # begin capturing
 .*? # the string
  (?<! \\\\ ) # skip escaped quotes
) # end capturing
' # closing quote
END;

	preg_match("($pattern)x", $input, $match);
	echo $match[1];
