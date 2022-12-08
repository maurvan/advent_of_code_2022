<?php 
    // FILE PREP
    $file = 'input/day01.txt';
    $data = file($file) or die('Could not read file!');
    
    // SET UP
    $sum = 0;

    // CALCULATING
    foreach ($data as $line) {
        $sum = $sum + (int) $line;

        if (empty(trim($line)) === true) {
            $array[] = $sum; // put results in an array

            arsort($array); // sort the array
            $top = array_chunk($array, 3, true)[0]; // split into the top 3
            $newTop = implode(' ', $top);

            $sum = 0; // reset sum
        };
    };

    // OUTPUT
    echo '<p>Calorie count top 3: '.$newTop;
?>