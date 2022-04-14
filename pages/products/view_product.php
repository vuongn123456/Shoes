<section class="owl-carousel active-product-area section_gap">

    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Latest Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>

                <?php if(isset($_SESSION['noti_cart']) && $_SESSION['noti_cart'] == 1){

                ?>

                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Notification!</strong>The product has been added to cart
                    <a href="index.php?page=order"><button class="btn btn-danger">See details</button></a>
                </div>

                <?php
                    unset($_SESSION['noti_cart']);
                    }
                ?>


            </div>
            <div class="row">
                <!-- single product -->
                        <?php
                            foreach ($results as $result) {
                                ?>
                            <div class="col-lg-3 col-md-6 mt">
                                <div class="single-product">
                                <img class="img-fluid" src="assets/img/product/<?php echo $result['image'];?>" alt="">
                                <div class="product-details">
                                <h6><?= $result['name']; ?></h6>
                                <div class="price">
                                    <h6><?= number_format($result['price'] - $result['price'] * $result['sale']).'₫';  ?></h6>
                                    <h6 class="l-through"><?= number_format($result['price']).'₫';  ?></h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="index.php?page=order&id=<?= $result['id'] ?>" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">Add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="index.php?page=product&method=detail&id=<?= $result['id'] ?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                                </div>
                                </div>
                            </div>
                         <?php  }

                        ?>
                <!-- single product -->

                        </div>
                    </div>
                </div>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Coming Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <?php
                foreach ($commings as $comming) {
                    ?>
                    <div class="col-lg-3 col-md-6 mt">
                        <div class="single-product">
                            <img class="img-fluid" src="assets/img/product/<?php echo $comming['image'];?>" alt="">
                            <div class="product-details">
                                <h6><?= $comming['name']; ?></h6>
                                <div class="price">
                                    <h6><?= number_format($comming['price'] - $comming['price'] * $comming['sale']).'₫';  ?></h6>
                                    <h6 class="l-through"><?= number_format($comming['price']).'₫';  ?></h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="index.php?page=product&method=detail&id=<?= $result['id'] ?>" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  }

                ?>
            </div>
                <!-- single product -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>