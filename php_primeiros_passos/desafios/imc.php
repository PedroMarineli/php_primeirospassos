<?php

$p = 68;
$a = 1.62;
$imc = 0;

$imc= $p / ($a * $a);

if ($imc < 18.5) {
    echo"Magreza";
}else if ($imc >= 18.5 && $imc < 25) {
    echo"Normal";
}else{
    echo"Sobrepeso";
}