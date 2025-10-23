<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/user_style.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- add to cart view need this cdn -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

    <!-- @notifyCss -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif']
                    },
                    colors: {
                        'purple-lightest': '#F3F0FF',
                        'purple-light': '#E2D8FF',
                        'purple-medium': '#9D8DF1',
                        'purple-dark': '#4C4B7C',
                        'purple-darkest': '#2D2A4A',

                        // hearo
                        lav1: '#F4EFFF',
                        lav2: '#E4DEFF',
                        peri: '#A9B4E6',
                        side: '#3F4673',
                    },
                    boxShadow: {
                        card: '0 10px 30px -12px rgba(88, 28, 135, 0.35)'
                    }

                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&family=Montserrat:wght@300;400&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            /* height: 100%; */

        }

        h1,
        h2,
        h3 {
            font-family: 'Cormorant Garamond', serif;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #E8E0FF 0%, #C8B5FF 30%, #8B7BC7 70%, #5A4B8C 100%);
        }

        .succesful {
            background-color: #E8E0FF;
            border: 1px solid #8B7BC7;
            color: #5A4B8C;
        }

        .not_succesful {
            background-color: #FFEEF0;
            border: 1px solid #DC2626;
            color: #DC2626;
        }

        .alert {
            border-radius: 0.5rem;
            padding: 1rem;
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .alert-icon {
            height: 1.25rem;
            width: 1.25rem;
            margin-top: 0.125rem;
            flex-shrink: 0;
        }

        .alert-content {
            flex: 1;
        }

        .alert-title {
            font-size: 0.875rem;
            font-weight: 500;
            margin: 0;
        }

        .notify {
            z-index: 1001 !important;
        }

        .fl-wrapper {
            z-index: 1001 !important;

        }

        /* reviews-container start */

        .reviews-container {
            max-height: 500px;
            overflow-y: auto;
        }

        .reviews-container::-webkit-scrollbar {
            width: 6px;
        }

        .reviews-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .reviews-container::-webkit-scrollbar-thumb {
            background: #9333EA;
            border-radius: 10px;
        }

        .reviews-container::-webkit-scrollbar-thumb:hover {
            background: #7C3AED;
        }

        /* reviews-container end */
        .custom-scrollbar {
            max-height: 35rem;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f5f9;
            border-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Firefox scrollbar */
        .custom-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: #cbd5e1 #f1f5f9;
        }


        /* catagory section */

        .category-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .category-card:hover {
            transform: translateY(-8px);
        }

        .category-card:active {
            transform: translateY(-4px);
        }

        .category-icon {
            transition: all 0.4s ease;
        }

        .category-card:hover .category-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg,
                    transparent,
                    rgba(255, 255, 255, 0.1),
                    transparent);
            transform: translateX(-100%) translateY(-100%);
            transition: transform 0.6s;
        }

        .category-card:hover .shine-effect::before {
            transform: translateX(100%) translateY(100%);
        }

        /* Horizontal Scroll Container */
        .scroll-container {
            display: flex;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: thin;
            scrollbar-color: rgba(156, 163, 175, 0.5) transparent;
            gap: 1rem;
            padding: 1rem 0;
        }

        .scroll-container::-webkit-scrollbar {
            height: 6px;
        }

        .scroll-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background: rgba(156, 163, 175, 0.5);
            border-radius: 3px;
        }

        .scroll-container::-webkit-scrollbar-thumb:hover {
            background: rgba(156, 163, 175, 0.7);
        }

        .category-item {
            flex: 0 0 auto;
            scroll-snap-align: start;
            width: 110px;
        }

        /* Desktop Grid */
        @media (min-width: 1024px) {
            .scroll-container {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                overflow-x: visible;
                scroll-snap-type: none;
            }

            .category-item {
                width: auto;
            }
        }

        @media (max-width: 640px) {
            .category-card:hover {
                transform: translateY(-4px);
            }

            .category-item {
                width: 95px;
            }
        }

        /* Fade effect on edges for mobile/tablet */
        @media (max-width: 1023px) {
            .scroll-wrapper {
                position: relative;
            }

            .scroll-wrapper::before,
            .scroll-wrapper::after {
                content: '';
                position: absolute;
                top: 0;
                bottom: 0;
                width: 40px;
                z-index: 10;
                pointer-events: none;
            }

            .scroll-wrapper::before {
                left: 0;
                background: linear-gradient(to right, rgba(249, 250, 251, 1), transparent);
            }

            .scroll-wrapper::after {
                right: 0;
                background: linear-gradient(to left, rgba(249, 250, 251, 1), transparent);
            }
        }
    </style>

    <style>
        /* Pill-shaped Active Navigation Link */
        .nav-pill {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            border-radius: 9999px;
            color: #3F4673;
            /* side */
            font-weight: 500;
            text-decoration: none;
            background-color: transparent;
            transition: all 0.3s ease-in-out;
            /* Smooth color + background change */
            position: relative;
            overflow: hidden;
        }

        /* Hover state for inactive links */
        .nav-pill:hover {
            background-color: #F4EFFF;
            /* lav1 */
            color: #9D8DF1;
            /* purple-medium */
            transform: translateY(-2px);
            /* Slight lift animation */
        }

        /* Active pill state */
        .nav-pill.active {
            background-color: #E2D8FF;
            /* purple-light */
            color: #4C4B7C;
            /* purple-dark */
            font-weight: 550;
        }

        /* Active pill hover */
        .nav-pill.active:hover {
            background-color: #9D8DF1;
            /* purple-medium */
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Optional ripple effect on click */
        .nav-pill:active {
            transform: scale(0.97);
        }

        /* Container for pill navigation */
        .nav-pill-container {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            background-color: #F3F0FF;
            /* purple-lightest */
            border-radius: 12px;
            transition: box-shadow 0.3s ease-in-out;
        }

        /* Container subtle hover glow */
        .nav-pill-container:hover {
            box-shadow: 0px 4px 12px rgba(157, 141, 241, 0.2);
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .nav-pill {
                padding: 0.4rem 1.2rem;
                font-size: 0.875rem;
            }

            .nav-pill-container {
                gap: 0.25rem;
                padding: 0.375rem;
            }
        }
    </style>




</head>

<body class="bg-lav1">
    <!-- Active Link -->






    <!-- @include('notify::components.notify') -->

    <!-- Main Navbar -->
    <nav class="bg-purple-lightest shadow-card sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Top Row: Logo, Search, Icons -->
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#home" class="text-xl font-bold text-purple-medium hover:text-purple-dark transition-colors duration-200">
                        ShopHub
                    </a>
                </div>

                <!-- Desktop Search Bar -->
                <div class="hidden md:flex flex-1 max-w-xl mx-12">
                    <div class="relative w-full">
                        <form action="/search" method="GET" class="relative w-full">
                            <input
                                value="{{ old('q') }}"
                                type="text"
                                name="q"
                                id="desktopSearchInput"
                                placeholder="Search for products, brands and more..."
                                class="w-full px-5 py-3 bg-lav2 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200 placeholder:text-purple-dark/50" />
                            <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-purple-medium text-white px-4 py-2 rounded-lg hover:bg-purple-dark transition-colors duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </form>

                        <!-- Search Suggestions Dropdown -->
                        <div id="desktopSearchSuggestions" class="absolute top-full left-0 right-0 bg-white border border-lav2 rounded-xl shadow-lg mt-2 z-50 hidden max-h-96 overflow-y-auto">
                            <div id="desktopSuggestionsContent">
                                <!-- Suggestions will be loaded here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Icons -->
                <div class="hidden md:flex items-center gap-8">
                    @php
                    use Illuminate\Support\Facades\Auth;
                    use App\Models\Cart;

                    $productCount = 0;

                    if (Auth::check()) {
                    $productCount = Cart::where('user_id', Auth::id())->count();
                    }

                    @endphp

                    @php
                    $wishlistCount = 0;
                    if (Auth::check()) {
                    $wishlistCount = Auth::user()->wishlist()->count();
                    }
                    @endphp

                    @php
                    $orderCount = 0;
                    if (Auth::check()) {
                    $orderCount = Auth::user()->orders()->count();
                    }
                    @endphp

                    @if(Auth::check())
                    <a href="/account" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-xs font-medium">Account</span>
                    </a>

                    <a href="/wishlist_products_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="text-xs font-medium">Wishlist</span>

                        @if ($wishlistCount)
                        <span class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $wishlistCount }}
                        </span>
                        @endif

                    </a>

                    <a href="/add_to_cart_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-xs font-medium">Cart</span>
                        @if ($productCount)
                        <span class="absolute -top-1 -right-3 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $productCount }}
                        </span>
                        @endif

                    </a>

                    <a href="/all_orders_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <i class="fa-solid fa-bag-shopping text-xl"></i>
                        <span class="text-xs font-medium">Order</span>
                        @if ($orderCount)
                        <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $orderCount }}
                        </span>
                        @endif
                    </a>
                    @else
                    <a href="/signin" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-xs font-medium">Signin</span>
                    </a>
                    <a href="/login" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-xs font-medium">Login</span>
                    </a>
                    @endif

                </div>

                <!-- Mobile Icons -->
                <div class="flex md:hidden items-center gap-4">
                    <button onclick="toggleMobileSearch()" class="text-side">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    @if(Auth::check())
                    <a href="/add_to_cart_view" class="text-side relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">{{ $productCount }}</span>
                    </a>
                    @else
                    <a href="/login" class="text-side relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                    </a>
                    @endif
                    <button onclick="toggleMobileMenu()" class="text-side" id="menuBtn">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="menuIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="closeIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Search Bar -->
            <div id="mobileSearch" class="hidden md:hidden pb-4">
                <div class="relative">
                    <form action="/search" method="GET" class="relative">
                        <input
                            type="text"
                            name="q"
                            id="mobileSearchInput"
                            placeholder="Search products..."
                            class="w-full px-4 py-3 bg-lav1 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200" />
                        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-medium">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </form>

                    <!-- Mobile Search Suggestions Dropdown -->
                    <div id="mobileSearchSuggestions" class="absolute top-full left-0 right-0 bg-white border border-lav2 rounded-xl shadow-lg mt-2 z-50 hidden max-h-96 overflow-y-auto">
                        <div id="mobileSuggestionsContent">
                            <!-- Suggestions will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Categories -->
            <div class="hidden md:flex items-center gap-6 py-2.5 border-t border-lav2">
                <div class="relative group">
                    <button class="flex items-center gap-1 text-side hover:text-purple-medium font-medium transition-colors duration-200">
                        All Categories
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-52 bg-white shadow-card rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 overflow-hidden">
                        <a href="/home" class=" block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Home</a>
                        <a href="#fashion" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Electronics</a>
                        <a href="#home" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Electronics</a>
                        <a href="/" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">About</a>
                        <a href="/" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Contact</a>
                        <a href="#books" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Hot Deals</a>
                    </div>
                </div>
                <a href="/home" class="{{ Request::is('home') ? 'active' : '' }} nav-pill ">Home</a>
                <a href="#fashion" class="{{ Request::is('electronics') ? 'active' : '' }} nav-pill">Electronics</a>
                <a href="#home" class="{{ Request::is('electronics') ? 'active' : '' }} nav-pill">Electronics</a>
                <a href="/about" class="{{ Request::is('about') ? 'active' : '' }} nav-pill">About</a>
                <a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }} nav-pill">Contact</a>
                <a href="#deals" class="text-purple-medium hover:text-purple-dark font-bold transition-colors duration-200 flex items-center gap-1">
                    <span class="text-lg">🔥</span> Hot Deals
                </a>

                <!-- <a href="/home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200 nav-pill active">Home</a>
                <a href="#fashion" class="text-side hover:text-purple-medium font-medium transition-colors duration-200 nav-pill">Electronics</a>
                <a href="#home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200 nav-pill">Electronics</a>
                <a href="/about" class="text-side hover:text-purple-medium font-medium transition-colors duration-200 nav-pill">About</a>
                <a href="/contact" class="text-side hover:text-purple-medium font-medium transition-colors duration-200 nav-pill">Contact</a>
                <a href="#deals" class="text-purple-medium hover:text-purple-dark font-bold transition-colors duration-200 flex items-center gap-1">
                    <span class="text-lg">🔥</span> Hot Deals
                </a> -->
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden transition-opacity duration-300 md:hidden" onclick="toggleMobileMenu()"></div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="fixed top-0 left-0 h-full w-80 bg-white shadow-2xl z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden overflow-y-auto">
        <div class="px-6 py-6 space-y-1">
            <!-- Close Button -->
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-purple-dark">Menu</h2>
                <button onclick="toggleMobileMenu()" class="text-side hover:text-purple-medium">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            @if(Auth::check())
            <a href="/account" class="{{ Request::is('account') ? 'bg-lav1 text-purple-medium' : '' }} flex items-center gap-3 px-4 py-3 text-side  rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="font-medium">My Account</span>
            </a>
            <a href="/wishlist_products_view" class="{{ Request::is('wishlist_products_view') ? 'bg-lav1 text-purple-medium' : '' }} flex items-center gap-3 px-4 py-3 text-side rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span class="font-medium">Wishlist</span>
                <span class="ml-auto bg-purple-medium text-white text-xs rounded-full px-2.5 py-1 font-semibold">{{ $wishlistCount }}</span>
            </a>
            <a href="/all_orders_view" class="{{ Request::is('all_orders_view') ? 'bg-lav1 text-purple-medium' : '' }} flex items-center gap-3 px-4 py-3 text-side rounded-lg transition-all duration-200">
                <i class="fa-solid fa-bag-shopping"></i>
                <span class="font-medium">Order</span>
                <span class="ml-auto bg-purple-medium text-white text-xs rounded-full px-2.5 py-1 font-semibold">{{ $orderCount }}</span>
            </a>
            @else
            <a href="/login" class="flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10,17 15,12 10,7" />
                    <line x1="15" x2="3" y1="12" y2="12" />
                </svg>
                <span class="text-xs font-medium">Login</span>
            </a>
            @endif


            <div class="border-t border-lav2 my-3"></div>

            <a href="#deals" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200 flex items-center gap-2">Menu</a>
            <!-- <div class="px-4 py-2 text-xs font-bold text-purple-dark uppercase tracking-wide">Manu</div> -->
            <a href="/home" class="{{ Request::is('home') ? 'bg-lav1 text-purple-medium' : '' }} block px-4 py-3 text-side rounded-lg transition-all duration-200 font-medium">Home</a>
            <a href="/search" class="{{ Request::is('search') ? 'bg-lav1 text-purple-medium' : '' }} block px-4 py-3 text-side rounded-lg transition-all duration-200 font-medium">Search Products</a>
            <a href="/address_view_page" class="{{ Request::is('address_view_page') ? 'bg-lav1 text-purple-medium' : '' }} block px-4 py-3 text-side rounded-lg transition-all duration-200 font-medium">Address</a>
            <a href="/contact" class="{{ Request::is('contact') ? 'bg-lav1 text-purple-medium' : '' }} block px-4 py-3 text-side rounded-lg transition-all duration-200 font-medium">Contact Us</a>
            <a href="/about" class="{{ Request::is('about') ? 'bg-lav1 text-purple-medium' : '' }} block px-4 py-3 text-side rounded-lg transition-all duration-200 font-medium">About Us</a>
            <!-- <a href="/about" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">About</a>
            <a href="/contact" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Hot Deals</a> -->

            <div class="border-t border-lav2 my-3"></div>

            <a href="#deals" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200 flex items-center gap-2">Categories</a>
            <a href="#track" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">1</a>
            <a href="#track" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">2</a>
            <a href="#track" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">3</a>
            <a href="#contact" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">4</a>

            <div class="border-t border-lav2 my-3"></div>
            @if(Auth::check())
            <a href="/logout">
                <!-- <a href="" class=" flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200"> -->
                <svg class="logout" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10,17 15,12 10,7" />
                    <line x1="15" x2="3" y1="12" y2="12" />
                </svg>
                <span class="logout text-xs font-medium">Logout</span>
                <!-- </a> -->
            </a>
            @else
            <a href="/signin" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Sign In</a>

            @endif

            <a href="/signin" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200">Register</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-full mx-auto bg-lav1">


        {{ $body }}

    </div>

    <!-- Footer Section -->
    <footer class="bg-purple-darkest text-white relative bottom-0 main-w-full ">
        <!-- Newsletter Section -->
        <!-- <div class="bg-side py-4">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                    <div class="text-center md:text-left">
                        <h4 class="text-lg font-semibold text-purple-light mb-2">Stay Updated</h4>
                        <p class="text-peri">Subscribe to our newsletter for the latest updates and offers</p>
                    </div>
                    <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                        <input type="email" placeholder="Enter your email"
                            class="px-4 py-3 bg-purple-dark text-white placeholder-peri rounded-lg border border-purple-medium focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent w-64">
                        <button
                            class="px-6 py-3 bg-purple-medium hover:bg-purple-light text-white font-semibold rounded-lg transition-all duration-300 hover:shadow-card">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Main Footer Content -->
        <div class=" mx-auto px-6 py-12 main-w-full ">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-8 h-8 bg-purple-medium rounded-lg flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white text-sm"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-purple-light">cyber</h3>
                    </div>
                    <p class="text-peri leading-relaxed max-w-sm">
                        We are a residential interior design firm located in Portland. Our boutique studio offers
                        more
                        than traditional design services.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 pt-4">
                        <a href="#"
                            class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-twitter text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-facebook-f text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-tiktok text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-instagram text-peri group-hover:text-white transition-colors"></i>
                        </a>
                    </div>
                </div>

                <!-- Services Column -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-purple-light mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Bonus program
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Gift cards
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Credit and payment
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Service contracts
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Non-cash account
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Payment
                            </a></li>
                    </ul>
                </div>

                <!-- Customer Support Column -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-purple-light mb-6">Assistance to the buyer</h4>
                    <ul class="space-y-3">
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Find an order
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Terms of delivery
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Exchange and return of goods
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Guarantee
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Frequently asked questions
                            </a></li>
                        <li><a href="#"
                                class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                                <i
                                    class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                                Terms of use of the site
                            </a></li>
                    </ul>
                </div>
            </div>

        </div>



        <!-- Bottom Copyright -->
        <!-- <div class="bg-purple-dark py-4 border-t border-side">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                    <p class="text-peri text-sm">© 2024 Cyber. All rights reserved.</p>
                    <div class="flex space-x-6 text-sm">
                        <a href="#" class="text-peri hover:text-purple-light transition-colors">Privacy Policy</a>
                        <a href="#" class="text-peri hover:text-purple-light transition-colors">Terms of Service</a>
                        <a href="#" class="text-peri hover:text-purple-light transition-colors">Cookies</a>
                    </div>
                </div>
            </div>
        </div> -->
    </footer>


    <!-- @notifyJs -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/user_script.js') }}"></script>




    <!-- sweet alert2 start -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll(".tab-btn");
            const products = document.querySelectorAll(".product-card");

            tabs.forEach(tab => {
                tab.addEventListener("click", () => {
                    // Remove active style from all tabs
                    tabs.forEach(t => t.classList.remove("border-side", "text-side", "border-b-2", "font-medium"));
                    tabs.forEach(t => t.classList.add("text-gray-500"));

                    // Add active style to clicked tab
                    tab.classList.add("border-side", "text-side", "border-b-2", "font-medium");
                    tab.classList.remove("text-gray-500");

                    const category = tab.getAttribute("data-category");

                    products.forEach(product => {
                        if (product.getAttribute("data-category") === category || category === "all") {
                            product.style.display = "block";
                        } else {
                            product.style.display = "none";
                        }
                    });
                });
            });
        });


        // $(document).ready(function() {
        //     $(".confirm_order").on("click", function(e) {
        //         e.preventDefault(); // Stop default logout immediately
        //         let url = $(this).attr("href"); // /logout
        //         Swal.fire({
        //             title: "Are you sure?",
        //             text: "You will be logged out from the system.",
        //             icon: "warning",
        //             showCancelButton: true,
        //             confirmButtonColor: "#3085d6",
        //             cancelButtonColor: "#d33",
        //             confirmButtonText: "Yes, log me out!",
        //         }).then((result) => {
        //             if (result.isConfirmed) {
        //                 // Redirect to logout
        //                 window.location.href = url;
        //             }
        //         });
        //     });



        // user logout start

        $(document).ready(function() {
            $(".logout").on("click", function(e) {
                e.preventDefault(); // Stop default logout immediately
                let url = $(this).attr("href"); // /logout
                Swal.fire({
                    title: "Are you sure?",
                    text: "You will be logged out from the system.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, log me out!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to logout
                        window.location.href = url;
                    }
                });
            });

            // user logout end



            // account_update_save start

            $(".update_save").on("click", function(e) {
                e.preventDefault(); // Stop default logout immediately

                // let url = $(this).attr("href"); 
                var form = $(this).parents("form"); // /logout
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to update your account details?",
                    icon: "question", // use "question" or "info" instead of "warning"
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, update it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to logout
                        // window.location.href = url;
                        form.submit();
                    } else {
                        window.location.href = "/account";
                    }
                });
            });

            // account_update_save start



            // update_save_photo start

            $(".update_save_photo").on("click", function(e) {
                e.preventDefault(); // Stop default logout immediately

                // let url = $(this).attr("href"); 
                var form = $(this).parents("form"); // /logout
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to update your account Photo?",
                    icon: "question", // use "question" or "info" instead of "warning"
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, update it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to logout
                        // window.location.href = url;
                        form.submit();
                    } else {
                        window.location.href = "/account";
                    }
                });
            });

        });
        // update_save_photo end




        // add to cart clear all products start

        $(".add_to_cart_cler_all_products").on("click", function(e) {
            e.preventDefault(); // stop direct submit

            let form = $(this).closest("form")[0]; // get native form element

            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to clear all Product?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, clear it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ✅ native submit
                }
            });
        });
        // add to cart clear all products end


        // confirm default address start

        $(".addresses_set_default_btn").on("click", function(e) {
            e.preventDefault(); // stop direct submit

            let form = $(this).closest("form")[0]; // get native form element

            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to confirm default address?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, default it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ✅ native submit
                }
            });
        });
        // confirm default address end

        // delete address start

        $(".addresses_delete_btn").on("click", function(e) {
            e.preventDefault(); // stop direct submit

            let form = $(this).closest("form")[0]; // get native form element

            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to delete this address?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ✅ native submit
                }
            });
        });
        // delete address end

        // confirm order start

        $(".confirm_order").on("click", function(e) {
            e.preventDefault(); // stop direct submit

            let form = $(this).closest("form")[0]; // get native form element

            Swal.fire({
                title: "Are you sure?",
                text: "Do you want to confirm your order?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, confirm order!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ✅ native submit
                }
            });
        });
        // confirm order end
    </script>
    <!-- sweet alert2 end -->
    <script>
        //  account photo start
        const photoInput = document.getElementById("photoInput");
        const profilePhoto = document.getElementById("profilePhoto");
        const saveButton = document.getElementById("saveButton");
        const photoModal = document.getElementById("photoModal");
        const popupPhoto = document.getElementById("popupPhoto");

        photoInput.addEventListener("change", e => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => {
                    profilePhoto.src = e.target.result;
                };
                reader.readAsDataURL(file);
                saveButton.classList.remove("hidden"); // Show Save button
            }
        });

        function resetPhoto() {
            profilePhoto.src = "https://via.placeholder.com/150";
            saveButton.classList.remove("hidden"); // Show Save button
        }

        function openPhotoPopup() {
            popupPhoto.src = profilePhoto.src;
            photoModal.classList.remove("hidden");
            photoModal.classList.add("flex");
        }

        function closePhotoPopup() {
            photoModal.classList.add("hidden");
            photoModal.classList.remove("flex");
        }
        //  account photo end

        // account end
    </script>

    <!-- Search functionality -->
    <script>
        function handleSuggestionClick(url) {
            window.location.href = url;
        }
        // Mobile search toggle
        function toggleMobileSearch() {
            const mobileSearch = document.getElementById('mobileSearch');
            const isHidden = mobileSearch.classList.contains('hidden');

            if (isHidden) {
                mobileSearch.classList.remove('hidden');
                document.getElementById('mobileSearchInput').focus();
            } else {
                mobileSearch.classList.add('hidden');
            }
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            const isOpen = !mobileMenu.classList.contains('-translate-x-full');

            if (isOpen) {
                // Close menu
                mobileMenu.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                // Open menu
                mobileMenu.classList.remove('-translate-x-full');
                mobileOverlay.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        }

        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-focus search on mobile when opened
            const mobileSearchInput = document.getElementById('mobileSearchInput');
            const desktopSearchInput = document.getElementById('desktopSearchInput');
            const mobileSearchSuggestions = document.getElementById('mobileSearchSuggestions');
            const desktopSearchSuggestions = document.getElementById('desktopSearchSuggestions');
            const mobileSuggestionsContent = document.getElementById('mobileSuggestionsContent');
            const desktopSuggestionsContent = document.getElementById('desktopSuggestionsContent');

            // Handle Enter key in search inputs
            [mobileSearchInput, desktopSearchInput].forEach(input => {
                if (input) {
                    input.addEventListener('keypress', function(e) {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            const form = this.closest('form');
                            if (form) {
                                form.submit();
                            }
                        }
                    });

                    // Add input event listeners for suggestions
                    input.addEventListener('input', function() {
                        currentSearchInput = this;
                        if (this === desktopSearchInput) {
                            showSearchSuggestions(this, desktopSearchSuggestions, desktopSuggestionsContent);
                        } else if (this === mobileSearchInput) {
                            showSearchSuggestions(this, mobileSearchSuggestions, mobileSuggestionsContent);
                        }
                    });

                    // Hide suggestions when input loses focus
                    input.addEventListener('blur', function() {
                        setTimeout(() => {
                            if (this === desktopSearchInput) {
                                hideSuggestions(desktopSearchSuggestions);
                            } else if (this === mobileSearchInput) {
                                hideSuggestions(mobileSearchSuggestions);
                            }
                        }, 200); // Small delay to allow clicking on suggestions
                    });

                    // Clear search field on Escape key
                    input.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            clearSearchField(this);
                            if (this === desktopSearchInput) {
                                hideSuggestions(desktopSearchSuggestions);
                            } else if (this === mobileSearchInput) {
                                hideSuggestions(mobileSearchSuggestions);
                            }
                            this.blur(); // Remove focus from input
                        }
                    });
                }
            });

            // Auto-hide mobile search when clicking outside
            document.addEventListener('click', function(e) {
                const mobileSearch = document.getElementById('mobileSearch');
                const searchButton = e.target.closest('button[onclick="toggleMobileSearch()"]');

                if (!mobileSearch.contains(e.target) && !searchButton && !mobileSearch.classList.contains('hidden')) {
                    mobileSearch.classList.add('hidden');
                }

                // Hide suggestions and clear search values when clicking outside
                if (!e.target.closest('#desktopSearchSuggestions') && !e.target.closest('#desktopSearchInput')) {
                    hideSuggestions(desktopSearchSuggestions);
                    // Clear desktop search input
                    if (desktopSearchInput && desktopSearchInput.value.trim() !== '') {
                        clearSearchField(desktopSearchInput);
                    }
                }
                if (!e.target.closest('#mobileSearchSuggestions') && !e.target.closest('#mobileSearchInput')) {
                    hideSuggestions(mobileSearchSuggestions);
                    // Clear mobile search input
                    if (mobileSearchInput && mobileSearchInput.value.trim() !== '') {
                        clearSearchField(mobileSearchInput);
                    }
                }
            });
        });

        // Search suggestions functionality
        let searchTimeout;
        let currentSearchInput = null;
        let suggestionsCache = new Map(); // Cache for suggestions

        function showSearchSuggestions(input, suggestionsContainer, contentContainer) {
            const query = input.value.trim();

            if (query.length < 2) {
                suggestionsContainer.classList.add('hidden');
                return;
            }

            // Show loading state immediately
            contentContainer.innerHTML = `
                <div class="flex items-center justify-center p-4">
                    <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-purple-medium"></div>
                    <span class="ml-2 text-purple-medium">Searching...</span>
                </div>
            `;
            suggestionsContainer.classList.remove('hidden');

            // Clear previous timeout
            if (searchTimeout) {
                clearTimeout(searchTimeout);
            }

            // Check cache first
            if (suggestionsCache.has(query)) {
                const cachedSuggestions = suggestionsCache.get(query);
                if (cachedSuggestions.length > 0) {
                    displaySuggestions(cachedSuggestions, contentContainer);
                    suggestionsContainer.classList.remove('hidden');
                } else {
                    contentContainer.innerHTML = `
                        <div class="flex items-center justify-center p-4 text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            No suggestions found
                        </div>
                    `;
                    suggestionsContainer.classList.remove('hidden');
                }
                return;
            }

            // Set new timeout for debouncing
            searchTimeout = setTimeout(() => {
                console.log('Fetching suggestions for:', query);
                fetch(`/search-suggestions?q=${encodeURIComponent(query)}`)
                    .then(response => {
                        console.log('Response status:', response.status);
                        return response.json();
                    })
                    .then(suggestions => {
                        console.log('Suggestions received:', suggestions);
                        // Cache the results
                        suggestionsCache.set(query, suggestions);

                        if (suggestions.length > 0) {
                            displaySuggestions(suggestions, contentContainer);
                            suggestionsContainer.classList.remove('hidden');
                        } else {
                            contentContainer.innerHTML = `
                                <div class="flex items-center justify-center p-4 text-gray-500">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    No suggestions found
                                </div>
                            `;
                            suggestionsContainer.classList.remove('hidden');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching suggestions:', error);
                        contentContainer.innerHTML = `
                            <div class="flex items-center justify-center p-4 text-red-500">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Error loading suggestions
                            </div>
                        `;
                        suggestionsContainer.classList.remove('hidden');
                    });
            }, 150); // 150ms debounce for faster response
        }

        function displaySuggestions(suggestions, container) {
            console.log('Displaying suggestions:', suggestions);
            let html = '';

            suggestions.forEach(suggestion => {
                console.log('Processing suggestion:', suggestion);

                // ⭐ Product suggestions
                if (suggestion.type === 'product') {
                    html += `
                <div class="flex items-center p-3 hover:bg-lav1 transition-colors duration-200 border-b border-lav2 last:border-b-0 cursor-pointer"
                    onmousedown="window.location.href='${suggestion.url}'">
                    <div class="w-12 h-12 bg-lav2 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                        <img src="storage/products_images/${suggestion.image}" alt="${suggestion.name}"
                             class="w-10 h-10 object-cover rounded-lg" onerror="this.style.display='none'">
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="font-medium text-purple-dark truncate">${suggestion.name}</div>
                        <div class="text-sm text-purple-medium">${suggestion.category}</div>
                        <div class="text-sm font-semibold text-purple-medium">₹${parseFloat(suggestion.price).toFixed(2)}</div>
                    </div>
                    <div class="ml-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            `;
                }

                // ⭐ Category suggestions
                else if (suggestion.type === 'category') {
                    html += `
                <div class="flex items-center p-3 hover:bg-lav1 transition-colors duration-200 border-b border-lav2 last:border-b-0 cursor-pointer"
                    onmousedown="window.location.href='${suggestion.url}'">
                    <div class="w-12 h-12 bg-purple-lightest rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                        <svg class="w-6 h-6 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="font-medium text-purple-dark">${suggestion.name}</div>
                        <div class="text-sm text-purple-medium">Category</div>
                    </div>
                    <div class="ml-2">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>
            `;
                }
            });

            // ⭐ Add "View all results"
            if (suggestions.length > 0) {
                html += `
            <div class="border-t border-lav2">
                <div class="flex items-center justify-center p-3 text-purple-medium hover:bg-lav1 transition-colors duration-200 font-medium cursor-pointer"
                     onmousedown="window.location.href='/search?q=${encodeURIComponent(currentSearchInput.value)}'">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    View all results for "${currentSearchInput.value}"
                </div>
            </div>
        `;
            }

            container.innerHTML = html;
        }

        // Simple click handler for suggestions
        function handleSuggestionClick(event) {
            // Hide suggestions immediately
            const desktopSuggestions = document.getElementById('desktopSearchSuggestions');
            const mobileSuggestions = document.getElementById('mobileSearchSuggestions');

            if (desktopSuggestions) {
                desktopSuggestions.classList.add('hidden');
            }
            if (mobileSuggestions) {
                mobileSuggestions.classList.add('hidden');
            }
        }

        function hideSuggestions(suggestionsContainer) {
            suggestionsContainer.classList.add('hidden');
        }

        function clearSearchField(input) {
            input.value = '';
            // Clear cache for this input
            suggestionsCache.clear();
        }
    </script>

</body>

</html>