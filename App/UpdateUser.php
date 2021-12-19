<?php


class UpdateUser extends Database{

    protected function updateUserData($username, $name, $email, $password, $group, $id) {
        //hash pwd
        $pwdHashed = password_hash($password, PASSWORD_DEFAULT);
        if(!empty($password)) {
            $sql = "UPDATE db_admin SET uNick=:nick, uName=:name, uEmail=:email, uPassword=:password, uGroup=:group WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $run = $stmt->execute(array(":nick"=>$username, ":name"=>$name, ":email"=>$email, ":password"=>$pwdHashed, ":group"=>$group, ":id"=>$id));
        }else if(empty($password)) {
            $sql = "UPDATE db_admin SET uNick=:nick, uName=:name, uEmail=:email, uGroup=:group WHERE id=:id";
            $stmt = $this->connect()->prepare($sql);
            $run = $stmt->execute(array(":nick"=>$username, ":name"=>$name, ":email"=>$email, ":group"=>$group, ":id"=>$id));
        }


    }
    //repair
    protected function getUser() {
        $stmt = $this->connect()->prepare("SELECT * FROM db_admin;");
        return $user[0] = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}