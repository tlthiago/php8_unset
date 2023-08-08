<?php 

// Define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'mybd');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// Informações do sistema
define('SITE_NOME', 'UnSet');
define('SITE_DESCRICAO', 'UnSet - Tecnologia em Sistemas');

// URLs do sistema
define('URL_PRODUCAO', 'http://localhost:3000/meu_projeto');
define('URL_DESENVOLVIMENTO', 'http://localhost:3000/meu_projeto');

define('URL_SITE', 'meu_projeto/');

/* Outra forma de definir constante
const SITE_NOME = 'Unset';
*/