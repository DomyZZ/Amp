<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:41:01
  from "/home/hubmmsih/public_html/application/admin/template/pages/holidays/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b191d1d21c0_46093340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e5bdbd7c04f9dd19b78021b0374e1ca704da313' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/holidays/index.tpl',
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
function content_5e7b191d1d21c0_46093340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13773167735e7b191d1c0eb6_45934869', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14646902745e7b191d1d0279_04049427', "foo");
}
/* {block "page_content"} */
class Block_13773167735e7b191d1c0eb6_45934869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-filter form-inline" name="add_holiday" id="add_holiday" method="post"
          action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/holidays/add">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" name="h_date" id="h_date" autocomplete="off"
                           class="form-control input-sm input-1" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat(time(),'d-m-Y');?>
" required>
                </div>
                <div class="form-group">
                    <input type="text" name="description" id="description"
                           class="form-control input-sm input-2-wd" placeholder="Description ....." required>
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
    <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"holidays"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
        <div class="table-responsive">
            <div class="dataTables_wrapper dt-bootstrap no-footer">
                <table class="table table-striped dataTable footable">
                    <thead>
                        <tr>
                            <th onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/holidays?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('sort','date');?>
'"
                                class="<?php ob_start();
echo ('sorting_').($_smarty_tpl->tpl_vars['dt']->value['sort_order']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['dt']->value['sort_by'] == 'date' ? $_prefixVariable1 : 'sorting';?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['description'];?>
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
                                <td width="26%"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['h_date'],'d-M-Y');?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
                                <td class="text-center" width="2%">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/holidays/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/delete" data-toggle="tooltip"
                                       onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['confirm_holiday_delete'];?>
');"
                                       title="Delete Holiday" class="btn btn-xs btn-danger"><i
                                                class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </tbody>
                </table>
                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"holidays"), 0, false);
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
/* {block "foo"} */
class Block_14646902745e7b191d1d0279_04049427 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        
        jQuery(function ($) {
            "use strict"; // Start of use strict

            $("#h_date").datepicker({format: 'dd-mm-yyyy'});
        });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
