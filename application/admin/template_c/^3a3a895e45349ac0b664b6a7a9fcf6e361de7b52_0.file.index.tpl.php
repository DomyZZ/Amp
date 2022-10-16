<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:11:49
  from "/home/hubmmsih/public_html/application/admin/template/pages/general_settings/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8600b5485773_75165603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a3a895e45349ac0b664b6a7a9fcf6e361de7b52' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/general_settings/index.tpl',
      1 => 1582120402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e8600b5485773_75165603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_366888035e8600b541bea4_01081099', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18430128905e8600b547ee35_79711402', "foo");
}
/* {block "page_content"} */
class Block_366888035e8600b541bea4_01081099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="general_settings" id="general_settings" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"general_settings"), 0, false);
?>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs dq-nav hide" id="dq-tab">
            <li>
                <a href="#site" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site'];?>
</a>
            </li>
            <li>
                <a href="#site_functions" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site_functions'];?>
</a>
            </li>
            <li>
                <a href="#site_security" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site_security'];?>
</a>
            </li>
            <li>
                <a href="#admin_security" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['admin_security'];?>
</a>
            </li>
            <li>
                <a href="#mail" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['mail'];?>
</a>
            </li>
            <li>
                <a href="#crate" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['currency_rates'];?>
</a>
            </li>
            <li>
                <a href="#cron" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['cron'];?>
