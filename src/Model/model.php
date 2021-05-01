<?php

namespace Model;

include_once 'connectdb.php';
use Model\ConnectDb;

class Model
{
    public static function getProductById(int $id)
    {
        $pdo = ConnectDb::connectProduct();

        try {
            $data = [
                'id_product' => $id,
            ];
            $sql = ("SELECT * FROM product WHERE id_product=:id_product");
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Nu se poate executa $sql" . $e->getMessage();
        }
    }
    public static function getUserByUsername(string $username)
    {
        $pdo = ConnectDb::connectDB();

        try {
            $data = [
                'username' => $username,
            ];
            $sql = ("SELECT * FROM accounts WHERE username=:username");
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Nu se poate executa $sql" . $e->getMessage();
        }
    }
    public static function insertAccount(string $username, string $password, string $email)
    {
        $pdo = ConnectDb::connectDB();

        try {
            $data = [
                'username' => $username,
                'password' => $password,
                'email' => $email,
            ];
            $sql = ("INSERT INTO accounts(username,password,email) VALUES(:username,:password,:email)");
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);
        } catch (PDOException $e) {
            echo "Nu se poate executa $sql" . $e->getMessage();
        }
    }
    public static function getInfo()
    {
        $pdo = ConnectDb::connectProduct();
        $data = $pdo->query("SELECT * FROM product ")->fetchAll();
        return $data;
    }
}
