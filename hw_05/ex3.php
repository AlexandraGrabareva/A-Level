<?php

$start = microtime(true); # начало измерения

define("PRIME_NUMBERS", 100);
define("NUMBERS", 1000);

$mas = array();
$sum = 0; 

for($i = 2; $i <= NUMBERS; $i++) # заполняем решето единицами
	$mas[$i] = 1;
	
for($i = 2; $i * $i <= (count($prime) < PRIME_NUMBERS); $i++){	
	if($mas[$i] == 1){ # если i - простое (не вычеркнуто)
		$prime[] = $i;
		$sum += $i;

		for($j = $i * $i; $j <= NUMBERS; $j += $i){ # то вычеркнем кратные i
			$mas[$j] = 0;
		}
	}
}

print_r($prime);

echo "The sum of the first 100 prime numbers: " . $sum . PHP_EOL;

$end = microtime(true); # конец измерения
echo "Execution time: ".($end - $start); # вывод результата

/*
Execution time: 0.021628141403198 - Решето Эратосфена
Execution time: 0.055369138717651
*/