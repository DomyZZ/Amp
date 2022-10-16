<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:52:18
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/xmr.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1bc28eabf9_25547423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5cb9a3b6ff03333deba7556ae15e3fc1302b09' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/xmr.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:payment_gateways/proc/coinpayments_api.tpl' => 1,
    'file:payment_gateways/proc/coinpayments.tpl' => 2,
    'file:payment_gateways/proc/paykassa_api.tpl' => 1,
    'file:payment_gateways/proc/paykassa.tpl' => 2,
  ),
),false)) {
function content_5e7b1bc28eabf9_25547423 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == 'sci') {?>
    <div class="form-group">
        <label for="sci_xmr_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[payment_system]" id="sci_xmr_payment_system" class="form-control input-sm"
                onchange="show_ps_details('sci', 'xmr')">
            <option value="coinpayments_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments_api' ? 'selected' : '';?>
>CoinPayments (via API Keys)</option>
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>CoinPayments (via Website)</option>
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

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"sci"), 0, false);
?>


<?php }?>

<?php if ($_smarty_tpl->tpl_vars['type']->value == 'api') {?>
    <div class="form-group">
        <label for="api_xmr_payment_system" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_system'];?>
</label>
        <select name="payment_details[api][payment_system]" id="api_xmr_payment_system" class="form-control input-sm"
                onchange="show_ps_details('api', 'xmr')">
            <option value="coinpayments" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_settings']['api']['payment_system'] == 'coinpayments' ? 'selected' : '';?>
>
                CoinPayments
            </option>
            <option value="paykassa" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'paykassa' ? 'selected' : '';?>
>Paykassa</option>
        </select>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/coinpayments.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/paykassa.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('settings'=>"api"), 0, true);
?>


<?php }
}
}
