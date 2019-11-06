<?php

$fname = htmlentities($_POST['firstName']);
$sname = htmlentities($_POST['secondName']);
$region = $_POST['region'];
$level = $_POST['level'];
$it = $_POST['it'];
$birthDate = $_POST['birthDate'];

// функция вычисления возраста
function calculate_age($birthday) { 
	$birthday_timestamp = strtotime($birthday);
	$age = date('Y') - date('Y', $birthday_timestamp);
	if (date('md', $birthday_timestamp) > date('md')) {
		$age--;
	}
	return $age;
}

$age = calculate_age($birthDate);
    
$output ="
<html>
<head>
<link rel='shortcut icon' href='http://www.iconarchive.com/download/i82801/succodesign/love-is-in-the-web/heart.ico' type='image/png'>
<title>Result</title>
</head>
<body>
Hi, $fname $sname!<br /><br />
From your answers in the questionnaire, we know that<br />
you're $age years old and you live in $region, Ukraine.<br /><br />
List of your achievements:
<ul>
<li>$level English level</li>";
foreach($it as $item)
	$output.="<li>" . htmlentities($item) . "</li>";
$output.="</ul></body></html>";
echo $output;