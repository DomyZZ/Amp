<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:23:31
  from "/home/hubmmsih/public_html/application/admin/template/pages/packages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e8603735a7844_11095195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77e15e98d93e114d37a065d16417a7b2c44369d0' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/packages/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e8603735a7844_11095195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2879691685e860373582cd9_02533831', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466401585e8603735a55d7_11305473', "foo");
}
/* {block "page_content"} */
class Block_2879691685e860373582cd9_02533831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['packages_add'])) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/add"><i
                    class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['add_package'];?>
</a>
        <hr>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"packages_action"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['packages']->value) {?>
        <div class="table-responsive">
            <div class="dataTables_wrapper dt-bootstrap no-footer">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                            <?php if (count($_smarty_tpl->tpl_vars['packages']->value) > 1) {?>
                                <th width="5%"></th>
                            <?php }?>
                            <th width="5%"></th>
                            <th style="border-right: 0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['name'];?>
</th>
                            <th></th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit_amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earn_exp_details'];?>
</th>
                            <th width="8%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
?>
                            <tr>
                                <?php if (count($_smarty_tpl->tpl_vars['packages']->value) > 1) {?>
                                    <td class="text-center" width="5%">
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['position'] > $_smarty_tpl->tpl_vars['min_position']->value) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
/position/up">
                                                <i class="fa fa-arrow-up"></i>
                                            </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['position'] != $_smarty_tpl->tpl_vars['max_position']->value) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
/position/down">
                                                <i class="fa fa-arrow-down"></i>
                                            </a>
                                        <?php }?>
                                    </td>
                                <?php }?>
                                <td class="text-center">
                                    <span class="text-<?php echo $_smarty_tpl->tpl_vars['package']->value['status'];?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['package']->value['status']);?>
</span>
                                </td>
                                <td style="border-right: 0">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
/edit"
                                       data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['package'];?>
"
                                       style="text-decoration: underline !important;">
                                        <b><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</b>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['closed']) {?>
                                        <small>
                                            <sup class="label label-danger"
                                                 style="display: inline !important; width: auto !important;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['closed'];?>
</sup>
                                        </small>
                                    <?php }?>
                                    <small class="block">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_deposited'];?>
:
                                        <?php if ($_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['total_depositors'] > 0) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['total_depositors'];?>
 ( <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['total_dep_amount'];?>
</b> )
                                        <?php } else { ?>
                                            --
                                        <?php }?>
                                    </small>
                                    <small class="block">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active_deposits'];?>
:
                                        <?php if ($_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['active_depositors'] > 0) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['active_depositors'];?>
 ( <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['deposits']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['active_dep_amount'];?>
</b> )
                                        <?php } else { ?>
                                            --
                                        <?php }?>
                                    </small>
                                </td>
                                <td width="9%" align="right">
                                    <a data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_plan_rates'];?>
"
                                       href="javascript:void(0)" id="view_plans_<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
"
                                       onclick="show_plans(<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
)">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_rates'];?>
 <i class="fa fa-angle-down"></i>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['plminmax']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['minamnt'];?>

                                    - <?php ob_start();
echo ($_smarty_tpl->tpl_vars['curr_symbol']->value).($_smarty_tpl->tpl_vars['plminmax']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['maxamnt']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plminmax']->value[$_smarty_tpl->tpl_vars['package']->value['id']]['minmaxamnt'] > 0 ? $_prefixVariable1 : '∞';?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['total_return']->value[$_smarty_tpl->tpl_vars['package']->value['id']];?>

                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['return_principal']) {?>
                                        <small class="block">
                                            + <span class="font-600">Principal returned</span>
                                        </small>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['total_rate_limit'] > 0) {?>
                                        <small class="block">
                                            Total rate limit: <span
                                                    class="font-600"><?php echo $_smarty_tpl->tpl_vars['package']->value['total_rate_limit'];?>

                                                %</span>
                                        </small>
                                    <?php }?>
                                </td>
                                <td align="center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
/edit"
                                       data-toggle="tooltip" data-placement="left"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
"
                                       class="btn btn-sm btn-info"><i
                                                class="fa fa-pencil"></i></a>
                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['packages_delete'])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
/delete"
                                           data-toggle="tooltip" data-placement="left"
                                           title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['delete'];?>
"
                                           onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['confirm_package_delete'];?>
');"
                                           class="btn btn-sm btn-danger"><i class='fa fa-trash-o'></i>
                                        </a>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="center" id="plans_<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" class="hide">
                                <td colspan="7" style="padding: 20px 0;">
                                    <table class="table table-hover" style="width:50% !important; margin-bottom: 0">
                                        <thead>
                                            <tr class="thead-bg-1">
                                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>
(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
-<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
)
                                                </td>
                                                <td class="text-bold">
                                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['rate_interest'];?>

                                                </td>
                                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['bonus'];?>
</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packageplans']->value[$_smarty_tpl->tpl_vars['package']->value['id']], 'pgplan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pgplan']->value) {
?>
                                                <tr>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['pgplan']->value['min_amount'];?>

                                                        - <?php ob_start();
echo ($_smarty_tpl->tpl_vars['curr_symbol']->value).($_smarty_tpl->tpl_vars['pgplan']->value['max_amount']);
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['pgplan']->value['max_amount'] == '' || $_smarty_tpl->tpl_vars['pgplan']->value['max_amount'] == 0 || $_smarty_tpl->tpl_vars['pgplan']->value['max_amount'] == null ? '∞' : $_prefixVariable2;?>

                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'fixed') {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['pgplan']->value['rate'];?>
%
                                                        <?php } else { ?>
                                                            <?php echo $_smarty_tpl->tpl_vars['pgplan']->value['rate'];?>
% - <?php echo $_smarty_tpl->tpl_vars['pgplan']->value['max_rate'];?>
%
                                                        <?php }?>
                                                    </td>
                                                    <td>
                                                        <?php if ($_smarty_tpl->tpl_vars['pgplan']->value['bonus_type'] == 'solid') {
echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
}
echo $_smarty_tpl->tpl_vars['pgplan']->value['bonus_value'];
if ($_smarty_tpl->tpl_vars['pgplan']->value['bonus_type'] == 'percentage') {?>%<?php }?>
                                                    </td>
                                                </tr>
                                                <?php
}
} else {
?>

                                                <tr>
                                                    <td colspan="4" align="center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_plans_found'];?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>
                                    </table>
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
        </div>
    <?php } else { ?>
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_packages_found'];?>

        </div>
    <?php }
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_466401585e8603735a55d7_11305473 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        function show_plans(id) {
            if ($('#plans_' + id).hasClass('hide')) {
                $('#plans_' + id).removeClass('hide');
                $('#view_plans_' + id + ' > i').removeClass('fa-angle-down');
                $('#view_plans_' + id + ' > i').addClass('fa-angle-up');
            }
            else {
                $('#plans_' + id).addClass('hide');
                $('#view_plans_' + id + ' > i').removeClass('fa-angle-up');
                $('#view_plans_' + id + ' > i').addClass('fa-angle-down');
            }
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
