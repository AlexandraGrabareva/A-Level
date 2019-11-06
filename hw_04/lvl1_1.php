<?php

for($i = 0; $i < 10; $i++){
	$mas[$i] = rand(-100, 100); // Generating random numbers in a given range
}

print_r($mas); // Print an array

function maxElement($array){ // Function to find the maximum element in array
	echo "Maximum element is " . max($array);
	return 0;
}

/*
function maxElement($array){ 
	$max = $array[0];
	for ($i = 0; $i < 10; $i++){
		if ($array[$i] > $max){
			$max = $array[$i];
		} 
	}
	echo "Maximum element : " . $max;
	return $max;
}
*/

maxElement($mas);