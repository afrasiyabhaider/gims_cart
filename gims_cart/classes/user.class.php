<?php
    require_once('database.class.php');
    class User extends Database {
        private $_id;
        private $_firstname;
        private $_lastname;
        private $_email;
        private $_password;
        
        //remember me
        private $_chckrm;

        public function __construct($id = 0, $fname = '', $lname = '', $email = '', $pw = '', $chckrm = 0) {
            parent::__construct();
            $this->_id = $id;
            $this->_firstname = $fname;
            $this->_lastname = $lname;
            $this->_email = $email;
            $this->_password = $pw;
            $this->_chckrm = $chckrm;
        }

        public function login() {
            if(!empty($this->_email) && !empty($this->_password)) {
                $this->query('SELECT * FROM users WHERE user_email = :email AND user_password = :pw');
                $this->bind(':email', $this->_email);
                $this->bind(':pw', $this->_password);
                
                $type = 'info';
                $message = 'No such user exists!';
                $page = 'login';
                if($this->total()) {
                    $user = $this->single();
                    $_SESSION['sess_is_logedin'] = 1;
                    $_SESSION['sess_userid'] = $user['user_id'];
                    $_SESSION['sess_firstname'] = $user['user_firstname'];
                    $_SESSION['sess_lastname'] = $user['user_lastname'];
                    $_SESSION['sess_email'] = $user['user_email'];
                    if($this->_chckrm) {
                        setcookie('cook_email', $this->_email, time() + 3600);
                        setcookie('cook_pwd', $this->_password, time() + 3600);
                    }
                    $type = 'success';
                    $message = 'Login Successful!';
                    $page = 'dashboard';
                } 
                $_SESSION[$type] = 1;
                $_SESSION['message'] = $message;
                header('location: '.$page.'.php');
                exit;
            }
        }

        public function signup() {
            if($this->alreay_exists()) {
                $_SESSION['info'] = 1;
                $_SESSION['message'] = 'Email already exists';
                header('location: signup.php');
                exit;
            } else {
                $this->query('INSERT INTO users (user_firstname, user_lastname, user_email, user_password) VALUES (:fname, :lname, :email, :pwd)');
                $this->bind(':fname', $this->_firstname);
                $this->bind(':lname', $this->_lastname);
                $this->bind(':email', $this->_email);
                $this->bind(':pwd', $this->_password);
                $this->run();
                $this->login();
            }
        }

        public function alreay_exists() {
            $this->query('SELECT * FROM users WHERE user_email = :email');
            $this->bind(':email', $this->_email);
            if($this->total()) {
                return true;
            }
            return false;
        }
    }