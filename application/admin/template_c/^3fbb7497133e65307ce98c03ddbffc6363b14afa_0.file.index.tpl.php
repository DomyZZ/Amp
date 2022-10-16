<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:04:33
  from "/home/hubmmsih/public_html/application/admin/template/pages/tickets/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e85ff01463203_67190960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fbb7497133e65307ce98c03ddbffc6363b14afa' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/tickets/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
    'file:pagination.tpl' => 1,
  ),
),false)) {
function content_5e85ff01463203_67190960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6393831135e85ff01368294_50039681', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11223847325e85ff0144df88_06370879', "page_content");
}
/* {block "breadcrumb"} */
class Block_6393831135e85ff01368294_50039681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['tickets'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb'][$_smarty_tpl->tpl_vars['tic_status']->value];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_11223847325e85ff0144df88_06370879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs dq-nav">
        <li <?php echo $_smarty_tpl->tpl_vars['tic_status']->value == "open" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/open"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['open'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['tic_status']->value == "answered" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/answered"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['answered'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['tic_status']->value == "closed" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/closed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['closed'];?>
</a>
        </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="<?php echo $_smarty_tpl->tpl_vars['tic_status']->value;?>
">
            <div class="panel-body">
                <form class="form-inline form-filter" name="tickets" id="tickets" method="get">
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
                                <label for="created_by"
                                       class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['created_by'];?>
</label>
                                <input type="text" name="created_by" id="created_by"
                                       class="form-control input-sm"
                                       value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['created_by'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="status"
                                       class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['department'];?>
</label>
                                <select name="department" id="department"
                                        class="form-control input-sm">
                                    <option value="">-- ANY --</option>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_tic_depts']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['department'] == $_smarty_tpl->tpl_vars['val']->value['name'] ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
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
                                <input type="text" autocomplete="off" name="startdate"
                                       id="startdate"
                                       class="form-control input-sm" placeholder="Min"
                                       value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['startdate'];?>
">
                            </div>
                            <div class="form-group">
                                <label for="enddate"
                                       class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['end_date'];?>
</label>
                                <input type="text" autocomplete="off" name="enddate" id="enddate"
                                       class="form-control input-sm" placeholder="Max"
                                       value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['enddate'];?>
">
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-sm btn-default"
                                        onclick="dt_filter('tickets')">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>

                                </button>
                                <a href="javascript:void(0)" class="btn btn-link" onclick="dt_reset('tickets')">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reset_default'];?>

                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"tickets_action"), 0, false);
?>

                <?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
                    <form class="form-filter" name="tickets_action" id="tickets_action" method="post">
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
                        <div class="row">
                            <div class="col-md-12">
                                <h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['actions'];?>
</h5>
                                <div class="form-inline">
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['with_selected'];?>
: </label>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-control-static">
                                            <?php if ($_smarty_tpl->tpl_vars['tic_status']->value == "closed") {?>
                                                <a href="javascript:void(0)" class="text-success"
                                                   onclick="selected_action('tickets_action', 'open')">
                                                    <i
                                                            class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reopen'];?>

                                                </a>
                                            <?php } else { ?>
                                                <a href="javascript:void(0)" class="text-warning"
                                                   onclick="selected_action('tickets_action', 'close')">
                                                    <i
                                                            class="fa fa-times"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['close'];?>

                                                </a>
                                            <?php }?> |
                                            <a href="javascript:void(0)" class="text-danger"
                                               onclick="selected_action('tickets_action', 'delete')">
                                                <i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['delete'];?>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <div class="dataTables_wrapper dt-bootstrap no-footer">
                                <table class="table table-striped dataTable footable">
                                    <thead>
                                        <tr>
                                            <th width="1%" class="text-center">
                                                <input type="checkbox" name="select_all"
                                                       id="select_all"
                                                       value="true">
                                            </th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['id'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['subject'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['department'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['created_by'];?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['modified_on'];?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dt']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                            <tr id="row_<?php echo $_smarty_tpl->tpl_vars['row']->value['tic_id'];?>
">
                                                <td width="1%" class="text-center">
                                                    <input type="checkbox" name="ids[]"
                                                           onclick="selected_row('ticket_<?php echo $_smarty_tpl->tpl_vars['row']->value['tic_id'];?>
','row_<?php echo $_smarty_tpl->tpl_vars['row']->value['tic_id'];?>
')"
                                                           id="ticket_<?php echo $_smarty_tpl->tpl_vars['row']->value['tic_id'];?>
"
                                                           class="row-check"
                                                           value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tic_id'];?>
">
                                                </td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/manage"
                                                       data-toggle="tooltip"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ticket'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/manage"
                                                       data-toggle="tooltip"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ticket'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['subject'];?>
</a>
                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['dept_name'];?>

                                                </td>
                                                <td>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
/profile"
                                                       data-toggle="tooltip"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"
                                                       class="color-inherit"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</a>
                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['modified_date'] ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['modified_date'],'timeago')) : '--';?>

                                                </td>
                                            </tr>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </tbody>
                                </table>
                                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"tickets/".((string)$_smarty_tpl->tpl_vars['tic_status']->value)), 0, false);
?>

                            </div>
                        </div>
                    </form>
                <?php } else { ?>
                    <div class="alert alert-warning ">
                        <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_tickets_found'];?>

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
