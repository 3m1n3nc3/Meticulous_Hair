
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
     <!--            
<div class="product-box-4" itemscope itemtype="http://schema.org/Product">
    <div class="btns">
        <span class="btn" onclick="quick_view('<?php echo $this->crud_model->product_link($product_id,'quick'); ?>')"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php  echo translate('quick_view'); ?>">
            <i class="fa fa-eye"></i>
        </span>
        <span class="btn" onclick="to_wishlist(<?php echo $product_id; ?>,event)"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php if($this->crud_model->is_wished($product_id)=="yes"){ echo translate('added_to_wishlist'); } else { echo translate('add_to_wishlist'); } ?>">
            <i class="fa fa-heart"></i>
        </span>
        <span class="btn" onclick="do_compare(<?php echo $product_id; ?>,event)"
                data-toggle="tooltip" data-placement="right" data-original-title="<?php if($this->crud_model->is_compared($product_id)=="yes"){ echo translate('compared'); } else { echo translate('compare'); } ?>">
            <i class="fa fa-exchange"></i>
        </span>
    </div>
    <div class="img">
        <a href="<?php echo $this->crud_model->product_link($product_id); ?>" class="d-block">
            <img src="<?php echo img_loading(); ?>" alt="" class="image_delay" data-src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>">
        </a>
    </div>
    <div class="info">
        <h4 class="caption-title">
            <a itemprop="url" href="<?php echo $this->crud_model->product_link($product_id); ?>">
                <span itemprop="name"><?php echo $title; ?></span>
            </a>
        </h4>
        <?php $rating = $this->crud_model->rating($product_id); ?>
        <?php $rating_count = $this->crud_model->rating_count($product_id); ?>
        <span style="display: none" itemprop="ratingValue"><?= $rating?></span>
        <span style="display: none" itemprop="reviewCount"><?= $rating_count?></span>
        <div class="rateit" data-rateit-value="<?= $rating ?>" data-rateit-ispreset="true" data-rateit-readonly="true" style="padding-left: 10px;" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"></div>
        <div class="price">
            <?php if($this->crud_model->get_type_name_by_id('product',$product_id,'discount') > 0){ ?>
                <del><?php echo currency($sale_price); ?></del>
                <span itemprop="price"><?php echo currency($this->crud_model->get_product_price($product_id)); ?> </span>
            <?php } else { ?>
                <span itemprop="price"><?php echo currency($sale_price); ?></span>
            <?php }?>
        </div>
        <div class="add-cart-btn">
            <span class="btn" onclick="to_cart(<?php echo $product_id; ?>,event)">
                <i class="fa fa-shopping-cart"></i>
                <?php if($this->crud_model->is_added_to_cart($product_id)=="yes"){ 
                    echo translate('added_to_cart');  
                    } else { 
                    echo translate('add_to_cart');  
                    } 
                ?>
            </span>
        </div>
    </div>
</div>
 -->



                                        
