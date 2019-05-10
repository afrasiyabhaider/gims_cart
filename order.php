<?php
  include('includes/header.php');
  include('includes/session_check.php');
  require('classes/product.class.php');
  $product_id = 0;
  if(isset($_GET) && $_GET['product_id']) {
    $product_id = $_GET['product_id'];
    $product = new Product($product_id);
    $cproduct = $product->get_product();
    $_SESSION['sess_product_id'] = $product_id;
    $_SESSION['sess_product_price'] = number_format($cproduct['product_price'], 2);
  }
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">Order Confirmation</h1>
    </div>
  </div>
  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

    <!-- Identify your business so that you can collect the payments. -->
    <input type="hidden" name="business" value="merchant.mwt.815@gmail.com">

    <!-- Specify a Buy Now button. -->
    <input type="hidden" name="cmd" value="_xclick">

    <!-- Specify details about the item that buyers will purchase. -->
    <input type="hidden" name="item_name" value="<?=$cproduct['product_title']?>">
    <input type="hidden" name="amount" value="<?=$cproduct['product_price']?>">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="return" value="http://localhost/gims_cart/success.php">
    <input type="hidden" name="cancel_return" value="http://localhost/my_app/cancel.php">

    <!-- Display the payment button. -->
    <input type="image" name="submit" border="0"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="Buy Now">
    <img alt="" border="0" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

    </form>

  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Produt Id</th>
        <td><?=$product_id?></td>
      </tr>
      <tr>
        <th>Produt Title</th>
        <td><?=$cproduct['product_title']?></td>
      </tr>
      <tr>
        <th>Produt Description</th>
        <td><?=$cproduct['product_description']?></td>
      </tr>
      <tr>
        <th>Produt Price</th>
        <td>$<?=number_format($cproduct['product_price'], 2)?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php
  include('includes/footer.php');
?>