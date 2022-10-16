<?php
/* Smarty version 3.1.30, created on 2020-07-22 20:14:41
  from "/home/hubmmsih/public_html/template/reset_password.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f189e31309ed4_11004875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c013487dc38aaca529c9a7e28eb3d2ab2411850f' => 
    array (
      0 => '/home/hubmmsih/public_html/template/reset_password.tpl',
      1 => 1578413622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f189e31309ed4_11004875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col-sm-6">
            <form class="form" method="post">
                
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_errors'][0][0]->form_errors(array('form'=>"reset_password"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_success'][0][0]->form_success(array('form'=>"reset_password"),$_smarty_tpl);?>


                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

                <div class="form-group">
                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
</label>
                    <input class="form-control" type="text" name="email"
                           label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
" required
                           value="<?php echo set_value('email');?>
" <?php echo isset($_smarty_tpl->tpl_vars['verification']->value) ? 'readonly' : '';?>
/>
                </div>

                <?php if (isset($_smarty_tpl->tpl_vars['verification']->value)) {?>
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['verification']->value['secques']['question'];?>
</label>
                        <input class="form-control" type="text" name="secans"/>
                    </div>
                <?php }?>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
</button>
                </div>
            </form>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
