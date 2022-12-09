<?php 
    // FILE PREP
    $file = 'input/day03.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP

    // CALCULATING
    foreach ($data as $line) {
        $middle = strlen($line) / 2; // find the middle by dividing the string length by 2
        $split = str_split($line, $middle); // split the string into 2 even arrays

        // divide array into two variables
        $part_one = $split[0];
        $part_two = $split[1];

        // split string into each separate letter
        $letters_one = str_split($part_one);
        $letters_two = str_split($part_two);
        
        for ($i = 0; $i < 2; $i++) {
            $same = array_intersect($letters_one, $letters_two); // find letter that's in both arrays
            $reset = array_values($same); // resets key values
            print_r($reset);
        };
    };
?>