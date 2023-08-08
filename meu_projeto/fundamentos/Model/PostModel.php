<?php

namespace fundamentos\Model;
use fundamentos\Nucleo\Connection;

class PostModel 
{
    /**
     * Função para buscar dados todos os dados da tabela posts
     * @return array
     */
    public function search(): array
    {
        $query = "SELECT * FROM posts";
        // Statement
        $stmt = Connection::getInstance()->query($query);
        $result = $stmt->fetchAll();

        return $result;
    }

    /**
     * Função para buscar dados por Id, retorna um objeto obtido pelo método fetch
     * @param int $id
     * @return bool
     * @return object
     */
    public function searchById(int $id): bool | object
    {
        $query = "SELECT * FROM posts WHERE id = {$id}";
        $stmt = Connection::getInstance()->query($query);
        $result = $stmt->fetch();

        return $result;
    }
}