<?php
class Database {
    private $host = "127.0.0.1";
    private $dbname = "clasepdo";
    private $username = "root";
    private $password = "";
    private $connection;

    public function __construct(){
        try {
            $dsn = "mysql:host=127.0.0.1;port=3307;dbname={$this->dbname};charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->username, $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>