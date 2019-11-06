<?php

$mas = ["Alaska",
	"California",
	"Florida",
	"Hawaii",
	"Iowa",
	"Kansas",
	"Pennsylvania",
	"Tennessee",
	"Texas",
	"Washington"	];

print_r($mas);

function longestLine($array){
	$maxLength = 0;
	$maxLengthIndex = null;

	foreach ($array as $index => $line) {
  	$length = strlen($line);
  		if ($length > $maxLength) {
    		$maxLength = $length;
    		$maxLengthIndex = $index;
  		}
	}
	echo "The longest line is " . "'$array[$maxLengthIndex]'";
	return 0;
}

longestLine($mas);