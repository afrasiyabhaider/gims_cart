<?php
  include('includes/header.php');
  if(count($_SESSION) && isset($_SESSION['sess_is_logedin'])) { 
    $_SESSION['info'] = 1;
    $_SESSION['message'] = 'You are not allowed here!';
    header('location: dashboard.php');
    exit;
  }
  if(count($_POST)) { //check if the form is posted
    //data localize
    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $email = $_POST['user_email'];
    $pwd = $_POST['user_password'];
    $re_pwd = $_POST['re_user_password'];
    //validate
    $error = '';
    if(empty($firstname)) {
      $error .= '<li>First name cannot be empty</li>';
    }
    if(empty($lastname)) {
      $error .= '<li>Last name cannot be empty</li>';
    }
    if(empty($email)) {
      $error .= '<li>Email cannot be empty</li>';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error .= '<li>Email is not valid</li>';
    }
    if(empty($pwd)) {
      $error .= '<li>Password cannot be empty</li>';
    } else if (strlen($pwd) < 6) {
      $error .= '<li>Password should be at least 6 characters long</li>';
    }
    if(empty($re_pwd)) {
      $error .= '<li>Re-Type password cannot be empty</li>';
    } else if ($re_pwd != $pwd) {
      $error .= '<li>Password mismatch</li>';
    }
    //error checking
    if(empty($error)) {
      require('classes/user.class.php');
      $user = new User(0, $firstname, $lastname, $email, $pwd);
      $user->signup();
    } else { //there are errors
      $_SESSION['error'] = 1;
      $_SESSION['message'] = '<ul>'.$error.'</ul>';
      header('location: signup.php');
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
      <h1 class="display-4">Signup</h1>
      <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label for="user_firstname">First Name:</label>
          <input type="text" class="form-control" name="user_firstname" id="user_firstname">
        </div>
        <div class="form-group">
          <label for="user_lastname">Last Name:</label>
          <input type="text" class="form-control" name="user_lastname" id="user_lastname">
        </div>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" name="user_email" id="user_email">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" name="user_password" id="user_password">
        </div>
        <div class="form-group">
          <label for="re_user_password">Re-Type Password:</label>
          <input type="password" class="form-control" name="re_user_password" id="re_user_password">
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
      </form>
    </div>
  </div>
</div>
<?php
  include('includes/footer.php');
?>