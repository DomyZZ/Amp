<?php
/* Smarty version 3.1.30, created on 2020-02-06 20:07:31
  from "/home/amper856/public_html/amperium_test_site/template/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e3c7203f3e828_47443655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '152f192d7224c5bc916bf75d2be6ff8bece47d71' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/login.tpl',
      1 => 1578952346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:captcha.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e3c7203f3e828_47443655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="l-box">
            <i class="la la-user-lock"></i>
            <form class="form" method="post">

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_errors'][0][0]->form_errors(array('form'=>"login"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_success'][0][0]->form_success(array('form'=>"login"),$_smarty_tpl);?>


                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</label>
                    <input class="form-control" type="email" name="email" required value="<?php echo set_value('email');?>
"/>
                </div>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
</label>
                    <input class="form-control" type="password" name="password" required/>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['req_captcha'] && $_smarty_tpl->tpl_vars['settings']->value['general']['use_login_captcha']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
</button>
                    &nbsp;&nbsp;<a href="reset_password"><?php echo $_smarty_tpl->tpl_vars['lang']->value['forgot_password'];?>
?</a>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-2"></div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
