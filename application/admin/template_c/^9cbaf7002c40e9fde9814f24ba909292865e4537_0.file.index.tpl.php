<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:20
  from "/home/amper856/public_html/application/admin/template/pages/users/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb1c3205b4_51283867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cbaf7002c40e9fde9814f24ba909292865e4537' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/index.tpl',
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
function content_5e53eb1c3205b4_51283867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18820919585e53eb1c315f45_29442916', "page_content");
}
/* {block "page_content"} */
class Block_18820919585e53eb1c315f45_29442916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['users_add'])) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/add"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['add_user'];?>
</a>
        <hr>
    <?php }?>
    <form class="form-inline form-filter" name="users" id="users" method="get">
        <div class="row">
            <div class="col-md-12">
                <h5><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>
</h5>
                <div class="form-group">
                    <label for="username" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</label>
                    <input type="text" name="username" id="username"
                           class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['username'];?>
">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
</label>
                    <input type="text" name="email" id="email"
                           class="form-control input-sm" value="<?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['email'];?>
">
                </div>
                <div class="form-group">
                    <label for="status" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['status'];?>
</label>
                    <select name="status" id="status" class="form-control input-sm">
                        <option value="">-- ANY --</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['dt']->value['filter']['status'] == $_smarty_tpl->tpl_vars['key']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-sm btn-default"
                            onclick="dt_filter('users')">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['filter'];?>

                    </button>
                    <a href="javascript:void(0)" class="btn btn-link" onclick="dt_reset('users')">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reset_default'];?>

                    </a>
                </div>
            </div>
        </div>
    </form>
    <hr>
    <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"users_action"), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['dt']->value['rows']) {?>
        <div class="table-responsive">
            <div class="dataTables_wrapper dt-bootstrap no-footer">
                <table class="table table-striped dataTable footable">
                    <thead>
                        <tr>
                            <th onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users?<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['bind_query'][0][0]->bind_query('sort','username');?>
'"
                                class="<?php ob_start();
echo ('sorting_').($_smarty_tpl->tpl_vars['dt']->value['sort_order']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['dt']->value['sort_by'] == 'username' ? $_prefixVariable1 : 'sorting';?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>

                            </th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['funds'];?>
</th>
                            <th width="5%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['status'];?>
</th>
                            <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['actions'];?>
</th>
                            <th data-breakpoints="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reg_date'];?>
</th>
                            <th data-breakpoints="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['reg_ip'];?>
</th>
                            <th data-breakpoints="all"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earning'];?>
</th>
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
                                    <a style="text-decoration: underline"
                                       href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
/profile"
                                       data-toggle="tooltip" class="text-bold"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</a>

                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['upline'] > 0) {?>
                                        <br>
                                        <small style="margin-left: 25px">
                                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['upline'];?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['upline'];?>
/profile"
                                                                     data-toggle="tooltip"
                                                                     title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage_upline_user'];?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['upline_username'];?>

                                            </a>
                                        </small>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>

                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['balance'] > 0) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
"
                                                   data-toggle="tooltip" class="text-bold"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_transactions'];?>
"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['balance'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a>
                                            <?php } else { ?>
                                                --
                                            <?php }?>
                                            <small style="display: block;">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['balance'];?>

                                            </small>
                                        </li>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['deposit'] > 0) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits?username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
"
                                                   data-toggle="tooltip" class="text-bold"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_deposits'];?>
"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['deposit'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a>
                                            <?php } else { ?>
                                                --
                                            <?php }?>
                                            <small style="display: block;">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposits'];?>

                                            </small>
                                        </li>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['deposit'] > 0) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits?username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
&status=active"
                                                   data-toggle="tooltip" class="text-bold"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_deposits'];?>
"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['active_deposit'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a>
                                            <?php } else { ?>
                                                --
                                            <?php }?>
                                            <small style="display: block;">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active_deposits'];?>

                                            </small>
                                        </li>
                                        <li>
                                            <?php if ($_smarty_tpl->tpl_vars['row']->value['withdraw'] > 0) {?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions?username=<?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
&type=completed_withdrawal"
                                                   data-toggle="tooltip" class="text-bold"
                                                   title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['view_completed_wdr'];?>
"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['withdraw'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>
</a>
                                            <?php } else { ?>
                                                --
                                            <?php }?>
                                            <small style="display: block;">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdrawals'];?>

                                            </small>
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-bold">
                                    <span class="text-<?php echo $_smarty_tpl->tpl_vars['row']->value['status'];?>
"><?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['status']);?>
</span>
                                </td>
                                <td class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
/profile"
                                       class="label label-actions label-info" data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
/mass_mail" class="label label-actions label-info"
                                       data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['send_mail'];?>
"><i
                                                class="fa fa-envelope"></i></a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['row']->value['userid'];?>
/send_bonus_penalty"
                                       class="label label-actions label-info" data-toggle="tooltip"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['send_bonus_penalty'];?>
"><i class="fa fa-dollar"></i></a>
                                </td>
                                <td width="80%">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['row']->value['reg_date'],'d-M-Y H:i:s');?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['reg_ip'];?>

                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['earning'] > 0) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['row']->value['earning'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                                    <?php } else { ?>
                                        --
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
                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page_link'=>"users"), 0, false);
?>

            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_data_found'];?>

        </div>
    <?php }?>
    <div class="row help">
        <div class="col-md-12">
            <ul class="list-group list-group-documentation">
                <li class="list-group-item list-group-item-info"><i class="fa fa-question-circle-o"></i> Documentation
                </li>
                <li class="list-group-item">
                    <p class="list-group-item-text">This page lists all users in the system. Users are categorized into
                                                    4 types:</p>
                    <ul class="list-unstyled">
                        <li><b class="text-success">Active</b> - This is the default user type and can do all member
                                                               operations in the system .
                        </li>
                        <li><b>Inactive</b> - This user type needs to verify their email addresses in order to be
                                            activated.
                        </li>
                        <li><b class="text-warning">Suspended</b> - This user type is not allowed to do any financial
                                                                  operation like deposit, withdrawal, internal transfer
                                                                  or exchange etc. They can however login to their
                                                                  account and do all other non-financial operations.
                        </li>
                        <li><b class="text-danger">Blocked</b> - This user type is completely barred from doing any kind
                                                               of activity in the system including login to account.
                        </li>
                    </ul>

                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading title">FILTER</h5>
                    <p class="list-group-item-text">You can search the users by their username, email and status. The
                                                    search feature matches all users which starts with the given
                                                    keyword. For e.g if you search for "abc" in username field, it will
                                                    output all users whose username starts with "abc" like abc123, abcd,
                                                    abc etc. Click on "Reset to default" to reset the filters.</p>
                </li>
                <li class="list-group-item">
                    <h5 class="list-group-item-heading title">ACTIONS</h5>
                    <p class="list-group-item-text">
                    <ul class="list-unstyled">
                        <li>- Click on a username to edit profile details, view funds of the user, view his referrals
                            and also set upline and many more.
                        </li>
                        <li>- Click on "+" to see other details of the user.</li>
                    </ul>
                    </p>
                </li>

            </ul>
        </div>
    </div>
<?php
}
}
/* {/block "page_content"} */
}
