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
            $array[] = $sum;

            arsort($array);
            $top = array_chunk($array, 3, true)[0];
            $newTop = implode(' ', $top);

            // for ($i = 0; $i < count($array); $i++) {
            //     if ($array[$i] > $one) {
            //         $one = $array[$i];
            //     }
            // }

            $sum = 0;
            $count++;
        };
    };

    echo '<p>Calorie count top 3: '.$newTop;
?>