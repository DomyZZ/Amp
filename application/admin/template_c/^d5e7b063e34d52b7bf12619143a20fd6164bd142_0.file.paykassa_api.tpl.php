<?php
/* Smarty version 3.1.30, created on 2020-03-25 09:12:30
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/paykassa_api.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b207e12d739_53756022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5e7b063e34d52b7bf12619143a20fd6164bd142' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/paykassa_api.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b207e12d739_53756022 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_paykassa_api_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'paykassa_api' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id_api" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[pk_merchant_id_api]"
                   id="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id_api"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_id_api'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password_api" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_password'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[pk_merchant_password_api]"
                   id="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_password_api'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_password_api'] ? '' : 'hide';?>
"
               id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_merchant_password_api"
               onclick="set_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_merchant_password_api','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password_api','sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password_api')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password_api"
               onclick="cancel_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_merchant_password_api','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password_api','sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password_api')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-paykassa_api-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Paykassa (<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['nick']);?>
) SCI Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your Paykassa.pro account. Go to Merchants.
                            <ul>
                                <li>Click on "Create Merchant".
                                </li>
                                <li>Enter any Title, set Domain Store as <b><?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
</b>
                                </li>
                                <li>Enter/Set Secret Key. This will be your merchant password.
                                </li>
                                <li>Set IPN handler as <b><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/payment/status/paykassa</b></li>
                                <li>Set URL successful payment as <b><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/payment/successful</b></li>
                                <li>Set URL failed payment as <b><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/payment/failed</b></li>
                                <li>Enter a shop description.</li>
                                <li>Click "Create Merchant" to create your merchant.</li>
                                <li>Copy your Merchant ID generated. For e.g 1234</li>
                            </ul>
                        </li>
                        <li>Enter Merchant ID obtained above in "Merchant ID" field.</li>
                        <li>Enter Secret Key set above in "Merchant Password" field.</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
