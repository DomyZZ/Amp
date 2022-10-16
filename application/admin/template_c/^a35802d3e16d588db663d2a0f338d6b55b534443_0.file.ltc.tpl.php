<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:52:34
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/ltc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1bd28dce91_48093462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a35802d3e16d588db663d2a0f338d6b55b534443' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/ltc.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:payment_gateways/proc/coinpayments_api.tpl' => 1,
    'file:payment_gateways/proc/coinpayments.tpl' => 2,
    'file:payment_gateways/proc/blockio.tpl' => 2,
    'file:payment_gateways/proc/paykassa_api.tpl' => 1,
    'file:payment_gateways/proc/paykassa.tpl' => 2,
  ),
),false)) {
function content_5e7b1bd28dce91_48093462 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'sci') {?>
    <div class="form-group">
        <label for="sci_ltc_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[payment_system]" id="sci_ltc_payment_system" class="form-control input-sm"
                onchange="show_ps_details('sci', 'ltc')">
            <option value="coinpayments_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments_api' ? 'selected' : '';?>
>CoinPayments (via API Keys)</option>
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>CoinPayments (via Website)</option>
            <option value="blockio" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'blockio' ? 'selected' : '';?>
>Block.io</option>
            <option value="paykassa_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'paykassa_api' ? 'selected' : '';?>
>Paykassa (via API Keys)</option>
            <option value="paykassa" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'paykassa' ? 'selected' : '';?>
>Paykassa (via Website)</option>
        </select>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/blockio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>


<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'api') {?>
    <div class="form-group">
        <label for="api_ltc_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[api][payment_system]" id="api_ltc_payment_system" class="form-control input-sm"
                onchange="show_ps_details('api', 'ltc')">
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>
                CoinPayments
            </option>
            <option value="blockio" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'blockio' ? 'selected' : '';?>
>Block.io
            </option>
            <option value="paykassa" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'paykassa' ? 'selected' : '';?>
>Paykassa</option>
        </select>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/blockio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>


<?php }
}
}
