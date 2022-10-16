<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:25:38
  from "/home/amper856/public_html/application/admin/template/pages/deposits/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eaf23d4b14_74575532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4fb98500882a8bfa31d55a231192b8965979ccc' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/deposits/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_5e53eaf23d4b14_74575532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7965971165e53eaf23cba57_71456130', "page_content");
}
/* {block "page_content"} */
class Block_7965971165e53eaf23cba57_71456130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "active" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits" class="text-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "expired" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits/expired" class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['expired'];?>
</a>
        </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="<?php echo $_smarty_tpl->tpl_vars['dep_status']->value;?>
">
            <div class="panel-body">
                <form class="form-inline form-filter" name="deposits" id="deposits" method="get">
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
                                <label for="package_id" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['packages'];?>
</label>
                                <select name="package_id" id="package_id" class="form-control input-sm"
                                        style="width: 130px">
                                    <option value="">-- ANY --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['type'] == $_smarty_tpl->tpl_vars['value']->value['id'] ? 'selected' : '';?>
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
                                <label for="startdate"
                                       class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['start_date'];?>
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
                                        onclick="dt_filter('deposits')">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>

                                </button>
                                <a href="javascript:void(0)" class="btn btn-link" onclick="dt_reset('deposits')">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reset_default'];?>

                                </a>
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
                                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['package'];?>
</th>
                                        <th onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('sort','date');?>
'"
                                            class="<?php ob_start();
echo ('sorting_').($_smarty_tpl->tpl_vars['dt']->value['sort_order']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['dt']->value['sort_by'] == 'date' ? $_prefixVariable1 : 'sorting';?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit_date'];?>
</th>
                                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>

                                            <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span>
                                        </th>
                                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earnings'];?>

                                            <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span>
                                        </th>
                                        <th></th>
                                        <th data-breakpoints="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['last_paid_on'];?>
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
                                            <td width="20%">
                                                <?php if ($_smarty_tpl->tpl_vars['dep_status']->value == 'active') {?>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/edit"
                                                       class="text-bold"
                                                       data-toggle="tooltip"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</a>
                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>

                                                <?php }?>
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
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_name'];?>
</td>
                                            <td width="15%"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['start_date'],'d-M-Y H:i:s');?>
</td>
                                            <td class="text-right">
                                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['amount'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                            </td>
                                            <td class="text-right" style="font-weight: 600">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['earnings'] > 0 ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['earnings'],$_smarty_tpl->tpl_vars['curr_decp']->value)) : '--';?>

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
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['lastpay_date'] != 0 ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['lastpay_date'],'d-M-Y H:i:s')) : '--';?>

                                            </td>
                                        </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tbody>
                                <?php if ($_smarty_tpl->tpl_vars['dep_status']->value == 'active') {?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="8" align="right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['page_total'];?>
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
                                <?php }?>
                            </table>
                            <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"deposits"), 0, false);
?>

                        </div>
                    </div>
                <?php } else { ?>
                    <div class="alert alert-warning">
                        <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "page_content"} */
}
