{if $cur_page!='home'}
    {if $is_member_page}
        </div>
        </div>
        </div>
        <div class="content-box-1">

            <div class="title text-left">


                <div class="heading mb-2 py-3 text-xl">
                    <div class="row">
                        <div class="col-sm-7">
                            ~ Your <span
                                    class="py-2 px-4 bg-pc-normal font-weight-bold text-white mt-n3">Referral <span
                                        class="text-sc-lighter">Link</span></span> Information
                        </div>
                        <div class="col-sm-5">
                            <ul class="list-inline text-lg">
                                <li class="list-inline-item">{$lang.commissions}: <span
                                            class="text-sc-normal">{$curr_symbol}{$user.funds.ref_comm}</span></li>
                                <li class="list-inline-item">{$lang.your_upline}: {if $user.upline}
                                        {$user.upline_name}
                                    {else}
                                        --
                                    {/if}</li>
                            </ul>
                        </div>
                    </div>


                </div>

            </div>
            <ul class="list-group">

                <li class="list-group-item text-center py-4">
                    <span class="mb-2 text-xl d-block mb-3">{$user.reflink}</span>
                    <span class="d-block text-muted">Share the link above with your friends to earn referral commission.</span>
                    <div class="text-center mt-4">
                        <a class="btn btn-primary mr-3" href="referral">{$lang.referrals}</a> <a class="btn btn-primary"
                                                                                                 href="referral">{$lang.banners}</a>
                    </div>
                </li>
            </ul>


        </div>
    {/if}
    </div>
    </div>
    </section>
{/if}
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="footer-info">
                    <div class="footer-logo">
                        <img src="images/logo.png"/>
                    </div>
                    <div class="about-us">
                        <p>We are Amperium Ltd, we take what nature gives us by default and convert that into energy.
                            Our main activities areas includes assembly of renewable energy power plants and servicing them. </p>
                    </div>
                    <div class="company-info">
                        <div class="title"><span>Amperium</span> Limited</div>
                        Reg. No. 12311090 | Reg. Address: K P M G Llp, 15, Canada Square, London,UK, E14 5GL
                    </div>

                </div>
            </div>
            <div class="col-sm-8 pt-6">
                <div class="footer-links">
                    <div class="heading">
                        Quick Menu
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href=".">What is Amperium</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="faq">FAQs</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="contact">Contact us</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="public_venture">Public Venture</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-links">
                    <div class="heading">
                        Community Members
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="bounty">Bounty bonus program</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="affiliate">Affiliate Partnership</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="statistics">Statistics</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="marketing">Marketing material</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Amperium Forum</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-links">
                    <div class="heading">
                        Community Channels
                    </div>
                    <p>Find us and our community in the following channels</p>

                    <ul class="list-inline">
                        <li class="list-inline-item"><a href=""><i class="la la-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/amperium.tech"><i class="la la-facebook"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="la la-instagram"></i></a></li>
                        <li class="list-inline-item"><a href=""><i class="la la-reddit"></i></a></li>
                    </ul>

                </div>

                <div class="copyright">
                    <div class="row">
                        <div class="col-sm-12 text-left">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="cookies_policy">Cookies Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="refund_policy">Refund Policy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="disclaimer">Disclaimer</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="terms">Terms & Conditions</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="privacy_policy">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='https://cdn3.devexpress.com/jslib/19.2.5/js/dx.all.js'></script>
<script src="js/script.js"></script>
<script src="js/lottie.min.js"></script>
<script src="js/calc.js"></script>
<script type="text/javascript">
    $(".overlay-open").on("click", function (e) {
        e.preventDefault();
        $("section.overlay-section").addClass('open');
    });
    $(".overlay-close").on("click", function (e) {
        e.preventDefault();
        $("section.overlay-section").removeClass('open');
    });
    $(".what-is-amperium").on("click", function (e) {
        //e.preventDefault();
        $("section.overlay-section").removeClass('open');
    });

    $(".faq-accordion .active > .answer").slideDown(400, "linear");
    $(".faq-accordion li").on('click', function () {

        if (!$(this).hasClass('active')) {
            $(".answer").slideUp(400, "linear");
            $(".faq-accordion").find('.active').removeClass("active");
            $(this).find('.answer').slideDown(400, "linear");
            $(this).addClass("active");
        } else {
            $(this).find('.answer').slideUp(400, "linear");
            $(this).removeClass("active");
        }

    });

    {if $cur_page=="home"}
    lottie.loadAnimation({
        container: document.getElementById('lottie'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'data.json' // the path to the animation json ,
    });

    {else}
    lottie.loadAnimation({
        container: document.getElementById('lottie'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: 'data.json' // the path to the animation json ,
    });
    {/if}

    lottie.loadAnimation({
        container: document.getElementById('hamburger'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        viewBoxOnly:false,
        viewBoxSize:false,
        className:'hamburger-icon',
        path: 'hamburger.json' // the path to the animation json ,
    });

    lottie.loadAnimation({
        container: document.getElementById('affiliate-img'), // the dom element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        viewBoxOnly:false,
        viewBoxSize:false,
        className:'hamburger-icon',
        path: 'affiliate.json' // the path to the animation json ,
    });


</script>

</body>
</html>