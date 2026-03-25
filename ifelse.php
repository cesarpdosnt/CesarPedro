<?php

$altura = 1.80;
$peso = 72;
$imc = $peso / ($altura ** 2);

if ($imc < 16) {
    echo("Magreza grau III");
} elseif ($imc >= 16 && $imc <= 16.9) {
    echo("Magreza grau II");
} elseif ($imc >= 17 && $imc <= 18.4) {
    echo("Magreza grau I");
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo("Eutrofia");
}elseif ($imc >= 25 && $imc <= 29.9) {
    echo("Pre Obesidade");
}elseif ($imc >= 30 && $imc <= 34.9) {
    echo("Obesidade moderada (grau I)");
}elseif ($imc >= 35 && $imc <= 39.9) {
    echo("Obesidade severa (grau II)");
}elseif ($imc >= 40) {
    echo("Obesidade muito severa");

    echo("Seu IMC é: $imc");
}

?>