<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:29
  from "/home/amper856/public_html/application/admin/template/pages/users/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb25e4d5c8_95526962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe5f2395d79e25b7ef4cfe6991e5d1699b8228f3' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/profile.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/manage.tpl' => 1,
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53eb25e4d5c8_95526962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12083545055e53eb25e43f57_00404527', "manage_user");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:users/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "manage_user"} */
class Block_12083545055e53eb25e43f57_00404527 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="manage_profile" id="manage_profile" method="post"
          action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/profile">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_profile"), 0, false);
?>

        <div class="row">
            <div class="col-sm-12 col-md-6">
				<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['general_details'];?>
</h3>
                <div class="form-group">
                    <label for="reg_date" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reg_date'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="reg_date"
                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['user']->value['reg_date'],'jS M, Y H:i:s');?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="reg_ip" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reg_ip'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="reg_ip"
                               value="<?php echo $_smarty_tpl->tpl_vars['user']->value['reg_ip'];?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
 <span
                                class="required">*</span></label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="username" id="username"
                               placeholder="john678" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
"
                               required/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
 <span
                                class="required">*</span></label>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="aaaaaaaa@zzz.yyy" required value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"/>
                    </div>
                </div>
				<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['security_details'];?>
</h3>
                <div class="form-group">
                    <label for="password" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['password'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control input-auto inline-block"
                               name="password" required
                               id="password" disabled placeholder="**hidden**"/>
                        <a href="javascript:void(0)" id="set_new_password"
                           onclick="set_new_pass('set_new_password','cancel_new_password','password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
                        <a href="javascript:void(0)" class="hide" id="cancel_new_password"
                           onclick="cancel_new_pass('set_new_password','cancel_new_password','password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
                    </div>
                </div>
                <div class="form-group">
                    <label for="secondary_password"
                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secondary_password'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control input-auto inline-block"
                               name="secondary_password"
                               id="secondary_password" <?php echo $_smarty_tpl->tpl_vars['user']->value['secondary_password'] ? 'disabled placeholder="**hidden**"' : '';?>
 />
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['secondary_password']) {?>
                            <a href="javascript:void(0)" id="set_new_secondary_password"
                               onclick="set_new_pass('set_new_secondary_password','cancel_new_secondary_password','secondary_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
                            <a href="javascript:void(0)" class="hide" id="cancel_new_secondary_password"
                               onclick="cancel_new_pass('set_new_secondary_password','cancel_new_secondary_password','secondary_password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
                        <?php }?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="secques" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secques'];?>
</label>
                    <div class="col-md-8">
                        <select name="secques" id="secques" class="form-control" style="width: 100%">
                            <option value="">--select--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secques']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['user']->value['secques'] == $_smarty_tpl->tpl_vars['value']->value['id'] ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['question'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="secans" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['secans'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control input-md-8" name="secans" id="secans"
                               value="<?php echo $_smarty_tpl->tpl_vars['user']->value['secans'];?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="detect_ip_change" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['detect_ip_change'];?>
</label>
                    <div class="col-md-8">
                        <select name="detect_ip_change" id="detect_ip_change" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detect_ip_change']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['user']->value['detect_ip_change'] == $_smarty_tpl->tpl_vars['key']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="detect_browser_change"
                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['detect_browser_change'];?>
</label>
                    <div class="col-md-8">
                        <select name="detect_browser_change" id="detect_browser_change" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detect_browser_change']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['user']->value['detect_browser_change'] == $_smarty_tpl->tpl_vars['key']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['twofa']) {?>
                    <div class="form-group">
                        <label for="disable_2fa" class="control-label col-md-4">Disable 2FA</label>
                        <div class="col-md-8">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="disable_2fa"
                                       id="disable_2fa"
                                       value="true">
                                <label for="disable_2fa"></label>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="col-sm-12 col-md-6">
				<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['contact_details'];?>
</h3>
                <div class="form-group">
                    <label for="address" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['address'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" name="address" id="address"
                               class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['city'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" name="city" id="city"
                               class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['state'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" name="state" id="state"
                               class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['state'];?>
"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['country'];?>
</label>
                    <div class="col-md-8">
                        <select name="country" id="country" class="form-control">
                            <option value="">--select--</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['user']->value['country'] == $_smarty_tpl->tpl_vars['value']->value['id'] ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="zip" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['zip'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" name="zip" id="zip" class="form-control"
                               value="<?php echo $_smarty_tpl->tpl_vars['user']->value['zip'];?>
"/>
                    </div>
                </div>
				<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['other_information'];?>
</h3>
                <div class="form-group">
                    <label for="auto_withdrawal" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['auto_withdrawal'];?>
</label>
                    <div class="col-md-8">
                        <select class="form-control" name="auto_withdrawal" id="auto_withdrawal">
                            <option value="yes" <?php echo $_smarty_tpl->tpl_vars['user']->value['auto_withdrawal'] == 'yes' ? 'selected' : '';?>
>Yes</option>
                            <option value="no" <?php echo $_smarty_tpl->tpl_vars['user']->value['auto_withdrawal'] == 'no' ? 'selected' : '';?>
>No</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="daily_withdrawal"
                           class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max_daily_withdrawal'];?>
</label>
                    <div class="col-md-8">
                        <input type="text" name="daily_withdrawal" id="daily_withdrawal"
                               class="form-control input-md-5"
                               aria-describedby="daily_withdrawal_help"
                               value="<?php echo rtrim(rtrim($_smarty_tpl->tpl_vars['user']->value['daily_withdrawal'],'0'),'.');?>
"/>
                        <small id="daily_withdrawal_help"
                               class="help-block text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_unlimited'];?>
</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status" class="control-label col-md-4"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['status'];?>
</label>
                    <div class="col-md-8">
                        <select class="form-control" name="status" id="status">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_status']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['user']->value['status'] == $_smarty_tpl->tpl_vars['key']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>

    <div class="row help">
        <div class="col-md-12">
            <ul class="list-group list-group-documentation">
                <li class="list-group-item list-group-item-info"><i class="fa fa-question-circle-o"></i> Documentation</li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading title">SECURITY DETAILS</h5>
                    <p class="list-group-item-text">
                        <b>Secondary Password</b> - This is an extra password which if set is required in sensitive account operations like withdrawal, edit profile , update wallet accounts etc.
                    </p>
                    <p class="list-group-item-text">
                        <b>Security Question/Answer</b> - This is a security feature which adds an extra security layer while resetting forgotten passwords. During resetting password, user will be asked to answer his security question which is set above before going to the next step of password reset.
                    </p>
                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading title">OTHER INFORMATION</h5>
                    <p class="list-group-item-text">
                        <b>Auto Withdrawal</b> - Enable/Disable auto withdrawal for the user. if set to "enabled" , user will be allowed to instantly withdraw his funds provided global auto withdrawal setting is enabled which can be done <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#site_functions">here</a>.
                    </p>
                    
                </li>

            </ul>
        </div>
    </div>

<?php
}
}
/* {/block "manage_user"} */
}
