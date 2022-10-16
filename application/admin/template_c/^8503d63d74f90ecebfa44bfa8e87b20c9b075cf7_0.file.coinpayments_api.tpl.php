<?php
/* Smarty version 3.1.30, created on 2020-02-24 09:44:31
  from "/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/coinpayments_api.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e539affe21eb2_35637079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8503d63d74f90ecebfa44bfa8e87b20c9b075cf7' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/coinpayments_api.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e539affe21eb2_35637079 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_coinpayments_api_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments_api' || $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == '' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id_api" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[cp_merchant_id_api]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id_api"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_merchant_id_api'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret_api" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ipn_secret'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[cp_ipn_secret_api]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret_api" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_ipn_secret_api'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_ipn_secret_api'] ? '' : 'hide';?>
"
               id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret_api"
               onclick="set_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret_api','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret_api','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret_api')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret_api"
               onclick="cancel_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret_api','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret_api','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret_api')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_public_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['public_key'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[cp_public_key]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_public_key"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_public_key'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['private_key'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[cp_private_key]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_private_key'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_private_key'] ? '' : 'hide';?>
"
               id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_private_key"
               onclick="set_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_private_key','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_private_key','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_private_key"
               onclick="cancel_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_private_key','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_private_key','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-coinpayments_api-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coinpayments : via API Keys (<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['curr_nick']);?>
) SCI Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your Coinpayments account. Go to Account >
                            Coin Acceptance Settings.
                            <ul>
                                <li>Enable "Bitcoin".
                                </li>
                                <li>Go to Account > Account Settings. Copy your Merchant Id.</b>
                                </li>
                                <li>Go to "Merchant Settings". Enter your IPN Secret and update your account settings. </li>
                            </ul>
                        </li>
                        <li>Enter your Merchant ID & IPN Secret in "Merchant ID" and "IPN Secret" fields respectively.</b>
                        </li>
                        <li> Go to Account > API Keys.
                            <ul>
                                <li>Click "Generate New Key".
                                </li>
                                <li>Copy the Public and Private Key.</b>
                                </li>
                                <li>Click "Edit Permissions" and check "create_transaction", "get_callback_address".</li>
                                <li>Go back to your admin panel.</li>
                            </ul>
                        </li>
                        <li>Enter Public and Private Key in the respective fields.
                        </li>
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
