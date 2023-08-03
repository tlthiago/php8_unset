<?php

/**
 * Válida um número de CPF
 * @param string $cpf
 * @return bool
 */
function validarCpf(string $cpf): bool {
    $cpf = limparNumero($cpf);
    if (mb_strlen($cpf) != 11 || preg_match('/(\d)1{10}/', $cpf)) {
        return false;
    } 
    
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
    
        $d = ((10 * $d) % 11) % 10;
    
        if ($cpf[$c] != $d) {
            return false;
        }
    }

    return true;
}

/**
 * Limpa a string recebida retornando apenas os números
 * @param string $numero
 * @return string
 */
function limparNumero(string $numero): string {
    return preg_replace('/[^0-9]/', '', $numero);
}

function dataAtual(): string {
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomesDiasDaSemana = [
        'Domingo', 
        'Segunda-feira', 
        'Terça-feira', 
        'Quarta-feira', 
        'Quinta-feira', 
        'Sexta-feira', 
        'Sábado'
    ];

    $nomesDosMeses = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomesDosMeses[$mes] . ' de ' . $ano;

    return $dataFormatada;
}

/**
 * Monta url de acordo com o ambiente
 * @param string $url parte da url ex. admin
 * @return string url completa
 */
function url(string $url): string {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);
    
    if(str_starts_with($url, '/')) {
        return $ambiente.$url;
    }
    
    return $ambiente.'/'.$url;
}

function localhost(): bool {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_DEFAULT);
    if ($servidor == 'localhost') {
        return true;
    }

    return false;
}

/**
 * Valida uma url
 * @param string $url
 * @return bool
 */
function validarUrl(string $url): bool {
    return filter_var($url, FILTER_VALIDATE_URL);
}

/**
 * Valida uma url
 * @param string $url
 * @return bool
 */
function validarUrlComFiltro(string $url): bool {
    if (mb_strlen($url) < 10) {
        return false;
    }

    if (!str_contains($url, '.')) {
        return false;
    }

    if(str_contains($url, 'http://') || str_contains($url, 'https://')) {
        return true;
    }

    return false;
}

/**
 * Valida um endereço de e-mail
 * @param string $email
 * @return bool
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'Neste minuto';
    } else if ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
    } else if ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
    } else if ($dias <= 7) {
        return $dias == 1 ? 'ontem' : 'há ' . $dias . ' dias';
    } else if ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
    } else if ($meses <= 12) {
        return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
    } else {
        return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
    }
}

/**
 * Formata um valor com ponto e vírgula
 * @param float $valor
 * @return string
 */
function formatarValor(float $valor = null): string 
{
    return number_format(($valor ? $valor : 0), 2, ',', '.');
}

/**
 * Formata um número com pontos
 * @param int $numero
 * @return string
 */
function formatarNumero(int $numero = null): string
{
    return number_format(($numero ? $numero : 0), 0, '.', '.');
}

/**
 * Saudação de acordo com o horário
 * @return string saudação
 */
function saudacao(): string
{
    $hora = date('H');

    // IF / ELSE
    // if ($hora >= 0 && $hora <= 5) {
    //     $saudacao = 'Boa madrugada.';
    // } else if ($hora >= 6 && $hora <= 12) {
    //     $saudacao = 'Bom dia.';
    // } else if ($hora >= 13 && $hora <= 18) {
    //     $saudacao = 'Boa tarde.';
    // } else {
    //     $saudacao = 'Boa noite.';
    // }

    // SWITCH
    // switch ($hora) {
    //     case $hora >= 0 && $hora <= 5:
    //         $saudacao = 'Boa madrugada.';
    //         break;
    //     case $hora >= 6 && $hora <= 12:
    //         $saudacao = 'Bom dia.';
    //         break;
    //     case $hora >= 13 && $hora <= 18:
    //         $saudacao = 'Boa tarde.';
    //         break;
    //     default:
    //         $saudacao = 'Boa noite.';
    // }

    // MATCH
    $saudacao = match(true) {
        $hora >= 0 && $hora <= 5 => 'Boa madrugada.',
        $hora >= 6 && $hora <= 12 => 'Bom dia.',
        $hora >= 13 && $hora <= 18 => 'Boa tarde.',
        default => 'Boa noite.'
    };

    return $saudacao;
}

/**
 * Resume um texto
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
}
