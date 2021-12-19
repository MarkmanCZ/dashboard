<?php


class SignupAdminContr extends SignupAdmin{
    private $username;
    private $name;
    private $email;
    private $password;
    private $passwordCheck;

    public function __construct($user, $name, $email, $pwd, $pwdCheck) {
        $this->username = $user;
        $this->name = $name;
        $this->email = $email;
        $this->password = $pwd;
        $this->passwordCheck = $pwdCheck;
    }

    public function signupUser() {
        if($this->emptyInput() == false) {
            header("location: ../index.php?error=prazdno");
            exit();
        }
        if($this->invalidUsername() == false) {
            header("location: ../index.php?error=prezdivka");
            exit();
        }
        if($this->invalidEmail() == false) {
            header("location: ../index.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false) {
            header("location: ../index.php?error=hesla&neshoda");
            exit();
        }
        if($this->usernameTaken() == false) {
            header("location: ../index.php?error=prezdivkaemail&pouzit");
            exit();
        }

        $this->setUser($this->username, $this->name, $this->email, $this->password);
    }

    private function emptyInput() {
        if(empty($this->username) || empty($this->name) || empty($this->email) || empty($this->password) || empty($this->passwordCheck)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidUsername() {
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        if($this->password !== $this->passwordCheck) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function usernameTaken() {
        if(!$this->checkUser($this->username, $this->email)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}