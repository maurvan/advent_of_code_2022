<?php 
    // FILE PREP
    $file = 'input/day03.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $alphabet = ['null', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v','w','x','y','z', 'A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    $total = 0;
    $offset = 0;

    // CALCULATING
    foreach ($data as $line) {
        $slice = array_slice($data, $offset, 3); // take three lines

        // split array into single lines
        $part_one = $slice[0];
        $part_two = $slice[1];
        $part_three = $slice[2];

        $offset += 3;

        // split string into each separate letter
        $letters_one = str_split($part_one);
        $letters_two = str_split($part_two);
        $letters_three = str_split($part_three);
        
        $same = array_intersect($letters_one, $letters_two, $letters_three); // find letter that's in both arrays
        $match = array_intersect($alphabet, $same); // match value with alphabet
        $total = $total + key($match); // calculate total
        echo $part_three.' ';
    };

    // OUTPUT
    echo '<p>Sum of the priorities: '.$total;
?>