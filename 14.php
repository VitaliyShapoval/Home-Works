<?php


$handly = fopen("/new_file.rtf", "r");
$mark = [fgets($handly)];

//$fizz = "F";
//$buzz = "B";

var_dump($mark);
