<?php
include "../php/connection.php";


$title = $mysqli->real_escape_string(strip_tags($_POST["title"]));
$description = $mysqli->real_escape_string(strip_tags($_POST["description"]));
$genres = $mysqli->real_escape_string(strip_tags($_POST["genres"]));
$director = $mysqli->real_escape_string(strip_tags($_POST["director"]));
$writer = $mysqli->real_escape_string(strip_tags($_POST["writer"]));
$productioncmp = $mysqli->real_escape_string(strip_tags($_POST["productioncmp"]));
$stars = $mysqli->real_escape_string(strip_tags($_POST["stars"]));
$date = $mysqli->real_escape_string(strip_tags($_POST["date"]));
$image = $mysqli->real_escape_string(strip_tags($_POST["image"]));
$time = $mysqli->real_escape_string(strip_tags($_POST["time"]));

$sql = "SELECT * FROM movies WHERE title = '$title' AND description='$description'";
$result = $mysqli->query($sql);
if($result->num_rows > 0) {
    $error = "You added this movie";
} else {
    $sql = "INSERT INTO movies (title, description,genres, director, writer, productioncmp, stars, date, image, time) VALUES ('$title', '$description', '$genres', '$director', '$writer', '$productioncmp', '$stars', '$date', '$image', '$time')";

    if($mysqli->query($sql)) {
        $_SESSION['message'] = "You sent the movie in database successfully";
        header('location:newMovie.php?title=' . $title);
    } else {
        $error = " Something get wrong. :(";
    }
}

echo $error;
?>