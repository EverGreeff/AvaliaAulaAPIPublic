<?php

namespace App\DAO;

abstract class Conexao {

    /**
     * @var \PDO
     */
    protected $pdo;

    public function __construct()
    {
        $host = getenv('AVALIA_AULA_MYSQL_HOST');
        $port = getenv('AVALIA_AULA_MYSQL_PORT');
        $user = getenv('AVALIA_AULA_MYSQL_USER');
        $pass = getenv('AVALIA_AULA_MYSQL_PASSWORD');
        $dbname = getenv('AVALIA_AULA_MYSQL_DBNAME');

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}; charset=UTF8";

        $this->pdo = new \PDO($dsn, $user, $pass);

        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}