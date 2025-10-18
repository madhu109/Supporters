<?php
session_start();
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = $conn->query($sql);
    if ($result && $result->num_rows) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['name'] = $user['name'];
            header('Location: chat.php');
            exit;
        } else {
            $error = 'Invalid credentials.';
        }
    } else {
        $error = 'User not found.';
    }
}
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Login - JusticeDesk</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
  body {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .container {
    background: #fff;
    padding: 40px 30px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  }

  h3 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
    font-weight: 600;
  }

  .form-control, .form-select {
    border-radius: 10px;
    padding: 12px 15px;
    border: 1px solid #ccc;
    transition: all 0.3s ease;
  }

  .form-control:focus, .form-select:focus {
    border-color: #2575fc;
    box-shadow: 0 0 8px rgba(37,117,252,0.3);
    outline: none;
  }

  .btn-primary {
    width: 100%;
    border-radius: 10px;
    padding: 10px;
    font-weight: 500;
    background: #2575fc;
    border: none;
    transition: all 0.3s ease;
  }

  .btn-primary:hover {
    background:rgb(82, 143, 240 );
  }

  .btn-link {
    display: block;
    text-align: center;
    margin-top: 10px;
    color: #2575fc;
    text-decoration: none;
  }

  .btn-link:hover {
    text-decoration: underline;
  }

  .alert-danger {
    border-radius: 10px;
    padding: 12px 15px;
    margin-bottom: 20px;
    font-size: 0.95rem;
  }

  @media (max-width: 576px) {
    .container {
      padding: 30px 20px;
    }
  }
</style>
</head>
<body class="p-4" style="background-image:url(../images/bg_1.jpg);">
<div class="container" style="max-width:420px;">
  <h3>Login</h3>
  <?php if(isset($error)): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
  <form method="post">
    <div class="mb-2"><input required name="email" type="email" class="form-control" placeholder="Email"></div>
    <div class="mb-2"><input required name="password" type="password" class="form-control" placeholder="Password"></div>
    <button class="btn btn-primary">Login</button>
    <a href="register.php" class="btn btn-link">Register</a>
  </form>
</div>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
</body>
</html>