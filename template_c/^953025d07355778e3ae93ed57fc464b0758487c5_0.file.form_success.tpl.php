<?php
/* Smarty version 3.1.30, created on 2020-02-02 16:05:16
  from "/home/amper856/public_html/amperium_test_site/template/form_success.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e36f33c3b5a55_10464047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '953025d07355778e3ae93ed57fc464b0758487c5' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/form_success.tpl',
      1 => 1578413615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e36f33c3b5a55_10464047 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['status']->value) && $_smarty_tpl->tpl_vars['status']->value["form"] == $_smarty_tpl->tpl_vars['form']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value['type'] == "success") {?>
        <div class="alert alert-dismissible alert-success ">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo $_smarty_tpl->tpl_vars['status']->value['msg'];?>

        </div>
    <?php }
}?>

<?php }
}
