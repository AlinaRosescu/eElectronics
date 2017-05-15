<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form action="#">
                        <input type="text" placeholder="Search products...">
                        <input type="submit" value="Search">
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <?php
                    foreach($products as $prod) {
                        $this->view('product/thumb',array('prod'=>$prod));
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                if(!empty($cart_products)) {
                                    foreach($cart_products as $cart_product) {
                                ?>
                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <form action="<?=base_url();?>cart" method="post">
                                            <input type="hidden" name="id_remove_cart" value="<?=$cart_product['id_product']?>" />
                                            <input type="submit" class="remove" value="X" />
                                        </form>
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="<?= base_url(); ?>product">
                                            <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail"
                                                 src="<?= base_url(); ?>public/img/products/product<?= $cart_product['id_image']; ?>.jpg">
                                        </a>
                                    </td>

                                    <td class="product-name">
                                        <a href="<?= base_url(); ?>product"><?= $cart_product['name']; ?></a>
                                    </td>

                                    <td class="product-price">
                                        <span class="amount"><?= $cart_product['price']; ?> Lei</span>
                                    </td>

                                    <td class="product-quantity">
                                        <div class="quantity buttons_added">
                                            <input type="button" class="minus" value="-">
                                            <input type="number" size="4" class="input-text qty text" title="Qty"
                                                   value="<?= $cart_product['quantity']; ?>" min="0" step="1">
                                            <input type="button" class="plus" value="+">
                                        </div>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="amount"><?= $subtotal = $cart_product['price'] * $cart_product['quantity']; ?> Lei</span>
                                    </td>
                                </tr>
                                <?php }
                                }
                                ?>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                <table cellspacing="0">
                                    <tbody>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount"><?php if(!empty($cart_products)) {echo $total = $subtotal + $subtotal;} ?> Lei</span></strong> </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

