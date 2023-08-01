<?php

// Arquivo index responsável pela inicialização do sistema
// declare(stric_types = 1);
require_once 'sistema/configuracao.php';
include_once 'helpers.php';

// $texto = '<h1>Texto</h1> <p>para</p> resumir';
// $texto = strip_tags($texto);

// echo $total = mb_strlen(trim($texto));
// echo '<hr>';

// echo $resumo = mb_substr($texto, 1, 3);
// echo '<hr>';

// echo $ocorrencia = mb_strrpos($texto, 'o');

// echo resumirTexto($texto, 15);

// $valor = 5;

// if ($valor) {
//     echo $valor;
// } else {
//     echo 0;
// }

// echo ($valor ? $valor : 0);
// echo ($valor ?  : 0);

// echo formatarValor();
// echo formatarNumero('100');

// $data = date('d/m/Y H:i:s');
// echo $data;

// echo contarTempo('2023-07-22 12:26:14');

if (validarEmail('teste@martminas.com.br')) {
    echo 'Endereço de e-mail válido!';
} else {
    echo 'Endereço de e-mail inválido!';
}

var_dump(validarUrl('https://teste.com'));

// var_dump(validarEmail('teste@gmail.com'));
