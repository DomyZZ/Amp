<?php
/* Smarty version 3.1.30, created on 2020-02-22 19:45:03
  from "/home/amper856/public_html/amperium_test_site/template/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5184bfa0cdc0_46334975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '818d661dc6a1e66ef5733839471e6b343d394016' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/header.tpl',
      1 => 1580929387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5184bfa0cdc0_46334975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/line-awesome.min.css" rel="stylesheet">
    <link href="css/gauge.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
-<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div class="wrapper">
    <section class="overlay-section">
        <a class="overlay-close" href="#"><i class="la la-times-circle"></i></a>
        <div class="container">
            <div class="row overlay-content">
                <div class="col-sm-4">
                    <div class="overlay-block">

                        <div class="heading">
                            <i class="la la-info"></i>
                            ~ ABOUT AMPERIUM ~
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#what-is-amperium" class="text-xl font-weight-bold what-is-amperium">What is
                                    Amperium?</a></li>
                            <li><a href="public_venture">Our Public Venture</a></li>
                            <li><a href="faq">FAQs</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="overlay-block type-2">
                        <div class="heading">
                            <i class="la la-users"></i>
                            ~ COMMUNITY MEMBERS ~
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="bounty">Bounty Bonus Program</a></li>
                            <li><a href="affiliate">Affiliate Partnership</a></li>
                            <li><a href="statistics">Statistics</a></li>
                            <li><a href="marketing">Marketing Material</a></li>
                            <li><a href="" class="text-xl font-weight-bold">Amperium Forum</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="overlay-block type-2">
                        <div class="heading">
                            <i class="la la-user"></i>
                            ~ AMPERIUM ACCOUNT ~
                        </div>
                        <ul class="list-unstyled type-3 mt-5">
                            <?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
                                <li><a href="logout">Logout <i class="la la-sign-out"></i></a></li>
                                <li class="mt-3"><a href="dashboard" class="type-2">Dashboard</a></li>
                            <?php } else { ?>
                                <li><a href="login">Login <i class="la la-sign-in"></i></a></li>
                                <li class="mt-3"><a href="register" class="type-2">Register</a></li>
                            <?php }?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header">
        
        <div id="lottie">

        </div>
        <div class="header-top">
            <div class="h-contacts">
                <div class="container">
                    <ul class="list-inline ml-3">
                        <li class="list-inline-item"><i class="la la-envelope"></i> Support Email :
                            info@amperium.tech
                        </li>
                        <li class="list-inline-item"><i class="la la-phone"></i> Contact Number : +919876543120</li>
                        <li class="list-inline-item"><i class="la la-clock"></i> Working Hours (GMT) : 8am to 8pm
                        </li>
                        <li class="list-inline-item"><i class="la la-location-arrow"></i> Headquarters : Canada
                            Square, London, UK, E14 5GL
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo"><a href="."><img src="images/logo.png"/></a></div>
                    </div>
                    <div class="col-sm-9">
                        <div class="top-menu">
                            <ul class="list-inline float-right mr-3">
                                <li class="list-inline-item"><a href="" class="type-img overlay-open">
                                        <div class="label">Menu</div><div id="hamburger"></div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-mid <?php if ($_smarty_tpl->tpl_vars['cur_page']->value != 'home') {?>page-mid<?php }?>">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="jumbo-block">
                            <h1><span class="text-sc-lighter">World</span>Wide
                                <span class="sub-text">
                                     Sustainability Solutions For Everyone
                                 </span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php if ($_smarty_tpl->tpl_vars['cur_page']->value != 'home') {?>
    <section class="page">
        <div class="container">
            <div class="mb-5">
                <?php if (!in_array($_smarty_tpl->tpl_vars['cur_page']->value,array('login','register')) && !$_smarty_tpl->tpl_vars['is_member_page']->value) {?>
                    <div class="title">
                        <div class="main-text"><?php ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</div>
                    </div>
                    <div class="breadcrumb">
                        <a href="."><i class="la la-home"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>

                        </a>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'breadcrumb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['last']) {?>
                                <span class="active breadcrumb-item"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['label'];?>
</span>
                            <?php } else { ?>
                                <a
                                        href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['uri'];?>
"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['label'];?>
</a>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cur_page']->value == "login") {?>
                    <div class="text-center">
                        ~ <i class="la la-user-lock la-2x"></i> ~
                        <div class="title mt-3">
                            <div class="main-text text-sc-normal">Authentication</div>
                        </div>
                        <span>Access your account in Amperium</span>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['cur_page']->value == "register") {?>
                    <div class="text-center">
                        ~ <i class="la la-user-plus la-2x"></i> ~
                        <div class="title mt-3">
                            <div class="main-text text-sc-normal">Registration</div>
                        </div>
                        <span>Create new account in Amperium</span>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['is_member_page']->value) {?>
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="member-menu list-inline">
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'dashboard' ? 'active' : '';?>
"><a
                                        href="dashboard"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dashboard'];?>
</a></li>
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'new_deposit' ? 'active' : '';?>
"><a
                                        href="new_deposit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['new_deposit'];?>
</a></li>
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'deposits' ? 'active' : '';?>
"><a
                                        href="deposits"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_deposits'];?>
</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-n5">
                            ~ <i class="la la-user-circle la-2x"></i> ~
                            <div class="title mt-3 mb-3">
                                <div class="main-text text-sc-normal"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</div>
                            </div>
                            <span>You last logged in was on <?php if ($_smarty_tpl->tpl_vars['user']->value['last_access']) {?>
                                    <a href="access_log"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['user']->value['last_access'],"d-M-Y H:i:s");?>
</a>



<?php } else { ?>



                                    <span>never</span>
                                <?php }?></span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ul class="member-menu list-inline">
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'withdraw' ? 'active' : '';?>
"><a
                                        href="withdraw"><?php echo $_smarty_tpl->tpl_vars['lang']->value['withdraw'];?>
</a></li>
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'pending_withdrawals' ? 'active' : '';?>
"><a
                                        href="pending_withdrawals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pending_withdrawals'];?>
</a></li>
                            <li class="list-inline-item <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == 'transactions' ? 'active' : '';?>
"><a
                                        href="transactions"><?php echo $_smarty_tpl->tpl_vars['lang']->value['transactions'];?>
</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mt-45">
                    <div class="col-sm-12">
                        <div class="l-box">
                            <i class="la la-user-circle-o"></i>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="title title-small">
                                        <div class="main-text">
                                            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                                        </div>
                                        <div class="breadcrumb text-sm bc-small">
                                            <a href="."><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>

                                            </a>
                                            <?php if ($_smarty_tpl->tpl_vars['is_member_page']->value && $_smarty_tpl->tpl_vars['logged_in']->value && $_smarty_tpl->tpl_vars['cur_page']->value != "dashboard") {?>
                                                <a href="dashboard"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dashboard'];?>
 </a>
                                            <?php }?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumbs']->value, 'breadcrumb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->value) {
?>
                                                <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['last']) {?>
                                                    <span class="active breadcrumb-item"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['label'];?>
</span>
                                                <?php } else { ?>
                                                    <a
                                                            href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['uri'];?>
"><?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['label'];?>
</a>
                                                <?php }?>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-inline member-funds text-center">
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['balance'];?>

                                            </div>
                                            <div class="label">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['account_balance'];?>

                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['active_deposit'];?>

                                            </div>
                                            <div class="label">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['active_deposits'];?>

                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['user']->value['funds']['pending_withdrawal'];?>

                                            </div>
                                            <div class="label">
                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['pending_withdrawals'];?>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            <?php }?>





                            <?php }?>

<?php }
}
