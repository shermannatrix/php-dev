<?php
	// <<< identifier token tells PHP parser that we're writing a heredoc.
	$clerihew = <<< EndOfQuote
	Sir Humphrey Davy
	Abominated gravy.
	He lived in the odium.
	Of having discovered sodium.
EndOfQuote;
	echo $clerihew;
	
	printf(<<< Template
	%s is %d years old.
	Template, "Fred", 35);

	$dialogue = <<< NoMore
"It's not going to happen!" she fumed.
He raised an eyebrow. "Want to bed?"
NoMore;
	
	echo $dialogue;
