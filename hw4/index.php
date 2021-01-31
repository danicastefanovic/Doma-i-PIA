<?php include('php/signin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB</title>
    <link rel="stylesheet"href="css/style.css">
</head>
<body>
    <div class="container">
<form  action="php/signin.php" method="POST">
  
<h2>Registration</h2>
    <div class="input-group">
    <input type="text" placeholder="Enter your name" name="name" required>
</div>
<div class="input-group">
    <input type="text" placeholder="Enter your surname" name="surname" required>
</div>
<div class="input-group">
    <input type="text" placeholder="Enter your username" name="username" required>
</div>
<div class="input-group">
    <input type="text" placeholder="Enter your email" name="email" required>
</div>
    <div class="input-group">
    <input type="password" placeholder="Enter your password" name="password" required>
</div>
    <div class="input-group">
     <button type="submit" class="btn" name="register">Sign up</button>
</div>
   <p>
    Do you already have account? <a href="login.php">Sign in</a>
   </p>
</div>
</form>
</body>
</html>