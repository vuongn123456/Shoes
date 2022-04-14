<?php
    include_once '../config/Connect.php';

    class Admin extends Connect{
        public function __construct()
        {
            parent::__construct();
        }

        public function index(){
            $sql = "SELECT * FROM `products`;";
            $pre = $this->conn->prepare($sql);
            $pre->execute();
            $result = $pre->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }

        public function store($name, $quantity, $product_sold, $description, $category_id, $brand_id, $sale, $price, $status, $image) {
            $sql = "INSERT INTO `products`(
                            nam,
                            quantity,
                            product_sold,
                            description,
                            category_id,
                            brand_id,
                            sale
                            price,
                            status,
                            image
                            )
                            VALUES('$name','$quantity','$product_sold','$description','$category_id','$brand_id','$sale','$price','$status','$image');";
            $pre = $this->conn->prepare($sql);
            $pre->execute();
        }

        public function getBrand()
        {
            $sql = "SELECT id,name FROM `brand`;";
            $pre = $this->conn->prepare($sql);
            $pre->execute();
            $result = $pre->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }

        public function getCategory()
        {
            $sql = "SELECT id,name FROM `category`";
            $pre = $this->conn->prepare($sql);
            $pre->execute();
            $result = $pre->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        }
    }