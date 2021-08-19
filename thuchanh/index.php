<?php

    function findMin($arr)
    {
       $min = $arr[0];
       for ($i = 0 ; $i < count($arr); ++$i) {
           if ($arr[$i] < $min) {
               $min = $arr[$i];
           }
       }
       return $min;
    }

    function findMax($arr)
    {
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
    }


    $num = [];
    for ($i = 0 ; $i < 100; ++$i) {
        $num[$i] = rand(1,100);
    }
    foreach ($num as $key) {
        echo $key . " ";
    }
    $minValue = findMin($num);
    echo "<br>";
    echo "Min Value is: " . $minValue;

    $maxValue = findMax($num);
    echo "<br>";
    echo "Max Value is: " . $maxValue;

