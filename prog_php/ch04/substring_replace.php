<?php

	$greeting = "good morning citizen";
	$farewell = substr_replace($greeting, "bye", 5, 7);
	echo "{$farewell}";