<?php

$a = 5;
$count = 0;
$str = 45645234645764;


for ($i = 0; $i < strlen($str); $i++) {

    if (substr($str, $i, 1) == $a) {
        $count++;
    }
}

echo $count;
echo "<br />";


$a = 4;
$count = 0;
$str = 45645234645764;
$i = 0;

while ($i < strlen($str)) {

    if (substr($str, $i, 1) == $a) {
        $count++;
    }
    $i++;
}
echo $count;
echo "<br />";


$a = 5;
$count = 0;
$mass = [4, 5, 6, 4, 5, 2, 3, 4, 6, 4, 5, 7, 6, 4];

foreach ($mass as $value) {

    if ($value == $a)
        $count++;

}
echo $count;
echo "<br />";


$a = 5;
$count = 0;
$str = 45645234645764;
$i = 0;

do {

    if (substr($str, $i, 1) == $a) {
        $count++;
    }
    $i++;
} while ($i < strlen($str));


echo $count;