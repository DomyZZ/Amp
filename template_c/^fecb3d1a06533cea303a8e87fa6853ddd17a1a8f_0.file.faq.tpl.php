<?php
/* Smarty version 3.1.30, created on 2020-02-26 03:26:34
  from "/home/amper856/public_html/template/custom/faq.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e55e56a231023_99796638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fecb3d1a06533cea303a8e87fa6853ddd17a1a8f' => 
    array (
      0 => '/home/amper856/public_html/template/custom/faq.tpl',
      1 => 1578413672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e55e56a231023_99796638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="faq-accordion mt-3">
    <ul class="list-unstyled">
        <li class="active">
            <div class="question"><i class="la la-question-circle"></i>What is <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
?
            </div>
            <div class="answer">
                <p><?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
 is an online investment company founded few years ago. It offers all
                    kinds of professional
                    financial and investment services and support to clients throughout the world.</p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i>Who can invest in <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
?
            </div>
            <div class="answer">
                <p>To make an investment you must first become a member of <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
. Once you are registered, you
                    can make your first deposit. All deposits must be made through the member area. All investors must
                    be at
                    least minimum legal age in their country to be able to open an account. In most countries, the
                    minimum
                    age is 18 years.
                    You may be our investor regardless of the country of residence, if this activity does not contradict
                    your home legislation.</p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How to register
                in <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
 and is it free?
            </div>
            <div class="answer">
                <p>It is very easy to register in <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
. You can simply click on the "Register" button on the top or
                    click
                    <a href="register">here</a> to register. It is absolutely free. Please read our <a href="terms">Terms
                        &
                        Conditions</a> before registering.</p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What are the investment programs offered
                by <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
?
            </div>
            <div class="answer">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_packages'][0][0]->infobox_packages(array('assign_var'=>"mod_packages"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>
 offers <?php echo count($_smarty_tpl->tpl_vars['mod_packages']->value);?>
 investment programs(s). They are as
                follows:- <br/> <br/>
                <ol class="list-unstyled">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->iteration++;
$__foreach_package_0_saved = $_smarty_tpl->tpl_vars['package'];
?>
                        <li>
                            <span><?php echo $_smarty_tpl->tpl_vars['package']->iteration;?>
) <span
                                        class="text-choclate"><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</span> - <?php echo $_smarty_tpl->tpl_vars['package']->value['plan_rate']['rate'];?>
% <?php echo $_smarty_tpl->tpl_vars['package']->value['formatted_earning_info'];?>
</span>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['package'] = $__foreach_package_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ol>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What is the minimum and maximum deposit allowed
                in each investment program?
            </div>
            <div class="answer">
                <p> Please check our <a href=".">home page</a> to get all details about our investment programs.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What payment methods are accepted here ?
            </div>
            <div class="answer">
                <p>Currently we accept
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_active_processors'][0][0]->infobox_active_processors(array('assign_var'=>"mod_active_processors"),$_smarty_tpl);?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_active_processors']->value, 'active_processor', true);
$_smarty_tpl->tpl_vars['active_processor']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['active_processor']->value) {
$_smarty_tpl->tpl_vars['active_processor']->iteration++;
$_smarty_tpl->tpl_vars['active_processor']->last = $_smarty_tpl->tpl_vars['active_processor']->iteration == $_smarty_tpl->tpl_vars['active_processor']->total;
$__foreach_active_processor_1_saved = $_smarty_tpl->tpl_vars['active_processor'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['active_processor']->last) {?>
                            <?php echo $_smarty_tpl->tpl_vars['active_processor']->value['name'];?>
.
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['active_processor']->value['name'];?>
,
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['active_processor'] = $__foreach_active_processor_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How to withdraw my funds ?
            </div>
            <div class="answer">
                <p> Click on "Withdraw" in your member panel. Follow the instructions. Make sure you have entered your
                    receiving processor account in Wallet accounts in
                    <a href="edit_profile">Edit profile </a> page before requesting withdrawal.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How long it takes to process my withdrawal
                request ?
            </div>
            <div class="answer">
                <p><?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['enable_auto_withdrawal']) {?>
                        All withdrawal requests are processed instantly.
                    <?php } else { ?>
                        Withdrawal requests are processed manually and can take upto 48 hours.
                    <?php }?></p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> I forgot my password, how do i reset it ?
            </div>
            <div class="answer">
                <p> Please go to <a href="reset_password">Reset Password</a> page to reset your password.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How can i make my account more secure ?
            </div>
            <div class="answer">
                <p> Please go to <a href="security">Security</a> page in member panel. You can find various security
                    options like "Secondary Password, "TwoFa", "Security Question/Answer" etc.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How can i change my email ?
            </div>
            <div class="answer">
                <p> Please go to <a href="edit_profile">Edit Profile</a> page and change your email. If you cannot
                    change email, please contact support.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> Is there any referral program ?
            </div>
            <div class="answer">
                <p> Yes we do. Please check our <a href=".">home page</a> to know more.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> Is there any representative program ?
            </div>
            <div class="answer">
                <p> <?php if ($_smarty_tpl->tpl_vars['settings']->value['representative']['rep_enabled']) {?>
                        Yes we do. Please check our
                        <a href=".">home page</a>
                        to know more.
                    <?php } else { ?>
                        No, we do not have any representative program.
                    <?php }?>
                </p>
            </div>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['representative']['rep_enabled']) {?>
            <li>
                <div class="question"><i class="la la-question-circle"></i> How to apply for a representative ?
                </div>
                <div class="answer">
                    <p> Please go <a href="representatives">here</a> and click on "Apply for represntative" or click
                        <a href="apply_representative">here</a> to go directly.
                    </p>
                </div>
            </li>
        <?php }?>
        <li>
            <div class="question"><i class="la la-question-circle"></i> I want to promote <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
. Where can i find the banners?
            </div>
            <div class="answer">
                <p> Please login to member panel and go to <a href="banners">Banners</a> page.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> How to get my referral link?
            </div>
            <div class="answer">
                <p> Please login to member panel and go to <a href="referrals">Referrals</a> page. You can also find your
                    referral link in
                    <a href="dashboard">dashboard</a>.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i>  How do i contact support if i face any problem?
            </div>
            <div class="answer">
                <p>If you have not registered yet, you can go to <a href="contact">Contact us</a> page and submit your query to us. If you have already registered, you can go to
                    <a href="tickets">Tickets</a> page in member panel and click on "Create Ticket" to write your message. You will get a reply as soon as possible.
                </p>
            </div>
        </li>

    </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
