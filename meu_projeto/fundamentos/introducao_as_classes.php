<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<?php

include './Nucleo/Mensagem.php';

echo (new Mensagem())->alerta('Texto de alerta');

// $msg = new Mensagem();
// echo $msg->sucesso('Mensagem de sucesso')->renderizar();

// echo (new Mensagem())->erro('Mensagem de erro')->renderizar();
echo '<hr>';
