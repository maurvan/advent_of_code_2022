<?php 
    // FILE PREP
    $file_crates = 'input/day05_crates.txt';
    $data_crates = file($file_crates) or die('Could not read file!');

    $file_moves = 'input/day05_moves.txt';
    $data_moves = file($file_moves) or die('Could not read file!');

    // SET UP
    $amount = 0;
    $from = 0;
    $to = 0;

    $key = 0;

    // CALCULATING
    foreach ($data_crates as $line_crates) {
        $crates[] = $line_crates; // place each pile in an array
    };

    for ($i = 0; $i < 10; $i++) {
        // automate split up each crate
        $crates[$key] = explode(',', $crates[$key]);
        $key++;
    };
    
    foreach ($data_moves as $line_moves) {
        $moves = explode(' ', $line_moves);
        
        // assign number to each variable
        $amount = (int) $moves[1];
        $from = (int) $moves[3];
        $to = (int) $moves[5];

        $length = count($crates[$from]); // count length of the "from" array
        $take = array_slice($crates[$from], -$amount, $amount); // takes the right amount of crates from the "from" line
        $crates[$from] = array_slice($crates[$from], 0, ($length - $amount)); // deletes the crates from the line they were in
        $crates[$to] = array_merge($crates[$to], $take); // merge the arrays
    };

    // OUTPUT
    print_r($crates);
?>