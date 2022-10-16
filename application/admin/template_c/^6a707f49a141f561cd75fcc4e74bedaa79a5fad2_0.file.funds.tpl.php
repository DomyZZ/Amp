<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:48
  from "/home/amper856/public_html/application/admin/template/pages/users/funds.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb38ec92f4_08772611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a707f49a141f561cd75fcc4e74bedaa79a5fad2' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/funds.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/manage.tpl' => 1,
  ),
),false)) {
function content_5e53eb38ec92f4_08772611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8826232345e53eb38ec2b13_69011044', "manage_user");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:users/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "manage_user"} */
class Block_8826232345e53eb38ec2b13_69011044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['fund_types']->value) {?>
        <div class="table-responsive">
            <table class="table table-striped footable">
                <thead>
                    <tr>
                        <th class="text-right"></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" data-placement="bottom" title="View All Transactions"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['balance'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=deposit" data-toggle="tooltip" data-placement="bottom" title="Total Deposits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposits'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" data-placement="bottom" title="Active Deposits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active_deposits'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=completed_withdrawal" data-toggle="tooltip" data-placement="bottom" title="Completed Withdrawals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdrawals'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_withdrawals?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" data-placement="bottom" title="Pending Withdrawals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['pending_withdrawals'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=ref_comm" data-toggle="tooltip" data-placement="bottom" title="Referral Commissions"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ref_comm'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                        <th class="text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=earning" data-toggle="tooltip" data-placement="bottom" title="Total Earnings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earnings'];?>
</a> <span
                                    class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'proc', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['proc']->value) {
?>
                        <tr>
                            <td class="text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
" data-toggle="tooltip"
                                         title="<?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
"/>
                                </a>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['balance'] != 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['balance'];?>

                                <?php } else { ?>
                                   --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['deposit'] != 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['deposit'];?>

                                <?php } else { ?>
                                   --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['active_deposit'] != 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['active_deposit'];?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['completed_withdrawal'] != 0) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['completed_withdrawal'];?>

                                <?php } else { ?>
                                  --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['pending_withdrawal'] != 0) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['pending_withdrawal'];?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['ref_comm'] != 0) {?>
                                   <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['ref_comm'];?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </td>
                            <td class="text-right">
                                <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['earning'] != 0) {?>
                                   <?php echo $_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['earning'];?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center"><?php echo strtoupper($_smarty_tpl->tpl_vars['lang']->value['label']['total']);?>
</td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" title="View All Transactions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['balance'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=deposit" data-toggle="tooltip" title="Total Deposits"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['deposit'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" title="Active Deposits"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['active_deposit'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=completed_withdrawal" data-toggle="tooltip" title="Completed Withdrawals"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['completed_withdrawal'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_withdrawals?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" data-toggle="tooltip" title="Pending Withdrawals"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['pending_withdrawal'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=ref_comm" data-toggle="tooltip" title="Referral Commissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['ref_comm'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                        <td class="text-bold text-right"><a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
&type=earning" data-toggle="tooltip" title="Total Earnings"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['earning'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning ">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_funds_available'];?>

        </div>
    <?php }
}
}
/* {/block "manage_user"} */
}
