<?php

    if(isset($_POST['submit'])) {

        $username = $_POST['nickname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordCheck = $_POST['passwordConfirm'];

        //Controller
        include '../App/Database.php';
        include '../App/SignupAdmin.php';
        include '../App/SignupAdminContr.php';
        $signupAdmin = new SignupAdminContr($username, $name, $email, $password, $passwordCheck);

        //Running errors
        $signupAdmin->signupUser();

        //return
        header("location: ../index.php?error=none");
    }else {
        header("Location: ../index.php");
    }