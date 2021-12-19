<?php

include 'Config.php';

class Database {
    private $db_name = db_name;
    private $db_user = db_user;
    private $db_password = db_password;
    private $db_server = db_server;

    protected function connect() {
        try {
            $dbh = new PDO('mysql:host=' . $this->db_server. ';dbname=' . $this->db_name, $this->db_user, $this->db_password);
            return $dbh;
        }catch(PDOException $e) {
            print "Error!: " .$e->getMessage() . "<br/>";
            die();
        }
    }

}