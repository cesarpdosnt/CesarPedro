<!DOCTYPE html>
<html>
    <head>
        <title>Calculo de IRPF</title>
</head>
<body>

<h1>Calculadora de IRPF</h1>


<form method="POST">
    <label>Digite o valor</label>
    <input type="number" name="valor">

    

    <button type="submit">Enviar</button>
          



</form>





<?php

if (isset($_POST["valor"])) {
    $valor = $_POST["valor"];


if ($valor <= 2259.20) {
    echo"<br>Aliquota: Zero";
    echo"<br>Parcela a deduzir: Zero";
} elseif ($valor >= 2259.21 && $valor <= 2826.65) {
    echo"<br>Aliquota: 7,5%";
    echo"<br>Parcela a deduzir: R$169,44" ;
} elseif ($valor >= 2826.66 && $valor <= 3751.05) {
    echo"<br>Aliquota: 15%";
    echo"<br>Parcela a deduzir: R$381,44";
} elseif ($valor >= 3751.06 && $valor <= 4664.68) {
    echo"<br>Aliquota: 22,5%";
    echo"<br>Parcela a deduzir: R$662,77";
} else {
        echo "<br>Aliquota: 27,5%";
        echo "<br>Parcela a deduzir: R$896,00";
    }
}
?>

