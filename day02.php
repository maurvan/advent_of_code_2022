<?php 
    // FILE PREP
    $file = 'input/day02.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $points = 0;

    // CALCULATING
    foreach ($data as $line) {
        // opponent chooses rock
        if (str_contains($line, 'A')) {
            if (str_contains($line, 'X')) {
                $points += 3; // lose + scissors
            };
            if (str_contains($line, 'Y')) {
                $points += 4; // draw + rock
            };
            if (str_contains($line, 'Z')) {
                $points += 8; // win + paper
            };
        };
        // opponent chooses paper
        if (str_contains($line, 'B')) {
            if (str_contains($line, 'X')) {
                $points += 1; // lose + rock
            };
            if (str_contains($line, 'Y')) {
                $points += 5; // draw + paper
            };
            if (str_contains($line, 'Z')) {
                $points += 9; // win + scissors
            };
        };
        // opponent chooses scissors
        if (str_contains($line, 'C')) {
            if (str_contains($line, 'X')) {
                $points += 2; // lose + paper
            };
            if (str_contains($line, 'Y')) {
                $points += 6; // draw + scissors
            };
            if (str_contains($line, 'Z')) {
                $points += 7; // win + rock
            };
        };
    };

    // OUTPUT
    echo 'Total score: '.$points;
?>