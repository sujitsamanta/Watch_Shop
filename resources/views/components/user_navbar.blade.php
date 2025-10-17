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
    </style>

</head>

<body class="bg-lav1">
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
                        <input
                            type="text"
                            placeholder="Search for products, brands and more..."
                            class="w-full px-5 py-3 bg-lav2 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200 placeholder:text-purple-dark/50" />
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-purple-medium text-white px-4 py-2 rounded-lg hover:bg-purple-dark transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
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
                    @if(Auth::check())
                    <a href="/account" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-xs font-medium">Account</span>
                    </a>
                    <a href="#wishlist" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="text-xs font-medium">Wishlist</span>
                        <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">3</span>
                    </a>

                    <a href="/add_to_cart_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-xs font-medium">Cart</span>
                        <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $productCount }}
                        </span>
                    </a>
                    <a href="/all_orders_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-xs font-medium">Order</span>
                        <!-- <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">5</span> -->
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
                    <input
                        type="text"
                        placeholder="Search products..."
                        class="w-full px-4 py-3 bg-lav1 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200" />
                    <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
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
                        <a href="" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Home</a>
                        <a href="#fashion" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Electronics</a>
                        <a href="#home" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Electronics</a>
                        <a href="/" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">About</a>
                        <a href="/" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Contact</a>
                        <a href="#books" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Hot Deals</a>
                    </div>
                </div>
                <a href="/home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Home</a>
                <a href="#fashion" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Electronics</a>
                <a href="#home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Electronics</a>
                <a href="/about" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">About</a>
                <a href="/contact" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Contact</a>
                <a href="#deals" class="text-purple-medium hover:text-purple-dark font-bold transition-colors duration-200 flex items-center gap-1">
                    <span class="text-lg">🔥</span> Hot Deals
                </a>
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
            <a href="/account" class="flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
                <span class="font-medium">My Account</span>
            </a>
            <a href="#wishlist" class="flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
                <span class="font-medium">Wishlist</span>
                <span class="ml-auto bg-purple-medium text-white text-xs rounded-full px-2.5 py-1 font-semibold">0</span>
            </a>
            @else
            <a href="/account" class="flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
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

            <a href="#deals" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200 flex items-center gap-2">Manu</a>
            <!-- <div class="px-4 py-2 text-xs font-bold text-purple-dark uppercase tracking-wide">Manu</div> -->
            <a href="/home" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Home</a>
            <a href="/address_view_page" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Address</a>
            <a href="/contact" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Contact Us</a>
            <a href="/about" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">About Us</a>
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
            <a href="/logout" class="logout flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                    <polyline points="10,17 15,12 10,7" />
                    <line x1="15" x2="3" y1="12" y2="12" />
                </svg>
                <span class="text-xs font-medium">Logout</span>
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
    <footer class="bg-purple-darkest text-white ">
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
        <div class="container mx-auto px-6 py-12">

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

</body>

</html>