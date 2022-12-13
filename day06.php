<?php 
    // FILE PREP
    $file = 'input/day06.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $offset = 0;

    // CALCULATING
    foreach ($data as $line) {
        do {
            $fourteen = substr($line, $offset, 14); // take 14 letters
            $letters = str_split($fourteen, 1); // split each letter into an array
            $compare = array_unique($letters); // compare all letters
            if (count($compare) == 14) {
                echo '<p>Marker is: '.$fourteen; // output
                break;
            }
            $offset++;
        } while (strlen($fourteen) >= 14);
    };

    // OUTPUT
    echo '<p>Characters processed: '.($offset + 14);
?>