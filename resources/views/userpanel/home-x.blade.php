<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/user_style.css" />
    <!-- @notifyCss -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
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
    </style>

</head>

<body>
    <!-- @include('notify::components.notify') -->

    <!-- Navbar -->
    <nav class="shadow-lg fixed top-0 left-0 right-0 z-50">
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
                    <span class="logo-text text-white text-lg sm:text-xl font-bold truncate">Hand Watch Shop</span>
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

                    <!-- Log In Button -->
                    <a href="login">
                        <button
                            class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center space-x-1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10,17 15,12 10,7" />
                                <line x1="15" x2="3" y1="12" y2="12" />
                            </svg>
                            <span>Log In</span>
                        </button>
                    </a>

                    <!-- Account Dropdown -->
                    <!-- <div class="relative dropdown">
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
                            <a href="/logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
                        </div>
                    </div> -->

                    <!-- Cart -->
                    <!-- <button
                        class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2 rounded-full hover:bg-purple-medium hover:bg-opacity-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1" />
                            <circle cx="19" cy="21" r="1" />
                            <path
                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button> -->

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

                    <!-- Log In Button -->
                    <a href="login">
                        <button
                            class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center space-x-1 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10,17 15,12 10,7" />
                                <line x1="15" x2="3" y1="12" y2="12" />
                            </svg>
                            <!-- <span>Log In</span> -->
                        </button>
                    </a>

                    <!-- Cart Icon for Tablet/Mobile -->
                    <!-- <button class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1" />
                            <circle cx="19" cy="21" r="1" />
                            <path
                                d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button> -->

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
                <a href="/home"
                    class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">Home</a>

                <!-- Mobile Products Section -->
                <div class="py-1">
                    <button id="mobile-products-btn"
                        class="flex items-center justify-between w-full text-white hover:text-purple-medium transition-colors duration-300 py-2">
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
                        class="flex items-center justify-between w-full text-white hover:text-purple-medium transition-colors duration-300 py-2">
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

                <a href="/about"
                    class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">About</a>
                <a href="/contact"
                    class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">Contact</a>

                <!-- Mobile Account Section -->
                <div class="border-t border-purple-medium border-opacity-30 pt-4 mt-4 space-y-3">
                    <a href="/login"
                        class="flex items-center space-x-3 text-white hover:text-purple-medium transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-base">Log In</span>
                    </a>

                    <!-- <button
                        class="flex items-center space-x-3 text-white hover:text-purple-medium transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        <span class="text-base">My Account</span>
                    </button> -->
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-full mx-auto">

        <!-- Hero Section -->
        <section class="relative  flex items-center justify-center px-8 py-12 overflow-hidden">
            <!-- Background Elements -->
            <!-- <div class="absolute inset-0 bg-gradient-to-br from-lav1/80 via-peri/40 to-side/20"></div>
        <div class="absolute top-20 left-10 w-72 h-72 bg-lav2/30 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-peri/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div> -->

            <div class="relative z-10 max-w-full mx-auto grid lg:grid-cols-2 gap-9 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left mt-9">
                    <!-- Real-time Clock Component -->
                    <div
                        class="inline-flex items-center gap-3 bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 mb-8 border border-white/30 shadow-lg">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <div class="text-side font-mono text-lg font-semibold" id="realtime-clock">
                            00:00:00
                        </div>
                        <span class="text-side/70 text-sm">Live Time</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-side mb-6 leading-tight">
                        Premium
                        <span class="bg-gradient-to-r from-peri to-side bg-clip-text text-transparent">
                            Watches
                        </span>
                        <br>
                        Collection
                    </h1>

                    <p class="text-lg md:text-xl text-side/80 mb-8 max-w-xl mx-auto lg:mx-0">
                        Discover luxury timepieces from world's most prestigious brands.
                        Each watch tells a story of craftsmanship and elegance.
                    </p>

                    <!-- Trending Badge -->
                    <div
                        class="inline-flex items-center gap-2 bg-gradient-to-r from-orange-100 to-red-100 rounded-full px-4 py-2 mb-6 shadow-sm">
                        <svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-orange-700 font-semibold text-sm">🔥 Trending Now</span>
                    </div>

                    <!-- Brand Logos -->
                    <div class="mb-8">
                        <p class="text-side/60 text-sm mb-4 uppercase tracking-wider">Featured Luxury Brands</p>
                        <div class="flex flex-wrap justify-center lg:justify-start items-center gap-6 opacity-70">
                            <div
                                class="bg-white/60 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-side text-sm shadow-sm">
                                ROLEX</div>
                            <div
                                class="bg-white/60 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-side text-sm shadow-sm">
                                OMEGA</div>
                            <div
                                class="bg-white/60 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-side text-sm shadow-sm">
                                CARTIER</div>
                            <div
                                class="bg-white/60 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-side text-sm shadow-sm">
                                PATEK</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button
                            class="bg-gradient-to-r from-side to-peri text-white px-8 py-4 rounded-full font-semibold text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 hover:scale-105">
                            Shop Now
                        </button>
                        <button
                            class="bg-white/80 backdrop-blur-sm text-side px-8 py-4 rounded-full font-semibold text-lg border-2 border-white/50 hover:bg-white hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                            View Collections
                        </button>
                    </div>
                </div>

                <!-- Right Content - Realistic Watch Display -->
                <div class="relative flex items-center justify-center mt-9">
                    <!-- Premium Watch -->
                    <div class="relative group">
                        <!-- Watch Case Outer Ring -->
                        <div
                            class="w-80 h-80 rounded-full bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 p-4 shadow-2xl">
                            <!-- Watch Bezel -->
                            <div
                                class="w-full h-full rounded-full bg-gradient-to-br from-gray-600 via-gray-500 to-gray-800 p-2 relative">
                                <!-- Bezel Markings -->
                                <div class="absolute inset-0 rounded-full">
                                    <!-- 60 minute markers -->
                                    <div class="absolute inset-0">
                                        <div
                                            class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2">
                                        </div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-30"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-60"
                                            style="transform-origin: 50% 152px;"></div>
                                        <!-- <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-90" style="transform-origin: 50% 152px;"></div> -->
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-120"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-150"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-180"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-210"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-240"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-270"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-300"
                                            style="transform-origin: 50% 152px;"></div>
                                        <div class="absolute top-1 left-1/2 w-0.5 h-3 bg-gray-300 transform -translate-x-1/2 rotate-330"
                                            style="transform-origin: 50% 152px;"></div>
                                    </div>
                                </div>

                                <!-- Watch Face -->
                                <div
                                    class="w-full h-full rounded-full bg-gradient-to-br from-white via-gray-50 to-gray-100 shadow-inner relative overflow-hidden">
                                    <!-- Crystal Effect -->
                                    <div
                                        class="absolute inset-0 rounded-full bg-gradient-to-br from-transparent via-white/20 to-transparent">
                                    </div>
                                    <div class="absolute top-8 left-8 w-16 h-16 rounded-full bg-white/30 blur-xl"></div>

                                    <!-- Hour Markers -->
                                    <div class="absolute inset-0">
                                        <!-- 12 o'clock -->
                                        <div
                                            class="absolute top-4 left-1/2 w-1 h-8 bg-gray-800 transform -translate-x-1/2 rounded">
                                        </div>
                                        <!-- 3 o'clock -->
                                        <div
                                            class="absolute right-4 top-1/2 w-8 h-1 bg-gray-800 transform -translate-y-1/2 rounded">
                                        </div>
                                        <!-- 6 o'clock -->
                                        <div
                                            class="absolute bottom-4 left-1/2 w-1 h-8 bg-gray-800 transform -translate-x-1/2 rounded">
                                        </div>
                                        <!-- 9 o'clock -->
                                        <div
                                            class="absolute left-4 top-1/2 w-8 h-1 bg-gray-800 transform -translate-y-1/2 rounded">
                                        </div>

                                        <!-- Other hour markers -->
                                        <div
                                            class="absolute top-8 right-12 w-0.5 h-6 bg-gray-600 transform rotate-30 rounded">
                                        </div>
                                        <div
                                            class="absolute top-12 right-8 w-0.5 h-6 bg-gray-600 transform rotate-60 rounded">
                                        </div>
                                        <div
                                            class="absolute bottom-12 right-8 w-0.5 h-6 bg-gray-600 transform -rotate-60 rounded">
                                        </div>
                                        <div
                                            class="absolute bottom-8 right-12 w-0.5 h-6 bg-gray-600 transform -rotate-30 rounded">
                                        </div>
                                        <div
                                            class="absolute bottom-8 left-12 w-0.5 h-6 bg-gray-600 transform rotate-30 rounded">
                                        </div>
                                        <div
                                            class="absolute bottom-12 left-8 w-0.5 h-6 bg-gray-600 transform rotate-60 rounded">
                                        </div>
                                        <div
                                            class="absolute top-12 left-8 w-0.5 h-6 bg-gray-600 transform -rotate-60 rounded">
                                        </div>
                                        <div
                                            class="absolute top-8 left-12 w-0.5 h-6 bg-gray-600 transform -rotate-30 rounded">
                                        </div>
                                    </div>

                                    <!-- Watch Numbers -->
                                    <div
                                        class="absolute top-6 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                                        12</div>
                                    <div
                                        class="absolute bottom-6 left-1/2 transform -translate-x-1/2 text-lg font-bold text-gray-800">
                                        6</div>
                                    <div
                                        class="absolute right-6 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-800">
                                        3</div>
                                    <div
                                        class="absolute left-6 top-1/2 transform -translate-y-1/2 text-lg font-bold text-gray-800">
                                        9</div>

                                    <!-- Brand Name -->
                                    <!-- <div class="absolute top-20 left-1/2 transform -translate-x-1/2 text-xs font-bold text-gray-600 tracking-wider">HANDWATCH</div>
                                <div class="absolute bottom-20 left-1/2 transform -translate-x-1/2 text-xs text-gray-500">SWISS MADE</div> -->

                                    <!-- Watch Hands -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <!-- Hour Hand -->
                                        <div id="hour-hand"
                                            class="absolute w-16 h-1 bg-gradient-to-r from-gray-800 to-gray-600 rounded-full shadow-lg z-30"
                                            style="left: 50%; top: 50%; transform-origin: 2px 50%;"></div>
                                        <!-- Minute Hand -->
                                        <div id="minute-hand"
                                            class="absolute w-20 h-0.5 bg-gradient-to-r from-gray-700 to-gray-500 rounded-full shadow-lg z-20"
                                            style="left: 50%; top: 50%; transform-origin: 2px 50%;"></div>
                                        <!-- Second Hand -->
                                        <div id="second-hand"
                                            class="absolute w-24 h-0.5 bg-gradient-to-r from-red-600 to-red-400 rounded-full shadow-lg z-40"
                                            style="left: 50%; top: 50%; transform-origin: 2px 50%;">
                                            <div class="absolute -right-1 -top-0.5 w-2 h-2 bg-red-500 rounded-full">
                                            </div>
                                        </div>
                                        <!-- Center Dot -->
                                        <div
                                            class="w-3 h-3 bg-gradient-to-br from-gray-800 to-gray-600 rounded-full shadow-lg z-50 relative border border-gray-400">
                                        </div>
                                    </div>

                                    <!-- Sub-dials (decorative) -->
                                    <div
                                        class="absolute top-16 left-16 w-8 h-8 rounded-full bg-white border border-gray-300 shadow-inner">
                                        <div class="absolute inset-1 rounded-full bg-gray-50"></div>
                                    </div>
                                    <div
                                        class="absolute top-16 right-16 w-8 h-8 rounded-full bg-white border border-gray-300 shadow-inner">
                                        <div class="absolute inset-1 rounded-full bg-gray-50"></div>
                                    </div>
                                </div>

                                <!-- Crown -->
                                <div
                                    class="absolute right-0 top-1/2 w-3 h-6 bg-gradient-to-r from-gray-600 to-gray-400 transform -translate-y-1/2 translate-x-1 rounded-r shadow-lg">
                                </div>
                            </div>
                        </div>

                        <!-- Watch Band/Strap -->
                        <div
                            class="absolute -top-8 left-1/2 w-12 h-16 bg-gradient-to-b from-gray-700 to-gray-800 transform -translate-x-1/2 rounded-t-lg shadow-xl">
                        </div>
                        <div
                            class="absolute -bottom-8 left-1/2 w-12 h-16 bg-gradient-to-t from-gray-700 to-gray-800 transform -translate-x-1/2 rounded-b-lg shadow-xl">
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div
                        class="absolute -top-8 -right-8 bg-gradient-to-r from-orange-400 to-red-400 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-2xl animate-bounce z-10">
                        50% OFF
                    </div>

                    <div
                        class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-sm rounded-xl p-3 shadow-xl border border-white/50 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-side text-sm font-semibold">Shipping Now</span>
                        </div>
                    </div>

                    <!-- Reflection Effect -->
                    <div
                        class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent rounded-full pointer-events-none">
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-side/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </section>




        <!-- <div class="content-card rounded-2xl p-8 mb-8">
            <h1 class="text-4xl font-bold text-purple-dark mb-6">Welcome to Hand Watch Shop</h1>
            <p class="text-purple-darkest text-lg mb-4">Discover our exquisite collection of timepieces with our new elegant purple theme.</p>
            <p class="text-purple-dark">This responsive navbar now features a beautiful gradient color scheme that transitions from light purple to deep purple tones, creating a sophisticated and modern look for your watch shop.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="content-card rounded-xl p-6">
                <h3 class="text-xl font-semibold text-purple-dark mb-3">Premium Quality</h3>
                <p class="text-purple-darkest">Handpicked luxury watches from renowned brands worldwide.</p>
            </div>
            <div class="content-card rounded-xl p-6">
                <h3 class="text-xl font-semibold text-purple-dark mb-3">Expert Service</h3>
                <p class="text-purple-darkest">Professional consultation and after-sales support.</p>
            </div>
            <div class="content-card rounded-xl p-6">
                <h3 class="text-xl font-semibold text-purple-dark mb-3">Lifetime Warranty</h3>
                <p class="text-purple-darkest">Comprehensive coverage for all our timepieces.</p>
            </div>
        </div> -->
    </div>

    <script src="js/user_script.js"></script>

    <!-- @notifyJs -->

</body>

</html>