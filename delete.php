<?php

//include connectdb file
include_once("connect.php");

//get id
$id = $_GET['id'];

//query delete
$result = mysqli_query($connect, "DELETE FROM brg_masuk WHERE id = $id");

//setelah terhapus kembali ke index
header("Location:index.php");
?>