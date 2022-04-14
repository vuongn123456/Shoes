<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container mt-5">
        <div class="cart_inner">
            <div class="table-responsive">
                <form action="" method="post">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $_SESSION['sum_price'] = 0;
                            if(!empty($_SESSION['carts'])){
                                foreach ($_SESSION['carts'] as $value){
                         ?>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="../assets/img/cart.jpg" alt="" />
                                                </div>
                                                <div class="media-body">
                                                    <p><?= $value['name']; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5><?= number_format($value['price']) ?><sup>đ</sup></h5>
                                        </td>
                                        <td>
                                            <input type="number" value="<?= $value['qty']; ?>" min="1" max="99">
                                        </td>
                                        <td>
                                            <h5>
                                                <?php
                                                    $item_sum = $value['price'] * $value['qty'];
                                                    echo number_format($item_sum);
                                                    $_SESSION['sum_price'] += $item_sum;
                                                ?>
                                                <sup>đ</sup>
                                            </h5>
                                        </td>
                                    </tr>
                        <?php
                                }
                            }
                        ?>

                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Coupon Code" />
                                        <a class="primary-btn" href="#">Apply</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>
                                        <?= number_format($_SESSION['sum_price']);?><sup>đ</sup>
                                    </h5>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="primary-btn" name="submit_cart" href="#">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->