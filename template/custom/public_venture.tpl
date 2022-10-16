{include file="header.tpl"}

<div class="about" style="background: none">
    <div class="row">
        <div class="col-sm-12">
            <p>
                We offer 3 investment plans in amperium.tech. The investment plans are based on areas of investment like
                hydro, solar or windmills. The accruals are made daily to your account balance which can be withdrawn
                any time. Our investment plans have no expiry time which means your investments will earn you profits
                indefinitely as long as you want.
            </p>


        </div>


    </div>
    <div class="row mt-2">
        <div class="col-sm-4">
            <div class="why-us-1 shadow">
                <ul class="list-unstyled">
                    <li>
                        <div class="heading text-center pr-5"><img src="images/icons/solar-energy.png"/> INVEST IN <span
                                    class="d-block mt-2">~ Solar Collectors ~</span>
                        </div>
                        <div class="content">
                            <ul class="list-group type-2">
                                <li class="list-group-item text-uppercase text-md list-group-item-secondary py-2 text-center">
                                    Package Details
                                </li>
                                <li class="list-group-item">Investment From <span
                                            class="float-right pull-right font-weight-bold text-sc-normal">{$curr_symbol}20 - {$curr_symbol}4999</span>
                                </li>
                                <li class="list-group-item">Accrual <span
                                            class="float-right pull-right font-weight-bold text-sc-normal">1% Daily Unlimited Time</span>
                                </li>
                                <li class="list-group-item">Payout Period <span
                                            class="float-right pull-right text-right font-weight-bold text-sc-normal">
                                    7 Days a Week
                                    </span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-primary btn-sm btn-block  mt-3" href="new_deposit">Invest Now</a>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="why-us-1 shadow">
                <ul class="list-unstyled">
                    <li>
                        <div class="heading text-center pr-5">
                            <div class="popular"><i class="la la-star-o"></i> Popular</div>
                            <img src="images/icons/wind-turbine.png"/> INVEST IN <span
                                    class="d-block mt-2">~ Wind Mills ~</span>
                        </div>
                        <div class="content">
                            <ul class="list-group type-2">
                                <li class="list-group-item text-uppercase text-md  list-group-item-secondary py-2 text-center">
                                    Package Details
                                </li>
                                <li class="list-group-item">Investment From <span
                                            class="float-right pull-right font-weight-bold text-sc-normal text-mdl">{$curr_symbol}5000 - {$curr_symbol}9999</span>
                                </li>
                                <li class="list-group-item">Accrual <span
                                            class="float-right pull-right font-weight-bold text-sc-normal text-mdl">2% Daily Unlimited Time</span>
                                </li>
                                <li class="list-group-item">Payout Period <span
                                            class="float-right pull-right text-right font-weight-bold text-sc-normal text-mdl">
                                    7 Days a Week
                                    </span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-primary btn-sm btn-block  mt-3" href="new_deposit">Invest Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="why-us-1 shadow">
                <ul class="list-unstyled">
                    <li>
                        <div class="heading text-center pr-5"><img src="images/icons/turbine.png"/> INVEST IN <span
                                    class="d-block mt-2">~ Hydro Turbines ~</span>
                        </div>
                        <div class="content">
                            <ul class="list-group type-2">
                                <li class="list-group-item text-uppercase text-md list-group-item-secondary py-2 text-center">
                                    Package Details
                                </li>
                                <li class="list-group-item">Investment From <span
                                            class="float-right pull-right font-weight-bold text-sc-normal text-mdl">{$curr_symbol}10000 - &#8734;</span>
                                </li>
                                <li class="list-group-item">Accrual <span
                                            class="float-right pull-right font-weight-bold text-sc-normal text-mdl">3% Daily Unlimited Time</span>
                                </li>
                                <li class="list-group-item">Payout Period <span
                                            class="float-right pull-right text-right font-weight-bold text-sc-normal text-mdl">
                                    7 Days a Week
                                    </span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-primary btn-sm btn-block  mt-3" href="new_deposit">Invest Now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="row mt-45">
        <div class="col-sm-12">
            <div class="content-box-1">
                <div class="title text-left">
                    <div class="heading mb-5 py-4">Calculate <span
                                class="py-2 px-4 bg-pc-normal font-weight-bold text-white mt-n3">Your <span
                                    class="text-sc-lighter">Profit</span></span>
                        <span class="sub-title ml-3">From Your <b>Investments</b> In Amperium.tech</span>
                    </div>

                </div>

                <div class="content">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="images/calculator.png" class="mt-45" style="width: 100%; opacity: 0.1"/>
                        </div>
                        <div class="col-sm-8">
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>
                                                <div class="title title-style-two">
                                                    <div class="main-text">Enter Your Investment Amount</div>
                                                </div>
                                            </label>
                                            <input type="text" class="form-control input-lg" name="calc_amount" id="calc_amount" required value="20" onkeyup="calc()" />
                                        </div>
                                        <div class="col-sm-6">
                                            <label>
                                                <div class="title title-style-two">
                                                    <div class="main-text">Investment Duration (Days)</div>
                                                </div>
                                            </label>
                                            <input type="text" class="form-control input-lg" id="inv_days" required value="30" onkeyup="calc()" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group p-4 bg-light shadow">
                                    <label class="border-bottom pb-2 mb-3">
                                        <div class="title title-style-two">
                                            <div class="main-text">Calculator Result</div>
                                        </div>
                                    </label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Selected
                                                Investment
                                                Plan</label>
                                            <h5 class="text-left" id="selected_plan">Investment in Solar Panels</h5>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Daily Interest
                                                Rate
                                            </label>
                                            <h5 class="text-left" id="inv_rate">1%</h5>
                                        </div>


                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-3">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Daily
                                                Profit</label>
                                            <h5 class="text-left" id="daily_profit">{$curr_symbol}0.00</h5>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Weekly
                                                Profit</label>
                                            <h5 class="text-left" id="weekly_profit">{$curr_symbol}0.00</h5>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Total
                                                Profit</label>
                                            <h5 class="text-left" id="total_profit">{$curr_symbol}0.00</h5>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="text-uppercase font-weight-bold text-sc-normal">Total
                                                Return</label>
                                            <h5 class="text-left" id="total_return">{$curr_symbol}0.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    
</div>


{include file="footer.tpl"}