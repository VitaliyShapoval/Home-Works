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

while ($i< strlen($str)) {

    if (substr($str, $i, 1) == $a) {
        $count++;
    }
    $i++;
}
echo $count;