<?php

$mas1 = ["Alaska",
	"California",
	"Florida",
	"Hawaii",
	"Iowa"];

$mas2 = ["Kansas",
	"Pennsylvania",
	"Tennessee",
	"Texas",
	"Washington"];

function maxDifference($array1, $array2){

	$maxDiff = 0;
	foreach ($array1 as $index1 => $line1) {
		foreach ($array2 as $index2 => $line2) {
			$length1 = strlen($line1);
			$length2 = strlen($line2);
			if ($index1 == $index2) {
				$diff = abs(strlen($line1) - strlen($line2));
				if ($diff > $maxDiff) {
					$maxDiff = $diff;
				}
			}
		}
	}
	echo "Maximum difference: " . $maxDiff;
	return 0;
}

maxDifference($mas1,$mas2);