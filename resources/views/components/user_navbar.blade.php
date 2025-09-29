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

    <!-- Navbar -->
    <nav class="shadow-lg fixed top-0 left-0 right-0 z-50 p-2">
        <div class="navbar-container max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2 flex-shrink-0">
                    <!-- Watch Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#9D8DF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-6 h-6 sm:w-8 sm:h-8">
                        <circle cx="12" cy="12" r="6" />
                        <polyline points="12,10 12,12 13,13" />
                        <path d="m16.13 7.66-.81-4.05a2 2 0 0 0-2-1.61h-2.68a2 2 0 0 0-2 1.61l-.78 4.05" />
                        <path d="m7.88 16.36.8 4a2 2 0 0 0 2 1.61h2.72a2 2 0 0 0 2-1.61l.81-4.05" />
                    </svg>
                    <span class="logo-text text-white text-lg sm:text-xl font-bold truncate">Watch Shop</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-9">
                    <a href="/home"
                        class="{{ request()->is('home') ? "active" : ""}}  text-white nav-link text-sm xl:text-base p-2 rounded-xl">Home</a>

                    <!-- Products Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-white nav-link flex items-center text-sm xl:text-base">
                            Products
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-1">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </a>
                        <div
                            class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Luxury
                                Watches</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Sports
                                Watches</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Smart
                                Watches</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Vintage
                                Collection</a>
                        </div>
                    </div>

                    <!-- Brands Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-white nav-link flex items-center text-sm xl:text-base">
                            Brands
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="ml-1">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </a>
                        <div
                            class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Rolex</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Omega</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Seiko</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Casio</a>
                        </div>
                    </div>

                    <a href="/about"
                        class="{{ request()->is('about') ? "active" : ""}} text-white nav-link text-sm xl:text-base p-2 rounded-xl">About</a>
                    <a href="/contact"
                        class="{{ request()->is('contact') ? "active" : ""}} text-white nav-link text-sm xl:text-base p-2 rounded-xl">Contact</a>
                </div>

                <!-- Desktop Right Side -->
                <div class="hidden lg:flex items-center space-x-3 xl:space-x-6">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text" placeholder="Search watches..."
                            class="search-input bg-white pl-9 pr-4 py-2 rounded-full text-purple-dark placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-medium w-48 xl:w-64 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.35-4.35" />
                        </svg>
                    </div>

                    <!-- Sign In Button -->
                    <!-- <a href="sign_in">
                        <button
                            class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center space-x-1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10,17 15,12 10,7" />
                                <line x1="15" x2="3" y1="12" y2="12" />
                            </svg>
                            <span>Sign In</span>
                        </button>
                    </a> -->

                    <!-- Account Dropdown -->
                    <div class="relative dropdown">
                        <button
                            class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center p-2 rounded-full hover:bg-purple-medium hover:bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu absolute top-full right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="/account"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">My
                                Profile</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Orders</a>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Wishlist</a>
                            <hr class="my-2 border-purple-light">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Settings</a>
                            <a href="/address_view_page"
                                class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Addresses</a>
                            <a href="/logout" class="logout block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign
                                Out</a>
                        </div>
                    </div>

                    <!-- Cart -->
                    <a href="/add_to_cart_view">
                        <button
                            class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2 rounded-full hover:bg-purple-medium hover:bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="8" cy="21" r="1" />
                                <circle cx="19" cy="21" r="1" />
                                <path
                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                            </svg>

                            @php
                            use Illuminate\Support\Facades\Auth;
                            use App\Models\Cart;

                            $productCount = 0;

                            if (Auth::check()) {
                            $productCount = Cart::where('user_id', Auth::id())->count();
                            }
                            
                            @endphp
                            <span
                                class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">{{ $productCount }}</span>
                        </button>
                    </a>

                </div>

                <!-- Tablet and Mobile Icons -->
                <div class="flex items-center space-x-2 lg:hidden">

                    <!-- Search Icon for Tablet/Mobile -->
                    <button id="search-toggle"
                        class="text-white hover:text-purple-medium transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.35-4.35" />
                        </svg>
                    </button>

                    <a href="/account">
                        <button
                            class="flex items-center space-x-3 text-white  transition-colors duration-300 w-full py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                        </button>
                    </a>




                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn"
                        class="text-white hover:text-purple-medium transition-colors duration-300 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Search Bar -->
            <div id="search-bar-mobile" class="mobile-menu lg:hidden">
                <div class="relative">
                    <input type="text" placeholder="Search watches..."
                        class="search-mobile w-full bg-white pl-9 pr-4 py-2.5 rounded-full text-purple-dark placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-medium text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.35-4.35" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden border-t border-purple-medium border-opacity-30">
            <div class="px-4 py-4 space-y-4 max-w-7xl mx-auto">
                <a href="/home" class="block text-white  transition-colors duration-300 py-2 text-base">Home</a>

                <!-- Mobile Products Section -->
                <div class="py-1">
                    <button id="mobile-products-btn"
                        class="flex items-center justify-between w-full text-white transition-colors duration-300 py-2">
                        <span class="text-base">Products</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div id="mobile-products-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Luxury
                            Watches</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Sports
                            Watches</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Smart
                            Watches</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Vintage
                            Collection</a>
                    </div>
                </div>

                <!-- Mobile Brands Section -->
                <div class="py-1">
                    <button id="mobile-brands-btn"
                        class="flex items-center justify-between w-full text-white  transition-colors duration-300 py-2">
                        <span class="text-base">Brands</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div id="mobile-brands-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Rolex</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Omega</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Seiko</a>
                        <a href="#"
                            class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Casio</a>
                    </div>
                </div>

                <a href="/about" class="block text-white  transition-colors duration-300 py-2 text-base">About</a>
                <a href="/contact" class="block text-white  transition-colors duration-300 py-2 text-base">Contact</a>

                <!-- Mobile Account Section -->
                <div class="border-t border-purple-medium border-opacity-30 pt-4 mt-4 space-y-3">
                    <!-- Cart Icon for Tablet/Mobile -->
                    <a href="/add_to_cart_view">
                        <button class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="8" cy="21" r="1" />
                                <circle cx="19" cy="21" r="1" />
                                <path
                                    d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                            </svg>
                            <span
                                class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                        </button>
                    </a>

                    <a href="/logout"
                        class="logout flex items-center space-x-3 text-white  transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-base">Log Out</span>
                    </a>


                </div>
            </div>
        </div>
    </nav>

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