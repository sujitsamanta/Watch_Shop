<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/user_style.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- @notifyCss -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                    <a href="/login"
                        class="logout flex items-center space-x-3 text-white  transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-base">Log in</span>
                    </a>
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


                    <!-- Cart -->

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

                    <a href="/login"
                        class="logout flex items-center space-x-3 text-white  transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-base">Log in</span>
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


                    <a href="/signin"
                        class="logout flex items-center space-x-3 text-white  transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                            <polyline points="10,17 15,12 10,7" />
                            <line x1="15" x2="3" y1="12" y2="12" />
                        </svg>
                        <span class="text-base">Sign in</span>
                    </a>


                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="relative  flex items-center justify-center px-8 py-20  overflow-hidden">

        <!-- Auto Carousel Background -->
        <div class="absolute inset-0 z-0">
            <!-- Background Image 1 -->
            <div class="carousel-item active absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/x1.jpg');">
            </div>

            <!-- Background Image 2 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/w1.jpg');">
            </div>

            <!-- Background Image 3 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/x2.jpg');">
            </div>

            <!-- Background Image 4 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/w2.jpg');">
            </div>

            <!-- Background Image 5 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('images/x3.jpg');">
            </div>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 z-10 gradient-overlay"></div>

        <!-- Floating Background Elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-light/20 rounded-full blur-3xl animate-pulse z-20">
        </div>

        <div class="absolute bottom-20 right-10 w-96 h-96 bg-peri/15 rounded-full blur-3xl animate-pulse z-20"
            style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-full mx-auto grid lg:grid-cols-2 gap-9 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left mt-12">
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
                            class="bg-white/60 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-side text-sm shadow-sm hover:bg-white/80 transition-colors">
                            <a href="https://www.3watches.com/" target="_blank"
                                class="text-side hover:text-purple-darkest">3WATCHES</a>
                        </div>
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
            <div class="relative flex items-center justify-center mt-12 ">
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
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>



        <!-- Carousel Indicators (Optional) -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-30">
            <div class="carousel-indicator active w-2 h-2 bg-purple-light/70 rounded-full cursor-pointer transition-all duration-300"
                data-index="0"></div>
            <div class="carousel-indicator w-2 h-2 bg-white/30 rounded-full cursor-pointer transition-all duration-300"
                data-index="1"></div>
            <div class="carousel-indicator w-2 h-2 bg-white/30 rounded-full cursor-pointer transition-all duration-300"
                data-index="2"></div>
            <div class="carousel-indicator w-2 h-2 bg-white/30 rounded-full cursor-pointer transition-all duration-300"
                data-index="3"></div>
            <div class="carousel-indicator w-2 h-2 bg-white/30 rounded-full cursor-pointer transition-all duration-300"
                data-index="4"></div>
        </div>

    </section>

    <!-- Popular Products Row (Horizontal Carousel) -->
    <section class="w-full pb-14 relative group ">
        <!-- <button id="prevBtn" class="hidden md:flex absolute left-2 top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/80 border border-purple-medium text-side items-center justify-center shadow hover:bg-white">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button id="nextBtn" class="hidden md:flex absolute right-2 top-1/2 -translate-y-1/2 z-10 h-10 w-10 rounded-full bg-white/80 border border-purple-medium text-side items-center justify-center shadow hover:bg-white">
            <i class="fas fa-chevron-right"></i>
        </button> -->

        <div id="carousel" class="w-full overflow-x-auto no-scrollbar scroll-smooth snap-x snap-mandatory">
            <div class="flex w-max">

                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>
                <!-- Slide -->
                <div
                    class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-white via-lav2 to-white p-6 flex flex-col border-t border-gray-200">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                    <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                    <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                    <button
                        class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                        Now</button>
                </div>



            </div>
        </div>
    </section>

    <!-- Spotlight Grid -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Playstation 5 Card -->
            <section class="relative overflow-hidden rounded-2xl bg-white shadow-card">
                <div class="absolute inset-0 bg-gradient-to-br from-lav2 via-white to-white"></div>
                <div class="relative p-8 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                    <div class="order-2 sm:order-1">
                        <h2 class="text-3xl sm:text-4xl font-semibold">Luxury Watch</h2>
                        <p class="mt-3 text-sm text-side/70 max-w-md">Premium craftsmanship meets timeless elegance.
                            Discover our exclusive collection of luxury timepieces.</p>
                    </div>
                    <div class="order-1 sm:order-2 h-48 sm:h-56 md:h-64">
                        <img src="images/x1.jpg" alt="Luxury Watch" class="h-full w-full object-cover rounded-xl">
                    </div>
                </div>
            </section>

            <!-- Macbook Air Card -->
            <section class="relative overflow-hidden rounded-2xl bg-white shadow-card md:row-span-2">
                <div class="absolute inset-0 bg-gradient-to-br from-white via-lav2 to-white"></div>
                <div class="relative grid grid-cols-1 h-full">
                    <div class="p-5 md:p-12 lg:p-14 flex flex-col justify-center max-w-xl">
                        <h3 class="text-5xl leading-none font-light">Premium</h3>
                        <h3 class="text-6xl sm:text-7xl font-semibold -mt-2">Collection</h3>
                        <p class="mt-4 text-side/70 text-sm">Exclusive timepieces from world-renowned brands. Each
                            watch tells a story of heritage and innovation.</p>
                        <button
                            class="mt-6 self-start px-5 py-2.5 rounded-full border border-purple-medium hover:border-purple-dark text-side hover:text-purple-darkest">Shop
                            Now</button>
                    </div>
                    <div class="px-6 pb-6 md:px-10 md:pb-10">
                        <img src="images/x3.jpg" alt="Premium Watch Collection"
                            class="h-44 sm:h-56 md:h-72 w-full object-cover rounded-xl">
                    </div>
                </div>
            </section>

            <!-- AirPods Max Card -->
            <section class="relative overflow-hidden rounded-2xl bg-white shadow-card grid grid-cols-2">
                <div class="p-8">
                    <p class="uppercase text-xs tracking-wider text-side/70">Swiss Made</p>
                    <h4 class="text-2xl font-semibold leading-tight">Automatic<br>Movement</h4>
                    <p class="mt-2 text-sm text-side/70">Precision engineering meets traditional watchmaking
                        excellence.</p>
                </div>
                <div class="p-6">
                    <img src="images/x2.jpg" alt="Automatic Watch Movement"
                        class="h-full w-full object-cover rounded-xl">
                </div>
            </section>

            <!-- Vision Pro Card -->
            <!-- <section
                    class="relative overflow-hidden rounded-2xl bg-purple-darkest text-white shadow-card grid grid-cols-2">
                    <div class="p-8">
                        <p class="uppercase text-xs tracking-wider text-white/70">Apple</p>
                        <h4 class="text-2xl font-semibold">Vision Pro</h4>
                        <p class="mt-2 text-sm text-white/80">An immersive way to experience entertainment.</p>
                    </div>
                    <div class="p-6">
                        <div class="h-full w-full rounded-xl bg-gradient-to-b from-white/30 to-white/10"></div>
                    </div>
                </section> -->
        </div>
    </main>

    <!-- Product Grid Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
            <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
        </div>

        <!-- Product Tabs -->
        <div class="flex justify-center mb-8">
            <div class="flex space-x-8 border-b border-gray-200">
                <button class="pb-2 px-1 border-b-2 border-side font-medium text-side">New Arrival</button>
                <button class="pb-2 px-1 text-gray-500 hover:text-side">Bestseller</button>
                <button class="pb-2 px-1 text-gray-500 hover:text-side">Featured Products</button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5"> -->

            <!-- Product Card 1 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w1.jpg" alt="Luxury Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Luxury Watch Collection</h3>
                    <p class="text-side/70 text-sm mb-3">Premium craftsmanship meets timeless elegance</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$899</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w2.jpg" alt="Premium Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Swiss Made Timepiece</h3>
                    <p class="text-side/70 text-sm mb-3">Automatic movement with precision engineering</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$1,299</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w3.jpg" alt="Classic Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Classic Elegance</h3>
                    <p class="text-side/70 text-sm mb-3">Timeless design with modern sophistication</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$799</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w4.jpg" alt="Sport Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Sport Chronograph</h3>
                    <p class="text-side/70 text-sm mb-3">Performance meets style in every detail</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$649</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w5.jpg" alt="Luxury Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Premium Collection</h3>
                    <p class="text-side/70 text-sm mb-3">Exclusive timepieces for discerning collectors</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$1,899</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w6.jpg" alt="Modern Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Modern Minimalist</h3>
                    <p class="text-side/70 text-sm mb-3">Clean lines and contemporary aesthetics</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$549</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 7 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w7.jpg" alt="Vintage Watch" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Vintage Heritage</h3>
                    <p class="text-side/70 text-sm mb-3">Timeless classics with rich history</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$2,199</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Product Card 8 -->
            <div
                class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <div class="relative">
                    <img src="images/w8.jpg" alt="Limited Edition" class="w-full h-64 object-cover">
                    <button
                        class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50">
                        <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-side text-lg mb-2">Limited Edition</h3>
                    <p class="text-side/70 text-sm mb-3">Rare and exclusive collector's piece</p>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-side">$3,499</span>
                        <button class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-colors">Buy
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotional Banner Section -->
    <section class="w-full py-16 bg-gradient-to-r from-gray-800 via-gray-900 to-gray-800 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-black/20"></div>

        <!-- Decorative Devices Left Side -->
        <div class="absolute left-8 top-8 w-32 h-32 opacity-60">
            <div
                class="w-full h-full bg-gradient-to-br from-purple-400 to-blue-500 rounded-lg transform rotate-12 shadow-2xl">
            </div>
        </div>
        <div class="absolute left-16 top-24 w-24 h-24 opacity-50">
            <div
                class="w-full h-full bg-gradient-to-br from-blue-300 to-white rounded-lg transform -rotate-6 shadow-xl">
            </div>
        </div>

        <!-- Decorative Devices Right Side -->
        <div class="absolute right-12 top-12 w-20 h-32 opacity-70">
            <div
                class="w-full h-full bg-gradient-to-br from-purple-500 to-pink-400 rounded-2xl transform rotate-12 shadow-2xl">
            </div>
        </div>
        <div class="absolute right-8 top-32 w-16 h-16 opacity-60">
            <div class="w-full h-full bg-gradient-to-br from-rose-300 to-pink-300 rounded-full shadow-xl"></div>
        </div>

        <!-- Main Content -->
        <div class="relative z-10 max-w-4xl mx-auto text-center px-6">
            <!-- Main Title -->
            <h2 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">Big
                    Summer</span>
                <span class="text-white"> Sale</span>
            </h2>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Discover exclusive luxury timepieces with incredible discounts. Premium craftsmanship meets
                unbeatable prices.
            </p>

            <!-- Call to Action Button -->
            <button
                class="bg-gray-700 text-white px-8 py-4 rounded-lg border-2 border-white/30 hover:bg-gray-600 hover:border-white/50 transition-all duration-300 text-lg font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Shop Now
            </button>

            <!-- Additional Info -->
            <div class="mt-8 flex flex-wrap justify-center items-center gap-6 text-gray-400">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Free Shipping</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Limited Time Offer</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span>Premium Quality</span>
                </div>
            </div>
        </div>

        <!-- Bottom Decorative Elements -->
        <div
            class="absolute bottom-8 left-1/4 w-16 h-16 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full opacity-40 animate-pulse">
        </div>
        <div class="absolute bottom-12 right-1/4 w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full opacity-50 animate-pulse"
            style="animation-delay: 1s;"></div>
    </section>


    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center my-12">
            <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
            <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Slide -->
            <div
                class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200">
                <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                <button
                    class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                    Now</button>
            </div>
            <!-- Slide -->
            <div
                class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200">
                <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                <button
                    class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                    Now</button>
            </div>
            <!-- Slide -->
            <div
                class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200">
                <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                <button
                    class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                    Now</button>
            </div>
            <!-- Slide -->
            <div
                class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200">
                <img src="images/w1.jpg" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full">
                <h5 class="text-2xl font-semibold">Luxury Watch</h5>
                <p class="mt-2 text-sm text-side/70">Premium craftsmanship meets timeless elegance.</p>
                <button
                    class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side">Shop
                    Now</button>
            </div>

        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-purple-darkest text-white mt-10">
        <!-- Newsletter Section -->
        <div class="bg-side py-4">
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
        </div>
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

    <script src="js/user_script.js"></script>

    <!-- @notifyJs -->

</body>

</html>