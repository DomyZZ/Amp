{include file="header.tpl"}

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
                                        {infobox_site_stats type="last_deposits" limit="{$settings.infobox.no_last_deposits}" assign_var="mod_last_deposits"}
                                        {foreach $mod_last_deposits as $deposit}
                                            <tr>
                                                <td>
                                                    {$deposit.date|dtformat:"timeago"}
                                                </td>
                                                <td>
                                                    {$deposit.username}
                                                </td>
                                                <td class="text-right">
                                                    {$curr_symbol}{$deposit.amount|truncdec}
                                                </td>
                                                <td width="1%">
                                                    <img src="images/processors/{$deposit.procicon}" class="proc-icon"
                                                         title="{$deposit.name}"/>
                                                </td>
                                            </tr>
                                            {foreachelse}
                                            <tr>
                                                <td colspan="3"><span class="text-danger">{$lang.none}</span></td>
                                            </tr>
                                        {/foreach}
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
                                        {infobox_site_stats type="last_withdrawals" limit="{$settings.infobox.no_last_withdrawals}" assign_var="mod_last_withdrawals"}
                                        {foreach $mod_last_withdrawals as $withdrawal}
                                            <tr>
                                                <td>
                                                    {$withdrawal.date|dtformat:"timeago"}
                                                </td>
                                                <td>
                                                    {$withdrawal.username}
                                                </td>
                                                <td class="text-right">
                                                    {$curr_symbol}{$withdrawal.amount|truncdec}
                                                </td>
                                                <td width="1%">
                                                    <img src="images/processors/{$withdrawal.procicon}" class="proc-icon"
                                                         title="{$withdrawal.name}"/>
                                                </td>
                                            </tr>
                                            {foreachelse}
                                            <tr>
                                                <td colspan="3"><span class="text-danger">{$lang.none}</span></td>
                                            </tr>
                                        {/foreach}
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
                            <span>{infobox_site_info type="running_days"}</span>
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
                            <span>{infobox_site_info type="total_users"}</span>
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
                            <span>{$curr_symbol}{infobox_site_info type="total_deposits"}</span>
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
                            <span>{$curr_symbol}{infobox_site_info type="total_withdrawals"}</span>
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


{include file="footer.tpl"}

