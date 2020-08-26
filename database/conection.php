<?php

session_start();

$localhost = "localhost";
$user = "root";
$password = "";
$nameBD = "tblTasks";

$table = "tasks";

$conection = mysqli_connect(
    "$localhost",
    "$user",
    "$password",
    "$nameBD"
);

$conection -> set_charset("utf8");

/*
if(isset($conection)){
    echo "Conexion establecida";
}
*/

?>