<?php
    include_once './Models/Login.php';

    class  LoginController extends Login {
        public  function __construct()
        {
            parent::__construct();
            $this->loginAdmin();
//
//            if(isset($_GET['method'])) {
//                $method = $_GET['method'];
//            }else{
//                $method = 'login';
//            }
//
//            switch ($method) {
//                case 'login':
//                    $this->loginAdmin();
//                    break;
//
//                default:
//                    echo 'Page 404 not found';
//                    break;
//            }
        }

        public function loginAdmin()
        {
            if(isset($_REQUEST['submit_admin'])){
                $user =  $_REQUEST['user_admin'];
                $pass =  $_REQUEST['pass_admin'];
                $admins = parent::getAdmin($user,$pass);
                foreach ($admins as $admin){
                    echo "<pre>";
                    print_r($admins);
                    echo "</pre>";
                    echo $admin['email'];
                    echo $admin['password'];
                    if($user == $admin['email'] && $pass == $admin['password']){
                        echo "1111";
                        $_SESSION['admin'] = 1;
                    }
                }
            }
            include_once './pages/admin/admin_login.php';
        }
    }
