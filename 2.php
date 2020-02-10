<?php

$lang = "wk";

$daysRu = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$daysEn = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];

switch ($lang){
    case 'ru';
        print_r($daysRu);
        break;
    case 'en';
        print_r($daysEn);
        break;
    default;
    echo "Не определен язык";
        break;
}