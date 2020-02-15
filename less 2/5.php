<?php


$month = rand(1, 12);

if ($month == 1 or $month == 2 or $month == 12){
    echo 'Зима';
}
elseif ($month == 3 or $month == 4 or $month == 5){
    echo 'Весна';
}
elseif ($month == 6 or $month == 7 or $month == 8){
    echo 'Лето';
}
else
    echo 'Осень';
