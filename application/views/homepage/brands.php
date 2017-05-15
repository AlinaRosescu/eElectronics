<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <h2 class="section-title">Brands</h2>
                    <div class="brand-list">
                        <?php
                            foreach($brands as $brand) {
                        ?>
                        <img src="<?=base_url();?>public/img/brands/brand<?=$brand['id_image']?>.jpg" alt="" height="230" style="border-radius: 5px;">
                        <?php  }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>