<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "todoapp";

$connect = mysqli_connect($host, $user, $password);



if($connect){
    $_SESSION['db'] = "Connecting to database ";
}else {
    $_SESSION['error'] = "Disconnecting from database " . mysqli_connect_error($connect);
}

$sql = "CREATE DATABASE IF NOT EXISTS `todoapp`";

$result = mysqli_query($connect, $sql);

mysqli_close($connect);


$connect = mysqli_connect($host, $user, $password ,$database);

if($connect){
    $_SESSION['db'] = "Connecting to database ";
}else {
    $_SESSION['error']= "Disconnecting from database " . mysqli_connect_error($connect);
}

$sql = "CREATE TABlE IF NOT EXISTS `tasks`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` VARCHAR (255) NOT NULL
)";

$result = mysqli_query($connect, $sql);




