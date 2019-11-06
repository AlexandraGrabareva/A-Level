<?php

function read($path_to_the_file){
	$file_handle = fopen($path_to_the_file, "r"); //file2.txt
	
	while (!feof($file_handle)) {
		$line = fgets($file_handle);
		echo $line;
	} 
	echo "\n\n";
	return true;
}

function length($path_to_the_file){
	$file_handle = fopen($path_to_the_file, "r"); //file2.txt
	$sum = 0;

	while (!feof($file_handle)) {
		$line = fgets($file_handle);
		$line_trim = trim($line);
		echo strlen($line_trim) . "\n"; // strlen() — возвращает длину строки
		$sum += strlen($line_trim);
	} 
	echo "\n";
	
	$file_array = file($path_to_the_file); // file() — читает содержимое файла и помещает его в массив

	echo "average : " . intval($av = $sum / count($file_array)); // intval() — возвращает целое значение переменной

	$file_handle2 = fopen("newfile2.txt", "w");
	for ($i = 0; $i <= count($file_array); $i++) {  // count() — подсчитывает кол-во эл. массива, строк в файле ...
		if (strlen($file_array[$i]) > $av){
			fwrite($file_handle2, $file_array[$i]);
		}
	} 
	return true;
}

read("file2.txt");
length("file2.txt");