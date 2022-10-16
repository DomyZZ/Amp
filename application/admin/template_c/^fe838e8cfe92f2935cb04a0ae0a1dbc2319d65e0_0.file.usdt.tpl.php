<?php
/* Smarty version 3.1.30, created on 2020-03-25 09:12:30
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/usdt.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b207e2328e9_52351098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe838e8cfe92f2935cb04a0ae0a1dbc2319d65e0' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/usdt.tpl',
      1 => 1582120431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:payment_gateways/proc/coinpayments_api.tpl' => 1,
    'file:payment_gateways/proc/coinpayments.tpl' => 2,
    'file:payment_gateways/proc/stripe.tpl' => 1,
  ),
),false)) {
function content_5e7b207e2328e9_52351098 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'sci') {?>
    <div class="form-group">
        <label for="sci_usdt_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[payment_system]" id="sci_usdt_payment_system" class="form-control input-sm"
                onchange="show_ps_details('sci', 'usdt')">
            <option value="coinpayments_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments_api' ? 'selected' : '';?>
>CoinPayments (via API Keys)</option>
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>CoinPayments (via Website)</option>
            <option value="stripe" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'stripe' ? 'selected' : '';?>
>Stripe</option>
        </select>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/stripe.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>


<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'api') {?>
    <div class="form-group">
        <label for="api_usdt_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[api][payment_system]" id="api_usdt_payment_system" class="form-control input-sm"
                onchange="show_ps_details('api', 'usdt')">
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_settings']['api']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>
                CoinPayments
            </option>
        </select>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>

<?php }
}
}
