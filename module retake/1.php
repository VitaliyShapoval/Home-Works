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
echo "<br />";
echo "<br />";


$numbers = [1, 5, 4, 7];
$sum = 0;

foreach ($numbers as $number) {

    $sum += $number;

}

echo "Сумма строки - " . $sum;
echo "<br />";
echo "<br />";


$number = "1547";
$sum = 0;
$a = 0;

do {

    $sum += substr($number, $a, 1);
    $a++;

} while ($a < strlen($number));

echo "Сумма строки - " . $sum;