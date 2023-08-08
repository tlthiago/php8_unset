<?php

namespace fundamentos\Nucleo;

use PDO;
use PDOException;

class Conexao 
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
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                            PDO::ATTR_CASE
                ]);
            } catch (PDOException $e) {
                die("Erro de conexão:: ".$e->getMessage());
            }
            return self::$instance;
        }
    }

    protected function __construct()
    {
        
    }

    private function __clone(): void
    {

    }
}