<?php
    session_start();
    ob_start();
//    session_destroy();

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }else{
        $page = 'product';
    }
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<!-- Head -->
	<?php
		include_once 'includes/head.php';
	?>
<!-- End head -->
<body>

	<!-- Start Header Area -->
	<?php
		include_once 'layout/header.php';
	?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<?php
        if($page == 'product'){
            include_once 'layout/banner.php';
            include_once 'layout/features.php';
            include_once 'layout/category.php';
        }
	?>
                <?php
                    switch ($page) {
                        case 'product':
                            include_once './Controller/ProductController.php';
                            $product = new ProductController;
                            break;

                        case 'order':
                            include_once './Controller/OrderController.php';
                            $order = new OrderController();
                            break;

                        case 'login':
                            include_once './Controller/LoginController.php';
                            $admin = new LoginController();
                            break;


                        default:
                            echo 'Page 404 not found';
                            break;
                    }
                ?>
	<?php
        if($page == 'product'){
            include_once 'layout/deal.php';
            include_once 'layout/brand.php';
            include_once 'layout/related-product.php';
        }
	?>

	<?php
		include_once 'layout/footer.php';
	?>
	<!-- End footer Area -->

	<!-- Script -->
	<?php
		include_once 'includes/script.php';
	?>
	<!-- End script -->
</body>

</html>