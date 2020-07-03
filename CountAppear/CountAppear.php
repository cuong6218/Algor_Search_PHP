<?php
    function countNumber($number, $value){
        $count = 0;
        for ($i = 0; $i < count($number); $i++){
            if ($number[$i] == $value) $count++;
        }
        echo 'Number '.$value.' appear '.$count.' times';
    }
$number = [1,2,3,4,4,6,4,7,8,4];
countNumber($number, 4);
