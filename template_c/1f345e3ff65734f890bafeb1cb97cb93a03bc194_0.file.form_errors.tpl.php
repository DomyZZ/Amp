<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:36:16
  from "/home/amper856/public_html/template/form_errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ed70243251_43554519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f345e3ff65734f890bafeb1cb97cb93a03bc194' => 
    array (
      0 => '/home/amper856/public_html/template/form_errors.tpl',
      1 => 1578413625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ed70243251_43554519 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['status']->value) && $_smarty_tpl->tpl_vars['status']->value["form"] == $_smarty_tpl->tpl_vars['form']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value['type'] == "error") {?>
        <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value['msg'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                <div><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    <?php }
}?>

<?php }
}