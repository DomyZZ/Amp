<?php
/* Smarty version 3.1.30, created on 2020-02-24 11:12:59
  from "/home/amper856/public_html/template/custom/statistics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53afbb747ce9_31671072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeffd87a155df905adc38e701cbc647def6a9c75' => 
    array (
      0 => '/home/amper856/public_html/template/custom/statistics.tpl',
      1 => 1580929395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e53afbb747ce9_31671072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="row">
    <div class="col-sm-12">
        <div class="content-box-1">
            <div class="row">
                <div class="col-sm-8">
                    <span class="text-lgx mt-2 d-block"><i class="la la-chart-area mr-1"></i> Constantly updated <span
                                class="text-sc-normal">public information</span> of company's performance</span>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-primary btn-block" href="public_venture">Join Our Public Venture</a>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="gauge-container mt-5">
    <div class="row text-center">
        <div class="col-sm-4">
            <div id="gauge-1" class="gauge"></div>
            <div class="gauge-value gv-1"></div>
        </div>
        <div class="col-sm-4">
            <div id="gauge-2" class="gauge"></div>
            <div class="gauge-value gv-2"></div>
        </div>
        <div class="col-sm-4">
            <div id="gauge-3" class="gauge"></div>
            <div class="gauge-value gv-3"></div>
        </div>
    </div>
    <div class="row mt-7 pl-5">
        <div class="col-sm-12 text-center">
            <div class="gauge-total"><i class="la la-flash"></i> 20000 KW
                <small>Total amount of electricity generated and sold</small>
            </div>

        </div>
    </div>
    <div class="row mt-6">
        <div class="col-sm-12">
            <div class="content-box-1">
                <div class="title text-left">
                    <div class="heading mb-5 py-5">Last <span
                                class="py-2 px-4 bg-pc-normal font-weight-bold text-white mt-n3">Transactions</span> By Clients
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3 float-right" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#last-deposits" role="tab" aria-controls="pills-home" aria-selected="true">Last 10 Deposits</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#last-withdrawals" role="tab" aria-controls="pills-profile" aria-selected="false">Last 10 Withdrawals</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="last-deposits" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <div class="title text-left title-small d-inline-block">
                                        <div class="main-text pt-1 ml-4"><i class="la la-arrow-alt-circle-down"></i> Last <span class="text-sc-normal">10 Deposits</span></div>
                                    </div>
                                    <table class="table table-striped mt-4">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Username</th>
                                            <th>Amount</th>
                                            <th>Processor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_stats'][0][0]->infobox_site_stats(array('type'=>"last_deposits",'limit'=>((string)$_smarty_tpl->tpl_vars['settings']->value['infobox']['no_last_deposits']),'assign_var'=>"mod_last_deposits"),$_smarty_tpl);?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_last_deposits']->value, 'deposit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['deposit']->value) {
?>
                                            <tr>
                                                <td>
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['deposit']->value['date'],"timeago");?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['deposit']->value['username'];?>

                                                </td>
                                                <td class="text-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['deposit']->value['amount']);?>

                                                </td>
                                                <td width="1%">
                                                    <img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['deposit']->value['procicon'];?>
" class="proc-icon"
                                                         title="<?php echo $_smarty_tpl->tpl_vars['deposit']->value['name'];?>
"/>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
?>

                                            <tr>
                                                <td colspan="3"><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
</span></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="last-withdrawals" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="title text-left title-small d-inline-block">
                                        <div class="main-text pt-1 ml-4"><i class="la la-arrow-alt-circle-up"></i> Last <span class="text-sc-normal">10 Withdrawals</span></div>
                                    </div>
                                    <table class="table table-striped mt-4">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Username</th>
                                            <th>Amount</th>
                                            <th>Processor</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_stats'][0][0]->infobox_site_stats(array('type'=>"last_withdrawals",'limit'=>((string)$_smarty_tpl->tpl_vars['settings']->value['infobox']['no_last_withdrawals']),'assign_var'=>"mod_last_withdrawals"),$_smarty_tpl);?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_last_withdrawals']->value, 'withdrawal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['withdrawal']->value) {
?>
                                            <tr>
                                                <td>
                                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['withdrawal']->value['date'],"timeago");?>

                                                </td>
                                                <td>
                                                    <?php echo $_smarty_tpl->tpl_vars['withdrawal']->value['username'];?>

                                                </td>
                                                <td class="text-right">
                                                    <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['withdrawal']->value['amount']);?>

                                                </td>
                                                <td width="1%">
                                                    <img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['withdrawal']->value['procicon'];?>
" class="proc-icon"
                                                         title="<?php echo $_smarty_tpl->tpl_vars['withdrawal']->value['name'];?>
"/>
                                                </td>
                                            </tr>
                                            <?php
}
} else {
?>

                                            <tr>
                                                <td colspan="3"><span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
</span></td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="row mt-45">
    <div class="col-sm-12">

        <div class="row">
            <div class="col">
                <div class="site-info">
                    <div class="content-box-1">
                        <i class="la la-calendar-day type-2"></i>
                        <div class="heading mb-2 text-mdl text-uppercase text-center">Running Days
                        </div>
                        <div class="content">
                            <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_info'][0][0]->infobox_site_info(array('type'=>"running_days"),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="site-info">
                    <div class="content-box-1">
                        <i class="la la-users"></i>
                        <div class="heading mb-2 text-mdl text-uppercase text-center">Total Users
                        </div>
                        <div class="content">
                            <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_info'][0][0]->infobox_site_info(array('type'=>"total_users"),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="site-info">
                    <div class="content-box-1">
                        <i class="la la-caret-down type-2"></i>
                        <div class="heading mb-2 text-mdl text-uppercase text-center">Total Deposits
                        </div>
                        <div class="content">
                            <span><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_info'][0][0]->infobox_site_info(array('type'=>"total_deposits"),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="site-info">
                    <div class="content-box-1">
                        <i class="la la-caret-up"></i>
                        <div class="heading mb-2 text-mdl text-uppercase text-center">Total Withdrawals
                        </div>
                        <div class="content">
                            <span><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_site_info'][0][0]->infobox_site_info(array('type'=>"total_withdrawals"),$_smarty_tpl);?>
</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="site-info">
                    <div class="content-box-1">
                        <i class="la la-trophy type-2"></i>
                        <div class="heading mb-2 text-mdl text-uppercase text-center">Alexa Rank
                        </div>
                        <div class="content">
                            <span>1,928,22</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
