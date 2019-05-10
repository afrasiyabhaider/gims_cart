<?php
  if(!(count($_SESSION) && isset($_SESSION['sess_is_logedin']))) { 
    $_SESSION['info'] = 1;
    $_SESSION['message'] = 'You are not allowed here!';
    header('location: login.php');
    exit;
  }
?>