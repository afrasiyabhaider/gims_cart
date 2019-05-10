<?php
  include('includes/header.php');
  include('includes/session_check.php');
  require('classes/product.class.php');
  $product_id = 0;
  $product_price = 0;
  if(isset($_SESSION) && $_SESSION['sess_product_id']) {
    $product_id = $_SESSION['sess_product_id'];
    $product_price = $_SESSION['sess_product_price'];
    $product = new Product($product_id, '', '', '', 0, $product_price, 0, $_SESSION['sess_userid']);
    $product->change_product_quantity();
    $product->add_order();
    unset($_SESSION['sess_product_id']);
    unset($_SESSION['sess_product_price']);
  } else {
    header('location: products.php');
    exit;
  }
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">Order Successful</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="alert alert-success">
        Your order for the product id <?=$product_id?> with price <?=$product_price?> has been completed successfully.
      </div>
    </div>
  </div>
  <?php
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
  ?>
</div>
<?php
  include('includes/footer.php');
?>