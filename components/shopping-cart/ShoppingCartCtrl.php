<?php

session_start();

require_once __DIR__ . '/ShoppingCartModel.php';
require_once __DIR__ .'/../product/ProductsCtrl.php';

    class ShoppingCartCtrl {
        private $basket;

        public function __construct(){
            if(isset($_SESSION['shopping-cart'])) {
                $basket = $_SESSION['shopping-cart'];
            }
            else {
                $basket = new ShoppingCart;
                $_SESSION['shopping-cart'] = $basket;
            }
        }

        public function add($product_id, $quantity) {
            $this->basket->add($product_id, $quantity);
        }

        public function remove($product_id) {
            $this->basket->remove($product_id);
        }

        public function update($product_id, $quantity){
            $this->basket->update($product_id, $quantity);
        }

        public function getQuantity($product_id) {
            return $this->basket[$product_id];
        }

        public function getProductIds() {
            return array_keys($this->basket);
        }

        public function getProducts() {
            $productsCtrl = new ProductsCtrl;
            return $productsCtrl->getProducts($this->getProductIds());
        }

        public function renderView() {
            echo "<?php include __DIR__.'/shopping-cart/ShoppinCartView.php'; ?>";
        }


    }


?>