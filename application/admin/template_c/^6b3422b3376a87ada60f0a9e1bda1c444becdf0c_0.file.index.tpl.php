<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:04:38
  from "/home/hubmmsih/public_html/application/admin/template/pages/news/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e85ff06dcb8f9_79853762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3422b3376a87ada60f0a9e1bda1c444becdf0c' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/news/index.tpl',
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
function content_5e85ff06dcb8f9_79853762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13829264715e85ff06dc5dc3_76644557', "page_content");
}
/* {block "page_content"} */
class Block_13829264715e85ff06dc5dc3_76644557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['news_add'])) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news/add"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['add_news'];?>
</a>
        <hr>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"news_action"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
        <div class="table-responsive">
            <div class="dataTables_wrapper dt-bootstrap no-footer">
                <table class="table table-striped dataTable footable">
                    <thead>
                        <tr>
                            <th onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('sort','date');?>
'"
                                class="<?php ob_start();
echo ('sorting_').($_smarty_tpl->tpl_vars['dt']->value['sort_order']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['dt']->value['sort_by'] == 'date' ? $_prefixVariable1 : 'sorting';?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['date'];?>

                            </th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['title'];?>
</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dt']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                                <td width="15%"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['date'],'d-M-Y');?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/edit" data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
                                </td>
                                <td class="text-center" width="8%">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/edit" data-toggle="tooltip" data-placement="left"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
" class="btn btn-sm btn-info"><i
                                                class="fa fa-pencil"></i>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['news_delete'])) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
/delete" data-toggle="tooltip" data-placement="left"
                                           onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['confirm_news_delete'];?>
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
                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"news"), 0, false);
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
