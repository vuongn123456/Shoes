<?php
    include_once './config/Connect.php';

    class Login extends Connect {
        public function __construct()
        {
            parent::__construct();
        }


        public function getAdmin($email,$pass)
        {
            $sql = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$pass';";
            $pre = $this->conn->prepare($sql);
            $pre->execute();
            $result = $pre->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }