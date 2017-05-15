<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <a href="<?=base_url();?>product/<?=$product['id']?>">
                <img src="<?=base_url();?>public/img/products/product<?=$product['id_image']?>.jpg" alt="" height="300">
            </a>
        </div>
        <h2><a href="<?=base_url();?>product/<?=$product['id']?>"><?=$product['name']?></a></h2>
        <div style="min-height: 70px;">
            <h5><?=$product['description']?></h5>
        </div>

        <div class="product-carousel-price">
            <ins><?=$product['price']?> Lei</ins>
        </div>
        <div class="product-option-shop">
            <form action="<?=base_url();?>cart" method="post">
                <input type="hidden" name="id_product_cart" value="<?=$product['id']?>" />
                <input type="hidden" name="name_cart" value="<?=$product['name']?>" />
                <input type="hidden" name="price_cart" value="<?=$product['price']?>" />
                <input type="hidden" name="id_image_cart" value="<?=$product['id_image']?>" />
                <input type="submit" class="add_to_cart_button" value="Add to cart">
            </form>
        </div>
    </div>
</div>