<?php
    include_once ('PhoneNumber.php');
    
    function createPhoneNumber($subPhone){
        $sub = rand(0,17);
        $number = rand(1000000, 9999999);
        $phone = new PhoneNumber($subPhone[$sub], $number);
        return $phone->getSubNumber().$phone->getNumber();
    }
    function createMultiNumber($subPhone){
        $numbers = [];
        for ($i = 0; $i < 10; $i++){
            array_push($numbers, createPhoneNumber($subPhone));
        }
        return $numbers;
    }

    $phoneNumber = 10;
    $viettel = ['032', '033', '034', '035', '036', '037', '038', '039'];
    $mobi = ['070', '076', '077', '078', '079'];
    $vina = ['081', '082', '083', '084', '085'];
    $subPhone = array_merge($viettel, $mobi, $vina);

    $numbers = createMultiNumber($subPhone);
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
    