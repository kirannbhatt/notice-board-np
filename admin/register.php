<?php
  session_start();
  require 'auth.php';
  require '../config/connect.php';
  $err = [];
  if(isset($_POST['signup'])) {
    if(isset($_POST['name']) && !empty(isset($_POST['name']))) {
      $name = $_POST['name'];
    } else {
      $err['name'] = 'Enter name';
    }
    if(isset($_POST['email']) && !empty(isset($_POST['email']))) {
      $email = $_POST['email'];
    } else {
      $err['email'] = 'Enter email';
    }
    if(isset($_POST['password']) && !empty(isset($_POST['password']))) {
      $password = md5($_POST['password']);
    } else {
      $err['password'] = 'Enter password';
    }
    if(count($err) == 0) {
      $sql = "INSERT INTO tbl_user(name, email, password) VALUES ('$name' ,'$email' ,'$password')";

      $result = mysqli_query($conn, $sql);

      if($result) {
        echo 'Click here to <a href="login.php">Login</a>';
      } else {
        foreach($err as $er) {
          echo $er;
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./adminStyles.css" >
  <title>ADMIN</title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <div class="text-center logo">
              <img src="../vendor/images/logo.png" />
            </div>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
                <label for="inputEmail">Name</label>
                <input type="text" name="name" id="inputEmail" class="form-control" placeholder="Name" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputEmail">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              </div>

              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="signup">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php require 'adminFooter.php'; ?>