<?php

$handly = fopen("fizz-buzz.txt", "r");
$mark = fgets($handly);


$fizz = $mark[0];
$buzz = $mark[1];


for ($i = 1; $i <= $mark[2]; $i++) {
    if ($i % $fizz == 0){
        print_r("F");
    }
    elseif ($i % $buzz == 0){
        print_r ("B");
    }
    elseif (($i % $fizz = 0) & ($i %$buzz == 0)) {
        print_r ("FB");
    }
    else
        echo $i;

}
