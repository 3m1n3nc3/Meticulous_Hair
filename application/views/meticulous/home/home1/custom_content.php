    <?php if($about = $this->db->where('parmalink', 'about')->or_like('parmalink', 'about')->get('page')->row_array()) { ?>
    <!-- About Area Start -->
    <section class="akame-about-area section-padding-80-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="section-heading mb-80">
                        <h2><?php echo $system_title; ?></h2>
                        <p>100% Machine made Wigs</p>
                        <span><?php echo $about['page_name']; ?></span>
                    </div>
                </div>

                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-thumbnail mb-80">
                        <img src="<?=base_url('template/meticulous/img/mt/au.jpg')?>" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-4">
                    <div class="about-us-content mb-80 pl-4">
                    <?php   
                        $parts  = json_decode($about['parts'],true); 
                        foreach($parts as $row) { 
                            $type       = $row['type']; 
                            $content    = $row['content']; ?>

                        <?php if($type == 'content'):?> 
                            <h3>100% Machine made wigs, fully customized.</h3>
                            <p>“<?php echo word_limiter(strip_tags($content), 40);?>”</p>
                            <a href="<?php echo base_url('meticulous/page/'.$about['parmalink']); ?>" class="btn akame-btn active mt-30">Read More</a>
                        <?php endif;?>

                    <?php } ?> 
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <?php }?>

    <!-- Our Service Area Start -->
    <section class="akame-service-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                        <p>We create the best styles, tailored to fit you, simple and available.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <img src="<?=base_url('template/meticulous/img/core-img/s1.png')?>" alt="">
                        <h5>Wigs</h5>
                        <p>Our wigs are unique and specially designed to make you look stylish and outstanding.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <img src="<?=base_url('template/meticulous/img/core-img/s3.png')?>" alt="">
                        <h5>Customize wigs</h5>
                        <p>Our customized wigs are created to blend in and fit into your style.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-12 col-lg-4">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <img src="<?=base_url('template/meticulous/img/core-img/s4.png')?>" alt="">
                        <h5>Delivery</h5>
                        <p>We deliver our wigs to your doorstep, anywhere in the world without delay</p>
                    </div>
                </div> 

            </div>
        </div>
    </section>
    <!-- Our Service Area End -->


    <!-- Why Choose Us Area Start -->
    <section class="why-choose-us-area bg-gray section-padding-80-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="choose-us-thumbnail mt-30 mb-80">
                        <div class="choose-us-img bg-img" style="background-image: url(<?=base_url('template/meticulous/img/mt/wcu.png')?>);"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Why choose us</h2>
                        <p>There's more reasons to make Meticulous1on1Hair your No.1 brand</p>
                    </div>
                    <!-- Choose Us Content -->
                    <div class="choose-us-content mt-30 mb-80">
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We have multiple years of experience and a broad range of skills.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We specialize in 100% machine made wigs, fully customized to fit your needs.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> All our wigs are machine made by us to give you that long-lasting look and luster.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We offer fast door step delivery services to any place in the world.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us Area End -->


    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>
                            Our Work
                        </h2>
                        <p>Our wigs are Machine made to give you that long lasting feel.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-30">
                        <button class="btn active" data-filter="*">All</button>  
                        <button class="btn" data-filter=".wig_category">Wigs</button>   
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <?php
                    echo $this->html_model->product_box($row, 'met', 'x');
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

    <!-- Our Expert Area Start -->
    <section class="akame-our-expert-area section-padding-80-0 border-bottom" style="padding-bottom: 150px;">

        <!-- Side Thumbnail -->
        <div class="side-thumbnail" style="background-image: url(<?=base_url('template/meticulous/img/mt/expt.png')?>); width: 355px;"></div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>Meet Our Expert</h2>
                        <p>Ella Is the CEO of Meticulous1on1hair with a working business experience in the beauty and style industry spanning through multiple years, with clients all over the globe. Meticulous1on1hair is a unique and trusted manufacturer and supplier of custom made wigs designed to suite your style.</p>
                    </div>
                    <!-- Our Certificate -->
                    <div class="our-certificate-area mb-60 d-flex align-items-center">
                        <img src="<?=base_url('template/meticulous/img/core-img/certificate-1.png')?>" alt="">
                        <img src="<?=base_url('template/meticulous/img/core-img/certificate-2.png')?>" alt="">
                        <img src="<?=base_url('template/meticulous/img/core-img/certificate-3.png')?>" alt="">
                    </div>
                </div>
            </div>
        </div>  
    </section>
    <!-- Our Expert Area End --> 

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