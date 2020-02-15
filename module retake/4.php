<?php


$arr = [rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85)];
$min = $arr[0];
$max = 0;
$count = count($arr);

for ($i = 0; $i < $count; $i++) {
    if ($arr[$i] < $min) {

        $min = $arr[$i];
    }
    if ($arr[$i] > $max) {

        $max = $arr[$i];
    }

}
var_dump($arr);
echo "<br />";
echo "<br />";
echo "Минимальное значение - $min";
echo "<br />";
echo "Максимальное значение - $max";

echo "<br />";
echo "<br />";
echo "<br />";


$arr = [rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85)];
$min = $arr[0];
$max = 0;
$i = 0;
$count = count($arr);

while ($i < $count) {

    if ($arr[$i] < $min) {

        $min = $arr[$i];
    }
    if ($arr[$i] > $max) {

        $max = $arr[$i];
    }
    $i++;
}
var_dump($arr);
echo "<br />";
echo "Минимальное значение - $min";
echo "<br />";
echo "Максимальное значение - $max";

echo "<br />";
echo "<br />";
echo "<br />";



$arr = [rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85)];
$min = $arr[0];
$max = 0;



foreach ($arr as $value){

    if ($value < $min) {

        $min = $value;
    }
    if ($value > $max) {

        $max = $value;
    }

}
var_dump($arr);
echo "<br />";
echo "Минимальное значение - $min";
echo "<br />";
echo "Максимальное значение - $max";


echo "<br />";
echo "<br />";
echo "<br />";



$arr = [rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85)];
$min = $arr[0];
$max = 0;
$count = count($arr);
$i = 0;

do {
    if ($arr[$i] < $min) {

        $min = $arr[$i];
    }
    if ($arr[$i] > $max) {

        $max = $arr[$i];
    }
    $i++;

}
while ($i < $count);


var_dump($arr);
echo "<br />";
echo "Минимальное значение - $min";
echo "<br />";
echo "Максимальное значение - $max";