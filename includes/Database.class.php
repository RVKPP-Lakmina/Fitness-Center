<?php
class Database
{
    private $host = 'localhost';
    private $db_name = 'fitnessCenter';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }

        return $this->conn;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getDbName()
    {
        return $this->db_name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getConn()
    {
        return $this->conn;
    }

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function setDbName($db_name)
    {
        $this->db_name = $db_name;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setConn($conn)
    {
        $this->conn = $conn;
    }

    public function __toString()
    {
        return "Host: {$this->host}, Database Name: {$this->db_name}, Username: {$this->username}, Password: {$this->password}";
    }
}
