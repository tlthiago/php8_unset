<?php

include './Nucleo/Mensagem.php';

$msg = new Mensagem();
echo $msg->renderizar();
echo '<hr>';

var_dump($msg);
