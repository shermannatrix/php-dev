<?php

	$record = "Fred,Flintstone,35,Wilma";
	$pos = strrpos($record, ",");   // find last comma
	echo("The last comma in the record is at position {$pos}");