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
        <div id="mobileNav" class="hidden small-screen-nav-backdrop">
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
        

        {{-- Third div --}}
        <div></div>

        {{-- Fourth div --}}
        <div>
            <div class="">
                <div class=" ">
                    <div>Trade With Low Commissions and Tight Spreads</div>
                    <div>
                        With Fundflextrades you get a transparent pricing structure and a secure and regulated trading environment. As an active trader you can also qualify for lower fees and extra benefits.
                    </div>
                    <div class=" p-2 border border-blue-600 rounded-sm text-blue-600 w-36 text-center cursor-pointer my-1">Login</div>
                </div>
                <div><img src="{{ asset('img/frontpage-pricing-d.webp')}}" alt=""></div>
            </div>
        </div>
    </div>
</body>
</html>