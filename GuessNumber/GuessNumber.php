<?php

function guessNumber($number)
{
    $numbers = range(1, 100);
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = floor((($low + $high) / 2));
        if ($numbers[$mid] > $number) {
            $high = $mid - 1;
            echo '<br/>Computer Number ' . $numbers[$mid] . ' too high';
        } else if ($numbers[$mid] < $number) {
            $low = $mid + 1;
            echo '<br/>Computer Number ' . $numbers[$mid] . ' too low';
        } else  return '<br/>Guess number is ' . $numbers[$mid];
    }
}
$number = rand(1, 100);
echo guessNumber($number);
?>