<?php
echo "Enter your body weight (kg) and height (cm):\n";
$handle = fopen ("php://stdin","r");
$weight = fgets($handle);
$height = fgets($handle);

$height /= 100;

$bmi = $weight / ($height * $height);

if ($bmi < 16){
    echo "Severely underweight!";
}
elseif ($bmi >= 16 && $bmi < 18.5){
    echo "Underweight!";
}
elseif ($bmi >= 18.5 && $bmi < 25){
    echo "Normal!";
}
elseif ($bmi >= 25 && $bmi < 30){
    echo "Overweight!";
}
elseif ($bmi >= 30 && $bmi < 35){
    echo "Moderately Obese!";
}
elseif ($bmi >= 35 && $bmi < 40){
    echo "Severely obese!";
}
else {
    echo "Very severely obese!";
}