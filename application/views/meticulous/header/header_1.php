<!-- Header top bar -->



    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-5">
                        <div class="top-header-content">
                            <p>Welcome to <?php echo $system_title; ?></p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="top-header-content text-right">
                            <p>
                               <!--  <span class="mx-2"></span> <i class="fa fa-at" aria-hidden="true"></i> Email us: <?php echo $this->db->get_where('general_settings',array('type' => 'contact_email'))->row()->value;?>
  -->
                            <?php if($this->session->userdata('user_login')!='yes'):?>
                                <span class="mx-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="<?php echo base_url(); ?>meticulous/login_set/login" class="text-white"> 
                                    <span><?php echo translate('login');?></span>
                                </a> 
                                <?php if ($this->crud_model->get_type_name_by_id('general_settings','58','value') !== 'ok'):?>
                                <span class="mx-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="<?php echo base_url(); ?>meticulous/login_set/registration" class="text-white">
                                    <span><?php echo translate('registration');?></span>
                                </a> 
                                <?php endif ?>  

                            <?php else: ?>
                                <?php if ($this->crud_model->get_type_name_by_id('general_settings','84','value') == 'ok'):?>

                                    <span class="ml-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                    <a href="<?php echo base_url(); ?>meticulous/profile/part/wallet" class="text-white">
                                        <i class="fa fa-money"></i> <span><?php echo translate('wallet');?><?php echo ' - '.currency($this->wallet_model->user_balance()); ?></span>
                                    </a> 
                                <?php endif ?>  
                                <span class="ml-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="<?php echo base_url(); ?>meticulous/profile/" class="text-white">
                                    <span><?php echo translate('my_profile');?></span>
                                </a> 
                                <span class="ml-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="<?php echo base_url(); ?>meticulous/profile/part/wishlist" class="text-white">
                                    <span><?php echo translate('wishlist');?></span>
                                </a> 
                                <span class="ml-2"></span> <i class="fa fa-user" aria-hidden="true"></i>
                                <a href="<?php echo base_url(); ?>meticulous/faq" class="text-white">
                                    <?php echo translate('faq');?>
                                </a>
                                <span class="ml-2"></span> <i class="fa fa-user" aria-hidden="true"></i> 
                                <a href="<?php echo base_url(); ?>meticulous/logout/" class="text-white">
                                    <span><?php echo translate('logout');?></span>
                                </a> 
                            <?php endif ?>  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

      <!--   <div class="top-bar-rixght">
            ----- ----- -----
        </div> -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="akameNav">

                        <!-- Logo --> 
                        <?php
                            $home_top_logo = $this->db->get_where('ui_settings',array('type' => 'home_top_logo'))->row()->value;
                        ?>
                        <a href="<?php echo base_url();?>" class="nav-brand">
                            <img src="<?php echo base_url(); ?>uploads/logo_image/logo_<?php echo $home_top_logo; ?>.png" alt="<?php echo $system_title; ?>" width="212px"/>
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <?php if($this->db->get_where('ui_settings',array('type'=>'header_homepage_status'))->row()->value == 'yes') {?>
                                    <li <?php if($asset_page=='home'){ ?>class="active"<?php } ?>>
                                        <a href="<?php echo base_url(); ?>">
                                            <?php echo translate('homepage');?>
                                        </a>
                                    </li>
                                    <?php }?>
                                    <li <?php if($page_name=='shop'){ ?>class="active"<?php } ?>><a href="<?php echo base_url('meticulous/shop'); ?>"><?php echo translate('shop'); ?></a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="<?php echo base_url('meticulous/shop'); ?>">- <?php echo translate('wigs'); ?></a>
                                            </li> 
                                        </ul>
                                    </li> 
                                    <?php if($about = $this->db->where('parmalink', 'about')->or_like('parmalink', 'about')->get('page')->row_array()) {?>
                                    <li <?php if($this->uri->segment(3)==$about['parmalink']){ ?>class="active"<?php } ?>>
                                        <a href="<?php echo base_url('meticulous/page/'.$about['parmalink']); ?>">
                                            <?php echo $about['page_name'];?>
                                        </a>
                                    </li>
                                    <?php } if($this->db->get_where('ui_settings',array('type'=>'header_contact_status'))->row()->value == 'yes') {?>
                                    <li <?php if($asset_page=='contact'){ ?>class="active"<?php } ?>>
                                        <a href="<?php echo base_url(); ?>meticulous/contact">
                                            <?php echo translate('contact');?>
                                        </a>
                                    </li>
                                    <?php } ?>
                                </ul>

                                <!-- Cart Icon --> 
                                <a href="#" class="cart-icon ml-5 mt-4 mt-lg-0" data-toggle="modal" data-target="#popup-cart">
                                    <i class="fa fa-shopping-cart"></i> 
                                    <span class="hidden-xs"> 
                                        <span class="cart_num"></span> 
                                        <?php echo translate('item(s)'); ?>
                                    
                                    </span>  
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
 
<!-- /HEADER -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.set_langs').on('click',function(){
            var lang_url = $(this).data('href');                                    
            $.ajax({url: lang_url, success: function(result){
                location.reload();
            }});
        });
        $('.top-bar-right').load('<?php echo base_url(); ?>meticulous/top_bar_right');
    });
</script>
<?php
if ($this->crud_model->get_type_name_by_id('general_settings','58','value') !== 'ok') {
?>
<style>
.header.header-logo-left .header-search .header-search-select .dropdown-toggle {
    right: 40px !important;
}
</style>
<?php
}
?> 