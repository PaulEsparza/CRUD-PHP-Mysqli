<?php
include('../database/conection.php');

if(isset($_POST['saveTask'])){
    $responsable = $_POST['responsable'];
    $description = $_POST['description'];
    $query = "INSERT INTO $table (responsable, description) VALUES ('$responsable', '$description');";
    $res = mysqli_query($conection, $query);
    if(!$res){
        die("error");
    }

    $_SESSION['message'] = "Task saved succesfully";
    $_SESSION['message_type'] = "success";

    header("Location:../index.php");
}

if(isset($_POST['updateTask'])){
    $id = $_GET['id'];
    $responsable = $_POST['responsable'];
    $description = $_POST['description'];
    $query = "UPDATE $table SET responsable = '$responsable', description = '$description' WHERE id = $id;";
    $res = mysqli_query($conection, $query);
    if(!$res){
        die("error");
    }

    $_SESSION['message'] = "Task updated succesfully";
    $_SESSION['message_type'] = "success";

    header("Location:../index.php");
}

if(isset($_POST['deleteTask'])){
    $id = $_GET['id'];
    $query = "DELETE FROM $table WHERE id = $id";
    $res = mysqli_query($conection, $query);

    if($res == 0){
        die("error");
    }

    $_SESSION['message'] = "Task removed succesfully";
    $_SESSION['message_type'] = "warning";

    header("Location:../index.php");
}

?>