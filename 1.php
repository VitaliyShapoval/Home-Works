<?php

$lang = "nd";

$daysRu = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$daysEn = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];

if ($lang == "ru"){
    print_r($daysRu);
}
elseif ($lang == "en") {
    print_r($daysEn);
}
else print_r('Не определен язык!');
