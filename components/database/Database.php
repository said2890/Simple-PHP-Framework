<?php

require_once  __DIR__ . '/../../configuration.php';
/**
 * Created by PhpStorm.
 * User: ere09kfu
 * Date: 28/08/2017
 * Time: 16:52
 */
class Database
{
    public $conn;

    public function __construct(){
        // Create connection
        $conn = new mysqli(HOST, USER, PASSWORD);
        // Check connection
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }

    public function getConnection() {
        return $this->conn;
    }

}