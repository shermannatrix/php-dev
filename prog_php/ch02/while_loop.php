<?php

	$total = 0;
	$i = 1;
	$j = 0;
	
	/*while ($i <= 10) {
		$total += $i;
		$i++;
	}
	
	// alternative syntax:
	while ($i <= 10):
		if ($i == 5) {
			break;  // breaks out of the loop
		}
		
		$total += $i;
		$i++;
	endwhile;*/
	
	// Breaking and exiting 2 loops
	while ($i < 10) {
		while ($j < 10) {
			if ($j == 5) {
				break 2;    // breaks out of two while loops
			}
			
			$j++;
		}
		
		$i++;
	}
	
	echo "{$i}, {$j}";