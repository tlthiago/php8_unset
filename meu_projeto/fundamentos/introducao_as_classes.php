<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php

include './Nucleo/Mensagem.php';

$msg = new Mensagem();
echo $msg->sucesso('Mensagem de sucesso')->renderizar();
echo $msg->erro('Mensagem de erro')->renderizar();
echo $msg->alerta('Mensagem de alerta')->renderizar();
echo $msg->informa('Mensagem de informações')->renderizar();
echo '<hr>';

var_dump($msg);
