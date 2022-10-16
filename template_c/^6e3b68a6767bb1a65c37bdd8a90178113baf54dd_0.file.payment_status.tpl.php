<?php
/* Smarty version 3.1.30, created on 2020-06-09 11:06:57
  from "/home/hubmmsih/public_html/template/payment_status.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5edf6d51ddc4c3_15259403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3b68a6767bb1a65c37bdd8a90178113baf54dd' => 
    array (
      0 => '/home/hubmmsih/public_html/template/payment_status.tpl',
      1 => 1578413629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5edf6d51ddc4c3_15259403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">

    <div class="col-sm-12">

        <?php if ($_smarty_tpl->tpl_vars['status']->value == "failed") {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['payment_failed'];?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['status']->value == "successful") {?>
            <div class="alert alert-success">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['payment_successful'];?>

            </div>
        <?php }?>


    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
