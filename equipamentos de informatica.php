<?php

for ($a = 1; $a <= 5; $a++){

    print 'Digite ' . $a . ': <input type="text" name="Digite' . $a . '"> <br><br>';

}


echo "<hr><br>";


$hardware = ['mouse', 'teclado', 'gabinete', 'monitor', 'headset', 'filtro de linha', 'roteador', 'hub usb'];

foreach ($hardware as $setup){

    print 'Equipamentos: ' . $setup . '<br><br>';

}


echo "<hr><br>";


$alunos = [

    'Mariana' => 4,
    'Priscilla' => 9,
    'Calebe' => 7,
    'Lilly' => 6,
    'Adryana' => 10,
    'Murilo' => 5,
    'Lucas' => 0,

];

foreach ($alunos as $nome => $nota){

    print 'Nome: ' . $nome . ' - Nota: ' . $nota . '<br><br>';

}

?>