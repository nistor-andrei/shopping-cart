<?php

namespace Model;

use PDO;

class ConnectDb
{
    public static function connectDB()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'accounts';
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Conectat
            return $conn;
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }
    }
    public static function connectProduct()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'product';
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Conectat
            return $conn;
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }

    }
}
