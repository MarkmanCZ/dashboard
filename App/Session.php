<?php


class Session {

    public function __construct() {

    }

    public function setSession($array = array(), $session_name) {
        session_start();
        $_SESSION[$session_name] = $array;
    }

    public function destroy() {
        session_start();
        session_destroy();
    }

}