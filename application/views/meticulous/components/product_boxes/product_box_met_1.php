
<!-- Single Portfolio Item -->
<div class="col-12 col-sm-6 col-lg-3 akame-portfolio-item <?=!empty($custom_category) ? $custom_category : ''?> mb-30 wow fadeInUp" data-wow-delay="200ms">
    <div class="akame-portfolio-single-item">
        <img src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" alt="">

        <!-- Overlay Content -->
        <div class="overlay-content d-flex align-items-center justify-content-center">
            <div class="overlay-text text-center">
                <h4><?php echo $title; ?></h4>
                <p>
                <?php if($this->crud_model->get_type_name_by_id('product',$product_id,'discount') > 0){ ?>
                    <del><?php echo currency($sale_price); ?></del>
                    <span itemprop="price"><?php echo currency($this->crud_model->get_product_price($product_id)); ?> </span>
                <?php } else { ?>
                    <span itemprop="price"><?php echo currency($sale_price); ?></span>
                <?php }?>
                </p>
                <p><?php echo $description; ?></p>
                <p> 
                    <span class="text-white btn" onclick="to_cart(<?php echo $product_id; ?>,event)">
                        <i class="fa fa-shopping-cart"></i>
                        <?php if($this->crud_model->is_added_to_cart($product_id)=="yes"){ 
                            echo translate('added_to_cart');  
                            } else { 
                            echo translate('add_to_cart');  
                            } 
                        ?>
                    </span>
                </p>
            </div>
        </div>

        <!-- Thumbnail Zoom -->
        <a href="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" class="thumbnail-zoom"><i class="icon_search"></i></a>
    </div>
</div> 