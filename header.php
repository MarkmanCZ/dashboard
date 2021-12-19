<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASAHBOARD</title>

    <!-- CSS LINK -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- !CSS LINK! -->
    <?php include 'App/Config.php';?>
    <?php session_start();?>
</head>
<body>
    <!-- NAV -->
    <div class="navbar navbar-expand-md navbar-dark bg-dark p-2">
        <a href="index.php" class="navbar-brand">DASHBOARD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
            <?php
                if(isset($_SESSION['user_data'])) {
                    if($_SESSION['user_data']['uGroup'] == 10) {
                ?>
                    <li class="nav-item">
                        <a href="/dashboard.php" class="nav-link text-white fw-bolder">dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile.php" class="nav-link text-white fw-bolder">profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="includes/logout.inc.php" class="btn btn-primary text-white fw-bolder">logout</a>
                    </li>
                <?php
                        }else {
                ?>
                        <li class="nav-item mx-md-2 my-2 my-md-0">
                            <a href="/profile.php" class="btn btn-primary text-white fw-bolder">profile</a>
                        </li>
                        <li class="nav-item mx-md-2 my-2 my-md-0">
                            <a href="/profile.php" class="btn btn-primary text-white fw-bolder">logout</a>
                        </li>

                <?php
                        }
                    }else {
                ?>
                    <li class="nav-item">
                        <a href="/index.php" class="nav-link text-white fw-bolder">home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login.php" class="btn btn-primary text-white fw-bolder">login</a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- !NAV! -->