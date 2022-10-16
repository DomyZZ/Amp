{include file="header.tpl"}
<form class="form-filter" name="payments" id="payments" method="get">
    <div class="row">
        <div class="col-sm-6">

            <div class="form-group">
                <label for="startdate" class="control-label">{$lang.date}</label>
                <br/>

                <div class="row">
                    <div class="col-sm-6">
                        <select class="form-control input-sm" name="start_day"
                                style="width: auto;display: inline-block">
                            <option value="">day</option>
                            {foreach $dates.days as $day}
                                <option value="{$day}" {($init_filter_dates.start_day==$day)?"selected":""} >{$day}</option>
                            {/foreach}
                        </select>
                        <select class="form-control input-sm" name="start_month"
                                style="width: auto;display: inline-block">
                            <option value="">month</option>
                            {foreach $dates.months as $month}
                                <option value="{$month.value}" {($init_filter_dates.start_month==$month.value)?"selected":""}>{$month.label}</option>
                            {/foreach}
                        </select>
                        <select class="form-control input-sm" name="start_year"
                                style="width: auto;display: inline-block">
                            <option value="">year</option>
                            {foreach $dates.years as $year}
                                <option value="{$year}" {($init_filter_dates.start_year==$year)?"selected":""}>{$year}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control input-sm" name="end_day" style="width: auto;display: inline-block">
                            <option value="">day</option>
                            {foreach $dates.days as $day}
                                <option value="{$day}" {($init_filter_dates.end_day==$day)?"selected":""}>{$day}</option>
                            {/foreach}
                        </select>
                        <select class="form-control input-sm" name="end_month"
                                style="width: auto;display: inline-block">
                            <option value="">month</option>
                            {foreach $dates.months as $month}
                                <option value="{$month.value}" {($init_filter_dates.end_month==$month.value)?"selected":""}>{$month.label}</option>
                            {/foreach}
                        </select>
                        <select class="form-control input-sm" name="end_year" style="width: auto;display: inline-block">
                            <option value="">year</option>
                            {foreach $dates.years as $year}
                                <option value="{$year}" {($init_filter_dates.end_year==$year)?"selected":""}>{$year}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="col-sm-3">
            <div class="form-group" style="padding-top: 24px">
                <button type="submit" class="btn btn-sm btn-primary">
                    {$lang.filter}
                </button>
                <a href="{$base_url}/pending_payments" class="btn btn-sm btn-default">
                    {$lang.reset}
                </a>
            </div>
        </div>

    </div>
</form>
{if $dt.rows}
    <div class="table-responsive">
        <table class="table table-bordered dataTable">
            <thead>
            <tr>
                <th>Id</th>
                <th class="sorting" width="13%"><a href="{$base_url}/payments?{'sort'|bind_query:'date'}">Date</a>
                </th>
                <th>Amount</th>
                <th></th>
                <th>Txid</th>

            </tr>
            </thead>
            <tbody>
            {foreach $dt.rows as $row}
                <tr>
                    <td><small><a href="{$base_url}/payment/crypto/{$row.uid}">{$row.uid}</a></small></td>
                    <td>
                        {$row.date|dtformat}
                    </td>
                    <td>
                        {$row.payment_amount|clean} {$row.curr_nick}
                    </td>
                    <td width="1%"><img src="images/processors/{$row.icon}"/></td>
                    <td>
                        <small>Address: {$row.address} <br/>
                            Txid: {$row.txid} <br/>
                            Confirmations: {$row.confirmations}
                        </small>
                    </td>

                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
    {include file="pagination.tpl"}

{else}
    <div class="alert alert-danger">
        {$lang.no_pending_payments}
    </div>
{/if}

{include file="footer.tpl"}