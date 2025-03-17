<?php
require_once 'Database.class.php';
$database = new Database();
$conn = $database->connect();

class Api
{
    static function get($table, $id = null)
    {
        global $conn;
        $query = "SELECT * FROM $table";
        if ($id) {
            $query .= " WHERE id = $id";
        }
        $result = $conn->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    static function post($table, $data)
    {
        global $conn;
        $keys = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $query = "INSERT INTO $table ($keys) VALUES ($values)";
        $conn->query($query);
        return $conn->lastInsertId();
    }

    static function put($table, $id, $data)
    {
        global $conn;
        $set = '';
        foreach ($data as $key => $value) {
            $set .= "$key = '$value',";
        }
        $set = rtrim($set, ',');
        $query = "UPDATE $table SET $set WHERE id = $id";
        $conn->query($query);
        return $id;
    }

    static function delete($table, $id)
    {
        global $conn;
        $query = "DELETE FROM $table WHERE id = $id";
        $conn->query($query);
        return $id;
    }
}
