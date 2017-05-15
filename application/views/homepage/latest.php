<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php
                        foreach($lastproducts as $lastproduct) {
                            $this->view('homepage/product',array('lastproduct'=>$lastproduct));
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>