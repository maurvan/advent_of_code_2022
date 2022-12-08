<?php 
    // FILE PREP
    $file = 'input/day03.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $sum = 0;

    // CALCULATING
    foreach ($data as $line) {
        $middle = strlen($line) / 2; // find the middle by dividing the string length by 2
        $split = str_split($line, $middle); // split the string into 2 even arrays
        $str_split = implode(' ', $split); // convert into string
        $letters = preg_split('//', $line, -1); // split string for every letter into array
        $diff = array_diff();
    };

    // OUTPUT
    echo $letters;
?>