<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$base_url}/">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/line-awesome.min.css" rel="stylesheet">
    <link href="css/gauge.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>{$settings.general.site_name}-{$title}</title>
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
                            {if $logged_in}
                                <li><a href="logout">Logout <i class="la la-sign-out"></i></a></li>
                                <li class="mt-3"><a href="dashboard" class="type-2">Dashboard</a></li>
                            {else}
                                <li><a href="login">Login <i class="la la-sign-in"></i></a></li>
                                <li class="mt-3"><a href="register" class="type-2">Register</a></li>
                            {/if}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header">
        {*<lottie-player
                src="./data.json" speed="1" mode="normal" style="width: 1920px; height: auto" loop autoplay>
        </lottie-player>*}
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
        <div class="header-mid {if $cur_page!='home'}page-mid{/if}">
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
    {if $cur_page!='home'}
    <section class="page">
        <div class="container">
            <div class="mb-5">
                {if !in_array($cur_page,array('login','register')) && !$is_member_page}
                    <div class="title">
                        <div class="main-text">{{$title}}</div>
                    </div>
                    <div class="breadcrumb">
                        <a href="."><i class="la la-home"></i> {$lang.home}
                        </a>

                        {foreach $breadcrumbs as $breadcrumb}
                            {if $breadcrumb.last}
                                <span class="active breadcrumb-item">{$breadcrumb.label}</span>
                            {else}
                                <a
                                        href="{$breadcrumb.uri}">{$breadcrumb.label}</a>
                            {/if}
                        {/foreach}
                    </div>
                {/if}
                {if $cur_page == "login"}
                    <div class="text-center">
                        ~ <i class="la la-user-lock la-2x"></i> ~
                        <div class="title mt-3">
                            <div class="main-text text-sc-normal">Authentication</div>
                        </div>
                        <span>Access your account in Amperium</span>
                    </div>
                {/if}
                {if $cur_page == "register"}
                    <div class="text-center">
                        ~ <i class="la la-user-plus la-2x"></i> ~
                        <div class="title mt-3">
                            <div class="main-text text-sc-normal">Registration</div>
                        </div>
                        <span>Create new account in Amperium</span>
                    </div>
                {/if}
                {if $is_member_page}
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="member-menu list-inline">
                            <li class="list-inline-item {($cur_page=='dashboard')?'active':''}"><a
                                        href="dashboard">{$lang.dashboard}</a></li>
                            <li class="list-inline-item {($cur_page=='new_deposit')?'active':''}"><a
                                        href="new_deposit">{$lang.new_deposit}</a></li>
                            <li class="list-inline-item {($cur_page=='deposits')?'active':''}"><a
                                        href="deposits">{$lang.my_deposits}</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center mt-n5">
                            ~ <i class="la la-user-circle la-2x"></i> ~
                            <div class="title mt-3 mb-3">
                                <div class="main-text text-sc-normal">{$user.username}</div>
                            </div>
                            <span>You last logged in was on {if $user.last_access}
                                    <a href="access_log">{$user.last_access|dtformat:"d-M-Y H:i:s"}</a>



{else}



                                    <span>never</span>
                                {/if}</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <ul class="member-menu list-inline">
                            <li class="list-inline-item {($cur_page=='withdraw')?'active':''}"><a
                                        href="withdraw">{$lang.withdraw}</a></li>
                            <li class="list-inline-item {($cur_page=='pending_withdrawals')?'active':''}"><a
                                        href="pending_withdrawals">{$lang.pending_withdrawals}</a></li>
                            <li class="list-inline-item {($cur_page=='transactions')?'active':''}"><a
                                        href="transactions">{$lang.transactions}</a></li>
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
                                            {$title}
                                        </div>
                                        <div class="breadcrumb text-sm bc-small">
                                            <a href=".">{$lang.home}
                                            </a>
                                            {if $is_member_page && $logged_in && $cur_page!="dashboard"}
                                                <a href="dashboard">{$lang.dashboard} </a>
                                            {/if}
                                            {foreach $breadcrumbs as $breadcrumb}
                                                {if $breadcrumb.last}
                                                    <span class="active breadcrumb-item">{$breadcrumb.label}</span>
                                                {else}
                                                    <a
                                                            href="{$breadcrumb.uri}">{$breadcrumb.label}</a>
                                                {/if}
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-inline member-funds text-center">
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                {$curr_symbol}{$user.funds.balance}
                                            </div>
                                            <div class="label">
                                                {$lang.account_balance}
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                {$curr_symbol}{$user.funds.active_deposit}
                                            </div>
                                            <div class="label">
                                                {$lang.active_deposits}
                                            </div>
                                        </li>
                                        <li class="list-inline-item">
                                            <div class="desc">
                                                {$curr_symbol}{$user.funds.pending_withdrawal}
                                            </div>
                                            <div class="label">
                                                {$lang.pending_withdrawals}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                            {/if}





                            {/if}

