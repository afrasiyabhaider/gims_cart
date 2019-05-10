<?php
    require_once('database.class.php');
    class Product extends Database {
        private $_id;
        private $_title;
        private $_description;
        private $_image;
        private $_quantity;
        private $_price;

        private $_category_id;
        private $_user_id;

        public function __construct($id = 0, $title = '', $description = '', $image = '', $quantity = 0, $price = 0, $category_id = 0, $user_id = 0) {
            parent::__construct();
            $this->_id = $id;
            $this->_title = $title;
            $this->_description = $description;
            $this->_image = $image;
            $this->_quantity = $quantity;
            $this->_price = $price;
            $this->_category_id = $category_id;
            $this->_user_id = $user_id;
        }

        public function get_all() {
            $where = ':id';
            $cid = 1;
            if($this->_category_id) {
                $where = 'category_id = :id';
                $cid = $this->_category_id;
            }
            $this->query('SELECT * FROM products WHERE '.$where);
            $this->bind(':id', $cid);
            return $this->total() ? $this->all() : [];
        }

        public function get_product() {
            $this->query('SELECT * FROM products WHERE product_id = :id');
            $this->bind(':id', $this->_id);
            return $this->total() ? $this->single() : [];
        }

        public function change_product_quantity() {
            $this->query('UPDATE products SET  product_quantity =  product_quantity - 1 WHERE product_id = :id');
            $this->bind(':id', $this->_id);
            $this->run();
        }

        public function add_order() {
            $this->query('INSERT INTO orders (
                order_price,
                product_id,
                user_id
            ) VALUES (
                :op,
                :id,
                :uid
            )');
            $this->bind(':op', $this->_price);
            $this->bind(':id', $this->_id);
            $this->bind(':uid', $this->_user_id);
            $this->run();
        }

        public function user_orders() {
            $this->query('SELECT 
                categories.category_title, 
                products.product_title, 
                orders.order_price
            FROM
                categories, products, orders
            WHERE
                categories.category_id = products.category_id AND
                products.product_id = orders.product_id AND
                orders.user_id = :uid');
            $this->bind(':uid', $this->_user_id);
            return $this->total() ? $this->all() : [];
        }
    }