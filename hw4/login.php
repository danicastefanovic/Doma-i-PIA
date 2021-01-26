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
<form method="POST" action="php/signin.php">
<h2>Login</h2>
    <div class="input-group">
    <input type="text" placeholder="Enter your user name or email" name="username">
</div>
    <div class="input-group">
    <input type="password" placeholder="Enter your password" name="password">
</div>
    <div class="input-group">
     <button type="submit" name="login" class="btn">Sign in</button>
</div>
   <p>
    Don't have account? <a href="index.php">Sign up</a>
   </p>
</div>
</form>
    
</body>
</html>
