<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB</title>
    <link rel="stylesheet"href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
<div class="look">
<div class="wrapper">
<nav class="navbar navbar-expand-lg navbar-light ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav">
        <li class="nav-item ">
          <li class="nav-item ">
            <a class="nav-link" href="main.php">Home </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../admin/newMovie.php">Add new movie</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../admin/updateInfo.php">Update information</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#about">Delete movies</a>
          </li>
          <a class="nav-link" href="../login.php">Logout</a>
          </li>
          

        </ul>
      </div>
    </nav>
    </div>
    <div class="color">
    <form class="register-form" action="actions/register.php" method="POST">
        <h1>Add new movie</h1>
        <input class="btw" type="text" name="title" placeholder="Title">
        <input class="desc" type="text" name="description" placeholder="Description"> 
        <div class="btw1">
        <label for="genr">Choose a genrs:</label>
  <select id="genrs" name="genrs">
    <option value="action">action</option>
    <option value="adventure">adventure</option>
    <option value="animation">animation</option>
    <option value="biography">biography</option>
    <option value="animation">animation</option>
    <option value="comedy">comedy</option>
    <option value="drama">drama</option>
    <option value="fantasy">fantasy</option>
    <option value="romance">romance</option>
    <option value="history">history</option>
    <option value="horror">horror</option>
    <option value="music">music</option>
  </select> </div>
        <input class="btw" type="text" name="director" placeholder="Director"> 
        <input class="btw" type="text" name="writer" placeholder="Writer">
        <input class="btw" type="text" name="production" placeholder="Production Company">
        <input class="btw" type="text" name="act" placeholder="Stars">
        <input class="btw" type="date" name="date" placeholder="Release date">
        <div class="btw1">
        <form action="upload.php" method="post" enctype="multipart/form-data">
                 Select image to upload:
         <input type="file" name="fileToUpload" id="fileToUpload">
         <input type="submit" value="Upload Image" name="submit">
         <input class="btw" type="time" name="time" placeholder="Running time">
               <button type="submit" class="btw1"><a href="../admin/index.php">POST</button>
        </form> </div>
        
    </form>
      
    </div>
</div>
</body>
</html>