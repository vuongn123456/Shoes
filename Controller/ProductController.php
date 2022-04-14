<?php
    include_once './Models/Products.php';

    class ProductController extends Products {

        public  function __construct()
        {
            parent::__construct();

            if(isset($_GET['method'])) {
                $method = $_GET['method'];
            }else{
                $method = 'product';
            }

            switch ($method) {
                case 'product':
                    $this->homePage();
                    break;

                case 'detail' :
                    $this->detailProduct();

                default:
                    echo 'Page 404 not found';
                    break;
            }
        }

//        Home Page
    public function homePage() {
        $results = parent::homePage();
        $commings = parent::commingProduct();

        include_once './pages/products/view_product.php';
    }

//        Detail Product
    public function detailProduct()
    {
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $details = parent::getProduct_id($id);
        }

        include_once './pages/products/detail_product.php';
    }
}