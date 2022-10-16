<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:51:20
  from "/home/hubmmsih/public_html/application/admin/template/pages/staff_roles/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1b882625b0_38725695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a40b5d42fd67e1bca197b835247d339d29488c4' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/staff_roles/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7b1b882625b0_38725695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17566232725e7b1b8825f0e1_00045872', "page_content");
}
/* {block "page_content"} */
class Block_17566232725e7b1b8825f0e1_00045872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-4">
    <div class="table-responsive">
        <div class="dataTables_wrapper dt-bootstrap no-footer">
            <table class="table table-striped dataTable">
                <thead>
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['role'];?>
</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staff_roles/<?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
/edit"
                                   data-toggle="tooltip"
                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
                            </td>
                            <td width="2%" class="text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staff_roles/<?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>
/edit"
                                   data-toggle="tooltip"
                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i>
                                </a>
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
<?php
}
}
/* {/block "page_content"} */
}
