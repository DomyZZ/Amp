<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:22:43
  from "/home/amper856/public_html/application/admin/template/pages/staff_roles/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ea434f4214_38516012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b848e1df194841a6cec21b0858a296634c343364' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/staff_roles/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ea434f4214_38516012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12631499565e53ea434f27e7_53476528', "page_content");
}
/* {block "page_content"} */
class Block_12631499565e53ea434f27e7_53476528 extends Smarty_Internal_Block
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
