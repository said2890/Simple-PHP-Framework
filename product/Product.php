<?php

require_once __DIR__ . '/../database/Database.php';

/**
 * Created by Said-Magomed Sadulaev.
 * User: said2890
 * Date: 28/08/2017
 * Time: 17:27
 */
class Product
{
    private $name;
    private $description;
    private $price;
    private $brand;
    private $category;

    public function __construct($name = NULL, $description = NULL, $price = NULL, $brand = NULL, $category = NULL)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->brand = $brand;
        $this->category = $category;
    }

    public function saveToDatabase(){
        $db = new Database;
        $stmt = $db->getConnection()->prepare('INSERT INTO products(name, description, price, brand, category) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('ssisi', $this->name, $this->description, $this->price, $this->brand, $this->category);
        if($stmt->execute()) {
            echo $stmt->error;
        }
        $db->closeConnection();
    }

    public function fetchFromDatabase($id) {
        $db = new Database;
        $query = "SELECT * FROM City ORDER by ID DESC LIMIT 150,5";

    }
}