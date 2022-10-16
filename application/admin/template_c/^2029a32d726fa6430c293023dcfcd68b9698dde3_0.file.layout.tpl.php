<?php
/* Smarty version 3.1.30, created on 2020-01-09 17:30:03
  from "/home/amper856/public_html/amperium_test_site/application/admin/template/pages/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e17631b2cd3a9_42499422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2029a32d726fa6430c293023dcfcd68b9698dde3' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/application/admin/template/pages/layout.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 2,
  ),
),false)) {
function content_5e17631b2cd3a9_42499422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo strtoupper($_smarty_tpl->tpl_vars['lang']->value['admin_title']);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4961526395e17631b18cc76_15109767', "title");
?>
</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/ico/favicon.png" type="image/x-icon">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4112408965e17631b18f7c0_59574492', "head");
?>


    <!-- Custom css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/css/style.css" rel="stylesheet" type="text/css" />

    <?php echo '<script'; ?>
 type="text/javascript">
        var dqs_admin_assets = "<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
";
        var dqs_admin_url = "<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
";
        var dqs_curr_symbol = "<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
";
        var dqs_curr_decp = "<?php echo $_smarty_tpl->tpl_vars['curr_decp']->value;?>
";
    <?php echo '</script'; ?>
>
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4092338865e17631b2b5ba5_93812589', "body");
?>


    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/jquery/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16917095e17631b2cb2f9_64238167', "foo");
?>


    <!-- Application js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/js/application.js" type="text/javascript"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "title"} */
class Block_4961526395e17631b18cc76_15109767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 | <?php echo strtoupper($_smarty_tpl->tpl_vars['lang']->value['title'][$_smarty_tpl->tpl_vars['cur_page']->value]);
}
}
/* {/block "title"} */
/* {block "head"} */
class Block_4112408965e17631b18f7c0_59574492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- Global Style -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/css/base.css" rel="stylesheet" type="text/css" />
    <?php
}
}
/* {/block "head"} */
/* {block "page_title"} */
class Block_3973601295e17631b2a8301_23765648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['lang']->value['title'][$_smarty_tpl->tpl_vars['cur_page']->value];
}
}
/* {/block "page_title"} */
/* {block "page_subtitle"} */
class Block_1157226815e17631b2a9c08_19381231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_subtitle"} */
/* {block "breadcrumb"} */
class Block_17943143995e17631b2ae141_26375541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb'][$_smarty_tpl->tpl_vars['cur_page']->value];?>
</li><?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_21365795735e17631b2b4c93_43420887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "page_content"} */
/* {block "body"} */
class Block_4092338865e17631b2b5ba5_93812589 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar"
                                aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/">DQScript Admin</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li <?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'dashboard' ? 'class="active"' : '';?>
