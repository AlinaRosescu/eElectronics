<div class="single-product">
    <div class="product-f-image">
        <img src="<?=base_url();?>public/img/products/product<?=$lastproduct['id_image'];?>.jpg" alt="" >
        <div class="product-hover">
            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
            <a href="<?=base_url();?>product/<?=$lastproduct['id']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
        </div>
    </div>

    <h2><a href="<?=base_url();?>product/<?=$lastproduct['id']?>"><?=$lastproduct['name'];?></a></h2>

    <div class="product-carousel-price">
        <ins><?=$lastproduct['price'];?> Lei</ins>
    </div>
</div>