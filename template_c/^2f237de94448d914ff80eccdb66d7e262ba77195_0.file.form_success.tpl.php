<?php
/* Smarty version 3.1.30, created on 2020-02-25 17:18:32
  from "/home/amper856/public_html/template/form_success.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5556e8aceb78_85534276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f237de94448d914ff80eccdb66d7e262ba77195' => 
    array (
      0 => '/home/amper856/public_html/template/form_success.tpl',
      1 => 1578413615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5556e8aceb78_85534276 (Smarty_Internal_Template $_smarty_tpl) {
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
