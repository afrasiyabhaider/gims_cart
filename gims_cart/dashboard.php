<?php
  include('includes/header.php');
  include('includes/session_check.php');
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">Dashboard (<?=$_SESSION['sess_firstname']?>)</h1>
    </div>
  </div>
</div>
<?php
  include('includes/footer.php');
?>