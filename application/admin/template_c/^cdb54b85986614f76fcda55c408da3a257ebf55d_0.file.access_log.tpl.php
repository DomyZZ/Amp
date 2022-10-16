<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:55
  from "/home/amper856/public_html/application/admin/template/pages/users/access_log.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb3f6c4cf3_59779421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb54b85986614f76fcda55c408da3a257ebf55d' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/access_log.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/manage.tpl' => 1,
  ),
),false)) {
function content_5e53eb3f6c4cf3_59779421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317912535e53eb3f6c37a1_60238147', "manage_user");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:users/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "manage_user"} */
class Block_1317912535e53eb3f6c37a1_60238147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['user_ips']->value) {?>
        <div class="table-responsive">
            <table class="table table-striped footable">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ip'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['last_access'];?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_ips']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <td class="width-md-130"><?php echo $_smarty_tpl->tpl_vars['value']->value['ip'];?>
</td>
                            <td class="width-md-180"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['value']->value['date'],'d-M-Y H:i:s');?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning ">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_access_yet'];?>

        </div>
    <?php }
}
}
/* {/block "manage_user"} */
}
