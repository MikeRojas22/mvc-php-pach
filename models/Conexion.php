<?php

class Conexion {
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct() {
        $this->host = 'localhost:3306';
        $this->db = 'Mexihat';
        $this->user = 'adminMexihat';
        $this->password = 'admin123';
    }

    function connect() {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;

            $pdo = new PDO($connection, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}


?>