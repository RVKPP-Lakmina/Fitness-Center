<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'fitnessCenter';
    private $username = 'root';
    private $password = '';
    private $conn = null;

    private function connectToTheDatabase()
    {
        $connection = null;

        try {
            $connection = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        return $connection;
    }

    public function connect()
    {
        if ($this->conn == null) {
            $this->conn = $this->connectToTheDatabase();
        }

        return $this->conn;
    }

    public function close()
    {
        $this->conn->close();
    }
}
