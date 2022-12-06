<?php 
    // PREP
    $file = 'input/day01.txt';
    $data = file($file) or die('Could not read file!');
    
    // CALCULATING
    $sum = 0;
    $count = 1;

    foreach ($data as $line) {
        $sum = $sum + (int) $line;

        if (empty(trim($line)) === true) {
            echo '<p>Elf '.$count.' carries '.$sum.' calories</p>';

            $sum = 0;
            $count++;
        };
    };
?>