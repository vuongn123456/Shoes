<?php
    include_once './config/Connect.php';

    class Order extends Connect {
        public function __construct()
        {
            parent::__construct();
        }


        //Lấy ra thông tin sản phẩm khách hàng muốn mua
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
            return $pre->fetch(PDO::FETCH_ASSOC);

        }
    }