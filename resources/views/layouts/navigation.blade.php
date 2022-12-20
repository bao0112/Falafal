<header x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }" @cart-change.window="cartItemsCount = $event.detail.count" class="flex justify-between bg-neutral-800 shadow-md text-white">
    <div>
        <a href="{{ route('home') }}" class="absolute block py-navbar-item ml-[64px] top-[-6px]">
            <svg width="109" height="32" viewBox="0 0 109 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M30.8068 28.2557C30.1155 28.2557 29.5095 28.1255 28.9886 27.8651C28.4678 27.5999 28.0819 27.2188 27.831 26.7216C27.58 26.2197 27.5114 25.6136 27.625 24.9034C27.7339 24.2784 27.9446 23.7718 28.2571 23.3835C28.5696 22.9905 28.9484 22.6828 29.3935 22.4602C29.8433 22.233 30.3262 22.0649 30.8423 21.956C31.3632 21.8423 31.8816 21.7547 32.3977 21.6932C33.0701 21.608 33.617 21.5417 34.0384 21.4943C34.4598 21.447 34.777 21.3688 34.9901 21.2599C35.2031 21.151 35.3333 20.964 35.3807 20.6989V20.642C35.4943 19.946 35.402 19.4039 35.1037 19.0156C34.8054 18.6226 34.2727 18.4261 33.5057 18.4261C32.7102 18.4261 32.045 18.6013 31.5099 18.9517C30.9749 19.3021 30.5795 19.6761 30.3239 20.0739L28.8466 19.5057C29.2348 18.8428 29.6989 18.3267 30.2386 17.9574C30.7784 17.5833 31.3442 17.3229 31.9361 17.1761C32.5279 17.0246 33.0985 16.9489 33.6477 16.9489C33.9981 16.9489 34.3935 16.9915 34.8338 17.0767C35.2741 17.1572 35.6861 17.3253 36.0696 17.581C36.4579 17.8366 36.7491 18.2225 36.9432 18.7386C37.142 19.2547 37.1705 19.946 37.0284 20.8125L35.8352 28H34.1591L34.4148 26.5227H34.3295C34.178 26.7595 33.946 27.0128 33.6335 27.2827C33.3258 27.5526 32.9351 27.7822 32.4616 27.9716C31.9929 28.161 31.4413 28.2557 30.8068 28.2557ZM31.2898 26.75C31.9527 26.75 32.5327 26.6198 33.0298 26.3594C33.5317 26.099 33.9342 25.7628 34.2372 25.3509C34.545 24.9389 34.7367 24.5057 34.8125 24.0511L35.0682 22.517C34.983 22.6023 34.8149 22.6804 34.5639 22.7514C34.313 22.8177 34.0289 22.8769 33.7116 22.929C33.3991 22.9763 33.0938 23.0189 32.7955 23.0568C32.5019 23.09 32.2652 23.1184 32.0852 23.142C31.6402 23.1989 31.2164 23.2912 30.8139 23.419C30.4162 23.5421 30.08 23.7292 29.8054 23.9801C29.5355 24.2263 29.3674 24.5625 29.3011 24.9886C29.2017 25.571 29.3414 26.0114 29.7202 26.3097C30.099 26.6032 30.6222 26.75 31.2898 26.75ZM44.9854 13.4545L42.5707 28H40.8945L43.3093 13.4545H44.9854ZM50.8224 28.2557C50.1312 28.2557 49.5251 28.1255 49.0043 27.8651C48.4834 27.5999 48.0975 27.2188 47.8466 26.7216C47.5956 26.2197 47.527 25.6136 47.6406 24.9034C47.7495 24.2784 47.9602 23.7718 48.2727 23.3835C48.5852 22.9905 48.964 22.6828 49.4091 22.4602C49.8589 22.233 50.3419 22.0649 50.858 21.956C51.3788 21.8423 51.8973 21.7547 52.4134 21.6932C53.0857 21.608 53.6326 21.5417 54.054 21.4943C54.4754 21.447 54.7926 21.3688 55.0057 21.2599C55.2188 21.151 55.349 20.964 55.3963 20.6989V20.642C55.5099 19.946 55.4176 19.4039 55.1193 19.0156C54.821 18.6226 54.2884 18.4261 53.5213 18.4261C52.7259 18.4261 52.0606 18.6013 51.5256 18.9517C50.9905 19.3021 50.5952 19.6761 50.3395 20.0739L48.8622 19.5057C49.2505 18.8428 49.7145 18.3267 50.2543 17.9574C50.794 17.5833 51.3598 17.3229 51.9517 17.1761C52.5436 17.0246 53.1141 16.9489 53.6634 16.9489C54.0137 16.9489 54.4091 16.9915 54.8494 17.0767C55.2898 17.1572 55.7017 17.3253 56.0852 17.581C56.4735 17.8366 56.7647 18.2225 56.9588 18.7386C57.1577 19.2547 57.1861 19.946 57.044 20.8125L55.8509 28H54.1747L54.4304 26.5227H54.3452C54.1937 26.7595 53.9616 27.0128 53.6491 27.2827C53.3414 27.5526 52.9508 27.7822 52.4773 27.9716C52.0085 28.161 51.4569 28.2557 50.8224 28.2557ZM51.3054 26.75C51.9683 26.75 52.5483 26.6198 53.0455 26.3594C53.5473 26.099 53.9498 25.7628 54.2528 25.3509C54.5606 24.9389 54.7524 24.5057 54.8281 24.0511L55.0838 22.517C54.9986 22.6023 54.8305 22.6804 54.5795 22.7514C54.3286 22.8177 54.0445 22.8769 53.7273 22.929C53.4148 22.9763 53.1094 23.0189 52.8111 23.0568C52.5175 23.09 52.2808 23.1184 52.1009 23.142C51.6558 23.1989 51.232 23.2912 50.8295 23.419C50.4318 23.5421 50.0956 23.7292 49.821 23.9801C49.5511 24.2263 49.383 24.5625 49.3168 24.9886C49.2173 25.571 49.357 26.0114 49.7358 26.3097C50.1146 26.6032 50.6378 26.75 51.3054 26.75ZM67.5863 17.0909L67.359 18.5114H61.4783L61.7056 17.0909H67.5863ZM61.6488 28L63.7227 15.5852C63.8174 14.9602 64.0446 14.4394 64.4045 14.0227C64.7691 13.6061 65.2023 13.2936 65.7042 13.0852C66.2108 12.8769 66.7246 12.7727 67.2454 12.7727C67.6573 12.7727 67.9864 12.8059 68.2326 12.8722C68.4835 12.9384 68.6658 13 68.7795 13.0568L68.0692 14.5057C67.984 14.4773 67.8704 14.4418 67.7283 14.3991C67.591 14.3565 67.4016 14.3352 67.1602 14.3352C66.6062 14.3352 66.1848 14.4749 65.896 14.7543C65.6071 15.0336 65.413 15.4432 65.3136 15.983L63.3249 28H61.6488ZM72.9865 28.2557C72.2952 28.2557 71.6892 28.1255 71.1683 27.8651C70.6475 27.5999 70.2616 27.2188 70.0107 26.7216C69.7597 26.2197 69.6911 25.6136 69.8047 24.9034C69.9136 24.2784 70.1243 23.7718 70.4368 23.3835C70.7493 22.9905 71.1281 22.6828 71.5732 22.4602C72.023 22.233 72.5059 22.0649 73.022 21.956C73.5429 21.8423 74.0613 21.7547 74.5774 21.6932C75.2498 21.608 75.7966 21.5417 76.218 21.4943C76.6394 21.447 76.9567 21.3688 77.1697 21.2599C77.3828 21.151 77.513 20.964 77.5604 20.6989V20.642C77.674 19.946 77.5817 19.4039 77.2834 19.0156C76.9851 18.6226 76.4524 18.4261 75.6854 18.4261C74.8899 18.4261 74.2247 18.6013 73.6896 18.9517C73.1546 19.3021 72.7592 19.6761 72.5036 20.0739L71.0263 19.5057C71.4145 18.8428 71.8786 18.3267 72.4183 17.9574C72.9581 17.5833 73.5239 17.3229 74.1158 17.1761C74.7076 17.0246 75.2782 16.9489 75.8274 16.9489C76.1778 16.9489 76.5732 16.9915 77.0135 17.0767C77.4538 17.1572 77.8658 17.3253 78.2493 17.581C78.6375 17.8366 78.9287 18.2225 79.1229 18.7386C79.3217 19.2547 79.3501 19.946 79.2081 20.8125L78.0149 28H76.3388L76.5945 26.5227H76.5092C76.3577 26.7595 76.1257 27.0128 75.8132 27.2827C75.5054 27.5526 75.1148 27.7822 74.6413 27.9716C74.1726 28.161 73.621 28.2557 72.9865 28.2557ZM73.4695 26.75C74.1323 26.75 74.7124 26.6198 75.2095 26.3594C75.7114 26.099 76.1139 25.7628 76.4169 25.3509C76.7247 24.9389 76.9164 24.5057 76.9922 24.0511L77.2479 22.517C77.1626 22.6023 76.9946 22.6804 76.7436 22.7514C76.4927 22.8177 76.2086 22.8769 75.8913 22.929C75.5788 22.9763 75.2734 23.0189 74.9751 23.0568C74.6816 23.09 74.4448 23.1184 74.2649 23.142C73.8198 23.1989 73.3961 23.2912 72.9936 23.419C72.5959 23.5421 72.2597 23.7292 71.9851 23.9801C71.7152 24.2263 71.5471 24.5625 71.4808 24.9886C71.3814 25.571 71.5211 26.0114 71.8999 26.3097C72.2786 26.6032 72.8018 26.75 73.4695 26.75ZM87.1651 13.4545L84.7504 28H83.0742L85.489 13.4545H87.1651Z" fill="white" />
                <path d="M15.1709 13.4699L20.5025 11.5311L25.4943 13.2929L20.5294 13.0009L20.4031 12.9934L20.2886 13.0469L12.7885 16.5469L12.6307 16.6206L12.5528 16.7764L9.55279 22.7764L8.98337 23.9152L10.1756 23.4682L12.8989 22.4469L4.69393 37.1474L8.46904 26.9232L8.82971 25.9464L7.84188 26.2757L4.46271 27.4021L13.4489 8.72022L14.4472 6.7236L15.1509 5.31621L13.7639 6.05925L4.22131 11.1714L17.1694 0.508217L27.8273 0.992667L31.4348 3.61631L28.0894 3.00806L28.0175 2.99497L27.9448 3.00305L18.9448 4.00305L18.6667 4.03395L18.5476 4.28709L14.5476 12.7871L14.0313 13.8843L15.1709 13.4699Z" stroke="white" />
                <path d="M8.93959 12.719L4.70737 13.449L3.30747 13.6904L6.38969 12.0468L10.6589 9.77022L8.93959 12.719Z" stroke="white" />
            </svg>
        </a>
    </div>

    <!--/ Responsive Menu -->
    <nav class="hidden md:block select-none">
        <ul class="grid grid-flow-col items-center mr-[48px]">
            <li>
                <a href="{{ route('cart.index') }}" class="relative inline-flex items-center py-navbar-item px-navbar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <small x-show="cartItemsCount" x-transition x-cloak x-text="cartItemsCount" class="absolute z-[100] top-[16px] right-[8px] py-[0.2px] px-[6px] rounded-full bg-red-500"></small>
                </a>
            </li>
            @if (!Auth::guest())
            <li x-data="{open: false}" class="relative">
                <a @click="open = !open" class="cursor-pointer flex items-center py-navbar-item px-navbar-item pr-5 ">
                    <span class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                </a>
                <ul @click.outside="open = false" x-show="open" x-transition x-cloak class="absolute z-10 right-[16px] top-[52px] bg-white text-black w-[140px] rounded-md">
                    <li>
                        <a href="{{ route('profile') }}" class="flex px-3 py-2 hover:rounded-t-md hover:bg-blue-600 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('order.index') }}" class="flex px-3 py-2 hover:bg-blue-600 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                            Orders
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="flex px-3 py-2 hover:rounded-b-md hover:bg-blue-600 hover:text-white" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
            @else
            <li x-data="{open: false}" class="relative">
                <a @click="open = !open" class="cursor-pointer flex items-center py-navbar-item px-navbar-item pr-5 ">
                    <span class="flex items-center">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg> -->
                        Login
                    </span>
                </a>
                <div @click.outside="open = false" x-show="open" x-transition x-cloak class="absolute z-10 right-[16px] top-[52px] bg-white text-black w-[250px] rounded-md">
                    <a href="{{ route('login') }}" class="flex items-center justify-center text-white bg-blue-600 py-2 px-3 mt-[24px] rounded shadow-md hover:bg-blue-700 active:bg-blue-800 transition-colors mx-[36px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                        </svg>
                        Login
                    </a>
                    <div class="relative flex px-10 pt-5 pb-3 items-center">
                        <div class="flex-grow border-t border-gray-400"></div>
                        <span class="flex-shrink mx-4 text-gray-400">New to Falafal?</span>
                        <div class="flex-grow border-t border-gray-400"></div>
                    </div>
                    <a href="{{ route('register') }}" class="flex items-center justify-center text-blue-600 hover:text-blue-700 active:text-blue-800 mb-[24px]">
                        Register here
                    </a>
                </div>
            </li>
            @endif
        </ul>
    </nav>
    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-4 block md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
</header>