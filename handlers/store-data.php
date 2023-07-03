<?php

include '../database/maigration.php';

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title'])){
    
    $title = htmlspecialchars(htmlentities(stripslashes(trim($_POST['title']))));

    if(strlen($title) < 3){
        $_SESSION['errors'] = "Title  must be greater than 3 chars "; 
    }

   if(empty($_SESSION['errors'])){

    $sql = "INSERT INTO `tasks`(`title`) VALUES ('$title')";

    $result = mysqli_query($connect,$sql);

    if (mysqli_affected_rows($connect)== 1){
       $_SESSION['success'] = "Data inserted Successfuly!";
    }
   }
    header('location:../index.php');

}