<?php

$mas = ["Alea jacta est",
	"Aquila non captat muscas",
	"Canis vivus melior est leone mortuo",
	"Abyssus abyssum invocat",
	"Amicus Socrates, sed magis amica veritas",
	"Factum est factum",
	"Rixari de asini umbra",
	"Si vis pacem, para bellum",
	"Memento mori"];

function countLetters($array, $i){
	echo $line = $array[$i];
	echo PHP_EOL;
	$line = mb_strtolower($line); // Make a string lowercase

	foreach (count_chars($line, 1) as $j => $val) { // count_chars - Return information about characters used in a string
		if  (chr($j) == " " || chr($j) == ","){
			continue;
		} else
		echo "There were $val instance(s) of letter '" , chr($j) , "' in the line\n";
	}
	return 0;
} 

countLetters($mas, 3);