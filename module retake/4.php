<?php


$arr = [rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85), rand(1, 85)];
$min = $arr[0];
$max = 0;

for ($i = 0; $i < count($arr); $i++) {
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

while ($i < count($arr)) {

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

