<?php

class Connect {

    const HOST = 'localhost';
    const DBNAME = 'shop_shoes';
    const USER = 'root';
    const PASSW = '';
    protected $conn = NULL;


    public function __construct() {
        $dns = 'mysql:host='.self::HOST.';dbname='.self::DBNAME.';charset=utf8mb4';
        $this->conn = new PDO($dns, self::USER, self::PASSW);
    }
}