<?php
session_start();
include "connection.php";
$email=$_SESSION['email'];
$pass=$_SESSION['pass'];
echo $email;
echo $pass;

?>