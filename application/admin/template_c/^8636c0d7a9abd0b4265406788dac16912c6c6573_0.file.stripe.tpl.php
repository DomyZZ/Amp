<?php
/* Smarty version 3.1.30, created on 2020-03-25 09:12:30
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/stripe.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b207e2c4f33_99092462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8636c0d7a9abd0b4265406788dac16912c6c6573' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/proc/stripe.tpl',
      1 => 1582120432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b207e2c4f33_99092462 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['settings']->value == 'sci') {?>
    <div id="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] == 'stripe' ? '' : 'class="hide"';?>
>
        <div class="form-group">
            <label for="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_publishable_key"
                   class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['publishable_key'];?>
</label>
            <input type="text" class="form-control input-sm"
                   name="payment_details[stripe_publishable_key]"
                   id="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_publishable_key"
                   value="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['stripe_publishable_key'];?>
"/>
        </div>
        <div class="form-group">
            <label for="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_key" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secret_key'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[stripe_secret_key]"
                   id="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_key" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['stripe_secret_key'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['stripe_secret_key'] ? '' : 'hide';?>
"
               id="stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_key"
               onclick="set_new_pass('stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_key','stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_key','sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_key"
               onclick="cancel_new_pass('stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_secret_key','stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_secret_key','sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_secret_key')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
        <div class="form-group">
            <label for="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_webhook_signing_secret"
                   class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['webhook_signing_secret'];?>
</label>
            <input type="text" class="form-control input-sm inline-block"
                   name="payment_details[stripe_webhook_signing_secret]"
                   id="sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_webhook_signing_secret" <?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['stripe_webhook_signing_secret'] ? "disabled placeholder='**hidden**'" : '';?>
 />
            <a href="javascript:void(0)" class="<?php echo $_smarty_tpl->tpl_vars['proc']->value['payment_details']['stripe_webhook_signing_secret'] ? '' : 'hide';?>
"
               id="stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_webhook_signing_secret"
               onclick="set_new_pass('stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_webhook_signing_secret','stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_webhook_signing_secret','sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_webhook_signing_secret')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
            <a href="javascript:void(0)" class="hide" id="stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_webhook_signing_secret"
               onclick="cancel_new_pass('stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_set_new_sci_webhook_signing_secret','stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_cancel_new_sci_webhook_signing_secret','sci_stripe_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
_webhook_signing_secret')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
        </div>
    </div>
    <!-- Modal Help -->
    <div id="help-sci-stripe-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Stripe : via Website (<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['curr_nick']);?>
) SCI Documentation</h4>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>Login to your stripe account. Go to Developers >
                            Api Keys.
                            <ul>
                                <li>Get your publishable key and secret key.
                                </li>
                                <li><b>Note:</b> If you want to do testing, toggle "View test data" in the row above and copy
                                    those publishable and secret key instead.
                                </li>
                            </ul>
                        </li>
                        <li>Go to Developers > Webhooks.
                            <ul>
                                <li>Click "Add endpoint".
                                </li>
                                <li>
                                    Set Endpoint Url to : <b><?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/payment/status/<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
</b>
                                </li>
                                <li>
                                    Select "checkout.session.completed" for Events to send.
                                </li>
                                <li>
                                    Save the endpoint.
                                </li>
                                <li>
                                    Go back to your webhooks page. Get the webhook signing secret.
                                </li>
                            </ul>
                        </li>
                        <li>
                            Enter all details (Publishable Key, Secret Key and Webhook Signing Secret) in respective
                            fields in your sites's admin panel.
                        </li>

                    </ol>

                    <p>Note: If you are doing testing, you can find all test card data <a
                                href="https://stripe.com/docs/testing" target="_blank">here</a>. Make sure you use real api keys instead of test api keys after you are done with testing.</p>

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
