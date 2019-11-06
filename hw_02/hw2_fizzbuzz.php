<?php

echo "Enter three numbers!\n";
$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$number = fgets($handle);

for($i = 1; $i <= $number; $i++){
	if ($i % $fizz == 0 && $i % $buzz == 0){
		echo " FB ";
	} elseif ($i % $fizz == 0){
		echo " F ";
	} elseif ($i % $buzz == 0){
    	echo " B ";
	} else {
    	echo " $i ";
	}
}

