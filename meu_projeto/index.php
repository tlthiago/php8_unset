<?php

require_once './fundamentos/configuracao.php';
include_once './fundamentos/Nucleo/Helpers.php';
include './fundamentos/Nucleo/Mensagem.php';
include './fundamentos/Nucleo/Controlador.php';

use fundamentos\Nucleo\Controlador;

$controlador = new Controlador();
echo '<hr>';
var_dump($controlador);