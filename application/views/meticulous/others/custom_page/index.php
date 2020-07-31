<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2><?php echo $page_title;?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="icon_house_alt"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo $page_title;?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Akame About Area Start -->
<section class="akame--about--area">
    <div class="container">
        <div class="row">
        <?php 
            foreach($page_items as $item) {
            $parts  = json_decode($item['parts'],true); 
            foreach($parts as $row) { 
                $type       = $row['type']; 
                $content    = $row['content']; ?>

            <?php if($type == 'content'):?>
                <!-- Section Heading -->
                <div class="col-12 col-lg-4">
                    <div class="section-heading text-right mb-80 pr-5 pt-3">
                        <p>100% human handmade wigs, fully customized</p>
                        <h2><?php echo $page_title;?></h2>
                        <span><?php echo $page_title;?></span>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="about--us--content mb-80"> 
                        <?php echo $content;?> 
                    </div>
                </div>
            <?php endif;?>

        <?php
            }
        } ?> 
        </div>
    </div>
</section>
<!-- Akame About Area End --> 