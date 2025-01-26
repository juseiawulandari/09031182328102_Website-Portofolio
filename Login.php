<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: profile.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid_username = "juseia";
    $valid_password = "12345";

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Universitas Sriwijaya</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: url("http://localhost/PraktikumPW2/TugasPortofolio/UNSRI.jpg") no-repeat center center fixed;
      background-size: cover;
      background-color: rgba(0, 0, 0, 0.5); 
      background-blend-mode: darken;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .logo {
      margin-bottom: 20px;
    }

    .logo img {
      width: 100px;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    marquee {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .subtitle {
      font-size: 16px;
      margin-bottom: 20px;
      color: #666;
    }

    .login-container input {
      width: 100%;
      margin-bottom: 15px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .login-container button {
      width: 100%;
      background: #007bff;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background: #0056b3;
    }

    .forgot-password {
      display: block;
      margin-top: 10px;
      font-size: 14px;
      color: #007bff;
      text-decoration: none;
    }

    .forgot-password:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      margin-bottom: 15px;
      font-size: 14px;
    }

    footer {
      margin-top: 20px;
      font-size: 12px;
      color: #999;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="logo">
      <img src="http://localhost/PraktikumPW2/TugasPortofolio/Logo.png" alt="Logo Universitas Sriwijaya">
    </div>
    <marquee behavior="scroll" direction="left">SELAMAT DATANG DI UNIVERSITAS SRIWIJAYA</marquee>
    <?php if (!empty($error_message)): ?>
      <p class="error"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="" method="post">
      <input type="text" name="username" placeholder="Username / Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <a href="#" class="forgot-password">Forgot Password?</a>
    </form>
  </div>
</body>
</html>