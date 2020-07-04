<?php
function createPhoneNumber($subPhone)
{
    $sub = array_rand($subPhone);
    $number = rand(1000000, 9999999);
    $phone = new PhoneNumber($subPhone[$sub], $number);
    return $phone;
}
function createMultiNumber($subPhone)
{
    $numbers = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($numbers, createPhoneNumber($subPhone));
    }
    return $numbers;
}

function searchNumber($numbers, $viettel, $mobi, $vina)
{
    for ($i = 0; $i < count($numbers); $i++) {
        if (array_search($numbers[$i]->getSubNumber(), $viettel)) {
        }
    }
}
function checkNumber($number, $subPhone)
{
    $key = array_search($number, $subPhone);
    if ($key >= 0 && $key < 8) return 'viettel';
    else if ($key > 7 && $key < 13) return 'mobi';
    else if ($key > 12 && $key < count($subPhone)) return 'vina';
}
