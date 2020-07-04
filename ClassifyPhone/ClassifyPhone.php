<?php
include_once('PhoneNumber.php');
include_once('main.php');

// $phoneNumber = 10 number;
$viettel = ['032', '033', '034', '035', '036', '037', '038', '039'];
$mobi = ['070', '076', '077', '078', '079'];
$vina = ['081', '082', '083', '084', '085'];
$subPhone = array_merge($viettel, $mobi, $vina);

$viettels = [];
$mobis = [];
$vinas = [];

$numbers = createMultiNumber($subPhone);

for ($i = 0; $i < count($numbers); $i++) {
    if (checkNumber($numbers[$i]->getSubNumber(), $subPhone) == 'viettel') array_push($viettels, $numbers[$i]);
    else if (checkNumber($numbers[$i]->getSubNumber(), $subPhone) == 'mobi') array_push($mobis, $numbers[$i]);
    else if (checkNumber($numbers[$i]->getSubNumber(), $subPhone) == 'vina') array_push($vinas, $numbers[$i]);
}

echo 'Random Phone Number List';
echo '<pre>';
print_r($numbers);
echo '</pre>';

echo '-------List Viettel Phone-------';
echo '<pre>';
print_r($viettels);
echo '</pre>';

echo '--------List Mobi Phone----------';
echo '<pre>';
print_r($mobis);
echo '</pre>';

echo '---------List Vina Phone----------';
echo '<pre>';
print_r($vinas);
echo '</pre>';
