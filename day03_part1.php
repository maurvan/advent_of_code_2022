<?php 
    // FILE PREP
    $file = 'input/day03.txt';
    $data = file($file) or die('Could not read file!');

    // SET UP
    $alphabet = ['null', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u','v','w','x','y','z', 'A', 'B','C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

    $total = 0;

    // CALCULATING
    foreach ($data as $line) {
        $middle = (strlen($line) - 2) / 2; // find the middle by dividing the string length by 2
        $split = str_split($line, $middle); // split the string into 2 even arrays

        // divide array into two variables
        $part_one = $split[0];
        $part_two = $split[1];

        // split string into each separate letter
        $letters_one = str_split($part_one);
        $letters_two = str_split($part_two);
        
        $same = array_intersect($letters_one, $letters_two); // find letter that's in both arrays
        $match = array_intersect($alphabet, $same); // match value with alphabet
        $total = $total + key($match); // calculate total
    };

    // OUTPUT
    echo '<p>Sum of the priorities: '.$total;
?>