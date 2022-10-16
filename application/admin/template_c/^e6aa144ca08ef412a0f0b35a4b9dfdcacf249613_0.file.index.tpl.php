<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:04:30
  from "/home/hubmmsih/public_html/application/admin/template/pages/transactions/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e85fefe813f56_85353279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6aa144ca08ef412a0f0b35a4b9dfdcacf249613' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/transactions/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_5e85fefe813f56_85353279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12756229095e85fefe8033d5_49875375', "page_content");
}
/* {block "page_content"} */
class Block_12756229095e85fefe8033d5_49875375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-inline form-filter" name="transactions" id="transactions" method="get"
          action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions">
            <div class="row">
                <div class="col-md-12">
                    <h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>
</h5>
                    <div class="form-group">
                        <label for="id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['id'];?>
</label>
                        <input type="text" name="id" id="id"
                               class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['id'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</label>
                        <input type="text" name="username" id="username"
                               class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['username'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="minamount" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_amount'];?>
</label>
                        <input type="text" name="minamount" id="minamount"
                               class="form-control input-sm" placeholder="Min"
                               value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['minamount'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="maxamount" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max_amount'];?>
</label>
                        <input type="text" name="maxamount" id="maxamount"
                               class="form-control input-sm" placeholder="Max"
                               value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['maxamount'];?>
">
                    </div>
                            <div class="form-group">
                                <label for="processor" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['processor'];?>
</label>
                                <select name="processor" id="processor" class="form-control input-sm">
                                    <option value="">-- ANY --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['nick'];?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['processor'] == $_smarty_tpl->tpl_vars['value']->value['nick'] ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </select>
                            </div>
                    <div class="form-group">
                        <label for="type" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['type'];?>
</label>
                        <select name="type" id="type" class="form-control input-sm">
                            <option value="">-- ANY --</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_types']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['type'] == $_smarty_tpl->tpl_vars['key']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="startdate" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['start_date'];?>
</label>
                        <input type="text" autocomplete="off" name="startdate" id="startdate"
                               class="form-control input-sm" placeholder="Min"
                               value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['startdate'];?>
">
                    </div>
                    <div class="form-group">
                        <label for="enddate" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['end_date'];?>
</label>
                        <input type="text" autocomplete="off" name="enddate" id="enddate"
                               class="form-control input-sm" placeholder="Max"
                               value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['enddate'];?>
">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-sm btn-default"
                                onclick="dt_filter('transactions')">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>

                        </button>
                        <a href="javascript:void(0)" class="btn btn-link" onclick="dt_reset('transactions')">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reset_default'];?>

                        </a>
                        <button type="submit" class="btn btn-sm btn-purple pull-right"
                                onclick="dt_filter('transactions', 'csv')">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['export_csv'];?>

                        </button>
                    </div>
                </div>
            </div>
    </form>
    <hr>
    <?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
        <div class="table-responsive">
            <div class="dataTables_wrapper dt-bootstrap no-footer">
                <table class="table table-striped dataTable footable">
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['id'];?>
</th>
                            <th onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('sort','date');?>
'"
                                class="<?php ob_start();
echo ('sorting_').($_smarty_tpl->tpl_vars['dt']->value['sort_order']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['dt']->value['sort_by'] == 'date' ? $_prefixVariable1 : 'sorting';?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['type'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>
</th>
                            <th></th>
                            <th data-breakpoints="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['description'];?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dt']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/view"
                                       data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['transaction'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</a>
                                </td>
                                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['date'],'d-M-Y H:i:s');?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
/profile"
                                       data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
" class="color-inherit"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['all_types']->value[$_smarty_tpl->tpl_vars['row']->value['type']];?>

                                </td>
                                <td width="15%" align="right">
                                                    <span class="<?php echo $_smarty_tpl->tpl_vars['row']->value['amount'] > 0 ? 'text-success' : 'text-danger';?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['amount'] > 0) {?>+<?php } else { ?>-<?php }?>
                                                        <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec(abs($_smarty_tpl->tpl_vars['row']->value['amount']),$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</b></span>
                                </td>
                                <td width="5%">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways" data-toggle="tooltip"
                                       title="Manage Payment Gateways"><img
                                                src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
"/>
                                    </a>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>

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
                            <td colspan="7" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['page_total'];?>
:
                                <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['dt']->value['period_amount'];?>
</b> (<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total'];?>
:
                                <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['dt']->value['total_amount'];?>
</b>)
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"transactions"), 0, false);
?>

            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

        </div>
    <?php }
}
}
/* {/block "page_content"} */
}
