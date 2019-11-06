<?php
echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

switch ($number) {
	case ($number > 1000):
        echo "!!!!WOOOOWWWW!!!";
        break;
    case ($number > 100):
        echo "Thanks, man!";
        break;
    case ($number > 10 && $number < 100):
        echo "OK :(";
        break;
  /*case in_array($number, range(10,100)):
        echo "OK :(";
        break;  */  
    default: 
    	echo "WHAAAAT????"; 
    	break;
}