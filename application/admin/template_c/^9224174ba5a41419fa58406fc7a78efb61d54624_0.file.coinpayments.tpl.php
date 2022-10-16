<?php
/* Smarty version 3.1.30, created on 2020-02-24 09:44:31
  from "/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/coinpayments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e539affe74da3_14963570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9224174ba5a41419fa58406fc7a78efb61d54624' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/coinpayments.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e539affe74da3_14963570 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_coinpayments_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'coinpayments' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[cp_merchant_id]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_merchant_id'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ipn_secret'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[cp_ipn_secret]"
                   id="sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_ipn_secret'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['cp_ipn_secret'] ? '' : 'hide';?>
"
               id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret"
               onclick="set_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret"
               onclick="cancel_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_ipn_secret','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_ipn_secret','sci_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_ipn_secret')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-coinpayments-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coinpayments : via Website (<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['curr_nick']);?>
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
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value == 'api') {?>
    <div id="api_coinpayments_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'coinpayments' || $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == '' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_transaction_fee" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['transaction_fee'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[api][cp_transaction_fee]"
                   id="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_transaction_fee"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['cp_transaction_fee'];?>
"/>
        </div>
        <div class="form-group">
            <label for="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_public_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['public_key'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[api][cp_public_key]"
                   id="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_public_key"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['cp_public_key'];?>
"/>
        </div>
        <div class="form-group">
            <label for="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['private_key'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[api][cp_private_key]"
                   id="api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['cp_private_key'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['cp_private_key'] ? '' : 'hide';?>
"
               id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key"
               onclick="set_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key','api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key"
               onclick="cancel_new_pass('cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key','cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key','api_cp_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_private_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-api-coinpayments-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Coinpayments (<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['curr_nick']);?>
) API Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your Coinpayments account. Go to Account >
                            API Keys.
                            <ul>
                                <li>Click "Generate New Key".
                                </li>
                                <li>Copy the Public and Private Key.</b>
                                </li>
                                <li>Click "Edit Permissions" and check "create_transaction", "create_withdrawal", "auto_confirm" (below create_withdrawal), create_mass_withdrawal, get_balances.</li>
                            </ul>
                        </li>
                        <li>(Optional) If you want to pay the additional coinpayments fee when paying the members, then enter the transaction fee here which you can find
                            <a href="https://www.coinpayments.net/help-fees" target="_blank"><b>here</b></a></li>
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
