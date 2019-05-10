<?php
  include('includes/header.php');
  include('includes/session_check.php');
  require('classes/category.class.php');
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">Categories</h1>
    </div>
  </div>
  <?php
    $category = new Category();
    $categories = $category->get_all();
    if(count($categories)) {
      foreach($categories as $key => $cat) {
        $cat_image =  !empty($cat['category_image']) ? $cat['category_image'] : 'no_image.png';
  ?>
        <div class="row mb-5">
          <div class="col-lg-4">
            <img class="card-img-top" src="uploads/categories/<?=$cat_image?>" alt="<?=$cat['category_title']?>">
          </div>
          <div class="col-lg-8">
            <h2><?=$cat['category_title']?></h2>
            <p><?=$cat['category_description']?></p>
            <p><a href="products.php?category_id=<?=$cat['category_id']?>" class="btn btn-primary">Show Products</a></p>  
          </div>
        </div>
  <?php
      }
    } else {
  ?>
      <div class="alert alert-info">No category found.</div>
  <?php    
    }
  ?>

</div>
<?php
  include('includes/footer.php');
?>