<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:49:51
  from "/home/hubmmsih/public_html/application/admin/template/pages/ticket_help_topics/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1b2fc44787_26216119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '341dfffac54251956ff614560b56b44660b15068' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/ticket_help_topics/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e7b1b2fc44787_26216119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18034809525e7b1b2fc3aca0_03437633', "page_content");
}
/* {block "page_content"} */
class Block_18034809525e7b1b2fc3aca0_03437633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"tic_help_topic"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_help_topics_add'])) {?>
        <form class="form-filter form-inline" name="add_tic_help_topic" id="add_tic_help_topic"
              method="post" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_help_topics/add">
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="title" id="title"
                               class="form-control input-sm input-1-wd" placeholder="Title ....."
                               required>
                    </div>
                    <div class="form-group">
                        <select name="department_id" id="department_id"
                                class="form-control input-sm" required>
                            <option value="">-- Select --</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tic_depts']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-purple btn-filter">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['add'];?>

                        </button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['tic_help_topics']->value) {?>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <div class="dataTables_wrapper dt-bootstrap no-footer">
                        <table class="table table-striped dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['title'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['department'];?>
</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tic_help_topics']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_help_topics/<?php echo $_smarty_tpl->tpl_vars['row']->value['h_topic_id'];?>
/edit"
                                               data-toggle="tooltip"
                                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_departments/<?php echo $_smarty_tpl->tpl_vars['row']->value['department_id'];?>
/edit"
                                               data-toggle="tooltip"
                                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['department'];?>
" class="color-inherit"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a>
                                        </td>
                                        <td class="text-center" width="20%">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_help_topics/<?php echo $_smarty_tpl->tpl_vars['row']->value['h_topic_id'];?>
/edit"
                                               data-toggle="tooltip"
                                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
" class="btn btn-sm btn-info"><i
                                                        class="fa fa-pencil"></i>
                                            </a>
                                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_help_topics_delete'])) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_help_topics/<?php echo $_smarty_tpl->tpl_vars['row']->value['h_topic_id'];?>
/delete"
                                                   data-toggle="tooltip"
                                                   onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['confirm_tic_h_topic_delete'];?>
');"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['delete'];?>
" class="btn btn-sm btn-danger"><i
                                                            class="fa fa-trash-o"></i></a>
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
                </div>
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
