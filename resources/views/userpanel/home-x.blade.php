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

            <!-- Black Shadow Overlay -->
            <div class="absolute inset-0 z-5 bg-black/50"></div>

            <!-- Gradient Overlay -->
            <div class="absolute inset-0 z-10 bg-gradient-to-br from-black/20 via-black/30 to-black/50"></div>

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
                        class="inline-flex items-center gap-3 bg-white/30 backdrop-blur-sm rounded-full px-6 py-3 mb-8 border border-white/50 shadow-lg">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <div class="text-white font-mono text-lg font-semibold" id="realtime-clock">
                            00:00:00
                        </div>
                        <span class="text-white/80 text-sm">Live Time</span>
                    </div>

                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                        Premium
                        <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                            Watches
                        </span>
                        <br>
                        Collection
                    </h1>

                    <p class="text-lg md:text-xl text-white/90 mb-8 max-w-xl mx-auto lg:mx-0">
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
                        <p class="text-white/80 text-sm mb-4 uppercase tracking-wider">Featured Luxury Brands</p>
                        <div class="flex flex-wrap justify-center lg:justify-start items-center gap-6 opacity-90">
                            <div
                                class="bg-white/80 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-gray-800 text-sm shadow-sm">
                                ROLEX</div>
                            <div
                                class="bg-white/80 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-gray-800 text-sm shadow-sm">
                                OMEGA</div>
                            <div
                                class="bg-white/80 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-gray-800 text-sm shadow-sm hover:bg-white transition-colors">
                                <a href="https://www.3watches.com/" target="_blank"
                                    class="text-gray-800 hover:text-purple-darkest">3WATCHES</a>
                            </div>
                            <div
                                class="bg-white/80 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-gray-800 text-sm shadow-sm">
                                PATEK</div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button
                            class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-8 py-4 rounded-full font-semibold text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 hover:scale-105">
                            Shop Now
                        </button>
                        <button
                            class="bg-white/90 backdrop-blur-sm text-gray-800 px-8 py-4 rounded-full font-semibold text-lg border-2 border-white/70 hover:bg-white hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
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
                        class="absolute -bottom-6 -left-6 bg-white/95 backdrop-blur-sm rounded-xl p-3 shadow-xl border border-white/70 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-gray-800 text-sm font-semibold">Shipping Now</span>
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

        <!-- category start  -->
        <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-sm p-6 my-12">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <!-- <h2 class="text-2xl font-semibold mr-2" style="color: #3F4673;">Shop From</h2> -->
                    <h2 class="text-2xl font-semibold" style="color: #3F4673;">Top Categories</h2>
                    <div class="ml-2 h-0.5 w-4" style="background-color: #3F4673;"></div>
                </div>
                <button class="view-all-btn flex items-center text-sm font-medium" style="color: #3F4673;">
                    View All
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <!-- Categories Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-7 gap-6">
                <!-- Mobile Category (Highlighted) -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 2H7C5.9 2 5 2.9 5 4v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-5 18c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm3-3H9V5h6v12z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Cosmetics</span>
                </div>

                <!-- Cosmetics Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16a6.5 6.5 0 0 1 0-13zm0 2C7.01 5 5 7.01 5 9.5S7.01 14 9.5 14 14 11.99 14 9.5 11.99 5 9.5 5z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Cosmetics</span>
                </div>

                <!-- Electronics Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Electronics</span>
                </div>

                <!-- Furniture Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 9L12 2 2 9h3v12h14V9h3zM12 17.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM16 15h-8v-2h8v2z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Furniture</span>
                </div>

                <!-- Watches Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Watches</span>
                </div>

                <!-- Decor Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 22c4.97 0 9-4.03 9-9-4.97 0 9 4.03-9 9z" />
                            <path d="M7 2v3h2V3h6v2h2V2h-2V1h-6v1H7z" />
                            <path d="M12 6L7 11l5 5 5-5-5-5z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Decor</span>
                </div>

                <!-- Accessories Category -->
                <div class="category-item flex flex-col items-center p-4 rounded-xl" style="background-color: #F4EFFF;">
                    <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3" style="background-color: #E4DEFF;">
                        <svg class="w-8 h-8" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                        </svg>
                    </div>
                    <span class="text-sm font-medium" style="color: #3F4673;">Accessories</span>
                </div>
            </div>
        </div>
        <!-- category end  -->

        <!-- Grab the best deal start  -->
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold text-purple-darkest">
                        Grab the best deal on
                        <!-- <span class="text-purple-medium border-b-2 border-purple-medium">Smartphones</span> -->
                    </h2>
                </div>
                <button class="flex items-center text-purple-medium hover:text-purple-dark font-medium">
                    View All
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <!-- Carousel -->
            <div class="relative">
                <!-- Product Cards Container -->
                <div id="carousel" class="carousel-container flex gap-6 overflow-x-auto px-12">

                    <!-- Product 1: Galaxy S22 Ultra -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                56% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-blue-400 to-green-500 rounded-lg flex items-center justify-center">
                                        <div class="text-xs text-center">
                                            <div class="mb-2">📱</div>
                                            <div class="text-xs">Galaxy</div>
                                            <div class="text-xs">S22 Ultra</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy S22 Ultra</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹32999</span>
                            <span class="text-sm text-gray-500 line-through">₹74999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹32999</p>
                    </div>

                    <!-- Product 2: Galaxy M13 -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                56% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center" style="background: linear-gradient(135deg, #8B4513 0%, #D2691E 100%);">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-2xl font-bold text-white">M13</div>
                                            <div class="text-xs mt-1">4GB | 64GB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy M13 (4GB | 64 GB )</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹10499</span>
                            <span class="text-sm text-gray-500 line-through">₹14999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹4500</p>
                    </div>

                    <!-- Product 3: Galaxy M33 -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                56% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-orange-400 to-red-500 rounded-lg flex items-center justify-center relative">
                                        <div class="text-center">
                                            <div class="text-white text-xs mb-1">5G</div>
                                            <div class="text-white font-bold">M33</div>
                                            <div class="text-xs mt-1">4GB | 64GB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy M33 (4GB | 64 GB )</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹16999</span>
                            <span class="text-sm text-gray-500 line-through">₹24999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹8000</p>
                    </div>

                    <!-- Product 4: Galaxy M53 -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                56% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-purple-300 to-purple-600 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-white font-bold">M53</div>
                                            <div class="text-xs mt-1">4GB | 64GB</div>
                                            <div class="text-xs mt-2 bg-white/20 rounded px-1">Ultra</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy M53 (4GB | 64 GB )</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹31999</span>
                            <span class="text-sm text-gray-500 line-through">₹40999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹9000</p>
                    </div>

                    <!-- Product 5: Galaxy S22 Ultra -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                56% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center" style="background: linear-gradient(135deg, #2d5016 0%, #4CAF50 100%);">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-green-300 to-green-700 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-white font-bold">S22</div>
                                            <div class="text-xs mt-1">Ultra</div>
                                            <div class="text-xs mt-2 bg-white/20 rounded px-1">Pro</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy S22 Ultra</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹67999</span>
                            <span class="text-sm text-gray-500 line-through">₹85999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹18000</p>
                    </div>

                    <!-- Product 6: Additional phones for scrolling -->
                    <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                        <div class="relative mb-4">
                            <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                45% OFF
                            </div>
                            <div class="phone-image w-full h-48 flex items-center justify-center" style="background: linear-gradient(135deg, #FF6B6B 0%, #4ECDC4 100%);">
                                <div class="phone-screen w-24 h-40 flex flex-col items-center justify-center text-white">
                                    <div class="w-20 h-36 bg-gradient-to-b from-cyan-400 to-blue-600 rounded-lg flex items-center justify-center">
                                        <div class="text-center">
                                            <div class="text-white font-bold">A54</div>
                                            <div class="text-xs mt-1">5G</div>
                                            <div class="text-xs mt-2">128GB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-2">Galaxy A54 5G (8GB | 128GB)</h3>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl font-bold text-gray-900">₹25999</span>
                            <span class="text-sm text-gray-500 line-through">₹47999</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium">Save - ₹22000</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center my-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach($products_data->take(4) as $product)
                <!-- Slide -->
                <a href="#">
                    <div
                        class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200 hover:shadow-2xl hover:-translate-y-3 hover:rotate-1 transition-all duration-500 group cursor-pointer relative overflow-hidden">
                        <!-- Floating particles effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <div class="absolute top-4 left-4 w-2 h-2 bg-purple-400 rounded-full animate-ping"></div>
                            <div class="absolute top-8 right-6 w-1 h-1 bg-blue-400 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
                            <div class="absolute bottom-12 left-8 w-1.5 h-1.5 bg-pink-400 rounded-full animate-ping" style="animation-delay: 1s;"></div>
                        </div>

                        <div class="relative overflow-hidden rounded-xl">
                            <img src="{{ url('storage/products_images/' . $product->image) }}" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full group-hover:scale-110 group-hover:rotate-2 transition-all duration-700">
                            <!-- Glow effect overlay -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-purple-400/20 via-transparent to-blue-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                        </div>

                        <h5 class="text-2xl font-semibold group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:bg-clip-text transition-all duration-300">{{ $product->name }}</h5>
                        <p class="mt-2 text-sm text-side/70 group-hover:text-side/90 transition-colors duration-300">{{ $product->description }}</p>
                        <button
                            class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:text-white group-hover:border-transparent group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">Shop
                            Now</button>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <!-- Spotlight Grid -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5 my-12">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Playstation 5 Card -->
                <section class="relative overflow-hidden rounded-2xl bg-white shadow-card hover:shadow-2xl hover:-translate-y-3 hover:rotate-1 transition-all duration-500 group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-lav2 via-white to-white group-hover:from-emerald-50 group-hover:via-teal-50 group-hover:to-cyan-50 transition-all duration-500"></div>

                    <!-- Geometric shapes effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute top-4 left-4 w-8 h-8 border-2 border-emerald-400 rotate-45 animate-spin" style="animation-duration: 4s;"></div>
                        <div class="absolute top-8 right-6 w-6 h-6 bg-teal-400 rounded-full animate-pulse"></div>
                        <div class="absolute bottom-6 left-8 w-4 h-4 border-2 border-cyan-400 transform rotate-12 animate-bounce"></div>
                        <div class="absolute bottom-4 right-4 w-3 h-3 bg-emerald-400 transform rotate-45 animate-ping"></div>
                    </div>

                    <div class="relative p-8 md:p-10 grid grid-cols-1 sm:grid-cols-2 gap-6 items-center">
                        <div class="order-2 sm:order-1">
                            <h2 class="text-3xl sm:text-4xl font-semibold group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-emerald-600 group-hover:to-teal-600 group-hover:bg-clip-text transition-all duration-300">Luxury Watch</h2>
                            <p class="mt-3 text-sm text-side/70 max-w-md group-hover:text-side/90 transition-colors duration-300">Premium craftsmanship meets timeless elegance.
                                Discover our exclusive collection of luxury timepieces.</p>
                        </div>
                        <div class="order-1 sm:order-2 h-48 sm:h-56 md:h-64">
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="images/x1.jpg" alt="Luxury Watch" class="h-full w-full object-cover rounded-xl group-hover:scale-110 group-hover:brightness-110 transition-all duration-700">
                                <!-- Geometric overlay -->
                                <div class="absolute inset-0 bg-gradient-to-tr from-emerald-400/20 via-transparent to-teal-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                                <!-- Corner triangles -->
                                <div class="absolute top-2 left-2 w-0 h-0 border-l-4 border-t-4 border-r-4 border-b-4 border-l-emerald-400 border-t-transparent border-r-transparent border-b-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-2 right-2 w-0 h-0 border-l-4 border-t-4 border-r-4 border-b-4 border-l-transparent border-t-transparent border-r-teal-400 border-b-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Macbook Air Card -->
                <section class="relative overflow-hidden rounded-2xl bg-white shadow-card md:row-span-2 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-white via-lav2 to-white group-hover:from-purple-50 group-hover:via-blue-50 group-hover:to-pink-50 transition-all duration-500"></div>

                    <!-- Floating elements effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute top-8 left-8 w-3 h-3 bg-purple-400 rounded-full animate-bounce"></div>
                        <div class="absolute top-16 right-12 w-2 h-2 bg-blue-400 rounded-full animate-bounce" style="animation-delay: 0.5s;"></div>
                        <div class="absolute bottom-20 left-16 w-2.5 h-2.5 bg-pink-400 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
                        <div class="absolute bottom-12 right-8 w-1.5 h-1.5 bg-cyan-400 rounded-full animate-bounce" style="animation-delay: 1.5s;"></div>
                    </div>

                    <div class="relative grid grid-cols-1 h-full">
                        <div class="p-5 md:p-12 lg:p-14 flex flex-col justify-center max-w-xl">
                            <h3 class="text-5xl leading-none font-light group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:bg-clip-text transition-all duration-300">Premium</h3>
                            <h3 class="text-6xl sm:text-7xl font-semibold -mt-2 group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-blue-600 group-hover:to-pink-600 group-hover:bg-clip-text transition-all duration-300">Collection</h3>
                            <p class="mt-4 text-side/70 text-sm group-hover:text-side/90 transition-colors duration-300">Exclusive timepieces from world-renowned brands. Each
                                watch tells a story of heritage and innovation.</p>
                            <button
                                class="mt-6 self-start px-5 py-2.5 rounded-full border border-purple-medium hover:border-purple-dark text-side hover:text-purple-darkest group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:text-white group-hover:border-transparent group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">Shop
                                Now</button>
                        </div>
                        <div class="px-6 pb-6 md:px-10 md:pb-10">
                            <div class="relative overflow-hidden rounded-xl">
                                <img src="images/x3.jpg" alt="Premium Watch Collection"
                                    class="h-44 sm:h-56 md:h-72 w-full object-cover rounded-xl group-hover:scale-110 transition-transform duration-700">
                                <!-- Glow overlay -->
                                <div class="absolute inset-0 bg-gradient-to-tr from-purple-400/20 via-transparent to-blue-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                                <!-- Corner highlights -->
                                <div class="absolute top-2 left-2 w-6 h-6 border-l-2 border-t-2 border-purple-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-2 right-2 w-6 h-6 border-r-2 border-b-2 border-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- AirPods Max Card -->
                <section class="relative overflow-hidden rounded-2xl bg-white shadow-card grid grid-cols-2 hover:shadow-2xl hover:-translate-y-2 hover:scale-105 transition-all duration-500 group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-white via-lav2 to-white group-hover:from-amber-50 group-hover:via-orange-50 group-hover:to-red-50 transition-all duration-500"></div>

                    <!-- Mechanical gears effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute top-6 left-6 w-12 h-12 border-4 border-amber-400 rounded-full animate-spin" style="animation-duration: 3s;"></div>
                        <div class="absolute top-6 left-6 w-8 h-8 border-2 border-orange-400 rounded-full animate-spin" style="animation-duration: 2s; animation-direction: reverse;"></div>
                        <div class="absolute bottom-6 right-6 w-10 h-10 border-3 border-red-400 rounded-full animate-spin" style="animation-duration: 4s;"></div>
                        <div class="absolute bottom-6 right-6 w-6 h-6 border-2 border-amber-400 rounded-full animate-spin" style="animation-duration: 1.5s; animation-direction: reverse;"></div>
                    </div>

                    <div class="p-8 relative z-10">
                        <p class="uppercase text-xs tracking-wider text-side/70 group-hover:text-amber-600 transition-colors duration-300">Swiss Made</p>
                        <h4 class="text-2xl font-semibold leading-tight group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-amber-600 group-hover:to-orange-600 group-hover:bg-clip-text transition-all duration-300">Automatic<br>Movement</h4>
                        <p class="mt-2 text-sm text-side/70 group-hover:text-side/90 transition-colors duration-300">Precision engineering meets traditional watchmaking
                            excellence.</p>
                    </div>
                    <div class="p-6 relative z-10">
                        <div class="relative overflow-hidden rounded-xl">
                            <img src="images/x2.jpg" alt="Automatic Watch Movement"
                                class="h-full w-full object-cover rounded-xl group-hover:scale-110 group-hover:contrast-125 transition-all duration-700">
                            <!-- Mechanical overlay -->
                            <div class="absolute inset-0 bg-gradient-to-bl from-amber-400/20 via-transparent to-orange-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                            <!-- Gear indicators -->
                            <div class="absolute top-2 left-2 w-4 h-4 border-2 border-amber-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute top-2 right-2 w-3 h-3 border-2 border-orange-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-2 left-2 w-3 h-3 border-2 border-red-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-2 right-2 w-4 h-4 border-2 border-amber-400 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
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


                @foreach($products_data->take(8) as $product)

                <!-- Product Card 1 -->
                <div
                    class="bg-white rounded-lg border border-gray-200 overflow-hidden hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group cursor-pointer">
                    <div class="relative overflow-hidden">
                        <img src="{{ url('storage/products_images/' . $product->image) }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300"></div>
                        <button
                            class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center shadow-md hover:bg-gray-50 transform translate-x-12 group-hover:translate-x-0 transition-transform duration-300">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </button>
                        <div class="absolute bottom-3 left-3 right-3 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <button class="w-full bg-side text-white py-2 rounded-md hover:bg-side/90 transition-colors text-sm font-medium">
                                Quick View
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-side text-lg mb-2 group-hover:text-side/80 transition-colors">{{ $product->name }}</h3>
                        <p class="text-side/70 text-sm mb-3">{{ $product->description }}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-side group-hover:text-side/90 transition-colors">${{ $product->price }}</span>
                            <button
                                class="bg-side text-white px-4 py-2 rounded-md hover:bg-side/90 transition-all duration-300 hover:scale-105 hover:shadow-lg">Buy
                                Now</button>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </section>

        <!-- small carasol -->
        <div class="w-full">
            <div class="relative bg-gradient-to-br from-slate-800 via-slate-700 to-slate-900 shadow-2xl">
                <!-- Carousel Container -->
                <div class="relative h-96 md:h-[500px] overflow-hidden">

                    <!-- Slide 1 -->
                    <div class="carousel-slide active absolute inset-0 flex items-center justify-between px-8 md:px-20 lg:px-32">
                        <div class="text-white z-10 max-w-md lg:max-w-lg">
                            <p class="text-sm md:text-base lg:text-lg text-blue-300 mb-2">Best Deal Online on smart watches</p>
                            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">SMART WEARABLE.</h1>
                            <p class="text-xl md:text-2xl lg:text-3xl text-orange-400 font-semibold">UP to 80% OFF</p>
                        </div>
                        <div class="relative">
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-80 lg:h-80 bg-gradient-to-br from-orange-400 to-orange-600 rounded-3xl transform rotate-12 watch-glow flex items-center justify-center">
                                <div class="w-40 h-40 md:w-52 md:h-52 lg:w-64 lg:h-64 bg-black rounded-2xl flex flex-col items-center justify-center text-white">
                                    <div class="text-xs md:text-sm lg:text-base text-blue-400 mb-1">08:26:00</div>
                                    <div class="text-xs md:text-sm text-red-400">SAT 04/06</div>
                                    <div class="mt-2 text-xs md:text-sm">
                                        <span class="text-green-400">♥</span>
                                        <span class="text-white ml-1">102</span>
                                    </div>
                                    <div class="text-xs md:text-sm mt-1 text-white">254 ⚡</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide absolute inset-0 flex items-center justify-between px-8 md:px-20 lg:px-32">
                        <div class="text-white z-10 max-w-md lg:max-w-lg">
                            <p class="text-sm md:text-base lg:text-lg text-purple-300 mb-2">Premium Collection Available</p>
                            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">FITNESS TRACKER.</h1>
                            <p class="text-xl md:text-2xl lg:text-3xl text-green-400 font-semibold">UP to 70% OFF</p>
                        </div>
                        <div class="relative">
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-80 lg:h-80 bg-gradient-to-br from-purple-500 to-pink-600 rounded-3xl transform -rotate-12 watch-glow flex items-center justify-center">
                                <div class="w-40 h-40 md:w-52 md:h-52 lg:w-64 lg:h-64 bg-black rounded-2xl flex flex-col items-center justify-center text-white">
                                    <div class="text-xs md:text-sm text-purple-400 mb-1">STEPS</div>
                                    <div class="text-lg md:text-xl lg:text-2xl font-bold">8,247</div>
                                    <div class="text-xs md:text-sm text-pink-400 mt-2">CALORIES</div>
                                    <div class="text-sm md:text-base lg:text-lg font-semibold">342</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide absolute inset-0 flex items-center justify-between px-8 md:px-20 lg:px-32">
                        <div class="text-white z-10 max-w-md lg:max-w-lg">
                            <p class="text-sm md:text-base lg:text-lg text-cyan-300 mb-2">Latest Technology Inside</p>
                            <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold mb-4">HEALTH MONITOR.</h1>
                            <p class="text-xl md:text-2xl lg:text-3xl text-yellow-400 font-semibold">UP to 60% OFF</p>
                        </div>
                        <div class="relative">
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-80 lg:h-80 bg-gradient-to-br from-cyan-400 to-blue-600 rounded-3xl transform rotate-6 watch-glow flex items-center justify-center">
                                <div class="w-40 h-40 md:w-52 md:h-52 lg:w-64 lg:h-64 bg-black rounded-2xl flex flex-col items-center justify-center text-white">
                                    <div class="text-xs md:text-sm text-cyan-400 mb-1">HEART RATE</div>
                                    <div class="text-lg md:text-xl lg:text-2xl font-bold text-red-400">72 BPM</div>
                                    <div class="text-xs md:text-sm text-cyan-400 mt-2">OXYGEN</div>
                                    <div class="text-sm md:text-base lg:text-lg font-semibold text-green-400">98%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prevBtn" class="absolute left-4 md:left-8 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center text-white hover:bg-white/30 transition-all duration-200">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>

                <button id="nextBtn" class="absolute right-4 md:right-8 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm rounded-full w-10 h-10 md:w-12 md:h-12 flex items-center justify-center text-white hover:bg-white/30 transition-all duration-200">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>

                <!-- Dot Indicators -->
                <div class="absolute bottom-6 md:bottom-8 left-8 md:left-20 lg:left-32 flex space-x-2">
                    <button class="dot-indicator w-3 h-3 md:w-4 md:h-4 rounded-full bg-white/50 transition-all duration-200 active-dot" data-slide="0"></button>
                    <button class="dot-indicator w-3 h-3 md:w-4 md:h-4 rounded-full bg-white/30 transition-all duration-200" data-slide="1"></button>
                    <button class="dot-indicator w-3 h-3 md:w-4 md:h-4 rounded-full bg-white/30 transition-all duration-200" data-slide="2"></button>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center my-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach($products_data->take(4) as $product)
                <!-- Slide -->
                <a href="#">
                    <div
                        class="m-2 rounded-xl min-w-[220px] sm:min-w-[260px] md:min-w-[300px] lg:min-w-[340px] snap-start bg-gradient-to-br from-lav2 via-white to-white p-6 flex flex-col border-t border-gray-200 hover:shadow-2xl hover:-translate-y-3 hover:rotate-1 transition-all duration-500 group cursor-pointer relative overflow-hidden">
                        <!-- Floating particles effect -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <div class="absolute top-4 left-4 w-2 h-2 bg-purple-400 rounded-full animate-ping"></div>
                            <div class="absolute top-8 right-6 w-1 h-1 bg-blue-400 rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
                            <div class="absolute bottom-12 left-8 w-1.5 h-1.5 bg-pink-400 rounded-full animate-ping" style="animation-delay: 1s;"></div>
                        </div>

                        <div class="relative overflow-hidden rounded-xl">
                            <img src="{{ url('storage/products_images/' . $product->image) }}" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full group-hover:scale-110 group-hover:rotate-2 transition-all duration-700">
                            <!-- Glow effect overlay -->
                            <div class="absolute inset-0 bg-gradient-to-tr from-purple-400/20 via-transparent to-blue-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-xl"></div>
                        </div>

                        <h5 class="text-2xl font-semibold group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:bg-clip-text transition-all duration-300">{{ $product->name }}</h5>
                        <p class="mt-2 text-sm text-side/70 group-hover:text-side/90 transition-colors duration-300">{{ $product->description }}</p>
                        <button
                            class="mt-6 self-start px-5 py-2 rounded-md border border-purple-medium hover:border-purple-dark text-side group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:text-white group-hover:border-transparent group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">Shop
                            Now</button>
                    </div>
                </a>
                @endforeach








            </div>


        </div>

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