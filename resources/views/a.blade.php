<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&family=Montserrat:wght@300;400&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;

        }
    </style>
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
</head>

<body class="bg-lav1">
    <!-- Top Bar - Desktop Only -->
    <!-- <div class="hidden md:block bg-purple-darkest text-white text-sm">
        <div class="max-w-7xl mx-auto px-6 py-2.5 flex justify-between items-center">
            <div class="flex gap-6">
                <a href="#track" class="hover:text-lav2 transition-colors duration-200">Track Order</a>
                <a href="#contact" class="hover:text-lav2 transition-colors duration-200">Customer Service</a>
            </div>
            <div class="flex gap-6">
                <a href="#signin" class="hover:text-lav2 transition-colors duration-200">Sign In</a>
                <a href="#register" class="hover:text-lav2 transition-colors duration-200">Register</a>
            </div>
        </div>
    </div> -->

    <!-- Main Navbar -->
    <nav class="bg-white shadow-card sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Top Row: Logo, Search, Icons -->
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#home" class="text-2xl font-bold text-purple-medium hover:text-purple-dark transition-colors duration-200">
                        ShopHub
                    </a>
                </div>

                <!-- Desktop Search Bar -->
                <div class="hidden md:flex flex-1 max-w-xl mx-12">
                    <div class="relative w-full">
                        <input
                            type="text"
                            placeholder="Search for products, brands and more..."
                            class="w-full px-5 py-3 bg-lav1 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200 placeholder:text-purple-dark/50" />
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-purple-medium text-white px-4 py-2 rounded-lg hover:bg-purple-dark transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Desktop Icons -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#account" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 group">
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
                    <a href="#cart" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-xs font-medium">Cart</span>
                        <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">5</span>
                    </a>
                </div>

                <!-- Mobile Icons -->
                <div class="flex md:hidden items-center gap-4">
                    <button onclick="toggleMobileSearch()" class="text-side">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                    <a href="#cart" class="text-side relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">5</span>
                    </a>
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
            <div class="hidden md:flex items-center gap-8 py-4 border-t border-lav2">
                <div class="relative group">
                    <button class="flex items-center gap-1 text-side hover:text-purple-medium font-medium transition-colors duration-200">
                        All Categories
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute left-0 mt-2 w-52 bg-white shadow-card rounded-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 overflow-hidden">
                        <a href="#electronics" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Electronics</a>
                        <a href="#fashion" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Fashion</a>
                        <a href="#home" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Home & Living</a>
                        <a href="#beauty" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Beauty</a>
                        <a href="#sports" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Sports</a>
                        <a href="#books" class="block px-5 py-3 text-side hover:bg-lav1 hover:text-purple-medium transition-colors duration-200">Books</a>
                    </div>
                </div>
                <a href="#electronics" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Electronics</a>
                <a href="#fashion" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Fashion</a>
                <a href="#home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Home & Living</a>
                <a href="#beauty" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Beauty</a>
                <a href="#sports" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Sports</a>
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
            <a href="#account" class="flex items-center gap-3 px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200">
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
                <span class="ml-auto bg-purple-medium text-white text-xs rounded-full px-2.5 py-1 font-semibold">3</span>
            </a>

            <div class="border-t border-lav2 my-3"></div>

            <div class="px-4 py-2 text-xs font-bold text-purple-dark uppercase tracking-wide">Categories</div>
            <a href="#electronics" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Electronics</a>
            <a href="#fashion" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Fashion</a>
            <a href="#home" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Home & Living</a>
            <a href="#beauty" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Beauty</a>
            <a href="#sports" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Sports</a>
            <a href="#books" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Books</a>

            <div class="border-t border-lav2 my-3"></div>

            <a href="#deals" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200 flex items-center gap-2">
                <span class="text-lg">🔥</span> Hot Deals
            </a>
            <a href="#track" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Track Order</a>
            <a href="#contact" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Customer Service</a>

            <div class="border-t border-lav2 my-3"></div>

            <a href="#signin" class="block px-4 py-3 text-side hover:bg-lav1 hover:text-purple-medium rounded-lg transition-all duration-200 font-medium">Sign In</a>
            <a href="#register" class="block px-4 py-3 text-purple-medium font-bold hover:bg-purple-lightest rounded-lg transition-all duration-200">Register</a>
        </div>
    </div>

    <!-- Demo Content -->
    <div class="max-w-7xl mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-purple-darkest mb-4">Welcome to ShopHub</h1>
        <p class="text-lg text-side">Your one-stop destination for all your shopping needs. Browse through our wide range of products!</p>

        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-card">
                <h3 class="text-xl font-bold text-purple-dark mb-2">Free Shipping</h3>
                <p class="text-side">On orders over $50</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-card">
                <h3 class="text-xl font-bold text-purple-dark mb-2">Easy Returns</h3>
                <p class="text-side">30-day return policy</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-card">
                <h3 class="text-xl font-bold text-purple-dark mb-2">24/7 Support</h3>
                <p class="text-side">We're here to help</p>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const overlay = document.getElementById('mobileOverlay');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            menu.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Prevent body scroll when menu is open
            document.body.classList.toggle('overflow-hidden');
        }

        function toggleMobileSearch() {
            const search = document.getElementById('mobileSearch');
            search.classList.toggle('hidden');
        }
    </script>
</body>

</html>