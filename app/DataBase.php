<?php
use PDO;
class DataBase{
    const HOST = 'localhost';
    const USER = 'root';
    const PASS= '';
    const DB = 'reservas';
    private $connection;
    private $table;

    private function setConnection(){
       $this->connection = new PDO ('mysql:'.self::HOST.';dbnames'.self::DB.self::USER.self::PASS);
       $this-> connection -> setAtribute(PDO::ATTR  )
    }
    
}