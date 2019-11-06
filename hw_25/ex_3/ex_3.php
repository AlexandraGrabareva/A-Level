<?php

namespace classes;

function my_loader($class) {

	/* __DIR__ — магическая константа, которая возвращает директорию файла 

	   DIRECTORY_SEPARATOR — содержит разделитель пути (для Windows это «\», для Linux — «/»)

	   str_replace — заменяет все вхождения строки поиска на строку замены
	   (ф-ия возвращает строку, в которой все вхождения '\\' в $class заменены на DIRECTORY_SEPARATOR) */
	$path = __DIR__ . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
	if (is_file($path)) {
		require_once($path);
	}
}

/* spl_autoload_register() — позволяет зарегистрировать несколько ф-ий, 
   которые PHP поместит в стек/очередь и будет вызывать последовательно при объявлении нового класса */
spl_autoload_register('classes\my_loader');

$count1 = new Libs\Counter();
$count2 = new Libs\Namespace1\Namespace2\Counter();

var_dump($count1);
var_dump($count2);