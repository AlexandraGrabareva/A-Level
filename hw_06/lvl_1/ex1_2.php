<?php

fwrite(STDOUT, "Enter the odd positive number: ");
$n = trim(fgets(STDIN));

if ($n < 0 || !($n % 2)){
	echo "Incorrect entered number" . PHP_EOL;
	fwrite(STDOUT, "Please, enter another number:");
	$n = trim(fgets(STDIN));
}

echo PHP_EOL;

$r = '*';
$p = ' ';
	
$z = 1;
for ($i = 0; $i < $n / 2; $i++){
	$prob = ($n - $z) / 2;
	echo str_repeat($p, $prob);
	echo str_repeat($r, $z);
	echo PHP_EOL;
	$z += 2;
}

$z = $n - 2;
for ($i = $n / 2; $i > 0; $i--){
	$prob = ($n - $z) / 2;
	echo str_repeat($p, $prob);
	echo str_repeat($r, $z);
	echo PHP_EOL;
	$z -= 2;
}

/*$z = 1;
for ($i = 0; $i < $n / 2; $i++){
	$prob = ($n - $z) / 2;
	for ($j = 0; $j < $prob; $j++)
		echo $p;
	for ($k = 0; $k < $z; $k++)
		echo $r;
	echo PHP_EOL;
	$z += 2;
}

$z = $n - 2;
for ($i = $n / 2; $i > 0; $i--){
	$prob = ($n - $z) / 2;
	for ($j = 0; $j < $prob; $j++)
		echo $p;
	for ($k = 0; $k < $z; $k++)
		echo $r;
	echo PHP_EOL;
	$z -= 2;
}*/