<?php
  //$mysqli = new mysqli("localhost","root","","zimcourier") or die("Could not connect");
  $mysqli = new mysqli("remotemysql.com","sHnDaIhsBA","MzL7lPYIO8","sHnDaIhsBA") or die("Could not connect");
  $error = [];
  if(isset($_POST['create_submit'])) {
    $username = clean($_POST['username']);
    $email = clean($_POST['email']);
    $pwd = $_POST['pwd'];

    if(empty($username)) {
      array_push($error, "<div class='alert-box alert-box--error hideit'>
                    <p>Username Required</p>
                    <i class='fa fa-times alert-box__close'></i>
                </div> ");
      header("Location: ../../cms-admin.php?error=Username_is_required");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($error, "<div class='alert-box alert-box--error hideit'>
      <p>Email is invalid.</p>
      <i class='fa fa-times alert-box__close'></i>
  </div> </p>");
      header("Location: ../../cms-admin.php?error=Email_is_invalid");
    }elseif (empty($email)) {
      array_push($error, "<div class='alert-box alert-box--error hideit'>
      <p>Email is  Required</p>
      <i class='fa fa-times alert-box__close'></i>
  </div> ");
      header("Location: ../../cms-admin.php?error=Email_is_required");
    }elseif (strlen($pwd) <= 8) {
      array_push($error, "<div class='alert-box alert-box--error hideit'>
      <p>Password is too short.</p>
      <i class='fa fa-times alert-box__close'></i>
  </div> ");
      header("Location: ../../cms-admin.php?error=password_is_short");
    }
    else{
        $hashedPwd = md5($pwd);
        $sql = mysqli_query($mysqli, "INSERT INTO users VALUES('','$username','$email','$hashedPwd','yes')");
        header("Location: ../../cms-admin.php?admin_created");
      }
    }

  function clean($data) {
    global $mysqli;
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($mysqli, $data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
  }
