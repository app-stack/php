<?php

class Connexion
{
    const SERVER_NAME = "127.0.0.1";
    const USERNAME = "root";
    const PASSWORD = "";
    const DB_NAME = 'eglise';

    private static $instance = NULL;

    private ?PDO $conn = null;

    static public function getInstance()
    {
        if (self::$instance === NULL) {
            try {
                self::$instance = new Connexion();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$instance;
    }

    /*
     * Protected CTOR
     */
    protected function __construct()
    {
        $this->conn = new PDO("mysql:host=" . self::SERVER_NAME . ";dbname=" . self::DB_NAME, self::USERNAME, self::PASSWORD);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getConn(): PDO
    {
        return $this->conn;
    }
}