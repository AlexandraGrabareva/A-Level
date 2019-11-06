<?php

function fileTest($path_to_the_file) {

    $data = file($path_to_the_file);

    foreach ($data as $key => $string) {

        $nums = explode(";", $string);

        $upSemicolon = explode(" ", $nums[0]);
        $afterSemicolon = explode(" ", $nums[1]);

        $sum = array_sum($upSemicolon);
        $quotient = floor($sum / count($upSemicolon));
        $remainder = (array_sum($upSemicolon) % count($upSemicolon));
        
        if ($quotient == $afterSemicolon[0] && $remainder == $afterSemicolon[1]){
            echo trim($data[$key]);
            echo " - true" . PHP_EOL;
        } else {
            echo trim($data[$key]);
            echo " - false" . PHP_EOL;
        }
    }
}

fileTest("for_read.txt");