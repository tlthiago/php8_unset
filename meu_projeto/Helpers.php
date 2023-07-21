<?php

function saudacao(): string
{
    $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'Boa madrugada';
    } else if ($hora >= 6 && $hora <= 12) {
        $saudacao = 'Bom dia';
    } else if ($hora >= 13 && $hora <= 18) {
        $saudacao = 'Boa tarde';
    } else {
        $saudacao = 'Boa noite';
    }

    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}
