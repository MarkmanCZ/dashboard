<?php
    //Header include
    include 'header.php';
    if(isset($_SESSION['user_data'])) {
        //Main structure include
        include 'Templates/_profile-html.php';
    }else {
        header('location: ../index.php');
    }
    //Footer include
    include 'footer.php';
?>