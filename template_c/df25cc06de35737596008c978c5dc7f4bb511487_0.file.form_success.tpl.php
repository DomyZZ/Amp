<?php
/* Smarty version 3.1.30, created on 2020-08-05 23:07:21
  from "/home/hubmmsih/public_html/template/form_success.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2b3ba93dd422_25924635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df25cc06de35737596008c978c5dc7f4bb511487' => 
    array (
      0 => '/home/hubmmsih/public_html/template/form_success.tpl',
      1 => 1578413615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2b3ba93dd422_25924635 (Smarty_Internal_Template $_smarty_tpl) {
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
