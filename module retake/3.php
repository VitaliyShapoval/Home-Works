<?php

$arr = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];
$count = count($arr);

for ($i = 0; $i < $count; $i++) {

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
$count = count($numbers);
while ($i < $count) {
    if ($numbers[$i] % 5 == 0 && $numbers[$i] % 3 == 0) {

        echo "Число $numbers[$i] делится на 5 и на 3";
        echo "<br />";
    }
    $i++;
}
echo "<br />";
echo "<br />";
echo "<br />";




$arr = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];
foreach ($arr as $value){

    if ($value % 5 ==0 && $value % 3 ==0){

        echo "Число $value делится на 5 и на 3";
        echo "<br />";

    }

}
echo "<br />";
echo "<br />";
echo "<br />";




$arr = [12, 34, 44, 45, 50, 121, 100, 3657, 98, 90];
$count = count($arr);
$i = 0;


do {if ($arr[$i] % 5 == 0 && $arr[$i] % 3 == 0) {

    echo "Число $arr[$i] делится на 5 и на 3";
    echo "<br />";
}
    $i++;

}
while($i < $count);


