<?php
ini_set('display_errors', 0);
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>VillaCharlenne Admin</title>

  <link href="css_login/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #98FF98;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* login wrapper */

    .login-wrapper {
      width: 100%;
      max-width: 420px;
      padding: 20px;
    }

    /* login card */

    .login-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 45px 35px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
    }

    /* logo */

    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-logo img {
      width: 170px;
    }

    /* title */

    .login-title {
      text-align: center;
      font-size: 18px;
      font-weight: 500;
      color: #c9a96e;
      margin-bottom: 30px;
    }

    /* inputs */

    .form-control {
      height: 48px;
      border-radius: 6px;
      border: 1px solid #ddd;
      padding-left: 15px;
      margin-bottom: 20px;
    }

    .form-control:focus {
      border-color: #c9a96e;
      box-shadow: none;
    }

    /* button */

    .btn-login {
      width: 100%;
      height: 48px;
      border: none;
      border-radius: 6px;
      background: blue;
      color: #fff;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #b89452;
      color: white;
    }

    /* alert */

    .alert {
      border-radius: 6px;
      font-size: 14px;
    }

    /* mobile */

    @media(max-width:576px) {

      .login-card {
        padding: 35px 25px;
      }

    }
  </style>
</head>

<body>

  <div class="login-wrapper">

    <form action="proc-login.php" method="post">

      <div class="login-card">

        <div class="login-logo">
          <img src="../dist/images/BBR_logo-removebg-preview-removebg-preview.png" alt="VillaCharlenne">
        </div>

        <div class="login-title">
          VillaCharlenne Admin Portal
        </div>

        <?php
        if (isset($error)) {
          echo '<div class="alert alert-danger text-center">' . $error . '</div>';
        }
        ?>

        <input type="text" name="username" placeholder="Username" class="form-control" required>

        <input type="password" name="password" placeholder="Password" class="form-control" required>

        <button type="submit" name="btn" class="btn btn-login">
          Login
        </button>

      </div>

    </form>

  </div>

  <script src="css_login/bootstrap.min.js"></script>

</body>

</html>