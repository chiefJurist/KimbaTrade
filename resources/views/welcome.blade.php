<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/kimba_trades.png') }}" type="image/png">
    <title>Kimba Trade</title>
    @vite('resources/css/app.css')
</head>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const openBtn = document.getElementById("openMenu");
        const closeBtn = document.getElementById("closeMenu");
        const mobileNav = document.getElementById("mobileNav");

        openBtn.addEventListener("click", () => {
            mobileNav.classList.remove("hidden");
        });

        closeBtn.addEventListener("click", () => {
            mobileNav.classList.add("hidden");
        });
    });
</script>
<body>
    <div>
        {{-- Header For Screens Greater Than md --}}
        <div class="hidden md:flex px-20 welcome-header">
            <div class="logo-container">
                <img src="{{ asset('img/kimba_trade.png')}}" alt="Kimba Logo" class=" w-16">
                <span>Kimba Trade</span>
            </div>
            <div class="flex justify-between items-center gap-6 flex-wrap">
                <div class="btn">Log In</div>
                <div class="btn bg-blue-600">Sign up</div>
            </div>
        </div>

        {{-- Header For Screens Less Than md: --}}
        <div class="md:hidden flex px-6 welcome-header">
            <div class="logo-container">
                <img src="{{ asset('img/kimba_trade.png')}}" alt="Kimba Logo" class=" w-16">
                <span>KimbaTrade</span>
            </div>
            <div id="openMenu">
                <span class="icon-[material-symbols--menu-rounded] external-icon"></span>
            </div>
        </div>

        {{-- navigation for bigger screens --}}
        <div class="hidden md:flex px-20 py-3 flex-wrap gap-8 font-semibold text-sm">
            <div>HOME</div>
            <div>ABOUT US</div>
            <div>MARKETS</div>
            <div>TRADING</div>
            <div>COMPANY</div>
        </div>

        {{-- navigation for smaller screens --}}
        <div id="mobileNav" class="hidden small-screen-nav-backdrop z-40">
            <div class="small-screen-nav-con">
                <div id="closeMenu" class="flex justify-end pb-32">
                    <span class="icon-[material-symbols--cancel-outline-rounded] external-icon"></span>
                </div>
                <div>
                    <div class="small-nav-link">Home</div>
                    <div class="small-nav-link">About Us</div>
                    <div class="small-nav-link">Markets</div>
                    <div class="small-nav-link">Trading</div>
                    <div class="small-nav-link">Company</div>
                </div>
                <div>
                    <div class="btn mt-4">Log In</div>
                    <div class="btn bg-blue-600 mt-4">Sign up</div>
                </div>
            </div>
        </div>
        

        {{-- first div --}}
        <div class="relative w-full h-screen overflow-hidden">
            <video autoplay muted loop playsinline class="absolute w-full h-full object-cover">
                <source src="{{ asset('img/video1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Optional overlay content -->
            <div class="general-div-container first-div-container">
                <div class="div-headings">Trade Shares and Forex with Financial Thinking</div>
                <div class="div-texts">
                    Access 40,000+ instruments – across asset classes – to trade, hedge and invest from a single account.
                </div>
                <div class="btn bg-blue-600 mt-8">Open an Account</div>
            </div>

            <!-- Optional dark overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-90 z-0"></div>
        </div>


        {{-- second div --}}
        <div class="general-div-container second-div-container">
            <div class="md:pr-36">
                <div class="div-headings">Trade With Low Commissions and Tight Spreads</div>
                <div class="div-texts text-gray-500">
                    With Fundflextrades you get a transparent pricing structure and a secure and regulated trading environment. As an active trader you can also qualify for lower fees and extra benefits.
                </div>
                <div class="mt-6 md:mt-12 short-white-btn">Login</div>
            </div>
            <div class=" pt-10 md:pt-0">
                <img src="{{ asset('img/frontpage-pricing-d.webp')}}" alt="" class="w-xl md:w-5xl">
            </div>
        </div>

        {{-- third div --}}
        <div class="general-div-container">
            <div class="div-headings">Trade over 2100 global markets</div>
        </div>

        {{-- fourth div --}}
        <div class="general-div-container">
            <div class="div-headings">Industry-leading prices</div>
            <div class="div-texts text-gray-500 md:pr-90">
                Get ultra-competitive spreads and commissions across all asset classes. Receive even better rates as your volume increases.
            </div>
            <div class="py-5 md:grid grid-cols-4 gap-7">
                <div class="fourth-div-card-container">
                    <div class="fourth-div-card-line-one">FX</div>
                    <div class="fourth-div-card-line-two">Spread as low as</div>
                    <div class="fourth-div-card-line-three">0.2</div>
                    <div class="fourth-div-card-line-four">pip</div>
                    <div class="fourth-div-card-line-five">
                        Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.
                    </div>
                </div>
                <div class="fourth-div-card-container">
                    <div class="fourth-div-card-line-one">Crypto</div>
                    <div class="fourth-div-card-line-two">Trade from</div>
                    <div class="fourth-div-card-line-three">0.4</div>
                    <div class="fourth-div-card-line-four">on $500</div>
                    <div class="fourth-div-card-line-five">
                        Trade and invest confidently in top performing Cryptocurrencies with our timely Trading signals that ensure your profitability from day one.
                    </div>
                </div>
                <div class="fourth-div-card-container">
                    <div class="fourth-div-card-line-one">Stocks</div>
                    <div class="fourth-div-card-line-two">Commissions from</div>
                    <div class="fourth-div-card-line-three">$3</div>
                    <div class="fourth-div-card-line-four">on US Stocks</div>
                    <div class="fourth-div-card-line-five">
                        Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.
                    </div>
                </div>
                <div class="fourth-div-card-container">
                    <div class="fourth-div-card-line-one">Real Estate</div>
                    <div class="fourth-div-card-line-two">Procure from as low as</div>
                    <div class="fourth-div-card-line-three">$100</div>
                    <div class="fourth-div-card-line-four">per slot</div>
                    <div class="fourth-div-card-line-five">
                        Simplified Real Estate investment for relatively small amounts through our crowdfunding model.
                    </div>
                </div>
            </div>
            <div class="flex justify-center my-5">
                <div class="fourth-div-reg-con">
                    <div class="flex justify-center">
                        <div class="fourth-div-reg-btn">Start Trade</div>
                    </div>
                    <div class="fourth-div-reg-text">With the little you have you Trend. Join now!</div>
                </div>
            </div>
            <div class="flex justify-center">
                <div class="my-5 md:flex divide-y divide-gray-300 md:divide-x md:divide-y-0">
                    <div class="fourth-div-rec-con">
                        <div class="fourth-div-icon-con">
                            <span class="icon-[streamline--customer-support-1] fourth-div-icon"></span>
                        </div>
                        <div class="fourth-div-rec-text">AWARD WINNING SUPPORT</div>
                    </div>
                    <div class="fourth-div-rec-con">
                        <div class="fourth-div-icon-con">
                            <span class="icon-[ph--bank-bold] fourth-div-icon"></span>
                        </div>
                        <div class="fourth-div-rec-text">REGULATED BY THE GSE,USA</div>
                        <div></div>
                    </div>
                    <div class="fourth-div-rec-con">
                        <div class="fourth-div-icon-con">
                            <span class="icon-[subway--refresh-time] fourth-div-icon"></span>
                        </div>
                        <div class="fourth-div-rec-text">30 YEARS EXPERIENCE</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>