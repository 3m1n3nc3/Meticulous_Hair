<!-- <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="container">
            <div class="cart-items">
                <div class="cart-items-inner">
                    <span class="top_carted_list">
                    </span>
                    <div class="media">
                        <p class="pull-right item-price shopping-cart__total"></p>
                        <div class="media-body">
                            <h4 class="media-heading item-title summary">
                                <?php echo translate('subtotal');?>
                            </h4>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <div>
                                <span class="btn btn-theme-dark" data-dismiss="modal">
                                    <?php echo translate('close');?>
                                </span><!--
                                -->
<!--                                 <a href="<?php echo base_url(); ?>meticulous/cart_checkout" class="btn  btn-theme-transparent btn-call-checkout">
                                    <?php echo translate('checkout');?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 -->  
<div class="modal fade popup-cart p-0" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true" style="position: absolute; left: 364px; top: 15px;">
  <div class="modal-dialog p-0">
    <div class="modal-content container p-0" style="display: contents;">
        <div class="cart-items">
            <div class="cart-items-inner">
                <span class="top_carted_list">
                </span>
                <div class="media" style="display: block;">
                    <p class="pull-right item-price shopping-cart__total"></p>
                    <div class="media-body">
                        <h4 class="media-heading item-title summary">
                            <?php echo translate('subtotal');?>
                        </h4>
                    </div>
                </div>
                <div class="media">
                    <div class="media-body">
                        <div>
                            <span class="btn btn-theme-dark" data-dismiss="modal">
                                <?php echo translate('close');?>
                            </span><!--
                            -->
                            <a href="<?php echo base_url(); ?>meticulous/cart_checkout" class="btn  btn-theme-transparent btn-call-checkout">
                                <?php echo translate('checkout');?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>