<?php

echo "Enter the year!\n";
$handle = fopen ("php://stdin","r");
$year = fgets($handle);

echo ($year % 4) ? "This is the common year!" : (($year % 100 == 0 && $year % 400) ? "This is the common year!" : "This is the leap year!"); 