<?php

$m = 0;
$c = 0;

for($i = -9.80; $c <= 10; $m = $i * $c){
    echo "$i x $c = $m" . PHP_EOL;
    $c = $c + 1;
}