<?php
    include_once './config/Connect.php';

class Products extends Connect {
    public function __construct()
    {
        parent::__construct();
    }

    public function homePage() {
        $sql = 'SELECT
                    *
                FROM
                    `products`
                WHERE
                    products.status = 1  LIMIT 0,8';
        $pre = $this->conn->prepare($sql);
        $pre->execute();
        $result = $pre->fetchAll(PDO::FETCH_ASSOC);

        return  $result;
    }

    public function commingProduct() {
        $sql = 'SELECT
                    *
                FROM
                    `products`
                WHERE
                    products.status = 0  LIMIT 0,8';
        $pre = $this->conn->prepare($sql);
        $pre->execute();
        $comming = $pre->fetchAll(PDO::FETCH_ASSOC);

        return  $comming;
    }


    //Lấy ra thông tin sản phẩm
    public function getProduct_id($id){
        $sql = 'SELECT
                        *
                    FROM
                        `products`
                    WHERE
                        id = :id';
        $pre = $this->conn->prepare($sql);
        $pre->bindParam(':id',$id);
        $pre->execute();
        $detail = $pre->fetchAll(PDO::FETCH_ASSOC);

        return $detail;
    }


}

