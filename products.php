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
      <h1 class="display-4">Products</h1>
    </div>
  </div>
  <?php
    $product = new Product();
    $products = $product->get_all();
    if(count($products)) {
      foreach($products as $key => $pro) {
        $price = number_format($pro['product_price'], 2);
        $pro_image =  !empty($pro['product_image']) ? $pro['product_image'] : 'no_image.png';
        if($key % 4 == 0) {
  ?>
          <div class="row text-center">
  <?php
        }
  ?>        
            <div class="col-lg-3 col-md-6 mb-4">
              <div class="card">
                <img class="card-img-top" src="uploads/products/<?=$pro_image?>" alt="<?=$pro['product_title']?>">
                <div class="card-body">
                  <h4 class="card-title"><?=$pro['product_title']?></h4>
                  <p class="card-text"><?=$pro['product_description']?></p>
                  <p>
                    <span class="badge badge-primary p-2">PRICE $<?=$price?></span>
                    <span class="badge badge-secondary p-2">QUANTITY <?=$pro['product_quantity']?></span>
                  </p>
                </div>
                <div class="card-footer">
                  <a href="order.php?product_id=<?=$pro['product_id']?>" class="btn btn-success">Place Order</a>
                </div>
              </div>
            </div>
  <?php
        if(($key+1) % 4 == 0) {
  ?>      
          </div>
  <?php
        }
      }
    } else {
  ?>
      <div class="alert alert-info">No product found.</div>
  <?php    
    }
  ?>
</div>
<?php
  include('includes/footer.php');
?>