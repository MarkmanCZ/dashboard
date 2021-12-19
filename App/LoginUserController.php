<?php


class LoginUserController extends LoginUser{
    private $login_name;
    private $password;

    public function __construct($login_name, $password) {
        $this->login_name = $login_name;
        $this->password = $password;
    }

    public function loginUser() {
        if($this->emptyInput() == false) {
            header("location: ../login.php?error=prazdno");
            exit();
        }

        $this->getUser($this->login_name, $this->password);
    }

    private function emptyInput() {
        if(empty($this->login_name) || empty($this->password)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }
}