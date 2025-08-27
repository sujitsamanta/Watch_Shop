<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Watches - Hero with Carousel Background</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    @vite(['resources/css/app.css'])

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-lightest': '#F3F0FF',
                        'purple-light': '#E2D8FF',
                        'purple-medium': '#9D8DF1',
                        'purple-dark': '#4C4B7C',
                        'purple-darkest': '#2D2A4A',
                        lav1: '#F4EFFF',
                        lav2: '#E4DEFF',
                        peri: '#A9B4E6',
                        side: '#3F4673'
                    }
                }
            }
        }
    </script>
    <style>
        .carousel-item {
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .carousel-item.active {
            opacity: 1;
        }

        .gradient-overlay {
            background: linear-gradient(135deg, rgba(63, 70, 115, 0.85) 0%, rgba(169, 180, 230, 0.65) 50%, rgba(228, 222, 255, 0.45) 100%);
        }
    </style>
</head>

<body class="font-sans">
    <!-- Hero Section with Carousel Background -->
    <section class="relative flex items-center justify-center px-8 py-12 my-12 overflow-hidden min-h-screen">
        <!-- Auto Carousel Background -->
        <div class="absolute inset-0 z-0">
            <!-- Background Image 1 -->
            <div class="carousel-item active absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>

            <!-- Background Image 2 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>

            <!-- Background Image 3 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1509048191080-d2abbc36b2da?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>

            <!-- Background Image 4 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1434056886845-dac89ffe9b56?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>

            <!-- Background Image 5 -->
            <div class="carousel-item absolute inset-0 bg-cover bg-center bg-no-repeat"
                style="background-image: url('https://images.unsplash.com/photo-1547996160-81dfa63595aa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
            </div>
        </div>

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 z-10 gradient-overlay"></div>

        <!-- Floating Background Elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-light/20 rounded-full blur-3xl animate-pulse z-20">
        </div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-peri/15 rounded-full blur-3xl animate-pulse z-20"
            style="animation-delay: 2s;"></div>




        <div class="relative z-30 max-w-full mx-auto grid lg:grid-cols-2 gap-9 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left mt-9">
                <!-- Real-time Clock Component -->
                <div
                    class="inline-flex items-center gap-3 bg-white/20 backdrop-blur-sm rounded-full px-6 py-3 mb-8 border border-white/30 shadow-lg">
                    <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                    <div class="text-white font-mono text-lg font-semibold" id="realtime-clock">
                        00:00:00
                    </div>
                    <span class="text-white/70 text-sm">Live Time</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight drop-shadow-2xl">
                    Premium
                    <span class="bg-gradient-to-r from-purple-medium to-peri bg-clip-text text-transparent">
                        Watches
                    </span>
                    <br>
                    Collection
                </h1>

                <p class="text-lg md:text-xl text-white/90 mb-8 max-w-xl mx-auto lg:mx-0 drop-shadow-lg">
                    Discover luxury timepieces from world's most prestigious brands.
                    Each watch tells a story of craftsmanship and elegance.
                </p>

                <!-- Trending Badge -->
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-lightest to-lav1 rounded-full px-4 py-2 mb-6 shadow-sm border border-purple-light/30">
                    <svg class="w-5 h-5 text-purple-medium" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-purple-dark font-semibold text-sm">🔥 Trending Now</span>
                </div>

                <!-- Brand Logos -->
                <div class="mb-8">
                    <p class="text-white/60 text-sm mb-4 uppercase tracking-wider">Featured Luxury Brands</p>
                    <div class="flex flex-wrap justify-center lg:justify-start items-center gap-6 opacity-90">
                        <div
                            class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-white text-sm shadow-sm border border-purple-light/30">
                            ROLEX</div>
                        <div
                            class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-white text-sm shadow-sm border border-purple-light/30">
                            OMEGA</div>
                        <div
                            class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-white text-sm shadow-sm hover:bg-white/30 transition-colors border border-purple-light/30">
                            <a href="https://www.3watches.com/" target="_blank"
                                class="text-white hover:text-purple-light">3WATCHES</a>
                        </div>
                        <div
                            class="bg-white/20 backdrop-blur-sm rounded-lg px-4 py-2 font-bold text-white text-sm shadow-sm border border-purple-light/30">
                            PATEK</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button
                        class="bg-gradient-to-r from-purple-medium to-peri text-white px-8 py-4 rounded-full font-semibold text-lg shadow-xl hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 hover:scale-105 backdrop-blur-sm">
                        Shop Now
                    </button>
                    <button
                        class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full font-semibold text-lg border-2 border-purple-light/50 hover:bg-white/30 hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
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
                                        <div class="absolute -right-1 -top-0.5 w-2 h-2 bg-red-500 rounded-full"></div>
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
                    class="absolute -top-8 -right-8 bg-gradient-to-r from-purple-medium to-peri text-white px-4 py-2 rounded-full text-sm font-semibold shadow-2xl animate-bounce z-10">
                    50% OFF
                </div>

                <div
                    class="absolute -bottom-6 -left-6 bg-purple-lightest/95 backdrop-blur-sm rounded-xl p-3 shadow-xl border border-purple-light/50 z-10">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                        <span class="text-purple-dark text-sm font-semibold">Shipping Now</span>
                    </div>
                </div>

                <!-- Reflection Effect -->
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/5 to-transparent rounded-full pointer-events-none">
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce z-30">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

    <script>
        // Auto Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const indicators = document.querySelectorAll('.carousel-indicator');
        const totalSlides = slides.length;

        function showSlide(index) {
            // Hide all slides
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(indicator => {
                indicator.classList.remove('active', 'bg-purple-light/70');
                indicator.classList.add('bg-white/30');
            });

            // Show current slide
            slides[index].classList.add('active');
            indicators[index].classList.remove('bg-white/30');
            indicators[index].classList.add('active', 'bg-purple-light/70');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Auto-advance carousel every 5 seconds
        setInterval(nextSlide, 5000);

        // Manual indicator controls
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });

        // Real-time clock functionality
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('realtime-clock').textContent = `${hours}:${minutes}:${seconds}`;
        }

        // Watch hands functionality
        function updateWatchHands() {
            const now = new Date();
            const hours = now.getHours() % 12;
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            const hourAngle = (hours * 30) + (minutes * 0.5) - 90;
            const minuteAngle = (minutes * 6) - 90;
            const secondAngle = (seconds * 6) - 90;

            document.getElementById('hour-hand').style.transform = `rotate(${hourAngle}deg) translateX(-50%)`;
            document.getElementById('minute-hand').style.transform = `rotate(${minuteAngle}deg) translateX(-50%)`;
            document.getElementById('second-hand').style.transform = `rotate(${secondAngle}deg) translateX(-50%)`;
        }

        // Update clock and watch hands every second
        setInterval(() => {
            updateClock();
            updateWatchHands();
        }, 1000);

        // Initialize on page load
        updateClock();
        updateWatchHands();
    </script>
</body>

</html>