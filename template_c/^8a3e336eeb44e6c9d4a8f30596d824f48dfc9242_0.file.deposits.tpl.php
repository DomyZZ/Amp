<?php
/* Smarty version 3.1.30, created on 2020-06-09 11:08:36
  from "/home/hubmmsih/public_html/template/deposits.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5edf6db407cc23_50056277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a3e336eeb44e6c9d4a8f30596d824f48dfc9242' => 
    array (
      0 => '/home/hubmmsih/public_html/template/deposits.tpl',
      1 => 1578413628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5edf6db407cc23_50056277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="nav nav-pills">
    <li class="nav-item <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "active" ? 'active' : '';?>
">
        <a class="nav-link <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "active" ? 'active' : '';?>
" href="deposits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['active_deposits'];?>
</a>
    </li>
    <li class="nav-item <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "expired" ? 'active' : '';?>
">
        <a class="nav-link <?php echo $_smarty_tpl->tpl_vars['dep_status']->value == "expired" ? 'active' : '';?>
"
           href="deposits/expired"><?php echo $_smarty_tpl->tpl_vars['lang']->value['expired_deposits'];?>
</a>
    </li>
</ul>

<hr/>

<div class="form-filter">

    <h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['filter'];?>
</h5>

    <form class="form-inline" name="deposits" id="deposits" method="get">

        <input type="date" name="startdate" class="form-control form-control-sm input-sm"
               value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['startdate'];?>
"/>
        <input type="date" name="enddate" class="form-control form-control-sm input-sm" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['enddate'];?>
"/>

        <select name="package" id="package" class="form-control form-control-sm input-sm">
            <option value="">- all packages -</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['package'] == $_smarty_tpl->tpl_vars['package']->value['id'] ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>

        <button type="submit" class="btn btn-primary btn-sm"
                onclick="dt_filter('deposits')">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['filter'];?>

        </button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/deposits" class="btn btn-link btn-sm">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['reset'];?>

        </a>

    </form>

</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_errors'][0][0]->form_errors(array('form'=>"deposits"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_success'][0][0]->form_success(array('form'=>"deposits"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['package'];?>
</th>

            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['principal'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</th>

            <th width="22%" class="text-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['earnings'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</th>

            <th width="1%"></th>

        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dt']->value['rows'], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['row']->value['package_name'];?>

                    <small class="d-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_id'];?>
 : <b>#<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</b></small>
                    <small class="d-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['started_on'];?>
 : <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['start_date'],'d-M-Y H:i:s');?>
</b>
                    </small>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == "expired") {?>
                        <small class="d-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['expired_on'];?>
 :
                            <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['lastpay_date'],'d-M-Y H:i:s');?>
</b></small>
                    <?php } else { ?>
                        <small class="d-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_paid'];?>
 :
                            <b><?php echo $_smarty_tpl->tpl_vars['row']->value['lastpay_date'] != 0 ? ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['lastpay_date'],'d-M-Y H:i:s')) : '--';?>
</b></small>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['principal_withdrawal']) {?>
                        <a class="mt-2 mr-2"
                           onclick="return confirm('Are you sure you want to withdraw principal from deposit #<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
?')"
                           href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/withdraw_principal/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><small><?php echo $_smarty_tpl->tpl_vars['lang']->value['withdraw_principal'];?>
</small></a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_compounding']) {?>
                        <a class="mt-2"
                           href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/change_compound/<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><small><?php echo $_smarty_tpl->tpl_vars['lang']->value['change_compound'];?>
</small></a>
                    <?php }?>

                </td>

                <td class="text-right"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['amount']);?>
</b>

                    <?php if ($_smarty_tpl->tpl_vars['row']->value['allow_compounding']) {?>
                        <small class="d-block">
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['compound'];?>
:
                            <?php echo $_smarty_tpl->tpl_vars['row']->value['compound'];?>
%
                        </small>
                    <?php }?>

                </td>
                <td class="text-right">
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['earnings'] > 0) {?>
                        <b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['earnings']);?>
</b>
                        <br/>
                    <?php } else { ?>
                        --
                        <br/>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 'active') {?>
                        <?php if ($_smarty_tpl->tpl_vars['dep_status']->value == 'active') {?>
                            <small class="d-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['next_in'];?>
: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['next_payment_ts'],'timeleft');?>
</small>
                        <?php }?>
                    <?php }?>

                </td>
                <td><img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
"/></td>

            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <div class="alert alert-danger">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['no_deposits'];?>

    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
