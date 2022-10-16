<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:43
  from "/home/amper856/public_html/application/admin/template/pages/users/wallet_accounts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb33e3ba77_38812307',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59abd6063423fb28ea666a6d4e970fdb7f57a6d4' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/wallet_accounts.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/manage.tpl' => 1,
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53eb33e3ba77_38812307 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31851065e53eb33e38f72_64527557', "manage_user");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:users/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "manage_user"} */
class Block_31851065e53eb33e38f72_64527557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['wallets']->value) {?>
        <form name="manage_wallet_accounts" id="manage_wallet_accounts" method="post"
              action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/wallet_accounts">
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
            <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_wallet_accounts"), 0, false);
?>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="1%"></th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['account'];?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallets']->value, 'wallet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['wallet']->value) {
?>
                            <tr>
                                <td class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['adminbase']->value;?>
/payment-gateways">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['wallet']->value['icon'];?>
"
                                             rel="tooltip"
                                             title="<?php echo $_smarty_tpl->tpl_vars['wallet']->value['name'];?>
"/>
                                    </a>
                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['wallet']->value['p_type'] == 'custom') {?>
                                        <?php if (is_array($_smarty_tpl->tpl_vars['wallet']->value['account'])) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wallet']->value['account'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                                                <span style="float: left; margin-left: 5px; display: block; font-weight: 600"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

                                                    :</span>
                                                <input type="text" class="form-control"
                                                       style="margin-bottom: 5px"
                                                       name="accounts[<?php echo $_smarty_tpl->tpl_vars['wallet']->value['proc'];?>
][<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
][value]"
                                                       id="account_<?php echo $_smarty_tpl->tpl_vars['wallet']->value['proc'];?>
_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['value'];?>
"/>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        <?php } else { ?>
                                            <span class="text-danger">-- No withdraw fields set in payment gateways --</span>
                                        <?php }?>
                                    <?php } else { ?>
                                        <input type="text" class="form-control"
                                               name="accounts[<?php echo $_smarty_tpl->tpl_vars['wallet']->value['proc'];?>
]"
                                               id="account_<?php echo $_smarty_tpl->tpl_vars['wallet']->value['proc'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['wallet']->value['account'];?>
">
                                    <?php }?>
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
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
        </form>
    <?php } else { ?>
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_active_proc'];?>

        </div>
    <?php }
}
}
/* {/block "manage_user"} */
}
