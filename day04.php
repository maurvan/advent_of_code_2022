<?php 
    // FILE PREP
    $file = 'input/day04.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $count = 0;

    // CALCULATING
    foreach ($data as $line) {
        $pair = explode(',', $line); // separate line into 2 arrays

        // put each array into a variable
        $array_one = $pair[0];
        $array_two = $pair[1];

        // separate each pair into two single numbers
        $number_one = explode('-', $array_one);
        $number_two = explode('-', $array_two);

        if ($number_one[0] <= $number_two[1] && $number_two[0] <= $number_one[1]) {
            $count++;
            continue; // skips next loop if double is found
        };
        if ($number_two[0] >= $number_one[0] && $number_two[1] <= $number_one[1]) {
            $count++;
        };
    };

    // OUTPUT
    echo 'Number of doubles: '.$count;
?>