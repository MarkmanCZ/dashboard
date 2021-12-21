<?php
    include 'header.php';
    if(isset($_SESSION['user_data'])) {
        if($_SESSION['user_data']['uGroup'] == user_admin) {

        }else if($_SESSION['user_data']['uGroup'] == user_normal);
    }else {
        header("location: ../index.php");
    }
    include 'footer.php';
?>