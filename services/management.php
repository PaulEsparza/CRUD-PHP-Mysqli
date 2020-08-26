<?php
include('../database/conection.php');

if(isset($_POST['saveTask'])){
    $responsable = $_POST['responsable'];
    $description = $_POST['description'];
    $query = "INSERT INTO tasks (responsable, description) VALUES ('$responsable', '$description');";
    $res = mysqli_query($conection, $query);
    if(!$res){
        die("error");
    }

    $_SESSION['message'] = "Task saved succesfully";
    $_SESSION['message_type'] = "success";

    header("Location:../index.php");
}

if(isset($_POST['getTask'])){
    $id = $_GET['id'];
    echo $id;
}

if(isset($_POST['deleteTask'])){
    $id = $_GET['id'];
    $query = "DELETE FROM tasks WHERE id = $id";
    $res = mysqli_query($conection, $query);

    if($res == 0){
        die("error");
    }

    $_SESSION['message'] = "Task removed succesfully";
    $_SESSION['message_type'] = "warning";

    header("Location:../index.php");
}

?>