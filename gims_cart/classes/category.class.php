<?php
    require_once('database.class.php');
    class Category extends Database {
        private $_id;
        private $_title;
        private $_description;
        private $_image;

        public function __construct($id = 0, $title = '', $description = '', $image = '') {
            parent::__construct();
            $this->_id = $id;
            $this->_title = $title;
            $this->_description = $description;
            $this->_image = $image;
        }

        public function get_all() {
            $this->query('SELECT * FROM categories WHERE :flag');
            $this->bind(':flag', 1);
            return $this->total() ? $this->all() : [];
        }

        public function get_category() {
            $this->query('SELECT * FROM categories WHERE category_id = :id');
            $this->bind(':id', $this->_id);
            return $this->total() ? $this->single() : [];
        }
    }