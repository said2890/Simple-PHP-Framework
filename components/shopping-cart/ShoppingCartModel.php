<?php
    require_once __DIR__ . '/../database/Database.php';

    class ShoppingCart {

        private $products;

        public function __construct(){
            $products = array();
        }

        public function add($product_id, $quantity) {
            $products[$product_id] = $quantity;
        }

        public function remove($product_id) {
            unset($this->products[$product_id]);
        }

        public function update($product_id, $quantity) {
            $products[$product_id] = $quantity;
        }
        public function fetchAll() {
            return $this->products;
        }

        public function addToDatabase($user_id, $product_id, $quantity) {
            $db = new Database();
            $stmt = $db->getConnection()->prepare('INSERT INTO shopping_cart(userId, productId, quantity) VALUES (?, ?)');
            $stmt->bind_param('iii', $user_id, $product_id, $quantity);
            $stmt->execute();
            $db->closeConnection();
        }



    }
?>