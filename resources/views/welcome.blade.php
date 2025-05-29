<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/kimba_trades.png') }}" type="image/png">
    <title>Kimba Trade</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        {{-- Header For Screens Greater Than sm --}}
        <div class="px-20 bg-gray-900 hidden sm:flex justify-between items-center py-3">
            <div class="flex items-center text-gray-100 text-xs">
                <img src="{{ asset('img/kimba_trade.png')}}" alt="Kimba Logo" class=" w-16">
                <span>Kimba Trade</span>
            </div>
            <div class="flex justify-between items-center gap-6 flex-wrap">
                <div class="btn">Log In</div>
                <div class="btn bg-blue-600">Sign up</div>
            </div>
        </div>

        {{-- Header For Screens Less Than sm: --}}
        <div>
            <div>
                <img src="{{ asset('img/kimba_trade.png')}}" alt="Kimba Logo" class=" w-16">
            </div>
            <div>
                <span class="icon-[material-symbols--menu-rounded]"></span>
            </div>
        </div>

        {{-- Second Div --}}
        <div class="px-14 flex flex-wrap py-3 gap-12 font-semibold">
            <div>HOME</div>
            <div>ABOUT US</div>
            <div>MARKETS</div>
            <div>TRADING</div>
            <div>COMPANY</div>
        </div>

        {{-- Third div --}}
        <div></div>

        {{-- Fourth div --}}
        <div w>
            <div class="w-2/12 flex justify-center">
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