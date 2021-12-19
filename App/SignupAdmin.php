<?php

class SignupAdmin extends Database {

    protected function setUser($username, $name, $email, $password) {
        $stmt = $this->connect()->prepare('INSERT INTO db_admin(uNick, uName, uEmail, uPassword, uGroup)
        VALUES(?,?,?,?,?);');

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute(array($username, $name,  $email, $hashedPwd, 10))) {
            $stmt = null;
            header("location: ../index.php?error=stmtproblem");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($username, $email) {
        $stmt = $this->connect()->prepare('SELECT * FROM db_admin WHERE uNick = ? OR uEmail = ?;');

        if(!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtproblem");
            exit();
        }
        if($stmt->rowCount() > 0) {
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

}