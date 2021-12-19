<?php

include 'Session.php';

class LoginUser extends Database{

    private $session;

    protected function getUser($login_name, $password) {
        $stmt = $this->connect()->prepare("SELECT uPassword FROM db_admin WHERE uNick = ? OR uEmail = ?;");

        //to do repair login thru email not working
        if(!$stmt->execute(array($login_name, $password))) {
            $stmt = null;
            header("location: ../login.php?error=stmtproblem");
            exit();
        }
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=neniuzivatel");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $pwdHashed[0]['uPassword']);

        if($checkPassword == false) {
            $stmt = null;
            header("location: ../login.php?error=spatneheslo");
            exit();
        }else if($checkPassword == true) {
            $stmt = $this->connect()->prepare("SELECT * FROM db_admin 
            WHERE uNick = ? OR uEmail = ? AND uPassword = ?;");

            if(!$stmt->execute(array($login_name, $login_name, $password))) {
                $stmt = null;
                header("location: ../login.php?error=stmtproblem");
                exit();
            }
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=neniuzivatel");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $this->session = new Session();
            $this->session->setSession($user[0], "user_data");
            $stmt = null;
        }

        $stmt = null;
    }

}