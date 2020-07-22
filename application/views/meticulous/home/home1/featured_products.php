    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-80 clearfix">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>
                            <?php echo translate('latest');?> <?php echo translate('featured');?> <?php echo translate('products');?> 
                        </h2>
                        <p>We specialize in 100% human handmade wigs, fully customized to fit your needs.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
    <!--         <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-30">
                        <button class="btn active" data-filter="*">All</button>  
                    </div>
                </div>
            </div> -->

            <div class="row akame-portfolio-area">
                <?php
                    $box_style =  $this->db->get_where('ui_settings',array('ui_settings_id' => 29))->row()->value;
                    $limit =  $this->db->get_where('ui_settings',array('ui_settings_id' => 20))->row()->value;
                    $featured=$this->crud_model->product_list_set('featured',$limit);
                    foreach($featured as $row){
                        echo $this->html_model->product_box($row, 'met', 1);
                    }
                ?> 
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="#" class="btn akame-btn">Shop Wigs</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End --> 