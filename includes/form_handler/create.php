<?php
  $mysqli = new mysqli("localhost","root","","zimcourier") or die("Could not connect");
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
      if(empty($error)) {
        $rand = rand(1,3);
        switch ($rand) {
          case "1":
            $profile_pic = "users/profile_pics/defaults/head_1.png";
            break;
          case "2":
            $profile_pic = "users/profile_pics/defaults/head_2.png";
            break;
          case "3":
            $profile_pic = "users/profile_pics/defaults/head_3.png";
            break;
        }
        $hashedPwd = md5($pwd);
        $sql = mysqli_query($mysqli, "INSERT INTO users VALUES('','$username','$email','$hashedPwd','$profile_pic','yes','0','Admin')");
        header("Location: ../../cms-admin.php?admin_created");
      }
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