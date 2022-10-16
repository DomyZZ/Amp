<?php
/* Smarty version 3.1.30, created on 2020-03-25 09:12:30
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/paykassa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b207e1ee6a9_74570118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3250091f3416d20226dd188b7909931efe6eab62' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/paykassa.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b207e1ee6a9_74570118 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_paykassa_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'paykassa' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[pk_merchant_id]"
                   id="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_id'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_password'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[pk_merchant_password]"
                   id="sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_password'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['pk_merchant_password'] ? '' : 'hide';?>
"
               id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_merchant_password"
               onclick="set_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_merchant_password','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password','sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password"
               onclick="cancel_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_merchant_password','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_merchant_password','sci_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-paykassa-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
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
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value == 'api') {?>
    <div id="api_paykassa_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'paykassa' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['merchant_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[api][pk_merchant_id]"
                   id="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_merchant_id"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['pk_merchant_id'];?>
"/>
        </div>
        <div class="form-group">
            <label for="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['api_id'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[api][pk_api_id]"
                   id="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_id"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['pk_api_id'];?>
"/>
        </div>
        <div class="form-group">
            <label for="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_password" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['api_password'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[api][pk_api_password]"
                   id="api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_password" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['pk_api_password'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['pk_api_password'] ? '' : 'hide';?>
"
               id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key"
               onclick="set_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key','api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key"
               onclick="cancel_new_pass('pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_prv_key','pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_prv_key','api_pk_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-api-paykassa-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Paykassa (BTC) API Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Enter your Merchant ID . Check the SCI documentation if you do not know how to get it. </li>
                        <li>Login to your Paykassa.pro account. Go to API.
                            <ul>
                                <li>Click on "Create API".
                                </li>
                                <li>Enter any name.
                                </li>
                                <li>Enter/Set Secret Key. This will be your API Password.
                                </li>
                                <li>Enter any description and enter your server API (contact your hosting provider to get it).</li>
                                <li>Copy your API ID generated. For e.g 1234</li>
                            </ul>
                        </li>
                        <li>Enter API ID obtained above in "API ID" field.</li>
                        <li>Enter Secret Key set above in "API Password" field.</li>
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
