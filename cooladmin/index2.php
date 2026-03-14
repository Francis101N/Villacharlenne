<?php
session_start();
include('connection/connect.php');

if (!isset($_SESSION['admin_user'])) {
    include('index.php');
    exit;
}
header("refresh:3;url=dashboard");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex,nofollow">
    <title>Welcome - VillaCharlenne Admin</title>

    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f5f5 0%, #e6e6e6 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-card {
            background: #fff;
            border-radius: 12px;
            padding: 40px 30px;
            max-width: 450px;
            width: 100%;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            text-align: center;
            animation: fadeInUp 0.6s ease;
            position: relative;
        }

        .welcome-card::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 15px;
            background: linear-gradient(135deg, #c9a96e, #b89452);
            z-index: -1;
            filter: blur(20px);
        }

        .welcome-icon {
            width: 80px;
            height: 80px;
            background: #c9a96e;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            margin: 0 auto 25px;
        }

        .welcome-card h3 {
            font-weight: 600;
            color: #222;
            margin-bottom: 10px;
        }

        .username {
            color: #c9a96e;
        }

        .welcome-card p {
            color: #555;
            font-size: 15px;
            line-height: 1.6;
        }

        .redirect-text {
            margin-top: 20px;
            font-size: 14px;
        }

        .redirect-text a {
            color: #c9a96e;
            font-weight: 600;
            text-decoration: none;
        }

        .redirect-text a:hover {
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="welcome-card">

        <div class="welcome-icon">✔</div>

        <h3>Welcome, <span class="username"><?php echo ucwords($_SESSION['admin_user']); ?></span></h3>

        <p>You are successfully logged in to the VillaCharlenne admin panel.</p>

        <p class="redirect-text">
            Redirecting to your dashboard in <strong>3 seconds</strong>.<br>
            If not redirected, <a href="dashboard">click here</a>.
        </p>

    </div>

</body>

</html>