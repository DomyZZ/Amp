<?php
/* Smarty version 3.1.30, created on 2020-07-04 13:26:48
  from "/home/hubmmsih/public_html/template/dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f008398458714_84554325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03b4c8319cb2d5a313300a25adaa856b9f28274d' => 
    array (
      0 => '/home/hubmmsih/public_html/template/dashboard.tpl',
      1 => 1580929386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f008398458714_84554325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['pending_payments']->value) {?>
    <div class="alert alert-warning">You have pending payments. <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/pending_payments">View them
            here</a>.
    </div>
<?php }?>


<div class="row">
    <div class="col-sm-3">
        <img src="images/dashboard-icon-1.png" class="img-fluid" />
    </div>
    <div class="col-sm-9">
        <div class="row mb-3">
            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['profile_details'];?>
 - <a href="edit_profile"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_profile'];?>
</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>

                        <span><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>

                        <span><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['registered_on'];?>

                        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['user']->value['reg_date'],"d-M-Y H:i:s");?>
</span></li>

                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['registered_ip'];?>

                        <span><?php echo $_smarty_tpl->tpl_vars['user']->value['reg_ip'];?>
</span></li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_accessed'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['last_access']) {?>
                            <a href="access_log"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['user']->value['last_access'],"d-M-Y H:i:s");?>
</a>
                        <?php } else { ?>
                            <span>--</span>
                        <?php }?>
                    </li>

                </ul>
            </div>
            <div class="col-sm-6">

                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['security_settings'];?>
 - <a href="security"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit_security'];?>
</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['secondary_password'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['secondary_password']) {?>
                            <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['active'];?>
</span>
                        <?php } else { ?>
                            <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['inactive'];?>
</span>
                        <?php }?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login_twofa'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['twofa']) {?>
                            <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['active'];?>
</span>
                        <?php } else { ?>
                            <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['inactive'];?>
</span>
                        <?php }?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['security_ques_ans'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['secques']) {?>
                            <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['active'];?>
</span>
                        <?php } else { ?>
                            <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['inactive'];?>
</span>
                        <?php }?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ip_change_detection_level'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['detect_ip_change'] != "disabled") {?>
                            <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['enabled'];?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value['detect_ip_change'];?>
)</span>
                        <?php } else { ?>
                            <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['disabled'];?>
</span>
                        <?php }?>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['browser_change_detection'];?>

                        <?php if ($_smarty_tpl->tpl_vars['user']->value['detect_browser_change'] == "enabled") {?>
                            <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['enabled'];?>
</span>
                        <?php } else { ?>
                            <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['disabled'];?>
</span>
                        <?php }?>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm-3">
        <img src="images/dashboard-icon-2.png" class="img-fluid" />
    </div>
    <div class="col-sm-9">
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="title title-style-two">
                    <div class="main-text">Account Balances ~</div>
                </div>
                <ul class="list-inline">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value['proc_balances'], 'pb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pb']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['pb']->value['amount'] > 0) {?>
                            <li class="list-inline-item">
                                <img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['pb']->value['proc_icon'];?>
" class="proc-icon mr-2" style="width: 28px"/>
                                <span class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['pb']->value['amount'];?>
</span>
                            </li>
                        <?php }?>
                        <?php
}
} else {
?>

                        <li class="list-group-item text-center text-danger">
                            --
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_information'];?>

                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_deposits'];?>
 <span
                                class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['deposit'];?>
</span>
                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['active_deposits'];?>
 <span
                                class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['active_deposit'];?>
</span>
                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_deposit'];?>
 <span
                                class="float-right pull-right text-right">
                    <?php if ($_smarty_tpl->tpl_vars['last_deposit']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['last_deposit']->value['amount'];?>

                        <small class="d-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['last_deposit']->value['date'],"timeago");?>
</small>

                    <?php } else { ?>
                        --
                    <?php }?></span>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-secondary">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_information'];?>

                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_withdrawals'];?>
 <span
                                class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['completed_withdrawal'];?>
</span>
                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pending_withdrawals'];?>
 <span
                                class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['pending_withdrawal'];?>
</span>
                    </li>
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_withdrawal'];?>
 <span
                                class="float-right pull-right text-right"> <?php if ($_smarty_tpl->tpl_vars['last_withdrawal']->value) {?>
                                <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['last_withdrawal']->value['amount'];?>

                                <small class="d-block"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['last_withdrawal']->value['date'],"timeago");?>
</small>

                            <?php } else { ?>
                                --
                            <?php }?>
                </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
