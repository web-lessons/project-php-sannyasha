<?php
$host = "localhost";
$login = "блятская хуйня";
$password = "";
$database = "shop;"


$mysqli = mysqli_connect($host, $login, $password);

if($mysqli->connect_error){
    die("DB error");

}