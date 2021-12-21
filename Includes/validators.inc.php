<?php

if(isset($_GET['error'])) {
    if($_GET['error'] == 'prazdno') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Vyplň všechna pole !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'prezdivkaemail') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Přezdívka nebo email již použit, zvol si něco jiného !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'prezdivka') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Použij pouze velká a malá písmena, číslice !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'email') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Neplatný email !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'neshodahesel') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Hesla se neshodují !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'none') {
        ?>
        <div class="alert alert-success alert-dismissible fade show text-center m-2" role="alert">
            <p><?= getPageUrl()?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'spatneheslo') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Špatné heslo !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }
    if($_GET['error'] == 'neniuzivatel') {
        ?>
        <div class="alert alert-danger alert-dismissible fade show text-center m-2" role="alert">
            <p>Uživatel neexistuje !!</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    }



}

function getPageUrl() {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(str_contains($actual_link, "index.php")) {
        $message = 'Úspěšná registrace !!';
    }
    if(str_contains($actual_link, "profile.php")) {
        $message = 'Úspěšná změna údajů !!';
    }
    return $message;
}