<?php

namespace fundamentos\Model;
use fundamentos\Nucleo\Connection;

class PostModel 
{
    public function read(int $id = null): array
    {
        $where = ($id ? "WHERE id = {$id}" : '');

        $query = "SELECT * FROM posts {$where}";

        // Statement
        $stmt = Connection::getInstance()->query($query);

        $result = $stmt->fetchAll();

        return $result;
    }
}