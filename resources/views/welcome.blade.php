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
            <div class="first-div-container">
                <div class="div-headings">Trade Shares and Forex with Financial Thinking</div>
                <div class="mt-8 text-sm">
                    Access 40,000+ instruments – across asset classes – to trade, hedge and invest from a single account.
                </div>
                <div class="btn bg-blue-600 mt-8">Open an Account</div>
            </div>

            <!-- Optional dark overlay -->
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-90 z-0"></div>
        </div>


        {{-- second div --}}
        <div class="second-div-container">
            <div class="md:pr-36">
                <div class="div-headings">Trade With Low Commissions and Tight Spreads</div>
                <div class=" mt-6 md:mt-12 text-gray-400">
                    With Fundflextrades you get a transparent pricing structure and a secure and regulated trading environment. As an active trader you can also qualify for lower fees and extra benefits.
                </div>
                <div class="mt-6 md:mt-12 short-white-btn">Login</div>
            </div>
            <div class=" pt-10 md:pt-0">
                <img src="{{ asset('img/frontpage-pricing-d.webp')}}" alt="" class="w-2xl md:w-5xl">
            </div>
        </div>
    </div>
</body>
</html>