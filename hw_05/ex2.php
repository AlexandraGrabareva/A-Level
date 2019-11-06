<?php

$start = microtime(true); # начало измерения

define("PRIME_NUMBERS", 100);

$prime = array();
$sum = 0;

for ($i = 2; $i <= (count($prime) < PRIME_NUMBERS); $i++){ 
	$status = true;
	for ($j = 2; $j <= sqrt($i); $j++){ // перебираем возможные делители от 2 до sqrt(i)
		if(!($i % $j)) // если разделилось нацело, то составное
			$status = false;
		}
	if ($status){
		$prime[] = $i; // добавление простых чисел в массив
		$sum += $i;
	}	
}

print_r($prime);

echo "The sum of the first 100 prime numbers : " . $sum . PHP_EOL;

$end = microtime(true); # конец измерения
echo "Execution time: ".($end - $start); # вывод результата

/*
Execution time: 0.021628141403198 - Решето Эратосфена
Execution time: 0.055369138717651
*/