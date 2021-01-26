<?

$title=$_POST["title"];
$description=$_POST["description"];
$genres=$_POST["genres"];
$director=$_POST["director"];
$writer=$_POST["writer"];
$productioncmp=$_POST["productioncmp"];
$stars=$_POST["stars"];
$release_date=$_POST["release_date"];
$image=$_POST["image"];
$running_time=$_POST["running_time"];

$sql="SELECT * FROM movies WHERE title='$tile'";
$result=$mysqli->query($sql);

if($result->num_rows >0){
    $error="You already add this movie";
} else {
    $sql="SELECT * FROM movies WHERE director='$director'";
    $result=$mysqli->query($sql);

    if($result->num_row >0){
        $error="Add another movie";
    } else {
        $sql="INSERT INTO movies (title,description,genres,director,writer,productioncmp,stars,release_date,image,running_time) VALUES ('$title','$description','$genres','$writer','$productioncmp','$stars','$release_date','$image','$running_date')";
        if($mysqli->query($sql)) {
            $_SESSION['message']="You add a movie";
        } else {
            $error="Something get wrong";
        }
    }
}
echo $error;
?>