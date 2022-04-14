<?php
    include_once './Models/Admin.php';

    class AdminController extends Admin {
        public function __construct()
        {
            parent::__construct();

            $method = 'list';
            if (isset($_GET['method'])) {
                $method = $_GET['method'];
            }

            switch ($method) {
                case 'list':
                    $this->index();
                    break;

                case 'create':
                    $this->create();
                    break;

                default:
                    echo "Page 404 not found";
                    break;
            }
        }

        public function index()
        {
            $results = parent::index();
            include_once './pages/view_admin.php';
        }

        public function create()
        {
            $categorys = parent::getCategory();
            $brands = parent::getBrand();
            if(isset($_REQUEST['create_product'])){
                echo '1111';
            }
            include_once './pages/add_admin.php';
        }


    }
