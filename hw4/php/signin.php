<?php 

include "connection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE username = '$username' AND password= '$password'";
$result= $mysqli->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();

        $_SESSION['logging'] = TRUE;
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['admin'] = 0;
        if ($row['admin'] == "1") {
            $_SESSION['admin'] = 1;
            header('location:../page.php');
        } else {
            header('location:../main.php');
        }
} else {
    echo "There is something wrong,try again to login in!";
}
?>
