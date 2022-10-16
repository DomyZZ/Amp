<?php
/* Smarty version 3.1.30, created on 2020-02-06 20:07:50
  from "/home/amper856/public_html/amperium_test_site/template/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3c72163aa9b1_11680906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ed15f244b6dd642f28e1c1ecdd701d3eda31cc' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/register.tpl',
      1 => 1578952347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_errors.tpl' => 1,
    'file:captcha.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e3c72163aa9b1_11680906 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="l-box">
            <i class="la la-user-plus"></i>
            <?php if ($_smarty_tpl->tpl_vars['preform_error']->value) {?>
                <div class="alert alert-danger">
                    <?php echo $_smarty_tpl->tpl_vars['preform_error_msg']->value;?>

                </div>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['status']->value['type'] == "success" && $_smarty_tpl->tpl_vars['status']->value['form'] == "register") {?>
                    <div class="alert alert-success">
                        <?php echo $_smarty_tpl->tpl_vars['status']->value['msg'];?>

                    </div>
                <?php } else { ?>
                    <form class="form" method="post">

                        <?php $_smarty_tpl->_subTemplateRender("file:form_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"register"), 0, false);
?>

                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
                        <div class="form-group">
                            <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
</label>
                            <input type="text" class="form-control" name="username" value="<?php echo set_value("username");?>
" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</label>
                            <input type="text" class="form-control" name="email" value="<?php echo set_value("email");?>
" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
</label>
                                    <input type="password" class="form-control" name="password"
                                           value="<?php echo set_value("password");?>
" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_password'];?>
</label>
                                    <input type="password" class="form-control" name="confirm_password"
                                           value="<?php echo set_value("confirm_password");?>
" required>

                                </div>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['req_sec_pass']) {?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['secondary_password'];?>
</label>
                                        <input type="password" class="form-control" name="secondary_password"
                                               value="<?php echo set_value("secondary_password");?>
" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_secondary_password'];?>
</label>
                                        <input type="password" class="form-control" name="confirm_secondary_password"
                                               value="<?php echo set_value("confirm_secondary_password");?>
" required>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['contact_details_reqd']) {?>
                            <h3 class="text-success">Contact Details</h3>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['address'];?>
</label>
                                <input type="text" class="form-control" name="address"
                                       value="<?php echo set_value("address");?>
" required>
                            </div>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['city'];?>
</label>
                                <input type="text" class="form-control" name="city"
                                       value="<?php echo set_value("city");?>
" required>
                            </div>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['state'];?>
</label>
                                <input type="text" class="form-control" name="state"
                                       value="<?php echo set_value("state");?>
" required>
                            </div>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
</label>
                                <select class="form-control" name="country">
                                    <option value="">--select--</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['zip'];?>
</label>
                                <input type="text" class="form-control" name="zip"
                                       value="<?php echo set_value("zip");?>
" required>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['wallets']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallets']->value, 'wallet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wallet']->value) {
?>
                                <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['wallet']->value['name'];?>
</label>
                                    <input type="text" class="form-control" name="wallets[<?php echo $_smarty_tpl->tpl_vars['wallet']->value['nick'];?>
]"
                                           value="" placeholder="e.g <?php echo $_smarty_tpl->tpl_vars['wallet']->value['placeholder'];?>
">
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>



                        <?php if ($_smarty_tpl->tpl_vars['upline']->value) {?>
                            <div class="form-group">
                                <div class="alert alert-info">
                                    You are referred by <?php echo $_smarty_tpl->tpl_vars['upline']->value;?>

                                </div>
                            </div>
                        <?php }?>
                        <div class="form-group checkbox">
                            <label><input type="checkbox" name="agree" <?php echo set_value('agree') ? 'checked' : '';?>
 required> I agree to terms
                                & conditions</label>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['req_captcha'] && $_smarty_tpl->tpl_vars['settings']->value['general']['use_register_captcha']) {?>
                            <?php $_smarty_tpl->_subTemplateRender("file:captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php }?>
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
</button>
                    </form>
                <?php }?>
            <?php }?>
        </div>
    </div>
    <div class="col-sm-2"></div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
