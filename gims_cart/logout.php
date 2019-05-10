<?php
  session_start();
  $type = 'info';
  $message = 'You are not allowed here!';
  if(count($_SESSION) && isset($_SESSION['sess_is_logedin'])) { 
    session_unset(); //It will not destroy session id
    $type = 'success';
    $message = 'Logout Successful!';
  }
  $_SESSION[$type] = 1;
  $_SESSION['message'] = $message;
  header('location: login.php');
  exit;
?>