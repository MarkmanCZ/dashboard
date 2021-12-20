<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['passwordConfirm'];
    $group = $_POST['group'];
    $id = $_POST['id'];

    //include all classes
    include '../App/Database.php';
    include '../App/UpdateUser.php';
    include '../App/UpdateUserController.php';

    //init classes
    $update = new UpdateUserController($nickname, $name, $email, $password, $passwordConfirm, $group, $id);

    //run function
    $update->updateUser();

    $_SESSION['user_data'] = $update->getUser($id);

    //return
    header("location: ../profile.php?error=none");
    exit();

}else {
    header("Location: ../profile.php?error=problem");
    exit();
}