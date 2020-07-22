   <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>
                            <?php echo translate('trending');?> <?php echo translate('products');?> 
                        </h2>
                        <p>We specialize in 100% human handmade wigs, fully customized to fit your needs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-30">
                        <button class="btn active" data-filter="*">All</button>  
                        <button class="btn" data-filter=".latest"><?php echo translate('latest_products');?></button>  
                        <button class="btn" data-filter=".recently_viewed"><?php echo translate('recently_viewed');?></button>  
                        <button class="btn" data-filter=".most_viewed"><?php echo translate('most_viewed');?></button>  
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <?php
                    $latest=$this->crud_model->product_list_set('latest',3);
                    foreach($latest as $row){ 
                        $row['custom_category'] = 'latest';
                        echo $this->html_model->product_box($row, 'met', 1);
                    }
                ?> 
                <?php
                    $recently_viewed=$this->crud_model->product_list_set('recently_viewed',3);
                    foreach($recently_viewed as $row){ 
                        $row['custom_category'] = 'recently_viewed';
                        echo $this->html_model->product_box($row, 'met', 1);
                    }
                ?> 
                <?php
                    $most_viewed=$this->crud_model->product_list_set('most_viewed',3);
                    foreach($most_viewed as $row){
                        $row['custom_category'] = 'most_viewed';
                        echo $this->html_model->product_box($row, 'met', 1);
                    }
                ?> 
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="<?php echo base_url('meticulous/shop');?>" class="btn akame-btn">Shop all Wigs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End --> 
 

<script>
$(document).ready(function(){
    setTimeout(function(){
        set_special_product_box();
    },500);
});

function set_special_product_box(){
    var max_height = 0;
    $('.product-box-sm').each(function(){
        var current_height= parseInt($(this).css('height'));
        if(current_height >= max_height){
            max_height = current_height;
        }
    });
    $('.product-box-sm').css('height',max_height);

    var max_title=0;
    $('.special-products .inro-section').each(function(){
        var current_height= parseInt($(this).css('height'));
        if(current_height >= max_title){
            max_title = current_height;
        }
    });
    $('.special-products .inro-section').css('height',max_title);

    $('[data-toggle="tooltip"]').tooltip({placement:"auto"});
}
</script>