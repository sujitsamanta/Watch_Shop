
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'forest-green': '#2d4a3a',
                        'sage-green': '#a5b594',
                        'peach': '#f5b5a0',
                        'cream': '#f5f2f0'
                    }
                }
            }
        }
    </script>
    <style>

       
    </style>
</head>
<body class="bg-cream">
    <!-- Navbar -->
    <nav class="bg-forest-green shadow-lg sticky top-0 z-50">
        <div class="navbar-container max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2 flex-shrink-0">
                    <!-- Watch Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#f5b5a0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 sm:w-8 sm:h-8">
                        <circle cx="12" cy="12" r="6"/>
                        <polyline points="12,10 12,12 13,13"/>
                        <path d="m16.13 7.66-.81-4.05a2 2 0 0 0-2-1.61h-2.68a2 2 0 0 0-2 1.61l-.78 4.05"/>
                        <path d="m7.88 16.36.8 4a2 2 0 0 0 2 1.61h2.72a2 2 0 0 0 2-1.61l.81-4.05"/>
                    </svg>
                    <span class="logo-text text-white text-lg sm:text-xl font-bold truncate">Hand Watch Shop</span>
                </div>
                
                <!-- Desktop Navigation - Hidden on tablet and mobile -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-9">
                    <a href="/" class=" {{ request()->is('/') ? "active": ""}}  text-white nav-link text-sm xl:text-base p-2 rounded-xl">Home</a>
                    
                    <!-- Products Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-white nav-link flex items-center text-sm xl:text-base">
                            Products
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Luxury Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Sports Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Smart Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Vintage Collection</a>
                        </div>
                    </div>
                    
                    <!-- Brands Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-white nav-link flex items-center text-sm xl:text-base">
                            Brands
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Rolex</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Omega</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Seiko</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Casio</a>
                        </div>
                    </div>
                    
                    <a href="/about" class="{{ request()->is('about') ? "active": ""}} text-white nav-link text-sm xl:text-base  p-2 rounded-xl">About</a>
                    <a href="/contact" class="{{ request()->is('contact') ? "active": ""}} text-white nav-link text-sm xl:text-base  p-2 rounded-xl">Contact</a>
                </div>
                
                <!-- Desktop Right Side - Search, Account, Cart -->
                <div class="hidden lg:flex items-center space-x-3 xl:space-x-6">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input 
                            type="text" 
                            placeholder="Search watches..."
                            class="search-input bg-white pl-9 pr-4 py-2 rounded-full text-forest-green placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sage-green w-48 xl:w-64 text-sm"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </div>
                    
                    <!-- Sign In Button -->
                    <a href="sign_in">
                    <button class="text-white hover:text-peach transition-colors duration-300 flex items-center space-x-1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10,17 15,12 10,7"/>
                            <line x1="15" x2="3" y1="12" y2="12"/>
                        </svg>
                        <span>Sign In</span>
                    </button>
                    </a>
                  
                    
                    <!-- Account Dropdown -->
                    <div class="relative dropdown">
                        <button class="text-white hover:text-peach transition-colors duration-300 flex items-center p-2 rounded-full hover:bg-sage-green hover:bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">My Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Orders</a>
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Wishlist</a>
                            <hr class="my-2 border-gray-200">
                            <a href="#" class="block px-4 py-2 text-sm text-forest-green hover:bg-sage-green hover:bg-opacity-20">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
                        </div>
                    </div>
                    
                    <!-- Cart -->
                    <button class="relative text-white hover:text-peach transition-colors duration-300 p-2 rounded-full hover:bg-sage-green hover:bg-opacity-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1"/>
                            <circle cx="19" cy="21" r="1"/>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-peach text-forest-green text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button>
                </div>
                
                <!-- Tablet and Mobile Icons -->
                <div class="flex items-center space-x-2 lg:hidden ">
                    <!-- Search Icon for Tablet/Mobile -->
                    <button id="search-toggle" class="text-white hover:text-peach transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </button>
                    
                    <!-- Cart Icon for Tablet/Mobile -->
                    <button class="relative text-white hover:text-peach transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1"/>
                            <circle cx="19" cy="21" r="1"/>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-peach text-forest-green text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button>
                    
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn" class="text-white hover:text-peach transition-colors duration-300 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" x2="20" y1="6" y2="6"/>
                            <line x1="4" x2="20" y1="12" y2="12"/>
                            <line x1="4" x2="20" y1="18" y2="18"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Search Bar (toggleable) -->
            <div id="search-bar-mobile" class="mobile-menu lg:hidden pb-3">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Search watches..."
                        class="search-mobile w-full bg-white pl-9 pr-4 py-2.5 rounded-full text-forest-green placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sage-green text-sm"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden bg-forest-green border-t border-sage-green border-opacity-30">
            <div class="px-4 py-4 space-y-4 max-w-7xl mx-auto">
                <!-- Mobile Navigation Links -->
                <a href="#" class="block text-white hover:text-peach transition-colors duration-300 py-2 text-base">Home</a>
                
                <!-- Mobile Products Section -->
                <div class="py-1">
                    <button id="mobile-products-btn" class="flex items-center justify-between w-full text-white hover:text-peach transition-colors duration-300 py-2">
                        <span class="text-base">Products</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="mobile-products-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Luxury Watches</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Sports Watches</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Smart Watches</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Vintage Collection</a>
                    </div>
                </div>
                
                <!-- Mobile Brands Section -->
                <div class="py-1">
                    <button id="mobile-brands-btn" class="flex items-center justify-between w-full text-white hover:text-peach transition-colors duration-300 py-2">
                        <span class="text-base">Brands</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="mobile-brands-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Rolex</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Omega</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Seiko</a>
                        <a href="#" class="block text-sage-green hover:text-peach transition-colors duration-300 py-2">Casio</a>
                    </div>
                </div>
                
                <a href="#" class="block text-white hover:text-peach transition-colors duration-300 py-2 text-base">About</a>
                <a href="#" class="block text-white hover:text-peach transition-colors duration-300 py-2 text-base">Contact</a>
                
                <!-- Mobile Account Section -->
                <div class="border-t border-sage-green border-opacity-30 pt-4 mt-4 space-y-3">
                    <!-- <a href="sign_in"> -->
                    <button class="flex items-center space-x-3 text-white hover:text-peach transition-colors duration-300 w-full py-2" >
                   
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10,17 15,12 10,7"/>
                            <line x1="15" x2="3" y1="12" y2="12"/>
                        </svg>
                        <span class="text-base">Sign In</span>
                       
                    </button>
                    <!-- </a> -->
                    
                    
                    <button class="flex items-center space-x-3 text-white hover:text-peach transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <span class="text-base">My Account</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Demo Content -->
    <div class="max-w-7xl mx-auto px-4 py-6 sm:py-8">
   
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-forest-green mb-4 sm:mb-6">{{ $heading }}</h1>
        <p class="text-gray-700 text-sm sm:text-base lg:text-lg">This navbar is now fully responsive across all devices:</p>
        
        <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 mt-6 sm:mt-8">
            <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-forest-green mb-3 sm:mb-4">📱 Mobile (< 768px)</h2>
                <ul class="text-sm sm:text-base text-gray-600 space-y-1 sm:space-y-2">
                    <li>• Compact logo and hamburger menu</li>
                    <li>• Toggleable search bar</li>
                    <li>• Cart icon with badge</li>
                    <li>• Full-width mobile menu</li>
                </ul>
            </div>
            
            <div class="bg-sage-green bg-opacity-20 p-4 sm:p-6 rounded-lg">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-forest-green mb-3 sm:mb-4">💻 Tablet (768px - 1024px)</h2>
                <ul class="text-sm sm:text-base text-gray-600 space-y-1 sm:space-y-2">
                    <li>• Search and cart icons</li>
                    <li>• Hamburger menu for navigation</li>
                    <li>• Medium-sized elements</li>
                    <li>• Optimized spacing</li>
                </ul>
            </div>
            
            
            <div class="bg-peach bg-opacity-20 p-4 sm:p-6 rounded-lg">
                <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold text-forest-green mb-3 sm:mb-4">🖥️ Desktop (> 1024px)</h2>
                <ul class="text-sm sm:text-base text-gray-600 space-y-1 sm:space-y-2">
                    <li>• Full horizontal navigation</li>
                    <li>• Inline search bar</li>
                    <li>• Dropdown menus</li>
                    <li>• All features visible</li>
                </ul>
            </div>
        </div> -->
        
        <!-- Responsive Test Instructions -->
        <!-- <div class="mt-8 sm:mt-12 p-4 sm:p-6 bg-white rounded-lg shadow-md">
            <h3 class="text-lg sm:text-xl font-semibold text-forest-green mb-3 sm:mb-4">🔧 Test Responsiveness:</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-sm sm:text-base text-gray-600">
                <div>
                    <strong>Mobile View:</strong>
                    <p>Resize to < 768px width</p>
                </div>
                <div>
                    <strong>Tablet View:</strong>
                    <p>Resize to 768px - 1024px</p>
                </div>
                <div>
                    <strong>Desktop View:</strong>
                    <p>Resize to > 1024px width</p>
                </div>
            </div>
        </div> -->
    </div>
    <script src="js/script.js"></script>

    <script>
        
    </script>
</body>
</html>