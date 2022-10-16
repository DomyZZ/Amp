<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:20
  from "/home/amper856/public_html/application/admin/template/pages/pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb1c4b94c6_76750678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f636ac3088aaf59827685e8d09ab5b32e55bfc1f' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/pagination.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53eb1c4b94c6_76750678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-sm-3">
        <div class="dataTables_length">
            <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show'];?>
 <select name="dataTableExample2_length" class="form-control input-sm" onchange="window.location.href=this.options[this.selectedIndex].value">
                    <option value="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','5');?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 5 ? 'selected' : '';?>
>5</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','25');?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 25 ? 'selected' : '';?>
>25</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','50');?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 50 ? 'selected' : '';?>
>50</option>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page_link']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','100');?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 100 ? 'selected' : '';?>
>100</option>
                </select> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['entries'];?>
</label>
            </div>
    </div>
    <div class="col-sm-6">
        <div class="dataTables_paginate paging_simple_numbers">
            <?php echo $_smarty_tpl->tpl_vars['dt']->value['pagination'];?>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="dataTables_info">
            Showing <?php echo $_smarty_tpl->tpl_vars['dt']->value['page'];?>
 <?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value['label']['to']);?>
 <?php echo $_smarty_tpl->tpl_vars['dt']->value['total_pages'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['dt']->value['total_rows'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['entries'];?>

        </div>
    </div>
</div><?php }
}
