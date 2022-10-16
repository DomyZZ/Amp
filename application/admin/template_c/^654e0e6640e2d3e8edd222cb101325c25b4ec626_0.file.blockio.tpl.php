<?php
/* Smarty version 3.1.30, created on 2020-02-24 09:43:20
  from "/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/blockio.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e539ab89d10f1_01695441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654e0e6640e2d3e8edd222cb101325c25b4ec626' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/payment_gateways/proc/blockio.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e539ab89d10f1_01695441 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_blockio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'blockio' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['api_key'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[blio_api_key]"
                   id="sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_key"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['blio_api_key'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secret_pin'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[blio_secret_pin]"
                   id="sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['blio_secret_pin'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['blio_secret_pin'] ? '' : 'hide';?>
"
               id="blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_pin"
               onclick="set_new_pass('blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_pin','blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_pin','sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_pin"
               onclick="cancel_new_pass('blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_pin','blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_pin','sci_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-blockio-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">BlockIo (BTC) SCI Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your Block.io account. Go to Settings.
                            <ul>
                                <li>Generate Secret PIN if not generated yet. Copy it.
                                </li>
                                <li>Go to "Show API Keys". Copy Bitcoin API key.
                                </li>
                            </ul>
                        </li>
                        <li>Enter API Key and Secret PIN in the respective fields.
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
    <div id="api_blockio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] == 'blockio' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_network_fees" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['network_fees'];?>
</label>
            <select class="form-control input-sm" name="payment_details[api][blio_network_fees]"
                    id="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_network_fees">
                <option value="low" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_network_fees'] == 'low' ? 'selected' : '';?>
>
                    Low
                </option>
                <option value="medium" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_network_fees'] == 'medium' ? 'selected' : '';?>
>
                    Medium
                </option>
                <option value="high" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_network_fees'] == 'high' ? 'selected' : '';?>
>
                    High
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['api_key'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[api][blio_api_key]"
                   id="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_api_key"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_api_key'];?>
"/>
        </div>
        <div class="form-group">
            <label for="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secret_pin'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[api][blio_secret_pin]"
                   id="api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_secret_pin'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)"
               class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['blio_secret_pin'] ? '' : 'hide';?>
"
               id="blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_secret_pin"
               onclick="set_new_pass('blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_secret_pin','blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_secret_pin','api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_secret_pin"
               onclick="cancel_new_pass('blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_api_secret_pin','blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_api_secret_pin','api_blio_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_pin')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>

    <!-- Modal Help -->
    <div id="help-sci-blockio-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">BlockIo (BTC) API Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your Block.io account. Go to Settings.
                            <ul>
                                <li>Generate Secret PIN if not generated yet. Copy it.
                                </li>
                                <li>Go to "Show API Keys". Copy Bitcoin API key.
                                </li>
                            </ul>
                        </li>
                        <li>Enter API Key and Secret PIN in the respective fields.
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
