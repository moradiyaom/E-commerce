<?php
$sever = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

//start

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO `reg`(`username`, `email`, `phone number`, `password`) VALUES ('$name', '$email', '$phone', '$password')";



$result = mysqli_query($con , $sql);
if($result)
{
    echo "data submited";
}
else 
{
    echo "data not sumbmited";
}
?>