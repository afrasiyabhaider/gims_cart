<?php 
  if(isset($_SESSION['error'])) {
?>
  <div class="alert alert-danger" role="alert">
    <?=$_SESSION['message']?>
  </div>
<?php 
  }
  if(isset($_SESSION['info'])) { 
?>
    <div class="alert alert-info" role="alert">
      <?=$_SESSION['message']?>
    </div>
<?php    
  }
  if(isset($_SESSION['success'])) { 
?>
    <div class="alert alert-success" role="alert">
      <?=$_SESSION['message']?>
    </div>
<?php    
  }
  if(isset($_SESSION['message'])) {
    unset($_SESSION['message']);
    if(isset($_SESSION['error'])) {
      unset($_SESSION['error']);
    }
    if(isset($_SESSION['success'])) {
      unset($_SESSION['success']);
    }
    if(isset($_SESSION['info'])) {
      unset($_SESSION['info']);
    }
  }
?>