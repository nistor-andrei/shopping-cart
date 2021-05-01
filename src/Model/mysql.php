<?php
namespace Model;

include_once 'connectdb.php';
use Model\ConnectDb;

class Database extends ConnectDb
{
    public function createTable()
    {
        $pdo = $this->connectDB();
        $sql = "CREATE TABLE accounts (id INT(11),username VARCHAR(255),password VARCHAR(255),email VARCHAR(255))";
        $pdo->exec($sql);
    }
    public function createTableProduct()
    {
        $pdo = $this->connectProduct();
        $sql = "CREATE TABLE product (id_product INT(11) AUTO_INCREMENT,nume VARCHAR(255),price INT(11),currency VARCHAR(255),img VARCHAR(255))";
        $pdo->exec($sql);
    }
    public function insert()
    {
        $pdo = $this->connectProduct();
        $sql = "INSERT INTO product(nume, price,currency) VALUES('Iphone 11', 3200,'Lei'),('Galaxy S10',3100,'Lei'),('Asus ROG Phone 3',3400,'Lei')";
        $pdo->exec($sql);
    }
}

$db = new Database;
$db->insert();
