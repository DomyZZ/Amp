<?php
/* Smarty version 3.1.30, created on 2020-04-02 16:56:38
  from "/home/hubmmsih/public_html/application/admin/template/pages/email_templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e861946cfe538_82223826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4194d368a477250fac8260a35498cc862d3763f' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/email_templates/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e861946cfe538_82223826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15317933015e861946cfb304_91145296', "page_content");
}
/* {block "page_content"} */
class Block_15317933015e861946cfb304_91145296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-5">
            <div class="table-responsive">
                <div class="dataTables_wrapper dt-bootstrap no-footer">
                    <table class="table table-striped dataTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['name'];?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['email_tmpls']->value, 'em_tmpl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['em_tmpl']->value) {
?>
                                <tr>
                                    <td width="2%" class="text-center"><span
                                                class="label label-success"><?php echo $_smarty_tpl->tpl_vars['em_tmpl']->value['id'];?>
</span></td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/email_templates/<?php echo $_smarty_tpl->tpl_vars['em_tmpl']->value['id'];?>
/edit" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['em_tmpl']->value['name'];?>
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
