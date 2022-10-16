{include file="header.tpl"}

<div class="faq-accordion mt-3">
    <ul class="list-unstyled">
        <li class="active">
            <div class="question"><i class="la la-question-circle"></i>What is {$settings.general.site_name}?
            </div>
            <div class="answer">
                <p>{$settings.general.site_name} is a tech company founded few years ago. It utilizes renewable energy
                    to produce and sell electricity.
                    Since year 2020 Amperium allso offers a public venture services and support to clients throughout the world.
                    All gathered funds are used in building and upgrading new power plants, funding research and development of future projects. </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i>Who can invest in {$settings.general.site_name}?
            </div>
            <div class="answer">
                <p>To make an investment you must first become a member of {$domain}. Once you are registered, you
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
                in {$settings.general.site_name} and is it free?
            </div>
            <div class="answer">
                <p>It is very easy to register in {$domain}. You can simply click on the "Register" button on the top or
                    click
                    <a href="register">here</a> to register. It is absolutely free. Please read our <a href="terms">Terms
                        &
                        Conditions</a> before registering.</p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What are the investment programs offered
                by {$settings.general.site_name}?
            </div>
            <div class="answer">
                {infobox_packages assign_var="mod_packages"}
                {$settings.general.site_name} offers {count($mod_packages)} investment programs(s). They are as
                follows:- <br/> <br/>
                <ol class="list-unstyled">
                    {foreach $mod_packages as $package}
                        <li>
                            <span>{$package@iteration}) <span
                                        class="text-choclate">{$package.name}</span> - {$package.plan_rate.rate}% {$package.formatted_earning_info}</span>
                        </li>
                    {/foreach}
                </ol>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What is the minimum and maximum deposit allowed
                in each investment type?
            </div>
            <div class="answer">
                <p> Please check our <a href=".">public venture page</a> to get all details about our investment types.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> What payment methods are accepted here ?
            </div>
            <div class="answer">
                <p>Currently we accept
                    {infobox_active_processors assign_var="mod_active_processors"}
                    {foreach $mod_active_processors as $active_processor }
                        {if $active_processor@last}
                            {$active_processor.name}.
                        {else}
                            {$active_processor.name},
                        {/if}
                    {/foreach}</p>
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
                <p>{if $settings.general.enable_auto_withdrawal}
                        All withdrawal requests are processed instantly.
                    {else}
                        Withdrawal requests are processed manually and can take upto 48 hours.
                    {/if}</p>
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
                <p> Yes we do. Please check our <a href=".">affiliate page</a> to know more.
                </p>
            </div>
        </li>
        <li>
            <div class="question"><i class="la la-question-circle"></i> Is there any representative program ?
            </div>
            <div class="answer">
                <p> {if $settings.representative.rep_enabled}
                        Yes we do. Please check our
                        <a href=".">home page</a>
                        to know more.
                    {else}
                        No, we do not have any representative program.
                    {/if}
                </p>
            </div>
        </li>
        {if $settings.representative.rep_enabled}
            <li>
                <div class="question"><i class="la la-question-circle"></i> How to apply for a representative ?
                </div>
                <div class="answer">
                    <p> Please go <a href="representatives">here</a> and click on "Apply for represntative" or click
                        <a href="apply_representative">here</a> to go directly.
                    </p>
                </div>
            </li>
        {/if}
        <li>
            <div class="question"><i class="la la-question-circle"></i> I want to promote {$domain}. Where can i find the banners?
            </div>
            <div class="answer">
                <p> Please login to member panel and go to <a href="banners">Banners</a> page. Or Check link in marketing material page.
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

{include file="footer.tpl"}

