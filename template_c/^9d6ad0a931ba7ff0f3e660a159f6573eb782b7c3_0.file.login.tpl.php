<?php
/* Smarty version 3.1.30, created on 2020-08-05 23:07:21
  from "/home/hubmmsih/public_html/template/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2b3ba92931b7_16291205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d6ad0a931ba7ff0f3e660a159f6573eb782b7c3' => 
    array (
      0 => '/home/hubmmsih/public_html/template/login.tpl',
      1 => 1588753552,
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
function content_5f2b3ba92931b7_16291205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row mt-4">
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
