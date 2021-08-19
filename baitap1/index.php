<?php

function countNumber($arr,$value)
{
    $count = 0;
    for ($i = 0; $i < count($arr); ++$i) {
        if ($arr[$i] === $value) {
            $count++;
        }
    }
    echo "Số lần xuất hiện " . $value . " là: " . $count;
}

$arrNum = [1 , 3, 4, 2 , 5, 6, 7, 8, 12, 55, 67, 22, 1, 6, ];
countNumber($arrNum,1);
