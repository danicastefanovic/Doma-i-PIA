<?php
session_start();

$name = filter_input(INPUT_POST, 'name');
$surname = filter_input(INPUT_POST, 'surname');
$username = filter_input(INPUT_POST, 'username');
$usermail = filter_input(INPUT_POST, 'usermail');
$password = filter_input(INPUT_POST, 'password');
if (!empty($name)){
if (!empty($surname)){
if (!empty($username)){
if (!empty($usermail)){
if (!empty($password)){


$host = "localhost";
$dbname="";
$dbsurname="";
$dbusername = "root";
$dbusermail="";
$dbpassword="";
$dbname = "registration";
// Create connection
$conn = new mysqli ($host,$dbname,$dbsurname, $dbusername,$dbusermail, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO users (name,surname,username,usermail, password)
    values ('$name','$surname','$username','$usermail','$password')";
    if ($conn->query($sql)){
        header('location:../admin/index.php');
    }
    else{
        echo "Error: ". $sql ."
        ". $conn->error;
        }
        $conn->close();
        }
    }
}
        }
        else{
        echo "Password should not be empty";
        header('location:../phpprojekat/login.php');
        die();
        }
        }
    }
        else{
        echo "Username should not be empty";
        header('location:../phpprojekat/login.php');
        die();
        }

?>