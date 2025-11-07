<x-user_navbar>
    <x-slot name="body">
        @php
        $user = Auth::user();
        @endphp

          <!-- back to home -->
    <!-- <a href="#home">
      <button id="backToHomeBtn"
        class="sticky w-14 h-14 bg-gradient-to-br from-purple-600 to-purple-800 rounded-full flex items-center justify-center text-white opacity-100 visible transition-all duration-300 hover:scale-110 glow-effect z-50 shadow-lg"
        href="#home" title="Back to Home" style="position: fixed; bottom: 20px; left: 20px">
        <i class="fas fa-home text-lg"></i>
      </button>
    </a> -->

        <!-- Hero Section -->
        <section class="relative  flex items-center justify-center px-8 py-20  overflow-hidden">

            <!-- Auto Carousel Background -->
            <div class="absolute inset-0 z-0">
                <!-- Background Image 1 -->
                <div class="carousel-item active absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857101/x1_ywmddv.jpg');">
                </div>

                <!-- Background Image 2 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857030/w1_jfhioh.jpg');">
                </div>

                <!-- Background Image 3 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857094/x2_ri7ffy.jpg');">
                </div>

                <!-- Background Image 4 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857049/w2_gwbcs8.jpg');">
                </div>

                <!-- Background Image 5 -->
                <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                    style="background-image: url('https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857098/x3_kndln3.jpg');">
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


        <!-- category start 1 -->
        <div class="max-w-8xl xl:mx-5 mx-auto lg:px-8 py-8 sm:py-8 lg:py-10 ">

            <!-- Header Section -->
            <div class="text-center ">
                <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2 sm:mb-3 tracking-tight">
                    Explore Our Collections
                </h1>
                <!-- <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto px-4">
                    Discover timepieces that define elegance, precision, and style
                </p> -->
            </div>

            <!-- Scroll hint for mobile/tablet -->
            <div class="lg:hidden text-center mb-4">
                <p class="text-xs text-gray-500 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                    Swipe to explore more
                </p>
            </div>


            <!-- Categories Container -->
            <div class="scroll-wrapper p-4 bg-white rounded-xl">
                <!-- Header Section -->
                <div class="flex justify-between items-center ">
                    <div class="flex items-center">
                        <!-- <h2 class="text-2xl font-semibold mr-2" style="color: #3F4673;">Shop From</h2> -->
                        <h2 class="text-2xl font-semibold" style="color: #3F4673;">Top Categories</h2>
                        <div class="ml-2 h-0.5 w-4" style="background-color: #3F4673;"></div>
                    </div>
                    <a href="/all_products_view_page_filter">
                        <button class="view-all-btn flex items-center text-sm font-medium" style="color: #3F4673;">
                            View All
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </a>

                </div>

                <div class="scroll-container px-4 lg:px-0">


                    <!-- Smart Watches -->
                    <a href="#smart" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">
                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">
                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Smart
                            </h3>
                        </div>
                    </a>

                    <!-- Smart Watches -->
                    <a href="#smart" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">
                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">
                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Smart
                            </h3>
                        </div>
                    </a>

                    <!-- Smart Watches -->
                    <a href="#smart" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">
                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">
                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Smart
                            </h3>
                        </div>
                    </a>

                    <!-- Luxury Watches -->
                    <a href="#luxury" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Luxury
                            </h3>
                        </div>
                    </a>

                    <!-- Sports Watches -->
                    <a href="#sports" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Sports
                            </h3>
                        </div>
                    </a>

                    <!-- Fashion Watches -->
                    <a href="#fashion" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Fashion
                            </h3>
                        </div>
                    </a>

                    <!-- Chronograph -->
                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>

                    <!-- Analog Watches -->
                    <a href="#analog" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Analog
                            </h3>
                        </div>
                    </a>

                    <!-- Digital Watches -->
                    <a href="#digital" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">
                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Digital
                            </h3>
                        </div>
                    </a>

                    <!-- Chronograph -->


                    <!-- Vintage Collection -->
                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>



                    <!-- Diving Watches -->
                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>



                    <!-- Women's Collection -->
                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>



                    <!-- Men's Collection -->

                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>




                    <!-- Limited Edition -->

                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">
                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-6 h-6 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>



                    <!-- Men's Collection -->

                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-7 h-7 sm:w-8 sm:h-8 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>


                    <!-- Limited Edition -->


                    <a href="#chronograph" class="category-item category-card group">
                        <div class=" rounded-xl shadow-lg hover:shadow-2xl p-3 border h-full" style="background-color: #F4EFFF;">

                            <div class="shine-effect w-12 h-12 mx-auto mb-2  rounded-xl flex items-center justify-center category-icon" style="background-color: #E4DEFF;">

                                <svg class="w-7 h-7 sm:w-8 sm:h-8 " style="color: #4C4B7C;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                </svg>
                            </div>
                            <h3 class="text-center text-xs font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
                                Chrono
                            </h3>
                        </div>
                    </a>


                </div>
            </div>

            <!-- Bottom CTA -->
            <!-- <div class="text-center mt-12 sm:mt-16 lg:mt-20">
            <p class="text-sm sm:text-base text-gray-600 mb-4 sm:mb-6">Can't find what you're looking for?</p>
            <a href="#all" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 sm:px-8 py-3 sm:py-4 rounded-full text-sm sm:text-base font-semibold hover:shadow-xl transition-all hover:scale-105 active:scale-100">
                View All Collections
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div> -->

        </div>

        <div class="max-w-7xl mx-auto py-8">
            <!-- <h1 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900">Price drop on electronics</h1> -->
            <!-- Header Section -->
            <div class="flex justify-between items-center my-3">
                <div class="flex items-center">
                    <!-- <h2 class="text-2xl font-semibold mr-2" style="color: #3F4673;">Shop From</h2> -->
                    <h1 class="text-3xl font-semibold" style="color: #3F4673;">Top Products</h1>
                    <div class="ml-2 h-0.5 w-4" style="background-color: #3F4673;"></div>
                </div>
                <a href="/all_products_view_page_filter">
                    <button class="view-all-btn flex items-center text-sm font-medium" style="color: #3F4673;">
                        View All
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </a>

            </div>

            <!-- Product Grid: 2 columns on mobile, 3 on tablet, 4 on desktop -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">

                @foreach ($products_data->take(10) as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 relative group border border-gray-100">

                    {{-- ✅ Wishlist Button --}}
                    @if($user && $user->wishlist()->where('product_id', $product->id)->exists())
                    <form action="/remove_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/90 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-solid fa-heart text-red-500 text-lg"></i>
                        </button>
                    </form>
                    @else
                    <form action="/add_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/80 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-regular fa-heart text-lg group-hover:text-red-500 transition"></i>
                        </button>
                    </form>
                    @endif

                    {{-- Product Info --}}
                    <a href="/single_product_view/{{ $product->id }}">
                        <div class="p-4">
                            {{-- Product Image --}}
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                                <img src="{{ $product->photo_url }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>

                            {{-- Product Name --}}
                            <p class="text-sm font-semibold text-gray-900 mt-3 truncate">
                                {{ $product->name }}
                            </p>

                            {{-- Product Description (short & trimmed) --}}
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($product->description, 60, '...') }}
                            </p>

                            {{-- Product Price --}}
                            <p class="text-sm font-bold text-purple-700 mt-2">
                                ₹{{ number_format($product->price, 2) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

        <!-- category start 2 -->
        <div class="max-w-8xl xl:mx-5 mx-auto bg-white md:rounded-lg md:shadow-sm  p-6">
            <!-- Header Section -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <h2 class="text-2xl font-semibold" style="color: #3F4673;">Top Categories</h2>
                    <div class="ml-2 h-0.5 w-4" style="background-color: #3F4673;"></div>
                </div>
                <a href="/all_products_view_page_filter">
                    <button class="view-all-btn flex items-center text-sm font-medium" style="color: #3F4673;">
                        View All
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </a>

            </div>

            <!-- Categories Grid - Scrollable on Mobile/Tablet -->
            <div class="overflow-x-auto hide-scrollbar category-scroll -mx-2 px-2">
                <div class="grid grid-flow-col auto-cols-[minmax(120px,1fr)] md:grid-cols-4 lg:grid-cols-7 gap-4 md:grid-flow-row">
                    <!-- Mobile Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17 2H7C5.9 2 5 2.9 5 4v16c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-5 18c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm3-3H9V5h6v12z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Mobile</span>
                    </div>

                    <!-- Cosmetics Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16a6.5 6.5 0 0 1 0-13zm0 2C7.01 5 5 7.01 5 9.5S7.01 14 9.5 14 14 11.99 14 9.5 11.99 5 9.5 5z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Cosmetics</span>
                    </div>

                    <!-- Electronics Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Electronics</span>
                    </div>

                    <!-- Furniture Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 9L12 2 2 9h3v12h14V9h3zM12 17.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM16 15h-8v-2h8v2z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Furniture</span>
                    </div>

                    <!-- Watches Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Watches</span>
                    </div>

                    <!-- Decor Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 22c4.97 0 9-4.03 9-9-4.97 0 9 4.03-9 9z" />
                                <path d="M7 2v3h2V3h6v2h2V2h-2V1h-6v1H7z" />
                                <path d="M12 6L7 11l5 5 5-5-5-5z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Decor</span>
                    </div>

                    <!-- Accessories Category -->
                    <div class="category-item flex flex-col items-center p-3 rounded-lg" style="background-color: #F4EFFF;">
                        <div class="w-12 h-12 rounded-full flex items-center justify-center mb-2" style="background-color: #E4DEFF;">
                            <svg class="w-6 h-6" style="color: #4C4B7C;" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z" />
                            </svg>
                        </div>
                        <span class="text-xs font-medium text-center" style="color: #3F4673;">Accessories</span>
                    </div>
                </div>
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
                                <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857101/x1_ywmddv.jpg" alt="Luxury Watch" class="h-full w-full object-cover rounded-xl group-hover:scale-110 group-hover:brightness-110 transition-all duration-700">
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
                                <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857098/x3_kndln3.jpg" alt="Premium Watch Collection"
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
                            <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857094/x2_ri7ffy.jpg" alt="Automatic Watch Movement"
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

        <div class="container mx-auto px-4">
            <div class="text-center my-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>

            <!-- Mobile: Scrollable + Reduced Height -->
            <div class="flex md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 overflow-x-auto md:overflow-visible snap-x snap-mandatory pb-4">

                @foreach($products_data->take(4) as $product)
                <a href="/single_product_view/{{ $product->id }}" class="snap-start">
                    <div
                        class="m-2 rounded-xl min-w-[200px] sm:min-w-[250px] md:min-w-[300px] bg-gradient-to-br from-lav2 via-white to-white 
                       p-4 md:p-6 flex flex-col border-t border-gray-200 hover:shadow-2xl 
                       hover:-translate-y-3 hover:rotate-1 transition-all duration-500 group cursor-pointer relative overflow-hidden">

                        <div class="relative overflow-hidden rounded-xl">
                            <!-- Reduce image height only on mobile -->
                            <img src="{{ $product->photo_url }}"
                                alt="Luxury Watch"
                                class="h-40 sm:h-48 md:h-56 w-full object-cover rounded-xl mb-4 md:mb-6 
                                group-hover:scale-110 group-hover:rotate-2 transition-all duration-700">
                        </div>

                        <!-- Reduce text spacing on mobile -->
                        <h5 class="text-lg sm:text-xl md:text-2xl font-semibold">
                            {{ $product->name }}
                        </h5>
                        <p class="mt-1 md:mt-2 text-xs sm:text-sm text-side/70">
                            {{ $product->description }}
                        </p>

                        <button
                            class="mt-4 md:mt-6 self-start px-4 py-1.5 md:px-5 md:py-2 rounded-md border 
                           border-purple-medium text-side hover:border-purple-dark 
                           group-hover:bg-gradient-to-r group-hover:from-purple-600 
                           group-hover:to-blue-600 group-hover:text-white group-hover:border-transparent 
                           group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">
                            Shop Now
                        </button>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="max-w-7xl mx-auto  py-8">
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900">Price drop on electronics</h1>

            <!-- Product Grid: 2 columns on mobile, 3 on tablet, 4 on desktop -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @foreach ($products_data->take(10) as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 relative group border border-gray-100">

                    {{-- ✅ Wishlist Button --}}
                    @if($user && $user->wishlist()->where('product_id', $product->id)->exists())
                    <form action="/remove_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/90 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-solid fa-heart text-red-500 text-lg"></i>
                        </button>
                    </form>
                    @else
                    <form action="/add_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/80 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-regular fa-heart text-lg group-hover:text-red-500 transition"></i>
                        </button>
                    </form>
                    @endif

                    {{-- Product Info --}}
                    <a href="/single_product_view/{{ $product->id }}">
                        <div class="p-4">
                            {{-- Product Image --}}
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                                <img src="{{ $product->photo_url }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>

                            {{-- Product Name --}}
                            <p class="text-sm font-semibold text-gray-900 mt-3 truncate">
                                {{ $product->name }}
                            </p>

                            {{-- Product Description (short & trimmed) --}}
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($product->description, 60, '...') }}
                            </p>

                            {{-- Product Price --}}
                            <p class="text-sm font-bold text-purple-700 mt-2">
                                ₹{{ number_format($product->price, 2) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

        <div class="max-w-[1200px] mx-auto my-12">
            <!-- Section Header -->
            <div class="text-center my-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>
            <!-- Grid Container with 3 columns -->
            <div class="grid grid-cols-3 auto-rows-[200px] gap-3">
                <!-- Top Left - Chronometer Watch -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857075/w11_wkzrck.jpg"
                        alt="Chronometer"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">Senator Chronometer</p>
                        </div>
                    </div>
                </div>

                <!-- Top Center - Classic Dial (spans 2 rows) -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl row-span-2 group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857077/w12_mjj7hk.jpg"
                        alt="Classic Dial"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">Senator Excellence</p>
                        </div>
                    </div>
                </div>

                <!-- Top Right - Moonphase Watch -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857077/w13_nxgpls.jpg"
                        alt="Moonphase Watch"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">PanoMaticLunar</p>
                        </div>
                    </div>
                </div>

                <!-- Middle Left - Date Display Watch -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857078/w14_czyuvc.jpg"
                        alt="Date Display"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">Seventies Panorama Date</p>
                        </div>
                    </div>
                </div>

                <!-- Middle Right - Moon Phase Detail (spans 2 rows) -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl row-span-2 group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857079/w15_l7mfri.jpg"
                        alt="Moon Phase Detail"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">PanoReserve</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Left - Moon Phase Indicator -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857079/w16_g05aar.jpg"
                        alt="Moon Phase"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">PanoLunar Tourbillon</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Center - Sport Watch -->
                <div class="relative overflow-hidden bg-gray-100 rounded-xl group cursor-pointer">
                    <img src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857080/w17_cw9oxg.jpg"
                        alt="Sport Watch"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-xs font-light tracking-wider">GLASHÜTTE ORIGINAL</p>
                            <p class="text-lg font-semibold mt-1">SeaQ Panorama Date</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="max-w-7xl mx-auto  py-8">
            <h1 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900">Price drop on electronics</h1>

            <!-- Product Grid: 2 columns on mobile, 3 on tablet, 4 on desktop -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                @foreach ($products_data->take(10) as $product)
                <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 relative group border border-gray-100">

                    {{-- ✅ Wishlist Button --}}
                    @if($user && $user->wishlist()->where('product_id', $product->id)->exists())
                    <form action="/remove_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/90 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-solid fa-heart text-red-500 text-lg"></i>
                        </button>
                    </form>
                    @else
                    <form action="/add_wishlist/{{ $product->id }}" method="POST" class="absolute right-3 top-3 z-10">
                        @csrf
                        <button type="submit"
                            class="w-10 h-10 flex items-center justify-center bg-white/80 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                            <i class="fa-regular fa-heart text-lg group-hover:text-red-500 transition"></i>
                        </button>
                    </form>
                    @endif

                    {{-- Product Info --}}
                    <a href="/single_product_view/{{ $product->id }}">
                        <div class="p-4">
                            {{-- Product Image --}}
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                                <img src="{{ $product->photo_url }}"
                                    alt="{{ $product->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            </div>

                            {{-- Product Name --}}
                            <p class="text-sm font-semibold text-gray-900 mt-3 truncate">
                                {{ $product->name }}
                            </p>

                            {{-- Product Description (short & trimmed) --}}
                            <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                {{ \Illuminate\Support\Str::limit($product->description, 60, '...') }}
                            </p>

                            {{-- Product Price --}}
                            <p class="text-sm font-bold text-purple-700 mt-2">
                                ₹{{ number_format($product->price, 2) }}
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>


        <div class="max-w-7xl mx-auto my-10">
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Watch 1 - Chronometer -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800"
                        alt="Glashütte Chronometer"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">Chronometer</p>
                        </div>
                    </div>
                </div>

                <!-- Watch 2 - Classic Dial -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1594534475808-b18fc33b045e?w=800"
                        alt="Glashütte Classic"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">Senator Excellence</p>
                        </div>
                    </div>
                </div>

                <!-- Watch 3 - Moonphase -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1622434641406-a158123450f9?w=800"
                        alt="Glashütte Moonphase"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">PanoMaticLunar</p>
                        </div>
                    </div>
                </div>

                <!-- Watch 4 - Date Display -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1524805444758-089113d48a6d?w=800"
                        alt="Glashütte Date"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">Seventies Panorama Date</p>
                        </div>
                    </div>
                </div>

                <!-- Watch 5 - Moon Phase Detail -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1511370235399-1802cae1d32f?w=800"
                        alt="Glashütte Moon Detail"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">PanoReserve</p>
                        </div>
                    </div>
                </div>

                <!-- Watch 6 - Sport Watch -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1614164185128-e4ec99c436d7?w=800"
                        alt="Glashütte Sport"
                        class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <p class="text-sm font-light">Glashütte Original</p>
                            <p class="text-lg font-semibold">SeaQ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container mx-auto px-4">
            <div class="text-center my-12">
                <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
                <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
            </div>

            <!-- Mobile: Scrollable + Reduced Height -->
            <div class="flex md:grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 overflow-x-auto md:overflow-visible snap-x snap-mandatory pb-4">

                @foreach($products_data->take(4) as $product)
                <a href="/single_product_view/{{ $product->id }}" class="snap-start">
                    <div
                        class="m-2 rounded-xl min-w-[200px] sm:min-w-[250px] md:min-w-[300px] bg-gradient-to-br from-lav2 via-white to-white 
                       p-4 md:p-6 flex flex-col border-t border-gray-200 hover:shadow-2xl 
                       hover:-translate-y-3 hover:rotate-1 transition-all duration-500 group cursor-pointer relative overflow-hidden">

                        <div class="relative overflow-hidden rounded-xl">
                            <!-- Reduce image height only on mobile -->
                            <img src="{{ $product->photo_url }}"
                                alt="Luxury Watch"
                                class="h-40 sm:h-48 md:h-56 w-full object-cover rounded-xl mb-4 md:mb-6 
                                group-hover:scale-110 group-hover:rotate-2 transition-all duration-700">
                        </div>

                        <!-- Reduce text spacing on mobile -->
                        <h5 class="text-lg sm:text-xl md:text-2xl font-semibold">
                            {{ $product->name }}
                        </h5>
                        <p class="mt-1 md:mt-2 text-xs sm:text-sm text-side/70">
                            {{ $product->description }}
                        </p>

                        <button
                            class="mt-4 md:mt-6 self-start px-4 py-1.5 md:px-5 md:py-2 rounded-md border 
                           border-purple-medium text-side hover:border-purple-dark 
                           group-hover:bg-gradient-to-r group-hover:from-purple-600 
                           group-hover:to-blue-600 group-hover:text-white group-hover:border-transparent 
                           group-hover:shadow-lg group-hover:scale-105 transition-all duration-300">
                            Shop Now
                        </button>
                    </div>
                </a>
                @endforeach
            </div>
        </div>



        <section class="w-full px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Catalogue Card -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img
                        src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857075/w11_wkzrck.jpg"
                        alt="Watch mechanism"
                        class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <p class="text-sm font-light mb-2">Order a catalogue</p>
                        <h2 class="text-2xl font-light mb-6">Glashütte Original catalogue</h2>
                        <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                            Order now
                        </button>
                    </div>
                </div>

                <!-- Newsletter Card -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img
                        src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857077/w12_mjj7hk.jpg"
                        alt="Watchmaker at work"
                        class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <p class="text-sm font-light mb-2">Receive exciting and exclusive news</p>
                        <h2 class="text-2xl font-light mb-6">Subscribe to newsletter</h2>
                        <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                            Subscribe now
                        </button>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img
                        src="https://res.cloudinary.com/dvyvfzjl5/image/upload/v1761857077/w13_nxgpls.jpg"
                        alt="Luxury watch"
                        class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 text-white">
                        <p class="text-sm font-light mb-2">Explore our collection</p>
                        <h2 class="text-2xl font-light mb-6">Discover timepieces</h2>
                        <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                            View more
                        </button>
                    </div>
                </div>
            </div>
        </section>




    </x-slot>
</x-user_navbar>