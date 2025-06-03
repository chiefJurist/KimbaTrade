<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/kimba_trades.png') }}" type="image/png">
    <title>Kimba Trade</title>
    @vite('resources/css/app.css')
</head>
<script>
    //For Showing the small nav
    document.addEventListener("DOMContentLoaded", function () {
    const openBtn = document.getElementById("openMenu");
    const closeBtn = document.getElementById("closeMenu");
    const mobileNav = document.getElementById("mobileNav");

    openBtn.addEventListener("click", () => {
        // Show and slide in
        mobileNav.classList.remove("translate-x-full");
        mobileNav.classList.add("translate-x-0");
    });

    closeBtn.addEventListener("click", () => {
        // Slide out to the right
        mobileNav.classList.remove("translate-x-0");
        mobileNav.classList.add("translate-x-full");
    });
});

    //For showing the sublinks of the small nav
     document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.toggle-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.classList.toggle('hidden');
            });
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
                <div class="btn hover:bg-blue-600 button">Login</div>
                <div class="btn bg-blue-600 hover:bg-gray-900 button">Sign up</div>
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
        <div class="big-nav-gen-con">
            <div class="big-nav-link-con button">
                <a href="">HOME</a>
            </div>
            <div class="big-nav-link-con button">
                <a href="">ABOUT US</a>
            </div>
            <div class="big-nav-link-con button relative group">
                <div class="big-nav-sublink-heading">MARKET</div>
                <div class="big-nav-sublink-con big-nav-transition">
                    <a href=""><div class="big-nav-sublink">Forex</div></a>
                    <a href=""><div class="big-nav-sublink">Cryptos</div></a>
                    <a href=""><div class="big-nav-sublink">Shares</div></a>
                    <a href=""><div class="big-nav-sublink">Indices</div></a>
                    <a href=""><div class="big-nav-sublink">Marijuana</div></a>
                    <a href=""><div class="big-nav-sublink">Energies</div></a>
                </div>
            </div>
            <div class="big-nav-link-con button relative group">
                <div class="big-nav-sublink-heading">TRADING</div>
                <div class="big-nav-sublink-con big-nav-transition">
                    <a href=""><div class="big-nav-sublink">Platform</div></a>
                    <a href=""><div class="big-nav-sublink">Swaps</div></a>
                    <a href=""><div class="big-nav-sublink">Spread and Commissions</div></a>
                    <a href=""><div class="big-nav-sublink">Trading Specifications</div></a>
                    <a href=""><div class="big-nav-sublink">Copytrading</div></a>
                </div>
            </div>
            <div class="big-nav-link-con button group relative">
                <div class="big-nav-sublink-heading">COMPANY</div>
                <div class="big-nav-sublink-con big-nav-transition">
                    <a href=""><div class="big-nav-sublink">Why Us</div></a>
                    <a href=""><div class="big-nav-sublink">Contact Us</div></a>
                </div>
            </div>
        </div>

        {{-- navigation for smaller screens --}}
        <div id="mobileNav" class="small-screen-nav-backdrop z-40 transform translate-x-full transition-transform duration-300 ease-in-out">
            <div  id="sideNav" class="small-screen-nav-con">
                <div id="closeMenu" class="flex justify-end pt-5 pb-20">
                    <span class="icon-[material-symbols--cancel-outline-rounded] external-icon"></span>
                </div>
                <div>
                    <div class="small-nav-link">
                        <a href="">Home</a>
                    </div>
                    <div class="small-nav-link">
                        <a href="">About Us</a>
                    </div>
                    <div class="small-nav-link toggle-header">Markets</div>
                    <div class="toggle-content hidden">
                        <div class="small-nav-sublink"><a href="">Forex</a></div>
                        <div class="small-nav-sublink"><a href="">Cryptos</a></div>
                        <div class="small-nav-sublink"><a href="">Shares</a></div>
                        <div class="small-nav-sublink"><a href="">Indices</a></div>
                        <div class="small-nav-sublink"><a href="">Marijuana</a></div>
                        <div class="small-nav-sublink"><a href="">Energies</a></div>
                    </div>
                    <div class="small-nav-link toggle-header">Trading</div>
                    <div class="toggle-content hidden">
                        <div class="small-nav-sublink"><a href="">Platform</a></div>
                        <div class="small-nav-sublink"><a href="">Swaps</a></div>
                        <div class="small-nav-sublink"><a href="">Spreads and Commisions</a></div>
                        <div class="small-nav-sublink"><a href="">Trading Specifications</a></div>
                        <div class="small-nav-sublink"><a href="">Copy Trading</a></div>
                    </div>
                    <div class="small-nav-link toggle-header">Company</div>
                    <div class="toggle-content hidden">
                        <div class="small-nav-sublink"><a href="">Why us</a></div>
                        <div class="small-nav-sublink"><a href="">Contact us</a></div>
                    </div>
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
                <div class="btn bg-blue-600 mt-8 hover:bg-gray-900 button">Open an Account</div>
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
                <div class="mt-6 md:mt-12 short-white-btn button">Login</div>
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
                        <div class="fourth-div-reg-btn button">Start Trade</div>
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

        {{--fifth div --}}
        <div class="general-div-containtainer p-10 bg-black flex justify-center">
            <div class="divide-y divide-gray-200 md:divide-x md:divide-y-0 md:flex">
                <div class="p-10">
                    <div class="div-headings text-center text-gray-100">270,000+</div>
                    <div class="div-texts text-center text-gray-100">Daily trades</div>
                </div>
                <div class="p-10">
                    <div class="div-headings text-center text-gray-100">450,000+</div>
                    <div class="div-texts text-center text-gray-100">Clients</div>
                </div>
                <div class="p-10">
                    <div class="div-headings text-center text-gray-100">20 billion+</div>
                    <div class="div-texts text-center text-gray-100">USD daily trade volume</div>
                </div>
                <div class="p-10">
                    <div class="div-headings text-center text-gray-100">95 billion+</div>
                    <div class="div-texts text-center text-gray-100">USD assets under management</div>
                </div>
            </div>
        </div>

        {{--sixth div--}}
        <div class="general-div-container">
            <div class="div-headings text-center">Switch to Fundflextrades</div>
            <div class="div-texts text-center text-gray-500 md:px-44">
                At Fundflextrades we work hard to enhance your trading experience. As a global, 5 star rated broker, our client’s satisfaction is in the center of our focus.
            </div>
            <div class="py-10 md:grid grid-cols-3 gap-4">
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[vaadin--tabs] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">2100+ instruments</div>
                    <div class="sixth-div-mini-text">Wide range of global markets, including Forex, Indices, Commodities, ETFs and more.</div>
                </div>
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[uil--shield-check] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">Safe & Secure</div>
                    <div class="sixth-div-mini-text">Fundflextrades is regulated by the world's biggest supervision authorities, including the Financial Conduct Authority.</div>
                </div>
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[uil--book-open] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">Comprehensive Education</div>
                    <div class="sixth-div-mini-text">Make use of our extensive video library and get to know more about trading.</div>
                </div>
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[hugeicons--ai-innovation-03] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">Innovative Platform</div>
                    <div class="sixth-div-mini-text">We're constantly improving our trading platform to make it the best on the market.</div>
                </div>
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[hugeicons--message-user-01] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">495,000+ customers</div>
                    <div class="sixth-div-mini-text">With years of activity in the financial markets, Fundflextrades has gained thousands of customers.</div>
                </div>
                <div class="py-6">
                    <div class="sixth-div-icon-div"><span class="icon-[hugeicons--user-star-02] sixth-div-icon"></span></div>
                    <div class="sixth-div-mini-header">Fast & highly qualified support</div>
                    <div class="sixth-div-mini-text">Our multilingual customer support team is ready to help you - 24h hours a day.</div>
                </div>
            </div>
        </div>
        
        {{--seventh div--}}
        <div style="background-image: url('{{ asset('img/in-wave-mockup-5.png') }}');" class="bg-cover">
            <div class="general-div-container backdrop-blur-xl md:flex justify-between items-center">
                <div class="flex justify-center">
                    <div class=" divide-y divide-gray-500">
                        <div class="md:flex items-center gap-4">
                            <div class="seventh-div-os-con">
                                <div>
                                    <span class="icon-[ion--logo-google-playstore] seventh-div-icon"></span>
                                </div>
                                <div>
                                    <div class="text-gray-500">Available for</div>
                                    <div class="seventh-div-sys">Android</div>
                                </div>
                            </div>
                            <div class="seventh-div-os-con">
                                <div>
                                    <span class="icon-[uil--apple] seventh-div-icon"></span>
                                </div>
                                <div>
                                    <div class="text-gray-500">Available for</div>
                                    <div class="seventh-div-sys">IOS</div>
                                </div>
                            </div>
                            <div class="seventh-div-os-con">
                                <div>
                                    <span class="icon-[uil--windows] seventh-div-icon"></span>
                                </div>
                                <div>
                                    <div class="text-gray-500">Available for</div>
                                    <div class="seventh-div-sys">Windows</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-2xl md:text-4xl text-gray-500 font-bold py-4">Trade From Any Device</div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('img/in-wave-mockup-5.png')}}" alt="">
                </div>
            </div>
        </div>

        {{--eight div--}}
        <div class="relative w-full h-screen overflow-hidden -mt-11">
            <img src="{{ asset('img/crypto-solar-system.png')}}" alt="" class="absolute w-full h-full object-cover">

            <!-- Optional overlay content -->
            <div class="general-div-container absolute top-0 left-0 w-full h-full  text-white z-10">
                <div class="my-16 font-light text-center">
                    ____________ DEPOSIT WITH CRYPTO ___________
                </div>
                <div class="text-3xl md:text-5xl font-bold text-center">We accept crypto deposits</div>
                <div class="font-bold text-center font-nunito py-10">Deposit, withdraw and hold your balance in Bitcoin, Ethereum</div>
                <div class="flex justify-center">
                    <div class="eight-div-btn button">Get Started</div>
                </div>
            </div>
            
            <!-- Optional dark overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-90 z-0"></div>
        </div>

        {{--ninth div--}}
        <div class="bg-white md:flex justify-between items-center gap-5 flex-row-reverse general-div-container">
            <div class="basis-1/2">
                <img src="{{asset('img/mt4-demo-screen.jpg')}}" alt="" class="">
            </div>
            <div class=" basis-1/2">
                <div class="flex md:block justify-center">
                    <img src="{{ asset('img/mt5-logo.png')}}" alt="">
                </div>
                <div class="text-3xl md:text-4xl font-bold text-center md:text-start py-3">Free Demo and Live MT4 Accounts</div>
                <div class="text-gray-500 text-center md:text-start py-5">
                    Instant market access and endless possibilities for trading, analysis and automation. Metaquotes 5 is an evolution of MT4 with additional features that supercharge your trading.
                </div>
                <div class="flex justify-center md:block">
                    <div class="ninth-div-btn button">Open an Account</div>
                </div>
            </div>
        </div>

        {{--tenth div--}}
        <div class="general-div-container">
            <div class="tenth-div-header">We Are Trusted</div>
            <div class="tenth-div-card-con">
                <div class="tenth-div-card">
                    <img src="{{asset('img/ico-rating.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">8.9</div>
                    </div>
                </div>
                <div class="tenth-div-card">
                    <img src="{{asset('img/coin-clarity.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">7.9</div>
                    </div>
                </div>
                <div class="tenth-div-card">
                    <img src="{{asset('img/ico-watchlist.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">8.0</div>
                    </div>
                </div>
                <div class="tenth-div-card">
                    <img src="{{asset('img/coin-market-alert.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">9.0</div>
                    </div>
                </div>
                <div class="tenth-div-card">
                    <img src="{{asset('img/ico-alert.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">7.4</div>
                    </div>
                </div>
                <div class="tenth-div-card">
                    <img src="{{asset('img/token-market.png')}}" alt="">
                    <div class="tenth-div-card-rate-con">
                        <div class="tenth-div-card-rate">8.7</div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-image: url('{{ asset('img/pexels-street.png') }}')" class="bg-cover bg-center min-h-screen">
            <div class="general-div-container  text-white backdrop-blur-xs">
                <div class=" bg-white rounded-lg p-4 md:p-10">
                    <div class="border-b border-gray-600">
                        <div class="text-2xl md:text-4xl font-bold text-gray-900 py-8">Trusted For More Than 7 Years</div>
                        <div class="text-gray-400 font-nunito text-sm md:text-base">
                            Fundflextrades is an online Forex and cryptocurrency STP broker providing CFD trading on hundreds of assets and optimal trading conditions within the award-winning MT4 platform. Fundflextrades offers deep liquidity, generous leverage up to 1:500, and some of the best spreads in the industry. As part of our commitment to our client’s satisfaction, we offer 24/7 live customer service, charge no deposit or withdrawal fees, and process withdrawals within 30-minutes or less. We feel that these, along with many other advantages, help to set us apart from the rest.
                        </div>
                        <div class="text-gray-700 text-2xl font-nunito py-8">Multi-award winner</div>
                    </div>
                    <div class="py-8 md:flex justify-around">
                        <div class="tenth-div-award-con">
                            <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                            <div class="basis-9/12">
                                <div class="tenth-div-award-head">Best CFD Broker</div>
                                <div class="tenth-div-award-text">TradeON Summit 2020</div>
                            </div>
                        </div>
                        <div class="tenth-div-award-con">
                            <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                            <div class="basis-9/12">
                                <div class="tenth-div-award-head">Best Trading Experience</div>
                                <div class="tenth-div-award-text">Jordan Forex EXPO 2015</div>
                            </div>
                        </div>
                        <div class="tenth-div-award-con">
                            <div><img src="{{asset('img/in-wave-award.svg')}}" alt=""></div>
                            <div class="basis-9/12">
                                <div class="tenth-div-award-head">Best Execution Broker</div>
                                <div class="tenth-div-award-text">Forex EXPO Dubai 2017</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-6 border-b border-gray-500 md: md:flex justify-between items-center bg-white">
            <div class="text-gray-400 font-semibold">As seen on</div>
            <div class="flex justify-between items-center gap-2 md:gap-6 basis-11/12 md:flex-wrap">
                <span class="tenth-div-sponsor-span">
                    <img src="{{asset('img/cnbc.svg')}}" alt="" class="tenth-div-sponsor-img">
                </span>
                <span class="tenth-div-sponsor-span">
                    <img src="{{asset('img/the-guardian.svg')}}" alt="" class="tenth-div-sponsor-img">
                </span>
                <span class="tenth-div-sponsor-span">
                    <img src="{{asset('img/bloomberg.svg')}}" alt="" class="tenth-div-sponsor-img">
                </span>
                <span class="tenth-div-sponsor-span">
                    <img src="{{asset('img/reuters.svg')}}" alt="" class="tenth-div-sponsor-img">
                </span>
                <span class="tenth-div-sponsor-span">
                    <img src="{{asset('img/market-watch.svg')}}" alt="" class="tenth-div-sponsor-img">
                </span>
            </div>
        </div>

        {{--eleventh div--}}
        <div class="general-div-container">
            <div class="text-3xl md:text-4xl font-bold text-center py-5">Trade With Confidence</div>
            <div class="divide-y divide-gray-400 md:divide-y-0 md:divide-x md:grid grid-cols-3 mt-6">
                <div class="p-6">
                    <div class="eleventh-div-icon-con">
                        <span class="icon-[uil--user-plus] eleventh-div-icon"></span>
                    </div>
                    <div class="eleventh-div-mini-header">Register</div>
                    <div class="eleventh-div-mini-text">
                        Fill in your personal details in our secure online application.
                    </div>
                </div>
                <div class="p-6">
                    <div class="eleventh-div-icon-con">
                        <span class="icon-[ion--wallet-outline] eleventh-div-icon"></span>
                    </div>
                    <div class="eleventh-div-mini-header">Deposit</div>
                    <div class="eleventh-div-mini-text">
                        Make a deposit via debit card, wire transfer or crypto.
                    </div>
                </div>
                <div class="p-6">
                    <div class="eleventh-div-icon-con">
                        <span class="icon-[ion--stats-chart-outline] eleventh-div-icon"></span>
                    </div>
                    <div class="eleventh-div-mini-header">Trading</div>
                    <div class="eleventh-div-mini-text">Once your approved, you can trade on desktop and mobile.</div>
                </div>
            </div>
            <div class="border border-gray-400 mt-10 p-8 rounded-lg md:flex justify-between items-center relative bg-white">
                <div class="absolute -top-2 left-5 bg-gray-300 rounded-full w-40 text-center text-sm font-bold">OPEN YOUR ACCOUNT</div>
                <div class="text-gray-500 pb-8 md:pb-0 font-nunito">Connect with over 450,000 investors in the world’s leading FX Broker</div>
                <div class="eleventh-div-btn button">Open Account</div>
            </div>
        </div>

        {{--twelfth div --}}
        <div class="general-div-container bg-gray-900 text-gray-400 font-nunito text-sm">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-5 py-10 border-b border-gray-300">
                <div>
                    <div class="twelfth-div-link-heading">MARKETS</div>
                    <div><a href="" class="twelfth-div-link">Forex</a></div>
                    <div><a href="" class="twelfth-div-link">Crypto</a></div>
                    <div><a href="" class="twelfth-div-link">Shares</a></div>
                    <div><a href="" class="twelfth-div-link">Indices</a></div>
                </div>
                <div>
                    <div class="twelfth-div-link-heading">TRADING</div>
                    <div><a href="" class="twelfth-div-link">Platform</a></div>
                    <div><a href="" class="twelfth-div-link">Pricing</a></div>
                    <div><a href="" class="twelfth-div-link">Copytrading</a></div>
                    <div><a href="" class="twelfth-div-link">Help Centre/FAQ</a></div>
                </div>
                <div>
                    <div class="twelfth-div-link-heading">COMPANY</div>
                    <div><a href="" class="twelfth-div-link">About Us</a></div>
                    <div><a href="" class="twelfth-div-link">Why Us</a></div>
                    <div><a href="" class="twelfth-div-link">Contact Us</a></div>
                </div>
                <div>
                    <div class="twelfth-div-link-heading">ACCOUNT</div>
                    <div><a href="" class="twelfth-div-link">Login</a></div>
                    <div><a href="" class="twelfth-div-link">SignUp</a></div>
                </div>
                <div>
                    <div class="twelfth-div-link-heading">LEGAL</div>
                    <div><a href="" class="twelfth-div-link">Privacy Policy</a></div>
                    <div><a href="" class="twelfth-div-link">Terms of Service</a></div>
                </div>
            </div>
            <div class="mt-10">
                <div class="twelfth-div-par">
                    This website can be accessed worldwide however the information on the website is related to Fundflextrades A/S and is not specific to any entity of Fundflextrades. All clients will directly engage with Fundflextrades A/S and all client agreements will be entered into with Fundflextrades A/S .

                </div>
                <div class="twelfth-div-par">
                    Forex and CFDs are leveraged products and can result in losses that exceed your deposits. Please ensure you fully understand all of the risks. Contracts for Difference ("CFDs") are leveraged products and carry a significant risk of loss to your capital, as prices may move rapidly against you and you may be required to make further payments to keep any trades open. These products are not suitable for all clients, therefore please ensure you fully understand the risks and seek independent advice.

                </div>
                <div class="twelfth-div-par">
                    Apple and the Apple logo are trademarks of Apple Inc, registered in the US and other countries and regions. App Store is a service mark of Apple Inc. Google Play and the Google Play logo are trademarks of Google LLC.
                </div>
                <div class="twelfth-div-par">Copyright © 2022 All rights reserved</div>
            </div>
        </div>
    </div>
</body>
</html>