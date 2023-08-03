<?php

require_once '../sistema/configuracao.php';
include_once '../helpers.php';

// WHILE
$numero = 1;

while ($numero < 10) {
    echo $numero++;    
}

echo '<hr>';

// FOR
for ($i = 1; $i <= 10; $i++) {
    // echo ($i % 2 == 0 ? $i.' Par' : $i.' Impar').'<br>';
    echo $i.' x '.$i.' = '.$i*$i.'<br>';
}