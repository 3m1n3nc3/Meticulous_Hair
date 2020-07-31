
<?php
    $delivery_option = $this->session->userdata('delivery_option');
    $sdv = (!$delivery_option) ? 'checked' : '';
    $edv = ($delivery_option == 'express') ? 'checked' : '';
    $idv = ($delivery_option == 'international') ? 'checked' : '';
?>

<div class="row ">
    <div class="cc-selector col-sm-3">
        <input id="standard" style="display:block;" <?=$sdv?> type="radio" name="delivery_option" value=""/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; " for="standard" onclick="delivery_options_check('standard')">
            <img src="<?php echo base_url(); ?>template/front/img/preview/payments/standard.jpg" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('standard');?>" />

        </label>
    </div>
                
    
    <div class="cc-selector col-sm-3">
        <input id="express" style="display:block;" <?=$edv?> type="radio" name="delivery_option" value="express"/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; " for="express" onclick="delivery_options_check('express')">
            <img src="<?php echo base_url(); ?>template/front/img/preview/payments/express.png" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('express');?>" />

        </label>
    </div>
                
    
    <div class="cc-selector col-sm-3">
        <input id="international" style="display:block;" <?=$idv?> type="radio" name="delivery_option" value="international"/>
        <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; " for="international" onclick="delivery_options_check('international')">
            <img src="<?php echo base_url(); ?>template/front/img/preview/payments/international.png" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('international');?>" />

        </label>
    </div>
                
    <div class="col-md-12">
        <span class="btn btn-theme-dark" onclick="load_address_form();">
            <?php echo translate('next');?>
        </span>
    </div>
</div>


<input type="hidden" id="first" value="yes"/>

<script type="text/javascript">
    $(document ).ready(function() {
        $('input[name="delivery_option"]').click(function(){
            change_delivery_option(this);
            console.log($(this).val());
        });
    });
</script>

<style>
    .cc-selector input{
        margin:0;padding:0;
        -webkit-appearance:none;
           -moz-appearance:none;
                appearance:none;
    }

    .cc-selector input:active +.drinkcard-cc
    {
        opacity: 1;
        border:4px solid #169D4B;
    }
    .cc-selector input:checked +.drinkcard-cc{
        -webkit-filter: none;
        -moz-filter: none;
        filter: none;
        border:4px solid black;
    }
    .drinkcard-cc{
        cursor:pointer;
        background-blend-mode: luminosity;
        background-size:contain;
        background-repeat:no-repeat;
        display:inline-block;
        -webkit-transition: all 100ms ease-in;
        -moz-transition: all 100ms ease-in;
        transition: all 100ms ease-in;
        -webkit-filter:opacity(.5);
        -moz-filter:opacity(.5);
        filter:opacity(.5);
        transition: all .6s ease-in-out;
        border:4px solid transparent;
        border-radius:5px !important;
    }
    .drinkcard-cc:hover{
    -webkit-filter:opacity(1);
    -moz-filter: opacity(1);
    filter:opacity(1);
    transition: all .6s ease-in-out;
    border:4px solid #8400C5;

}
</style>
