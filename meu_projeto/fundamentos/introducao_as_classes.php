<?php

include './Nucleo/Mensagem.php';

$msg = new Mensagem();
echo $msg->texto = 'Texto de teste';
echo '<hr>';

var_dump($msg);
