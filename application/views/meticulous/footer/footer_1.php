<?php 
	$contact_address =  $this->db->get_where('general_settings',array('type' => 'contact_address'))->row()->value;
	$contact_phone =  $this->db->get_where('general_settings',array('type' => 'contact_phone'))->row()->value;
	$contact_email =  $this->db->get_where('general_settings',array('type' => 'contact_email'))->row()->value;
	$contact_website =  $this->db->get_where('general_settings',array('type' => 'contact_website'))->row()->value;
	$contact_about =  $this->db->get_where('general_settings',array('type' => 'contact_about'))->row()->value;
	
	$facebook =  $this->db->get_where('social_links',array('type' => 'facebook'))->row()->value;
	$instagram =  $this->db->get_where('social_links',array('type' => 'instagram'))->row()->value;
	$googleplus =  $this->db->get_where('social_links',array('type' => 'google-plus'))->row()->value;
	$twitter =  $this->db->get_where('social_links',array('type' => 'twitter'))->row()->value;
	$skype =  $this->db->get_where('social_links',array('type' => 'skype'))->row()->value;
	$youtube =  $this->db->get_where('social_links',array('type' => 'youtube'))->row()->value;
	$pinterest =  $this->db->get_where('social_links',array('type' => 'pinterest'))->row()->value;
	
	$footer_text =  $this->db->get_where('general_settings',array('type' => 'footer_text'))->row()->value;
	$footer_category =  json_decode($this->db->get_where('general_settings',array('type' => 'footer_category'))->row()->value);
?>

<!-- Call To Action Area Start -->
<section class="akame-cta-area bg-gray section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-xl-5">
                <div class="cta-content">
                    <h2>Make <?php echo $system_title; ?> Your <br>Number One Choice</h2>
                    <p>We aim to please you with fully customizing your wigs to your liking.</p>
                    <div class="akame-btn-group mt-30">
                        <a href="<?php echo base_url('meticulous/shop'); ?>" class="btn akame-btn active mr-3 mb-3 mb-sm-0">Shop all Wigs</a>
                        <a href="<?php echo base_url('meticulous/contact'); ?>" class="btn akame-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Thumbnail -->
    <div class="cta-thumbnail bg-img" style="background-image: url(<?=base_url()?>/template/meticulous/img/bg-img/cta.png);"></div>
</section>
<!-- Call To Action Area End -->

<!-- Footer Area Start -->
<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4 mb-30">
                <div class="single-footer-widget">
                    <!-- Footer Logo -->
                    <a href="#" class="footer-logo"><img src="<?php echo $this->crud_model->logo('home_bottom_logo'); ?>" alt=""></a>

                    <p class="mb-30"><?php echo $footer_text ;?></p> 
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4 col-xl-3 mb-30">
                <div class="single-footer-widget">
                    <!-- Widget Title -->
                    <h4 class="widget-title"><?php echo translate('useful_links');?></h4>

                    <div class="contact-address"> 
                        <p> 
                            <a href="<?php echo base_url(); ?>"><?php echo translate('home');?></a>
                        </p> 
                        <p> 
                            <a href="<?php echo base_url('meticulous/shop'); ?>">
                                <?php echo translate('shop');?>
                            </a>
                        </p> 
                        <?php if($about = $this->db->where('parmalink', 'about')->or_like('parmalink', 'about')->get('page')->row_array()) {?>
                        <p> 
                            <a href="<?php echo base_url('home/page/'.$about['parmalink']); ?>">
                                <?php echo $about['page_name'];?>
                            </a>
                        </p> 
                        <?php }?>
                        <p> 
                            <a href="<?php echo base_url('meticulous/contact'); ?>">
                                <?php echo translate('contact');?>
                            </a>
                        </p> 
                    </div> 
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-md-4 col-xl-3 mb-30">
                <div class="single-footer-widget">

                    <!-- Widget Title -->
                    <h4 class="widget-title">Contact Us</h4>

                    <!-- Contact Address -->
                    <div class="contact-address"> 
                        <p> 
							<strong><?php echo translate('email');?>:</strong> 
							<a href="mailto:<?php echo $contact_email;?>">
								<?php echo $contact_email;?>
							</a>
						</p> 
                    </div>

                    <!-- Social Info -->
                    <div class="social-info">
						<?php
						if ($facebook != '') {
						?>
                        <a href="<?php echo $facebook;?>" class="facebook"><i class="fa fa-facebook"></i></a> 
						<?php
						} if ($instagram != '') {
						?>
                        <a href="<?php echo $instagram;?>" class="instagram"><i class="fa fa-instagram"></i></a> 
						<?php 
						} if ($twitter != '') {
						?>
                        <a href="<?php echo $twitter;?>" class="twitter"><i class="fa fa-twitter"></i></a>
						<?php
						} if ($googleplus != '') {
						?>
                        <a href="<?php echo $googleplus;?>" class="google-plus"><i class="fa fa-google-plus"></i></a> 
						<?php
						} if ($pinterest != '') {
						?>
                        <a href="<?php echo $pinterest;?>" class="pinterest"><i class="fa fa-pinterest"></i></a>  
						<?php
						} if ($youtube != '') {
						?>
                        <a href="<?php echo $youtube;?>" class="youtube"><i class="fa fa-youtube"></i></a>   
						<?php
						} if ($skype != '') {
						?>
                        <a href="<?php echo $skype;?>" class="skype"><i class="fa fa-skype"></i></a>   
						<?php
						}
						?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 bg-dark container-fluid"> 
        <div class="row">
            <div class="col-md-8 col-xs-12 mt-4">
                <div class="copywrite-text font-weight-bold" version="Currently <?= demo()?'demo':''?> v<?php echo $this->db->get_where('general_settings',array('type'=>'version'))->row()->value; ?>">
                    Copyright
                    <?php echo date('Y'); ?> &copy; 
                    <?php echo translate('all_rights_reserved'); ?> @ 
                    <a href="<?php echo base_url(); ?>" class="link font-weight-bold">
                        <?php echo $system_title; ?>
                    </a> 
                        |
                    <a href="<?php echo base_url(); ?>meticulous/legal/terms_conditions" class="link font-weight-bold">
                        <?php echo translate('terms_&_condition'); ?>
                    </a> 
                        | 
                    <a href="<?php echo base_url(); ?>meticulous/legal/privacy_policy" class="link font-weight-bold">
                        <?php echo translate('privacy_policy'); ?>
                    </a>
                </div>
            </div>
            <div class="col-md-4 hidden-xs hidden-sm">
                <div class="payments" style="font-size: 30px;">
                    <ul>
                        <li><img src="<?php echo base_url(); ?>uploads/others/payment.png"></li>
                    </ul>
                </div>
            </div>
        </div> 
    </div>
</footer>
<!-- Footer Area End -->

<style>
.link:hover{
	text-decoration:underline;
}
.model-2 a {
	margin: 0px 1px;
	height: 32px;
	width: 32px;
	line-height: 32px;

}
</style>
