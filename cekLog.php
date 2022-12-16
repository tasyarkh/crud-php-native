<?php
session_start();
include_once("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if($cek>0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("Location:index.php");
    }

    elseif($data['level'] == "user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        header("Location:print.php");
    } else {
        header("Location:index.php?pesan=gagal");
    }
}
?>