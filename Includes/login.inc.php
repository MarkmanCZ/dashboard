<?php

if(isset($_POST['submit'])) {

    $username = $_POST['login_name'];
    $password = $_POST['password'];

    //Classes inlcudes
    include '../App/Database.php';
    include '../App/LoginUser.php';
    include '../App/LoginUserController.php';
    $login = new LoginUserController($username, $password);

    //Running login
    $login->loginUser();

    //return
    header("location: ../index.php");
}else {
    header("Location: ../login.php");
}