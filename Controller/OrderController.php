<?php

    include_once './Models/Order.php';

    class OrderController extends Order {
        public  function __construct()
        {
            parent::__construct();
            $this->orderProduct();
        }

        public function orderProduct(){
            if(isset($_GET['id'])){
                $id = (int)$_GET['id'];
                $order = parent::getProduct_id($id);

                if(!isset($_SESSION['carts']) && empty($_SESSION['carts'])){
                    $_SESSION['carts'][$id] = $order;
                    $_SESSION['carts'][$id]['qty'] = 1;
                } else {
                    if(array_key_exists($id, $_SESSION['carts'])){
                        $_SESSION['carts'][$id]['qty'] = $_SESSION['carts'][$id]['qty'] + 1;
                    }else{
                        $_SESSION['carts'][$id] = $order;
                        $_SESSION['carts'][$id]['qty'] = 1;
                    }
                }
                $_SESSION['noti_cart'] = 1;
            }
            include_once './pages/products/order_product.php';
        }
    }