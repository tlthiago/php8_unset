<?php

namespace fundamentos\Nucleo;

use PDO;
use PDOException;

class Connection 
{
    private static $instance;

    public static function getInstance(): PDO 
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    'mysql:
                        host='.DB_HOST.';
                        port='.DB_PORT.';
                        dbname='.DB_NAME,
                        DB_USER, 
                        DB_PASSWORD, [
                            // Garante que o charset do PDO seja o mesmo do banco de dados
                            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                            // Todo erro através da PDO será uma exceção
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            // Converte qualquer resultado em objeto anônimo
                            PDO::ATTR_DEFAULT_FETCH_MODE => 
                            PDO::FETCH_OBJ,
                            // Garante que o mesmo nome das colunas do banco seja utilizado
                            PDO::ATTR_CASE
                ]);
            } catch (PDOException $e) {
                die("Erro de conexão:: ".$e->getMessage());
            }
        }
        return self::$instance;
    }

    protected function __construct()
    {
        
    }

    private function __clone(): void
    {

    }
}