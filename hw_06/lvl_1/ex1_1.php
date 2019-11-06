<?php

fwrite(STDOUT, "Enter the amount of floors: ");
   $x = trim(fgets(STDIN));
fwrite(STDOUT, "Enter amount of flats on the floor: ");
    $y = trim(fgets(STDIN));
fwrite(STDOUT, "Enter the number of flat: ");
    $z = trim(fgets(STDIN));

$p = floor( ($z - 1) / ($x * $y) + 1 );
$e = floor( (($z - ($p - 1) * $x * $y) - 1) / $y + 1);

echo "The flat №$z is at the " . ($p);

switch ($p % 10) {
	case 1:
		echo "st";
		break;
	case 2:
		echo "nd";
		break;
	case 3:
		echo "rd";
		break;
	default:
		echo "th";
}

echo " entrance and on the " . ($e);

switch ($e % 10) {
	case 1:
		echo "st";
		break;
	case 2:
		echo "nd";
		break;
	case 3:
		echo "rd";
		break;
	default:
		echo "th";
}

echo " floor";