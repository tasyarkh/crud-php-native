<?php

//nama host,user,password,database
$host = "localhost";
$user = "root";
$password = "";
$database = "php_native";

//mngkoneksikan db 
$connect = mysqli_connect($host,$user,$password,$database);

//percabangan
if($connect->connect_error){
    die("tidak dapat terkoneksi");
}

?>