<?php
namespace MyApp\database;
use \PDO;

class DbConnetion extends PDO{
    private $host = "localhost";
    private $database = "usercrud";
    private $user = "root";
    private $password = "";

    function __construct()
    {
        $dns = "mysql:host=$this->host;dbname=$this->database";
        try {
            parent::__construct($dns, $this->user, $this->password);
        } catch (\PDOException $e) {
            \file_put_contents('errors.txt', $e->getMessage()."\r\n", FILE_APPEND);
            die('Houve um erro de conexão com o banco de dados');
        }
    }
}