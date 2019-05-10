<?php
    require_once('config/database.php');
    class Database {
        private $_host = DB_HOST;
        private $_name = DB_NAME;
        private $_user = DB_USER;
        private $_pw = DB_PW;

        private $_dbh;
        private $_stmt;

        public function __construct() {
            $dsn = 'mysql:host=' . $this->_host . ';dbname=' . $this->_name;
            $options = [
                PDO::ATTR_PERSISTENT => TRUE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            try {
                $this->_dbh = new PDO($dsn, $this->_user, $this->_pw, $options);
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function query($query = '') {
            $this->_stmt = $this->_dbh->prepare($query);
        }

        public function bind($placeholder, $value, $type = PDO::PARAM_STR) {
            $this->_stmt->bindValue($placeholder, $value, $type);
        }

        public function run() {
            return $this->_stmt->execute();
        }

        public function single() {
            $this->run();
            return $this->_stmt->fetch();
        }

        public function all() {
            $this->run();
            return $this->_stmt->fetchAll();
        }

        public function total() {
            $this->run();
            return $this->_stmt->rowCount();
        }
    }

    /*
    SELECT
        categories.category_id, 
        categories.category_title,
        products.product_title,
        products.product_quantity,
        products.product_price
    FROM
        categories, products
    WHERE
        categories.category_id = products.category_id
        AND products.product_price < 11
   */