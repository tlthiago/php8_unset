<?php

// Arquivo index responsável pela inicialização do sistema
// declare(stric_types = 1);
require_once 'sistema/configuracao.php';
include_once 'helpers.php';

$texto = 'Texto para resumir';

echo $total = mb_strlen(trim($texto));
echo '<hr>';

echo $resumo = mb_substr($texto, 1, 3);
echo '<hr>';

echo $ocorrencia = mb_