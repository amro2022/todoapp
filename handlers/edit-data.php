<?php 

include '../database/maigration.php';


if($_SERVER['REQUEST_METHOD']  == 'POST' && isset($_POST['title'])){

    $title = htmlspecialchars(htmlentities(stripslashes(trim($_POST['title']))));

    $id = $_GET['id'];

    if(strlen($title) < 3){

        $_SESSION['errors'] = "Title  must be greater than 3 chars "; 
    }

    if(empty($_SESSION['errors'])){

        $sql = "UPDATE `tasks` SET `title`='$title' WHERE `id` = $id ";

        $result = mysqli_query($connect,$sql);

        if($result){
            
            $_SESSION['success'] = "Data edited Succefully !";
        }
    }else{
        header("location:../edit-data.php?id=$id");
        die;

    }

    header("location:../index.php");

}