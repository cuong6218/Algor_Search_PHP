<?php
    function findMin($arr){
        $min = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            if ($arr[$i] < $min) $min = $arr[$i];
        }
        echo 'Min value is ' .$min;
    }
    function findMax($arr){
        $max = $arr[0];
        for ($i = 1; $i < count($arr); $i++){
            if ($arr[$i] > $max) $max = $arr[$i];
        }
        echo 'Max value is ' .$max;
    }
    $arr = [1,2,3,4,5,6,77,33,-3];
    findMax($arr);
    findMin($arr);