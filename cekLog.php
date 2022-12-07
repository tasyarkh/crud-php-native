<?php
session_start();
include_once("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$login