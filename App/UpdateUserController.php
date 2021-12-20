<?php


class UpdateUserController extends UpdateUser {

    private $name;
    private $nickname;
    private $email;
    private $password;
    private $passwordConfirm;
    private $group;
    private $id;

    public function __construct($nickname, $name, $email, $password, $passwordConfirm,  $group, $id) {
        $this->nickname = $nickname;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirm = $passwordConfirm;
        $this->group = $group;
        $this->id = $id;
    }

    public function updateUser() {
        if($this->emptyInput() == false) {
            header("location: ../profile.php?error=prazdno");
            exit();
        }
        if(!empty($this->password)) {
            if($this->pwdMatch() == false) {
                header("location: ../profile.php?error=neshodahesel");
                exit();
            }
        }
        $this->updateUserData($this->nickname, $this->name, $this->email, $this->password, $this->group, $this->id);
        session_start();
        session_reset();
        $_SESSION['user_data'] = $this->getUser($this->id);
    }


    private function emptyInput() {
        if(empty($this->name) || empty($this->nickname) || empty($this->email) || empty($this->group)) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

    private function pwdMatch() {
        if($this->password !== $this->passwordConfirm) {
            $result = false;
        }else {
            $result = true;
        }
        return $result;
    }

}