<?php

define("NUMBER", 5);

for ($i = 1; $i <= 100; $i++) { 
	if (!($i % NUMBER)){
		$mas[] = $i;
	}
}

print_r($mas);
echo "Amount of divisible numbers by 5 : " . count($mas);