</a>
            </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content" id="dq-tab-content">
            <div class="tab-pane fade" id="site">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="site_name"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['site_name'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control"
                                           name="general[site_name]"
                                           id="site_name"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'] : $_smarty_tpl->tpl_vars['site_host']->value;?>
"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="started_on"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['started_on'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md-3"
                                           name="general[started_on]" autocomplete="off" required
                                           id="started_on"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['started_on'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['started_on'] : '';?>
"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="force_https"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['force_https'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[force_https]"
                                           id="force_https"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['force_https'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timezone"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['timezone'];?>
</label>
                                <div class="col-md-8">
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['settings']->value['general']['timezone'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['timezone'] : 'UTC';
$_prefixVariable1=ob_get_clean();
echo timezone_menu($_prefixVariable1,'form-control','general[timezone]','id="timezone"');?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="admin_uri"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['admin_uri'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md-5" autocomplete="off"
                                           name="general[admin_uri]"
                                           id="admin_uri"
                                           aria-describedby="admin_uri_help"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['admin_uri'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['admin_uri'] : 'admin';?>
"/>
                                    <small id="admin_uri_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['change_admin_url'];?>

                                        <br>
                                        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['admin_url'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/<span
                                                id="new_admin_uri"></span>/
                                    </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="currency_decp"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['decimal_places'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md-6"
                                           name="general[currency_decp]"
                                           id="currency_decp"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['currency_decp'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['currency_decp'] : '2';?>
"/>
                                    <small class="help-block text-muted">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['no_decimal_places'];?>

                                    </small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_maintenance"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['maintenance_mode'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[site_maintenance]"
                                           id="site_maintenance"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_maintenance'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_maintenance_ips"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['maintenance_ip_whitelist'];?>
</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control input-md-6"
                                           name="general[site_maintenance_ips]"
                                           id="site_maintenance_ips"
                                           placeholder="192.168.1.10,202.49.5.8,......"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_maintenance_ips'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['site_maintenance_ips'] : '';?>
"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_maintenance_msg"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['maintenance_msg'];?>
</label>
                                <div class="col-md-8">
                                            <textarea class="form-control input-md-6"
                                                      name="general[site_maintenance_msg]"
                                                      id="site_maintenance_msg"><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_maintenance_msg'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['site_maintenance_msg'] : '';?>
</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="site_functions">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="disable_signups"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['disable_registration'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[disable_signups]"
                                           id="disable_signups"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['disable_signups'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disable_deposits"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['disable_deposit'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[disable_deposits]"
                                           id="disable_deposits"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['disable_deposits'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disable_withdrawals"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['disable_withdrawal'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[disable_withdrawals]"
                                           id="disable_withdrawals"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['disable_withdrawals'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['user_registration'];?>
</h3>
                                    <div class="form-group">
                                        <label for="double_optin_reg"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['conf_email_after_reg'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[double_optin_reg]"
                                                   id="double_optin_reg"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['double_optin_reg'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_details_reqd"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['contact_details_req'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[contact_details_reqd]"
                                                   id="contact_details_reqd"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['contact_details_reqd'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="req_sec_pass" class="control-label col-md-8">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['sec_pass_req'];?>

                                        </label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[req_sec_pass]"
                                                   id="req_sec_pass"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['req_sec_pass'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['user_profile'];?>
</h3>
                                    <div class="form-group">
                                        <label for="can_change_email"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['can_change_email'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[can_change_email]"
                                                   id="can_change_email"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['can_change_email'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="can_change_wallet_acc"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['can_edit_wallet_acc'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[can_change_wallet_acc]"
                                                   id="can_change_wallet_acc"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['can_change_wallet_acc'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['user_deposit'];?>
</h3>
                                    <div class="form-group">
                                        <label for="allow_dep_from_acc"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_dep_package_from_acc'];?>

                                            <small class="text-muted block">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_dep_help_txt'];?>
)</small>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[allow_dep_from_acc]"
                                                   id="allow_dep_from_acc"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['allow_dep_from_acc'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="allow_dep_acc_balance"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_dep_acc_balance'];?>

                                            <small class="text-muted block">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_dep_acc_help_txt'];?>
)
                                            </small>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[allow_dep_acc_balance]"
                                                   id="allow_dep_acc_balance"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['allow_dep_acc_balance'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['user_withdrawal'];?>
</h3>
                                    <div class="form-group">
                                        <label for="enable_auto_withdrawal"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_auto_withdrawal'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[enable_auto_withdrawal]"
                                                   id="enable_auto_withdrawal"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['enable_auto_withdrawal'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="can_cancel_withdrawal"
                                               class="control-label col-md-8"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel_withdrawal_request'];?>
</label>
                                        <div class="col-md-4">
                                            <input type="checkbox" name="general[can_cancel_withdrawal]"
                                                   id="can_cancel_withdrawal"
                                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['can_cancel_withdrawal'] ? 'checked=""' : '';?>
>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['user_internal_transfer'];?>
</h3>
                            <div class="form-group">
                                <label for="allow_itransfers"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_itrans'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[allow_itransfers]"
                                           id="allow_itransfers"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['allow_itransfers'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deduct_fee_from"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deduct_fees_from'];?>
</label>
                                <div class="col-md-8">
                                    <select name="general[deduct_fee_from]" id="deduct_fee_from"
                                            class="form-control input-auto">
                                        <option value="payer" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['deduct_fee_from'] == "payer" ? "selected" : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payer'];?>
</option>
                                        <option value="payee" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['deduct_fee_from'] == "payee" ? "selected" : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payee'];?>
</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="site_security">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title no-margin-top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['login_failures'];?>
</h3>
                            <div class="form-group">
                                <label for="max_attempts_signin"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_max_login_attempts'];?>

                                </label>
                                <div class="col-md-2">
                                    <input type="text" class="form-control input-md-1"
                                           name="general[max_attempts_signin]"
                                           id="max_attempts_signin" aria-describedby="max_attempts_signin_help"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['max_attempts_signin'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['max_attempts_signin'] : '0';?>
"/>
                                    <small id="max_attempts_signin_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_zero_to_disable'];?>
</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="banned_timeout_signin"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ban_time_max_login_attempts'];?>

                                </label>
                                <div class="col-md-8">
                                    <div class="input-group col-md-3">
                                        <input type="text" class="form-control text-right"
                                               name="general[banned_timeout_signin]" id="banned_timeout_signin"
                                               aria-describedby="banned_timeout_signin_help"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['banned_timeout_signin'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['banned_timeout_signin'] : '0';?>
"/><span
                                                class="input-group-addon"
                                                style="padding-left: 2px !important;">min(s)</span>
                                    </div>
                                    <small id="banned_timeout_signin_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_norestriction'];?>
</small>
                                </div>
                            </div>
                            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['captcha'];?>
</h3>
                            <div class="form-group">
                                <label for="req_captcha"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['use_captcha_verification'];?>
</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="general[req_captcha]"
                                           id="req_captcha"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['req_captcha'] ? 'checked=""' : '';?>
>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_captcha_pages'];?>
</label>
                                <div class="col-md-8">
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="general[use_login_captcha]"
                                               id="use_login_captcha"
                                               value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['use_login_captcha'] ? 'checked=""' : '';?>
>
                                        <label for="use_login_captcha"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['login'];?>
 </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="general[use_register_captcha]"
                                               id="use_register_captcha"
                                               value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['use_register_captcha'] ? 'checked=""' : '';?>
>
                                        <label for="use_register_captcha"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['register'];?>
 </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="general[use_support_captcha]"
                                               id="use_support_captcha"
                                               value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['use_support_captcha'] ? 'checked=""' : '';?>
>
                                        <label for="use_support_captcha"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['contact'];?>
 </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="general[use_create_ticket_captcha]"
                                               id="use_create_ticket_captcha"
                                               value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['use_create_ticket_captcha'] ? 'checked=""' : '';?>
>
                                        <label for="use_create_ticket_captcha"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['create_ticket'];?>
 </label>
                                    </div>
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="general[use_reply_ticket_captcha]"
                                               id="use_reply_ticket_captcha"
                                               value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['use_reply_ticket_captcha'] ? 'checked=""' : '';?>
>
                                        <label for="use_reply_ticket_captcha"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reply_ticket'];?>
 </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="captcha_type"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['captcha_type'];?>
</label>
                                <div class="col-md-8">
                                    <select name="general[captcha_type]" id="captcha_type"
                                            class="form-control" onchange="show_captcha_options()">
                                        <option value="standard" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_type'] == 'standard' ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['standard'];?>
</option>
                                        <option value="google_recaptcha" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_type'] == 'google_recaptcha' ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['google_recaptcha'];?>
</option>
                                    </select>
                                </div>
                            </div>
                            <div id="captcha_details">
                                <div class="form-group">
                                    <label for="captcha_width"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['captcha_width'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-2"
                                               name="general[captcha_width]"
                                               id="captcha_width"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_width'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_width'] : '170';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha_height"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['captcha_height'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-2"
                                               name="general[captcha_height]"
                                               id="captcha_height"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_height'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_height'] : '40';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="font_size"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['font_size'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-2"
                                               name="general[font_size]"
                                               id="font_size"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['font_size'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['font_size'] : '14';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha_num_chars"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['no_characters'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-2"
                                               name="general[captcha_num_chars]"
                                               id="captcha_num_chars"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_num_chars'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_num_chars'] : '6';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha_text_color"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['text_color'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="color" class="form-control input-md-2"
                                               id="captcha_text_color"
                                               name="general[captcha_text_color]"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_text_color'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_text_color'] : '#111111';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="captcha_bg_color"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['background_color'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="color" class="form-control input-md-2"
                                               id="captcha_bg_color"
                                               name="general[captcha_bg_color]"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_bg_color'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['captcha_bg_color'] : '#ffffff';?>
"/>
                                    </div>
                                </div>
                            </div>
                            <div id="google_recaptcha_details">
                                <div class="form-group">
                                    <label for="recaptcha_site_key"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['recaptcha_site_key'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-5"
                                               name="general[recaptcha_site_key]"
                                               id="recaptcha_site_key"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['recaptcha_site_key'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['recaptcha_site_key'] : '';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="recaptcha_secret_key"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['recaptcha_secret_key'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control input-md-5"
                                               name="general[recaptcha_secret_key]"
                                               id="recaptcha_secret_key"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['recaptcha_secret_key'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['recaptcha_secret_key'] : '';?>
"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="admin_security">
                <div class="panel-body">
                    <h3 class="title no-margin-top"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['secondary_password'];?>
</h3>
                    <div class="form-group">
                        <label for="req_admin_secondary_pass"
                               class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['use_secondary_password'];?>
</label>
                        <div class="col-md-8">
                            <input type="checkbox" name="file[req_admin_secondary_pass]"
                                   id="req_admin_secondary_pass"
                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['req_admin_secondary_pass'] ? 'checked=""' : '';?>
>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="secondary_password"
                               class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secondary_password'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control input-auto inline-block"
                                   name="file[secondary_password]"
                                   id="secondary_password" <?php echo $_smarty_tpl->tpl_vars['settings']->value['req_admin_secondary_pass'] ? "disabled placeholder='**hidden**'" : '';?>
 />
                            <a href="javascript:void(0)"
                               class="<?php echo $_smarty_tpl->tpl_vars['settings']->value['req_admin_secondary_pass'] ? '' : 'hide';?>
"
                               id="set_new_secondary_password"
                               onclick="set_new_pass('set_new_secondary_password','cancel_new_secondary_password','secondary_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
                            <a href="javascript:void(0)" class="hide" id="cancel_new_secondary_password"
                               onclick="cancel_new_pass('set_new_secondary_password','cancel_new_secondary_password','secondary_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
                        </div>
                    </div>
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['admin_ip_whitelist'];?>
</h3>
                    <div class="form-group">
                        <label for="req_admin_ip_whitelist"
                               class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['use_ip_whitelist'];?>
</label>
                        <div class="col-md-8">
                            <input type="checkbox" name="file[req_admin_ip_whitelist]"
                                   id="req_admin_ip_whitelist"
                                   value="true" <?php echo $_smarty_tpl->tpl_vars['settings']->value['req_admin_ip_whitelist'] ? 'checked=""' : '';?>
>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="allowed_acl_ips"
                               class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allowed_ips'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control input-md-5"
                                   name="file[allowed_acl_ips]"
                                   id="allowed_acl_ips"
                                   placeholder="192.168.1.1,192.168.1.2,10.10.0.1/24 ...."
                                   value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['allowed_acl_ips'];?>
"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in" id="mail">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="sendmailtype"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['mail_system'];?>
</label>
                                <div class="col-md-8">
                                    <select name="general[sendmailtype]" id="sendmailtype"
                                            class="form-control" onchange="show_mail_options()">
                                        <option value="phpmail" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['sendmailtype'] == 'phpmail' ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['phpmail'];?>

                                        </option>
                                        <option value="smtp" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['sendmailtype'] == 'smtp' ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp'];?>

                                        </option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div id="smtp_options">
                                <div class="form-group">
                                    <label for="smtp_protocol_ssl"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp_protocol'];?>
</label>
                                    <div class="col-md-8">
                                        <div class="radio-inline">
                                            <input type="radio" value="ssl" class="smtp_options"
                                                   name="general[smtp_protocol]" required
                                                   id="smtp_protocol_ssl" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_protocol'] == 'ssl' ? 'checked=""' : '';?>
>
                                            <label for="smtp_protocol_ssl"> SSL </label>
                                        </div>
                                        <div class="radio-inline">
                                            <input type="radio" value="tls" class="smtp_options"
                                                   name="general[smtp_protocol]" required
                                                   id="smtp_protocol_tls" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_protocol'] == 'tls' ? 'checked=""' : '';?>
>
                                            <label for="smtp_protocol_tls"> TLS </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smtp_host"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp_host'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control smtp_options"
                                               required
                                               name="general[smtp_host]"
                                               id="smtp_host"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_host'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_host'] : '';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smtp_port"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp_port'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control smtp_options"
                                               required
                                               name="general[smtp_port]"
                                               id="smtp_port"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_port'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_port'] : '';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smtp_user"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp_username'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control smtp_options"
                                               required
                                               name="general[smtp_user]"
                                               id="smtp_user"
                                               value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_user'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_user'] : '';?>
"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smtp_pass"
                                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['smtp_password'];?>
</label>
                                    <div class="col-md-8">
                                        <input type="text"
                                               class="form-control smtp_options smtp_pass input-auto inline-block"
                                               name="general[smtp_pass]" required
                                               id="smtp_pass" <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_pass'] ? "disabled placeholder='**hidden**'" : '';?>
/>
                                        <a href="javascript:void(0)"
                                           class="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['smtp_pass'] ? '' : 'hide';?>
"
                                           id="set_new_smtp_pass"
                                           onclick="set_new_pass('set_new_smtp_pass','cancel_new_smtp_pass','smtp_pass')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
                                        <a href="javascript:void(0)" class="hide" id="cancel_new_smtp_pass"
                                           onclick="cancel_new_pass('set_new_smtp_pass','cancel_new_smtp_pass','smtp_pass')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group" id="test_connection">
                                <div class="col-md-offset-4 col-md-8">
                                    <a href="javascript:void(0)" onclick="test_mail()" class="btn btn-success btn-xs">Test Connection</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="system_email"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['system_email'];?>
</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control input-md-5"
                                           name="general[system_email]"
                                           id="system_email"
                                           aria-describedby="system_email_help" placeholder="xxxxx@yy.zzz"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['system_email'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['system_email'] : '';?>
"/>
                                    <small id="system_email_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['system_email_desc'];?>
</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="support_email"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['support_email'];?>
</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control input-md-5"
                                           name="general[support_email]"
                                           id="support_email"
                                           aria-describedby="support_email_help" placeholder="xyxyxyxy@qq.zzz"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['support_email'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['support_email'] : '';?>
"/>
                                    <small id="support_email_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['support_email_desc'];?>
</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email_footer_msg"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['site_email_sig'];?>
</label>
                                <div class="col-md-8">
                                <textarea class="form-control input-md-6" name="general[email_footer_msg]"
                                          id="email_footer_msg"
                                          aria-describedby="email_footer_msg_help" rows="5"
                                          placeholder="......"><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['email_footer_msg'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['email_footer_msg'] : '';?>
</textarea>
                                    <small id="email_footer_msg_help"
                                           class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['site_email_sig_desc'];?>
</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_email_header"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['site_email_header'];?>
</label>
                                <div class="col-md-8">
                                <textarea class="form-control input-md-6" name="general[site_email_header]"
                                          id="site_email_header" rows="10"
                                          placeholder="......"><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_email_header'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['site_email_header'] : '';?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="site_email_footer"
                                       class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['site_email_footer'];?>
</label>
                                <div class="col-md-8">
                                <textarea class="form-control input-md-6" name="general[site_email_footer]"
                                          id="site_email_footer" rows="8"
                                          placeholder="......"><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_email_footer'] ? $_smarty_tpl->tpl_vars['settings']->value['general']['site_email_footer'] : '';?>
</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="crate">
                <div class="panel-body">
                    <div class="curr_rate_col-md-padd">
                        <table class="table table-bordered" style="width: auto; margin-bottom: 0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th colspan="2">Rate</th>
                                    <th>Default Exchange</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['curr_pairs']->value, 'pair');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pair']->value) {
?>
                                    <tr>
                                        <td align="right">
                                            1 <?php echo strtoupper($_smarty_tpl->tpl_vars['pair']->value['src']);?>
 =
                                        </td>
                                        <td>
                                            <input type="hidden" name="crate[ts_<?php echo $_smarty_tpl->tpl_vars['pair']->value['src'];?>
_<?php echo $_smarty_tpl->tpl_vars['pair']->value['dest'];?>
]"
                                                   id="ts_<?php echo $_smarty_tpl->tpl_vars['pair']->value['src'];?>
_<?php echo $_smarty_tpl->tpl_vars['pair']->value['dest'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pair']->value['ts_value'];?>
"
                                                   style="margin-right: 3px"/>
                                            <input type="text" class="form-control" name="crate[<?php echo $_smarty_tpl->tpl_vars['pair']->value['rate'];?>
]"
                                                   id="<?php echo $_smarty_tpl->tpl_vars['pair']->value['rate'];?>
"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['pair']->value['rate_value'];?>
"
                                                   style="margin-right: 3px; display: inline-block"/>
                                            <small class="text-muted">Leave blank for automatic rates</small>
                                        </td>
                                        <td>
                                            <?php echo strtoupper($_smarty_tpl->tpl_vars['pair']->value['dest']);?>

                                        </td>
                                        <td>
                                            <select class="form-control"
                                                    name="crate[<?php echo $_smarty_tpl->tpl_vars['pair']->value['exchange'];?>
]"
                                                    id="<?php echo $_smarty_tpl->tpl_vars['pair']->value['exchange'];?>
">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pair']->value['exchange_types'], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                                    <option value="<?php echo strtolower($_smarty_tpl->tpl_vars['val']->value);?>
" <?php ob_start();
echo strtolower($_smarty_tpl->tpl_vars['val']->value);
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['pair']->value['exchange_value'] == $_prefixVariable2 ? 'selected' : '';?>
>
                                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['val']->value);?>

                                                    </option>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </select>
                                        </td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cron">
                <div class="panel-body">

                    <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cron_status'];?>
: <?php echo $_smarty_tpl->tpl_vars['settings']->value['cron']['status'] == 1 ? '<span class="label label-success">Active</span>' : '<span class="label label-danger">Inactive</span>';?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cron_last_run'];?>
: <?php if ($_smarty_tpl->tpl_vars['settings']->value['cron']['last_ts']) {?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['settings']->value['cron']['last_ts'],'jS M, Y H:i:s');?>
 (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['settings']->value['cron']['last_ts'],'timeago');?>
)<?php } else { ?>Never<?php }?></p>
                    <hr />
                    <h5>Cron Command </h5>
                    <h5><code>*/5 * * * * curl -k --silent --compressed <?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/cron/<?php echo $_smarty_tpl->tpl_vars['settings']->value['cron_hash'];?>
</code></h5>

                    <div class="row help">
                        <div class="col-md-12">
                            <ul class="list-group list-group-documentation">
                                <li class="list-group-item list-group-item-info"><i class="fa fa-question-circle-o"></i> Documentation</li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="list-group-item-heading title">How to enable Cron in Cpanel</h5>
                                            <ol class="list-unstyled">
                                                <li>1) Log into your Cpanel.</li>
                                                <li>2) Click on "Cron Jobs". Scroll down to "Add New Cron Job".</li>
                                                <li>3) Check if there is no cron job already added for the same command above.</li>
                                                <li>4) Select "Once Per 5 Minutes (*/5 * * * *)" in Common Settings field.</li>
                                                <li>5) Enter the cron command above in the Command field. Click "Add New Cron Job"</li>
                                            </ol>

                                            <br />
                                            <p class="text-danger">Note: Make sure you do not run more than one cron job for the same command</p>


                                        </div>
                                    </div>

                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['req_admin_secondary_pass']) {?>
            <div class="form-group">
                <label class="control-label col-sm-2 text-danger"
                       style="padding-left: 0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['admin_secondary_password'];?>
</label>
                <div class="col-sm-2">
                    <input type="password" class="form-control"
                           name="alt_password" id="alt_password"
                           required/>
                </div>
            </div>
            <hr>
        <?php }?>

        <button type="submit" name="form_action" class="btn btn-primary" value="update"
                onclick="update_tab_form('general_settings')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_18430128905e8600b547ee35_79711402 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- BlockUI js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/jqueryBlockUI/jquery.blockUI.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- ckeditor js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        jQuery(function ($) {
            "use strict"; // Start of use strict

            CKEDITOR.replace('site_maintenance_msg', {
                height: '200px',
                fullPage: false,
                allowedContent: true
            });

            $("#started_on").datepicker({format: 'dd-mm-yyyy'});

            $('#new_admin_uri').text($('#admin_uri').val());

            $('#admin_uri').keyup(function () {
                $('#new_admin_uri').text($(this).val());
            });

            show_mail_options();
            show_captcha_options();
        });

        function show_captcha_options() {
            if ($('#captcha_type').val() == 'google_recaptcha') {
                $('#captcha_details').hide();
                $('#google_recaptcha_details').show();
            } else {
                $('#captcha_details').show();
                $('#google_recaptcha_details').hide();
            }
        }

        function show_mail_options() {
            $('#smtp_options').hide();
            $('#mailgun_options').hide();
            $('#sparkpost_options').hide();

            $('.smtp_options').attr({'disabled': 'true'});
            $('.mailgun_options').attr({'disabled': 'true'});
            $('.sparkpost_options').attr({'disabled': 'true'});

            var mailtype = $('#sendmailtype').val();

            if (mailtype != 'phpmail') {
                $('#' + mailtype + '_options').show();
                $('.' + mailtype + '_options').removeAttr('disabled');
                if ($('.' + mailtype + '_pass').attr('placeholder') == '**hidden**') {
                    $('.' + mailtype + '_pass').attr({'disabled': 'true'});
                }
                $('#test_connection').show();
            }
            else
                {
                    $('#test_connection').hide();
                }
        }

        function test_mail() {
            var url = dqs_admin_url + '/test_mail/';

            $.blockUI({
                message: 'Please wait...', css: {
                    border: 'none',
                    padding: '15px',
                    left: '40%',
                    width: '300px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: url,
                data: $('form#general_settings').serialize(),
                success: function (data) {
                    $.unblockUI();
                    alert(data['title'] + " : " + data['text']);
                },
                error: function () {
                    $.unblockUI();
                    alert('Connection Failed!');
                }
            });

        }
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
