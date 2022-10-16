<?php
/* Smarty version 3.1.30, created on 2020-01-09 17:30:03
  from "/home/amper856/public_html/amperium_test_site/application/admin/template/pages/form_status.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e17631b2e4b64_82495222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6f5aa67f2a7c2a3310d8552612a0b281f9bbd1' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/application/admin/template/pages/form_status.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e17631b2e4b64_82495222 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['status']->value) && $_smarty_tpl->tpl_vars['status']->value['form'] == $_smarty_tpl->tpl_vars['form']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['status']->value['type'] == 'success') {?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['status']->value['msg'];?>

    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value['type'] == 'error') {?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
        </button>
        <ul class="list-unstyled">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value['msg'], 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['status']->value['type'] == '2fa') {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['status']->value['msg'];?>

        </div>
    <?php }
}
}
}
