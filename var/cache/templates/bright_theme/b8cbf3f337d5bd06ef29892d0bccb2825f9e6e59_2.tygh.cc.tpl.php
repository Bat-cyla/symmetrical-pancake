<?php
/* Smarty version 4.1.1, created on 2024-08-09 12:27:42
  from '/app/www/design/themes/responsive/templates/views/orders/components/payments/cc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_66b5e10e180198_59654385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cbf3f337d5bd06ef29892d0bccb2825f9e6e59' => 
    array (
      0 => '/app/www/design/themes/responsive/templates/views/orders/components/payments/cc.tpl',
      1 => 1723194965,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b5e10e180198_59654385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/app/www/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/app/www/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv','card_number','valid_thru','cardholder_name','cvv2','what_is_cvv2','visa_card_discover','credit_card_info','american_express','american_express_info','error_validator_ccv'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', ((string)$_smarty_tpl->tpl_vars['card_id']->value));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', '');
}?>

<div class="litecheckout__item">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cc-number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off ty-inputmask-bdi" />
                <ul class="ty-cc-icons cm-cc-icons cc-icons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cc-date_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year cc-year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
        </div>

        <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
            <label for="credit_card_cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-cc-cvv2  cc-cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
            <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input ty-inputmask-bdi" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                <div class="ty-cvv2-about__note">

                    <div class="ty-cvv2-about__info mb30 clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                        </div>
                    </div>
                    <div class="ty-cvv2-about__info clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

(function(_, $) {

    var ccFormId = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function(context) {
        if (!$(context).find('.ty-credit-card, .ty-credit-card__cvv-field').length) {
            return;
        }

        var icons           = $('.cc-icons_' + ccFormId + ' li'),
            ccNumber        = $('.cc-number_' + ccFormId),
            ccNumberInput   = $('#' + ccNumber.attr('for')),

            ccCv2           = $('.cc-cvv2_' + ccFormId),
            ccCv2Input      = $('#' + ccCv2.attr('for')),

            ccMonth         = $('.cc-date_' + ccFormId),
            ccMonthInput    = $('#' + ccMonth.attr('for')),

            ccYear          = $('.cc-year_' + ccFormId),
            ccYearInput     = $('#' + ccYear.attr('for'));

        if (jQuery.isEmptyObject(ccNumberInput.data('_inputmask'))) {

            ccNumberInput.inputmask({
                mask: '9999 9999 9999 9[9][9][9][9][9][9]',
                placeholder: ''
            });

            ccMonthInput.inputmask({
                mask: '9[9]',
                placeholder: ''
            });

            ccYearInput.inputmask({
                mask: '99[99]',
                placeholder: ''
            });

            ccCv2Input.inputmask({
                mask: '999[9]',
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-number_' + ccFormId,
                message: '',
                func: function (id) {
                    ccNumberInput = $('#' + id);
                    return ccNumberInput.inputmask('isComplete');
                }
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-cvv2_' + ccFormId,
                message: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_ccv"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                func: function (id) {
                    ccCv2Input = $('#' + id);
                    return ccCv2Input.inputmask('isComplete');
                }
            });
        }

        if (ccNumberInput.length) {
            ccNumberInput.validateCreditCard(function (result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) !== -1) {
                        ccCv2.removeClass('cm-required');
                    } else {
                        ccCv2.addClass('cm-required');
                    }
                }
            });
        }
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', ((string)$_smarty_tpl->tpl_vars['card_id']->value));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('id_suffix', '');
}?>

<div class="litecheckout__item">
    <div class="clearfix">
        <div class="ty-credit-card cm-cc_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-number cc-number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="credit_card_number_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-autocomplete-off ty-inputmask-bdi" />
                <ul class="ty-cc-icons cm-cc-icons cc-icons_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cc-date_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year cc-year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short ty-inputmask-bdi" />&nbsp;
            </div>

            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
        </div>

        <div class="ty-control-group ty-credit-card__cvv-field cvv-field">
            <label for="credit_card_cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required cm-cc-cvv2  cc-cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
 cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
            <input type="text" id="credit_card_cvv2_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="ty-credit-card__cvv-field-input ty-inputmask-bdi" />

            <div class="ty-cvv2-about">
                <span class="ty-cvv2-about__title"><?php echo $_smarty_tpl->__("what_is_cvv2");?>
</span>
                <div class="ty-cvv2-about__note">

                    <div class="ty-cvv2-about__info mb30 clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/visa_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("visa_card_discover");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("credit_card_info");?>
</p>
                        </div>
                    </div>
                    <div class="ty-cvv2-about__info clearfix">
                        <div class="ty-cvv2-about__image">
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/express_cvv.png" alt="" />
                        </div>
                        <div class="ty-cvv2-about__description">
                            <h5 class="ty-cvv2-about__description-title"><?php echo $_smarty_tpl->__("american_express");?>
</h5>
                            <p><?php echo $_smarty_tpl->__("american_express_info");?>
</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>

(function(_, $) {

    var ccFormId = '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
';

    $.ceEvent('on', 'ce.commoninit', function(context) {
        if (!$(context).find('.ty-credit-card, .ty-credit-card__cvv-field').length) {
            return;
        }

        var icons           = $('.cc-icons_' + ccFormId + ' li'),
            ccNumber        = $('.cc-number_' + ccFormId),
            ccNumberInput   = $('#' + ccNumber.attr('for')),

            ccCv2           = $('.cc-cvv2_' + ccFormId),
            ccCv2Input      = $('#' + ccCv2.attr('for')),

            ccMonth         = $('.cc-date_' + ccFormId),
            ccMonthInput    = $('#' + ccMonth.attr('for')),

            ccYear          = $('.cc-year_' + ccFormId),
            ccYearInput     = $('#' + ccYear.attr('for'));

        if (jQuery.isEmptyObject(ccNumberInput.data('_inputmask'))) {

            ccNumberInput.inputmask({
                mask: '9999 9999 9999 9[9][9][9][9][9][9]',
                placeholder: ''
            });

            ccMonthInput.inputmask({
                mask: '9[9]',
                placeholder: ''
            });

            ccYearInput.inputmask({
                mask: '99[99]',
                placeholder: ''
            });

            ccCv2Input.inputmask({
                mask: '999[9]',
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-number_' + ccFormId,
                message: '',
                func: function (id) {
                    ccNumberInput = $('#' + id);
                    return ccNumberInput.inputmask('isComplete');
                }
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cc-cvv2_' + ccFormId,
                message: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_ccv"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                func: function (id) {
                    ccCv2Input = $('#' + id);
                    return ccCv2Input.inputmask('isComplete');
                }
            });
        }

        if (ccNumberInput.length) {
            ccNumberInput.validateCreditCard(function (result) {
                icons.removeClass('active');
                if (result.card_type) {
                    icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                    if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) !== -1) {
                        ccCv2.removeClass('cm-required');
                    } else {
                        ccCv2.addClass('cm-required');
                    }
                }
            });
        }
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }
}
}
