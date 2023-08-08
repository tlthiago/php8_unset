<?php

namespace fundamentos\Model;
use fundamentos\Nucleo\Connection;

class PostModel 
{
    public function read(): array
    {
        $query = "SELECT * FROM posts";

        // Statement
        $stmt = Connection::getInstance()->query($query);

        $result = $stmt->fetchAll();

        return $result;
    }
}