<?php

function file1($path_to_the_file){
	$file_handle = fopen($path_to_the_file, "r"); // file.txt

	while(!feof($file_handle))
	{
		$line = fgets($file_handle);
		echo $line;
	}

	fclose($file_handle);

	return true;
}

function file2($path_to_the_file){
	$file_handle = fopen($path_to_the_file, "r"); // file.txt
	$file_array = file($path_to_the_file); // file() — читает содержимое файла и помещает его в массив

	$file_handle2 = fopen("newfile.txt", "w");

	for ($i = 0; $i <= count($file_array); $i++) // count() — подсчитывает кол-во эл. массива, строк в файле ...
	{ 
		if ($i % 2 == 0) // нечетные строки записываем в файл
		{
			fwrite($file_handle2, $file_array[$i]);
		}
	} 

	fclose($file_handle);
	fclose($file_handle2);

	return true;
}

file1("file.txt");
file2 ("file.txt");