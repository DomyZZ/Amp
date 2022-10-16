<?php
/* Smarty version 3.1.30, created on 2020-06-09 11:08:36
  from "/home/hubmmsih/public_html/template/pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5edf6db41d7b26_25259074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ec5b0b834900a9ac8ea0e14029ed1f91c9404a2' => 
    array (
      0 => '/home/hubmmsih/public_html/template/pagination.tpl',
      1 => 1578413615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edf6db41d7b26_25259074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row pagination-footer">
    <div class="col-sm-3 text-left">
        <?php if ($_smarty_tpl->tpl_vars['dt']->value['pagination']) {?>
            <div class="btn-group">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cur_page']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','5');?>
"
                   class="btn btn-secondary <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 5 ? 'active' : '';?>
">
                    5
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cur_page']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','25');?>
"
                   class="btn btn-secondary <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 25 ? 'active' : '';?>
">
                    25
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cur_page']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','50');?>
"
                   class="btn btn-secondary <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 50 ? 'active' : '';?>
">
                    50
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cur_page']->value;?>
?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('count','100');?>
"
                   class="btn btn-secondary <?php echo $_smarty_tpl->tpl_vars['dt']->value['count'] == 100 ? 'active' : '';?>
">
                    100
                </a>
            </div>
        <?php }?>
    </div>
    <div class="col-sm-6 text-center">
        <div style="margin: 0 auto; display: table"><?php echo $_smarty_tpl->tpl_vars['dt']->value['pagination'];?>
</div>
    </div>
    <div class="col-sm-3 text-right">
                                <span class="text-muted">Page <span class="text-bold"><?php echo $_smarty_tpl->tpl_vars['dt']->value['page'];?>
</span>
                                                          of <span class="text-bold"><?php echo $_smarty_tpl->tpl_vars['dt']->value['total_pages'];?>
</span>,
                                                          of <span class="text-bold"><?php echo $_smarty_tpl->tpl_vars['dt']->value['total_rows'];?>
</span> entries
                                </span>
    </div>

</div><?php }
}
