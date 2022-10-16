<?php
/* Smarty version 3.1.30, created on 2020-01-09 17:29:25
  from "/home/amper856/public_html/amperium_test_site/application/admin/template/pages/dashboard/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e1762f52e9bd4_89168775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0748f58c5fb8a5a6db695390b51ad1ca87df5cca' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/application/admin/template/pages/dashboard/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1762f52e9bd4_89168775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5347208255e1762f51d0b17_00408061', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21290338795e1762f52c9c02_19096591', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13899066635e1762f52e3368_31896725', "foo");
}
/* {block "breadcrumb"} */
class Block_5347208255e1762f51d0b17_00408061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_21290338795e1762f52c9c02_19096591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row dashboard-box">
        <div class="col-xs-12 col-sm-5 col-md-5">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">USERS</h3>
                </div>
                <div class="panel-body text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['total_users']->value;?>
</h2>

                    <h6 class="text-muted">( <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['users_today'];?>
: <?php echo $_smarty_tpl->tpl_vars['users_today']->value;?>
 )</h6>
                </div>
                <div class="panel-footer text-center">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users?status=active"><b><?php echo $_smarty_tpl->tpl_vars['active_users']->value;?>
</b></a> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['suspended'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users?status=suspended"><b><?php echo $_smarty_tpl->tpl_vars['suspended_users']->value;?>
</b></a>
                                        | <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['blocked'];?>
:
                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users?status=blocked"><b><?php echo $_smarty_tpl->tpl_vars['blocked_users']->value;?>
</b></a> | <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposited'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits"><b><?php echo $_smarty_tpl->tpl_vars['deposited_users']->value;?>
</b></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">DEPOSITS</h3>
                </div>
                <div class="panel-body text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_deposits']->value);?>
</span></h2>

                    <h6 class="text-muted">( <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposits_today'];?>

                                           : <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['deposits_today']->value,$_smarty_tpl->tpl_vars['curr_decp']->value);?>
 )</h6>
                </div>
                <div class="panel-footer text-center">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active'];?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['total_funds']->value['active_deposit'] ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['active_deposit'],$_smarty_tpl->tpl_vars['curr_decp']->value)) : 0;?>
</b>
                                        | <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earnings'];?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['total_funds']->value['earning'] ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['earning'],$_smarty_tpl->tpl_vars['curr_decp']->value)) : 0;?>
</b>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">WITHDRAWALS</h3>
                </div>
                <div class="panel-body text-center">
                    <h2><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_withdrawals']->value);?>
</span></h2>

                    <h6 class="text-muted">( <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdrawals_today'];?>

                                           : <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['withdrawals_today']->value,$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                           )</h6>
                </div>
                <div class="panel-footer text-center">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['pending'];?>
:
                    <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['total_funds']->value['pending_withdrawal'] ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['pending_withdrawal'],$_smarty_tpl->tpl_vars['curr_decp']->value)) : 0;?>
</b>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div style="float: left">
                
            </div>
            <div style="float: right; font-size: 16px">
                <div style="display: inline-block" id="date_range_deposits"></div>
                <div style="display:inline-block;margin-left: 10px" id="date_range_withdrawals"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="container" style="height: 400px; min-width: 310px"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['finances_in_details'];?>
