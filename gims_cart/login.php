<?php
  include('includes/header.php');
  $cook_email = '';
  $cook_pwd = '';
  if(count($_COOKIE) && isset($_COOKIE['cook_email'])) { 
    $cook_email = $_COOKIE['cook_email'];
    $cook_pwd = $_COOKIE['cook_pwd'];
  }
  if(count($_SESSION) && isset($_SESSION['sess_is_logedin'])) { 
    $_SESSION['info'] = 1;
    $_SESSION['message'] = 'You are not allowed here!';
    header('location: dashboard.php');
    exit;
  }
  if(count($_POST)) { //check if the form is posted
    //data localize
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $chckrm = 0;
    if(isset($_POST['chckrm'])) { //remember me is posted
      $chckrm = 1;
    }
    //validate
    $error = '';
    if(empty($email)) {
      $error .= '<li>Email cannot be empty</li>';
    }
    if(empty($pwd)) {
      $error .= '<li>Password cannot be empty</li>';
    }

    //error checking
    if(empty($error)) {
      require('classes/user.class.php');
      $user = new User(0, '', '', $email, $pwd, $chckrm);
      $user->login();

    } else { //there are errors
      $_SESSION['error'] = 1;
      $_SESSION['message'] = '<ul>'.$error.'</ul>';
      header('location: login.php');
      exit;
    }
  }
?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4 jumbotron">
      <?php
        include('includes/messages.php');
      ?>
      <h1 class="display-4">Login</h1>
      <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" name="email" id="email" value="<?=$cook_email?>">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="pwd" id="pwd" value="<?=$cook_pwd?>">
        </div>
        <div class="form-check">
          <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="chckrm" value="1"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>
<?php
  include('includes/footer.php');
?>