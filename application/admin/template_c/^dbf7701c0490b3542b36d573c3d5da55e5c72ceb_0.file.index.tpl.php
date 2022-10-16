<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:23:23
  from "/home/amper856/public_html/application/admin/template/pages/info_boxes/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ea6b040de5_12001548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbf7701c0490b3542b36d573c3d5da55e5c72ceb' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/info_boxes/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53ea6b040de5_12001548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19232035395e53ea6b032255_91368060', "page_content");
}
/* {block "page_content"} */
class Block_19232035395e53ea6b032255_91368060 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="info_boxes" id="info_boxes" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"info_boxes"), 0, false);
?>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-padding-right-20">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['site_informations'];?>
</h3>
                <div class="table-responsive">
                    <table id="site_info_box" class="table table-striped-left">
                        <tbody>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_running_days'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_running_days]"
                                               id="show_running_days_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_running_days'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_running_days_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_running_days]"
                                               id="show_running_days_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_running_days'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_running_days_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_total_users'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_total_users]"
                                               id="show_total_users_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_users'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_total_users_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_total_users]"
                                               id="show_total_users_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_users'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_total_users_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_active_users'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_active_users]"
                                               id="show_active_users_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_active_users'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_active_users_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_active_users]"
                                               id="show_active_users_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_active_users'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_active_users_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_total_deposits'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_total_deposits]"
                                               id="show_total_deposits_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_deposits'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_total_deposits_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_total_deposits]"
                                               id="show_total_deposits_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_deposits'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_total_deposits_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_deposits_today'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_deposits_today]"
                                               id="show_deposits_today_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_deposits_today'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_deposits_today_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_deposits_today]"
                                               id="show_deposits_today_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_deposits_today'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_deposits_today_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_total_withdrawals'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_total_withdrawals]"
                                               id="show_total_withdrawals_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_withdrawals'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_total_withdrawals_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_total_withdrawals]"
                                               id="show_total_withdrawals_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_total_withdrawals'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_total_withdrawals_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_withdrawals_today'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_withdrawals_today]"
                                               id="show_withdrawals_today_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_withdrawals_today'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_withdrawals_today_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_withdrawals_today]"
                                               id="show_withdrawals_today_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_withdrawals_today'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_withdrawals_today_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_online_guests'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_online_guests]"
                                               id="show_online_guests_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_online_guests'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_online_guests_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_online_guests]"
                                               id="show_online_guests_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_online_guests'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_online_guests_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_online_users'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_online_users]"
                                               id="show_online_users_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_online_users'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_online_users_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_online_users]"
                                               id="show_online_users_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_online_users'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_online_users_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_newest_user'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_newest_user]"
                                               id="show_newest_user_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_newest_user'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_newest_user_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_newest_user]"
                                               id="show_newest_user_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_newest_user'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_newest_user_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_last_deposit'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_last_deposit]"
                                               id="show_last_deposit_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_last_deposit'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_last_deposit_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_last_deposit]"
                                               id="show_last_deposit_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_last_deposit'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_last_deposit_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_last_withdrawal'];?>
</td>
                                <td>
                                    <div class="radio-inline">
                                        <input type="radio" value="yes"
                                               name="infobox[show_last_withdrawal]"
                                               id="show_last_withdrawal_yes" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_last_withdrawal'] == "yes" ? 'checked=""' : '';?>
>
                                        <label for="show_last_withdrawal_yes"> Yes </label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" value="no"
                                               name="infobox[show_last_withdrawal]"
                                               id="show_last_withdrawal_no" <?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['show_last_withdrawal'] == "no" ? 'checked=""' : '';?>

                                               required>
                                        <label for="show_last_withdrawal_no"> No </label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-md-padding-left-20">
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['site_statistics'];?>
</h3>
                <div class="table-responsive">
                    <table id="site_stat_box" class="table table-striped-left">
                        <tbody>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_top_depositors'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_top_depositors]"
                                           id="no_top_depositors"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_top_depositors'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_last_deposits'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_last_deposits]" id="no_last_deposits"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_last_deposits'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_last_withdrawals'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_last_withdrawals]"
                                           id="no_last_withdrawals"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_last_withdrawals'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_top_referrers'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_top_referrers]" id="no_top_referrers"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_top_referrers'];?>
">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_top_refcomm'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_top_refcomm]" id="no_top_refcomm"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_top_refcomm'];?>
">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['news'];?>
</h3>
                <div class="table-responsive">
                    <table id="news_box_settings" class="table table-striped-left">
                        <tbody>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_news'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_news]"
                                           id="no_news"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_news'];?>
">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['testimonials'];?>
</h3>
                <div class="table-responsive">
                    <table id="testimonials_box_settings"
                           class="table table-striped-left">
                        <tbody>
                            <tr>
                                <td class="text-bold"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_no_testimonials'];?>

                                    <small class="block text-muted text-normal">
                                        (<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_disabled'];?>
)
                                    </small>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-md-3"
                                           name="infobox[no_testimonials]"
                                           id="no_testimonials"
                                           value="<?php echo $_smarty_tpl->tpl_vars['settings']->value['infobox']['no_testimonials'];?>
">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
}