</h3>
            <?php if ($_smarty_tpl->tpl_vars['processors']->value) {?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="tr-color">
                                <th width="1%"></th>
                                <th colspan="2" class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['today'];?>
</th>
                                <th colspan="2" class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['this_week'];?>
</th>
                                <th colspan="2" class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['this_month'];?>
</th>
                                <th colspan="2" class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['this_year'];?>
</th>
                                <th colspan="2" class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total'];?>
</th>
                            </tr>
                            <tr class="thead-bg-1">
                                <th></th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['in'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['out'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['in'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['out'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['in'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['out'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['in'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['out'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['in'];?>
</th>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['out'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'proc', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['proc']->value) {
?>
                                <tr>
                                    <td class="thead-bg-1 text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
"
                                                 data-toggle="tooltip"
                                                 title="<?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
"/>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['today']['add_funds'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['today']['add_funds'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['today']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['today']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['week']['add_funds'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['week']['add_funds'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['week']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['week']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['month']['add_funds'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['month']['add_funds'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['month']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['month']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['year']['add_funds'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['year']['add_funds'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['finances']->value['year']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value]) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['year']['completed_withdrawal'][$_smarty_tpl->tpl_vars['id']->value],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['add_funds'] != 0) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['add_funds'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
                                        <?php }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['completed_withdrawal'] != 0) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['fund_types']->value[$_smarty_tpl->tpl_vars['id']->value]['completed_withdrawal'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                        <?php } else { ?>
                                            <span style="color:#b3b3b3">--</span>
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
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['today']['add_funds']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['today']['add_funds']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['today']['completed_withdrawal']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['today']['completed_withdrawal']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['week']['add_funds']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['week']['add_funds']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['week']['completed_withdrawal']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['week']['completed_withdrawal']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['month']['add_funds']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['month']['add_funds']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['month']['completed_withdrawal']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['month']['completed_withdrawal']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['year']['add_funds']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['year']['add_funds']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['finances']->value['year']['completed_withdrawal']['total']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['finances']->value['year']['completed_withdrawal']['total'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['total_funds']->value['add_funds']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['add_funds'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                                <td class="text-center text-bold">
                                    <?php if ($_smarty_tpl->tpl_vars['total_funds']->value['completed_withdrawal']) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['total_funds']->value['completed_withdrawal'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php }?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_active_proc'];?>

                </div>
            <?php }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['top'];?>
 20 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['depositors'];?>
</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['top_depositors']->value)) {?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="thead-bg-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                                <th class="thead-bg-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_depositors']->value, 'depositor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['depositor']->value) {
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['depositor']->value['user_id'];?>
/profile" data-toggle="tooltip"
                                           title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['depositor']->value['username'];?>
</a>
                                    </td>
                                    <td class="text-success"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['depositor']->value['dep_amount']);?>
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
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

                </div>
            <?php }?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['top'];?>
 20 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['referrers'];?>
</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['top_referrers']->value)) {?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['referrals'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['commissions'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_referrers']->value, 'referrer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['referrer']->value) {
?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['referrer']->value['user_id'];?>
/profile" data-toggle="tooltip"
                                           title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['referrer']->value['username'];?>
</a>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['referrer']->value['referral'];?>
</td>
                                    <td class="text-success"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['referrer']->value['ref_amount']);?>
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
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

                </div>
            <?php }?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4">
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['last'];?>
 20 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposits'];?>
</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['last_deposits']->value)) {?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['date'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['last_deposits']->value, 'deposit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['deposit']->value) {
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['deposit']->value['start_date'],'timeago');?>
</td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['deposit']->value['user_id'];?>
/profile" data-toggle="tooltip"
                                           title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['deposit']->value['username'];?>
</a>
                                    </td>
                                    <td class="text-success"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>
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
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

                </div>
            <?php }?>
        </div>
    </div>
    <div class="row help">
        <div class="col-md-12">
            <ul class="list-group list-group-documentation">
                <li class="list-group-item list-group-item-info"><i class="fa fa-question-circle-o"></i> Documentation
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="list-group-item-heading title">Users</h5>
                            <p class="list-group-item-text"><b>Total Users</b> - Total number of users.</p>
                            <p class="list-group-item-text"><b>Active Users</b> - No. of users with atleast one deposit.
                            </p>
                            <p class="list-group-item-text"><b>Suspended Users</b> - No. of users who are not allowed to
                                                                                   deposit, withdraw, internal transfer.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="list-group-item-heading title">Deposits</h5>
                            <p class="list-group-item-text"><b>Total Deposits</b> - Sum total of active/expired deposits
                                                                                  to packages.</p>
                            <p class="list-group-item-text"><b>Active Deposits</b> - Sum total of deposits which are
                                                                                   currently active and producing
                                                                                   earnings.</p>
                            <p class="list-group-item-text"><b>Earnings</b> - Sum total of earnings from the active
                                                                            deposits.</p>
                        </div>
                        <div class="col-md-4">
                            <h5 class="list-group-item-heading title">Withdrawals</h5>
                            <p class="list-group-item-text"><b>Total Withdrawals</b> - Sum total of completed
                                                                                     withdrawals.</p>
                            <p class="list-group-item-text"><b>Pending Withdrawals</b> - Sum total of withdrawals which
                                                                                       are waiting to be processed.</p>
                        </div>
                    </div>

                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading title">Funds In/Out</h5>
                    <p class="list-group-item-text"><b>Funds In</b> - Sum total of funds which were added by users
                                                                    either for depositing directly to package or just
                                                                    added to account balance from external processors.
                                                                    This does not include the deposits/re-deposits to
                                                                    packages from account balance.</p>
                    <p class="list-group-item-text"><b>Funds Out</b> - Sum total of funds which went out of the system
                                                                     as completed withdrawals .</p>
                </li>

            </ul>
        </div>
    </div>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_13899066635e1762f52e3368_31896725 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Highstock js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/highstock/highstock.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/highstock/exporting.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/highstock/export-data.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        var dec_places = "<?php echo $_smarty_tpl->tpl_vars['curr_decp']->value;?>
";
        var curr_symbol = "<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
";
        var date_range_deposits = '--';
        var date_range_withdrawals = '--';

        
        $(document).ready(function () {

            Highcharts.stockChart('container', {
                title: {
                    text: 'Funds In/Funds Out'
                },
                subtitle: {
                    text: 'Click and drag to zoom in.',
                    useHTML: true
                },

                chart: {
                    type: 'line',
                    zoomType: 'xy',
                    resetZoomButton: {
                        position: {
                            x: 0,
                            y: 0
                        },
                        theme: {
                            fill: 'white',
                            stroke: 'silver',
                            r: 0,
                            states: {
                                hover: {
                                    fill: '#41739D',
                                    style: {
                                        color: 'white'
                                    }
                                }
                            }
                        }
                    }
                },

                time: {
                    useUTC: false
                },

                rangeSelector: {
                    inputEnabled: true,
                    selected: 0,
                    buttons: [{
                        type: 'day',
                        count: 1,
                        text: '1d'
                    }, {
                        type: 'day',
                        count: 3,
                        text: '3d'
                    }, {
                        type: 'week',
                        count: 1,
                        text: '1w'
                    }, {
                        type: 'month',
                        count: 1,
                        text: '1m'
                    }, {
                        type: 'month',
                        count: 3,
                        text: '3m'
                    }, {
                        type: 'month',
                        count: 6,
                        text: '6m'
                    }, {
                        type: 'year',
                        count: 1,
                        text: '1y'
                    }, {
                        type: 'all',
                        text: 'All'
                    }]
                },

                navigator: {
                    enabled: true,
                    series: {
                        data: []
                    }
                },

                legend: {
                    enabled: true
                },

                tooltip: {
                    crosshairs: [
                        {
                            width: 1,
                            dashStyle: 'dash',
                            color: '#898989'
                        },
                        {
                            width: 1,
                            dashStyle: 'dash',
                            color: '#898989'
                        }
                    ]
                },

                scrollbar: {
                    enabled: false
                },

                xAxis: {
                    events: {
                        afterSetExtremes: function (e) {
                            var sum = 0,
                                str = '',
                                t,
                                chartOb = this;

                            $.each(chartOb.series, function (key, value) {
                                sum = 0;
                                var xData = chartOb.series[key].processedXData;
                                var yData = chartOb.series[key].processedYData;

                                $.each(xData, function (key1, xValue) {
                                    if (xValue >= chartOb.min && xValue <= chartOb.max)
                                        sum += yData[key1];
                                });
                                var sum_amount = (Math.round(sum * 100) / 100);
                                var amount = sum_amount.toFixedDown(dec_places);
                                str += amount + " " + value.name + " | ";
                                if (key == 0) {
                                    if (amount > 0)
                                        date_range_deposits = amount;
                                    else
                                        date_range_deposits = 0;
                                } else if (key == 1) {
                                    if (amount > 0)
                                        date_range_withdrawals = amount;
                                    else
                                        date_range_withdrawals = 0;
                                }

                                t = '<b style="color:#56af45">' + curr_symbol + date_range_deposits + '</b>/<b style="color:#e63a3a">' + curr_symbol + date_range_withdrawals + '</b>';

                                chartOb.chart.setTitle(null, {text: t})
                            });
                        }
                    }
                },

                yAxis: [
                    {
                        allowDecimals: true,
                        title: {
                            text: 'Amount',
                            style: {
                                color: '#80a3ca'
                            }
                        },
                        labels: {
                            format: '{value}',
                            style: {
                                color: '#80a3ca'
                            }
                        },
                        opposite: false
                    }
                ],
                series: [],
                useHighStocks: true
            });

            get_financial_chart();


            function get_financial_chart() {
                var chart = Highcharts.charts[0];
                chart.showLoading('Loading data from server...');
                var proc = $('#processor').val();
                if (!proc) {
                    proc = '';
                }
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: dqs_admin_url + '/get_financial_chart?processor=' + proc,
                    success: function (data) {
                        /*chart_data = data.data;
                        createchart();*/
                        chart.addSeries(data.data[0]);
                        chart.addSeries(data.data[1]);
                        chart.xAxis[0].setExtremes(data.xMin, data.xMax);
                        chart.hideLoading();
                        //Highcharts.charts[0].redraw();
                    },
                    error: function () {
                        chart.showLoading('Failed! Loading data from server...');
                    }
                });
            }

        });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