>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/dashboard"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['dashboard'];?>
</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['users_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['users_add']) || isset($_smarty_tpl->tpl_vars['permissions']->value['bonus_penalty_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['mass_mail_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['testimonials_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['representatives_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_crypto_payments_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_withdrawals_list'])) {?>
                                <li class="dropdown<?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'users' ? ' active' : '';?>
">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['users'];?>
 <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['users_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'users' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['list_users'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['users_add'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'add_user' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['add_user'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1) {?>
                                            <li class="dropdown-submenu <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'staffs' || $_smarty_tpl->tpl_vars['cur_page']->value == 'add_staff' ? 'active' : '';?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staffs" <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'staffs' ? 'class="active"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['staffs'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'add_staff' ? 'class="active"' : '';?>
>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staffs/add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['add_staff'];?>
</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['testimonials_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'testimonials' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/testimonials"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['testimonials'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['representatives_list'])) {?>
                                            <li class="dropdown-submenu <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'representatives' || $_smarty_tpl->tpl_vars['cur_page']->value == 'add_representative' ? 'active' : '';?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/representatives"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['representatives'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/representatives/pending"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['pending_representatives'];?>
</a>
                                                    </li>
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['representatives_add'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'add_representative' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/representatives/add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['add_representative'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_crypto_payments_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'pending_crypto_payments' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_crypto_payments"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['pending_crypto_payments'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_withdrawals_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'pending_withdrawals' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_withdrawals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['pending_withdrawals'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['bonus_penalty_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'send_bonus_penalty' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/send_bonus_penalty"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['send_bonus_penalty'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['mass_mail_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'mass_mail' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/mass_mail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['mass_mail'];?>
</a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['deposits_list'])) {?>
                                <li <?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'deposits' ? 'class="active"' : '';?>
>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/deposits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['deposits'];?>
</a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['transactions_list'])) {?>
                                <li <?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'transactions' ? 'class="active"' : '';?>
>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/transactions"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['transactions'];?>
</a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['tickets_list'])) {?>
                                <li class="dropdown<?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'tickets' ? ' active' : '';?>
">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['support'];?>
 <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['tickets_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'tickets' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['tickets'];?>
</a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['news_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['news_add'])) {?>
                                <li class="dropdown<?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'news' ? ' active' : '';?>
">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['news'];?>
 <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['news_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'news' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['list_news'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['news_add'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'add_news' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/news/add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['add_news'];?>
</a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['general_settings_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['payment_gateways_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['packages_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['representative_system_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_departments_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_help_topics_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['email_templates_list'])) {?>
                                <li class="dropdown<?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'setup' ? ' active' : '';?>
">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['setup'];?>
 <span
                                                class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['general_settings_list'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'general_settings' ? ' active' : '';?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['general_settings'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#site"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#site_functions"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site_functions'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#site_security"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['site_security'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#admin_security"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['admin_security'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#mail"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['mail'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#crate"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['currency_rates'];?>
</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/general_settings#cron"
                                                           onclick="location.reload()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['cron'];?>
</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['payment_gateways_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['payment_gateways_fees_limits'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'payment_gateways' || $_smarty_tpl->tpl_vars['cur_page']->value == 'fees_limits' ? ' active' : '';?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['payment_gateways'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['payment_gateways_fees_limits'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'fees_limits' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways/fees_limits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['fees_limits'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['packages_list'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'packages' || $_smarty_tpl->tpl_vars['cur_page']->value == 'add_package' || $_smarty_tpl->tpl_vars['cur_page']->value == 'holidays' ? ' active' : '';?>
">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['packages'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['packages_add'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'add_package' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages/add"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['add_package'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['holidays_list'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'holidays' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/holidays"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['list_holidays'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['referral_system_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'referral_system' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/referral_system"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['referral_system'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['representative_system_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'representative_system' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/representative_system"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['representative_system'];?>

                                                </a>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_departments_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_help_topics_list'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'ticket_departments' || $_smarty_tpl->tpl_vars['cur_page']->value == 'ticket_help_topics' ? ' active' : '';?>
">
                                                <a href="#" class="dropdown-toggle"
                                                   data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['support'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_departments_list'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'ticket_departments' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_departments"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['ticket_depts'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['ticket_help_topics_list'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'ticket_help_topics' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/ticket_help_topics"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['ticket_help_topics'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'staff_roles' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staff_roles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['staff_roles'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <li role="separator" class="divider"></li>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['info_boxes_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'info_boxes' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/info_boxes"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['info_boxes'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['email_templates_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'email_templates' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/email_templates"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['email_templates'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['exchange_system_list'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'exchange_system' ? ' active' : '';?>
">
                                                <a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['other'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['exchange_system_list'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'exchange_system' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/exchange_system"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['exchange_system'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['access_log_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['duplicate_ip_checker_list']) || isset($_smarty_tpl->tpl_vars['permissions']->value['file_manager_list'])) {?>
                                <li class="dropdown<?php echo $_smarty_tpl->tpl_vars['nav_group']->value == 'utilities' ? ' active' : '';?>
">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['utilities'];?>

                                        <span
                                                class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu multi-level">
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['duplicate_ip_checker_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'duplicate_ip_checker' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/duplicate_ip_checker"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['duplicate_ip_checker'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['file_manager_list'])) {?>
                                            <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'file_manager' ? 'class="active"' : '';?>
>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/file_manager"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['file_manager'];?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['access_log_list'])) {?>
                                            <li class="dropdown-submenu<?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'access_log_user' || $_smarty_tpl->tpl_vars['cur_page']->value == 'access_log_staff' ? ' active' : '';?>
">
                                                <a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['logs'];?>
</a>
                                                <ul class="dropdown-menu">
                                                    <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['access_log_list'])) {?>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'access_log_user' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/access_log/user"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['access_log_user'];?>
</a>
                                                        </li>
                                                        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'access_log_staff' ? 'class="active"' : '';?>
>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/access_log/staff"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['access_log_staff'];?>
</a>
                                                        </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right nav-notifications">
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['tickets_list'])) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/tickets/open" data-toggle="tooltip" data-placement="bottom"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['open'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['tickets'];?>
">
                                        <i class="fa fa-envelope"></i>
                                        <sup class="notify-sup"><?php echo $_smarty_tpl->tpl_vars['notify_otic']->value;?>
</sup>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_crypto_payments_list'])) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_crypto_payments" data-toggle="tooltip"
                                       data-placement="bottom"
                                       title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['pending_crypto_payments'];?>
">
                                        <i class="fa fa-arrow-down"></i>
                                        <sup class="notify-sup"><?php echo $_smarty_tpl->tpl_vars['notify_wp']->value;?>
</sup>
                                    </a>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['logged_id']->value == 1 || isset($_smarty_tpl->tpl_vars['permissions']->value['pending_withdrawals_list'])) {?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/pending_withdrawals" data-toggle="tooltip"
                                       data-placement="bottom" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['pending_withdrawals'];?>
">
                                        <i class="fa fa-arrow-up"></i>
                                        <sup class="notify-sup"><?php echo $_smarty_tpl->tpl_vars['notify_pw']->value;?>
</sup>
                                    </a>
                                </li>
                            <?php }?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                            class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['admin_username']->value;?>
<span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu multi-level">
                                    <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'manage_admin_profile' ? 'class="active"' : '';?>
>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/profile"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['profile'];?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/logout"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nav']['logout'];?>
</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </nav>
            <div class="container">
                <div class="page-header">
                    <h1>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3973601295e17631b2a8301_23765648', "page_title", $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1157226815e17631b2a9c08_19381231', "page_subtitle", $this->tplIndex);
?>

                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/dashboard"><i class="pe-7s-home"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['dashboard'];?>
</a>
                        </li>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17943143995e17631b2ae141_26375541', "breadcrumb", $this->tplIndex);
?>

                    </ol>
                </div>
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($_smarty_tpl->tpl_vars['demo_restriction']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"demo_restrict_msg"), 0, false);
?>

                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['has_privilege']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"privilege_restrict_msg"), 0, true);
?>

                            <?php }?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21365795735e17631b2b4c93_43420887', "page_content", $this->tplIndex);
?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Copyright &copy; 2019-2020 DQScript Admin. All rights reserved.</p>
            </div>
        </footer>
    <?php
}
}
/* {/block "body"} */
/* {block "foo"} */
class Block_16917095e17631b2cb2f9_64238167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!-- bootstrap js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- datepicker js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- footable js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/footable-bootstrap/js/footable.min.js"
                type="text/javascript"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "foo"} */
}
