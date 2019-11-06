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

	try{
		if(count($array1) != count($array2)){ // Если кол-во строк в массивах не совпадает...
			throw new Exception('Error: number of strings in arrays does not match'); // Генерируем исключение
		}
	} 
	catch (Exception $ex) { // Перехватываем (catch) исключение, если что-то идет не так
	echo $ex->getMessage() . PHP_EOL; // Выводим сообщение об исключении
}

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