<?php

include '../database/maigration.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "SELECT * FROM `tasks` WHERE `id` = '$id'";

    $result =mysqli_query($connect,$sql);

    $row = mysqli_fetch_row($result);

    if(!$row){

        $_SESSION['errors'] = "Data not Exists !";

    }else{

        $sql = "DELETE FROM `tasks` WHERE `id` = '$id'";

        $result = mysqli_query($connect,$sql);
        
        $_SESSION['success'] = "Data deleted Successfuly!";

    }

    header('location:../index.php');
}

