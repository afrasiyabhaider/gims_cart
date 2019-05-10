<?php 
  session_start();
  require_once('config/config.php');
?>
<!DOCTYPE html>
<html lang="<?=SYS_LANG?>">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=SYS_TITLE?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Categories & Products CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><?=SYS_TITLE?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?php
              if(count($_SESSION) && isset($_SESSION['sess_is_logedin'])) { 
            ?>
                <li class="nav-item">
                  <a class="nav-link" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="categories.php">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="my_orders.php">My Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>  
            <?php   
              } else {
            ?>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="signup.php">Signup</a>
                </li>
            <?php    
              }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <br/>