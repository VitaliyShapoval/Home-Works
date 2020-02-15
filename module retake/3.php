<?php

$arr = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];


for ($i = 0; $i < count($arr); $i++) {

    if ($arr[$i] % 5 == 0 && $arr[$i] % 3 == 0) {

        echo "Число $arr[$i] делится на 5 и на 3";
        echo "<br />";
    }

}
echo "<br />";
echo "<br />";
echo "<br />";


$numbers = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];
$i = 0;

while ($i < count($numbers)) {
    if ($numbers[$i] % 5 == 0 && $numbers[$i] % 3 == 0) {

        echo "Число $numbers[$i] делится на 5 и на 3";
        echo "<br />";
    }
    $i++;
}
