<?php 

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'Mg Mg' && $password == '123') {
    $_SESSION['auth'] = true;
    $_SESSION['status'] = "Login Success.";
    header("Location: home.php");
} else {
    $_SESSION['auth'] = false;
    $_SESSION['error'] = "Username or password is incorrect";
    header('Location: index.php');
}