<?php
  include('includes/header.php');
  include('includes/session_check.php');
  require('classes/product.class.php');
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">My Orders</h1>
    </div>
  </div>
  <?php
    $product = new Product(0, '', '', '', 0, 0, 0, $_SESSION['sess_userid']);
    $orders = $product->user_orders();
    if(count($orders)) {
  ?>
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Product</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
  <?php    
      foreach($orders as $key => $ord) {
        $price = number_format($ord['order_price'], 2);
  ?>
          <tr>
            <td><?=$key + 1?></td>
            <td><?=$ord['category_title']?></td>
            <td><?=$ord['product_title']?></td>
            <td>$<?=$price?></td>
          </tr>
  <?php     
      }
  ?>
      </tbody>
      </table>
  <?php    
    } else {
  ?>
      <div class="alert alert-info">No order found.</div>
  <?php    
    }
  ?>
</div>
<?php
  include('includes/footer.php');
?>