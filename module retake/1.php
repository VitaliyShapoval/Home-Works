<?php


$number = "1547";
$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {

    $sum += substr($number, $i, 1);

}

echo "Сумма строки - " . $sum . "<br />";
echo "<br />";
echo "<br />";


$number = "1547";
$sum = 0;
$a = 0;

while ($a < strlen($number)) {
    $sum += substr($number, $a, 1);
    $a++;
}

echo "Сумма строки - " . $sum;