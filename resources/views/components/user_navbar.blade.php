<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/user_style.css" />
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
   
</head>
<body>
    <!-- Navbar -->
    <nav class="shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="navbar-container max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="flex justify-between items-center h-14 sm:h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2 flex-shrink-0">
                    <!-- Watch Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#9D8DF1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 sm:w-8 sm:h-8">
                        <circle cx="12" cy="12" r="6"/>
                        <polyline points="12,10 12,12 13,13"/>
                        <path d="m16.13 7.66-.81-4.05a2 2 0 0 0-2-1.61h-2.68a2 2 0 0 0-2 1.61l-.78 4.05"/>
                        <path d="m7.88 16.36.8 4a2 2 0 0 0 2 1.61h2.72a2 2 0 0 0 2-1.61l.81-4.05"/>
                    </svg>
                    <span class="logo-text text-white text-lg sm:text-xl font-bold truncate">Hand Watch Shop</span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-6 xl:space-x-9">
                    <a href="/" class="{{ request()->is('/') ? "active": ""}}  text-white nav-link text-sm xl:text-base p-2 rounded-xl">Home</a>
                    
                    <!-- Products Dropdown -->
                    <div class="relative dropdown">
                        <a href="#" class="text-white nav-link flex items-center text-sm xl:text-base">
                            Products
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                                <path d="m6 9 6 6 6-6"/>
                            </svg>
                        </a>
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Luxury Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Sports Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Smart Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Vintage Collection</a>
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
                        <div class="dropdown-menu absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Rolex</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Omega</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Seiko</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Casio</a>
                        </div>
                    </div>
                    
                    <a href="/about" class="{{ request()->is('about') ? "active": ""}} text-white nav-link text-sm xl:text-base p-2 rounded-xl">About</a>
                    <a href="/contact" class="{{ request()->is('contact') ? "active": ""}} text-white nav-link text-sm xl:text-base p-2 rounded-xl">Contact</a>
                </div>
                
                <!-- Desktop Right Side -->
                <div class="hidden lg:flex items-center space-x-3 xl:space-x-6">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input 
                            type="text" 
                            placeholder="Search watches..."
                            class="search-input bg-white pl-9 pr-4 py-2 rounded-full text-purple-dark placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-medium w-48 xl:w-64 text-sm"
                        >
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </div>
                    
                    <!-- Sign In Button -->
                    <a href="sign_in">
                        <button class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center space-x-1 text-sm">
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
                        <button class="text-white hover:text-purple-medium transition-colors duration-300 flex items-center p-2 rounded-full hover:bg-purple-medium hover:bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute top-full right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 border border-purple-light">
                            <a href="/account" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">My Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Orders</a>
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Wishlist</a>
                            <hr class="my-2 border-purple-light">
                            <a href="#" class="block px-4 py-2 text-sm text-purple-dark hover:bg-purple-light hover:bg-opacity-50">Settings</a>
                            <a href="/logout" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Sign Out</a>
                        </div>
                    </div>
                    
                    <!-- Cart -->
                    <button class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2 rounded-full hover:bg-purple-medium hover:bg-opacity-20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1"/>
                            <circle cx="19" cy="21" r="1"/>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button>
                </div>
                
                <!-- Tablet and Mobile Icons -->
                <div class="flex items-center space-x-2 lg:hidden">
                    <!-- Search Icon for Tablet/Mobile -->
                    <button id="search-toggle" class="text-white hover:text-purple-medium transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </button>
                    
                    <!-- Cart Icon for Tablet/Mobile -->
                    <button class="relative text-white hover:text-purple-medium transition-colors duration-300 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="8" cy="21" r="1"/>
                            <circle cx="19" cy="21" r="1"/>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-semibold">3</span>
                    </button>
                    
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn" class="text-white hover:text-purple-medium transition-colors duration-300 p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="4" x2="20" y1="6" y2="6"/>
                            <line x1="4" x2="20" y1="12" y2="12"/>
                            <line x1="4" x2="20" y1="18" y2="18"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Search Bar -->
            <div id="search-bar-mobile" class="mobile-menu lg:hidden">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Search watches..."
                        class="search-mobile w-full bg-white pl-9 pr-4 py-2.5 rounded-full text-purple-dark placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-medium text-sm"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <circle cx="11" cy="11" r="8"/>
                        <path d="m21 21-4.35-4.35"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu lg:hidden border-t border-purple-medium border-opacity-30">
            <div class="px-4 py-4 space-y-4 max-w-7xl mx-auto">
                <a href="/" class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">Home</a>
                
                <!-- Mobile Products Section -->
                <div class="py-1">
                    <button id="mobile-products-btn" class="flex items-center justify-between w-full text-white hover:text-purple-medium transition-colors duration-300 py-2">
                        <span class="text-base">Products</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="mobile-products-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Luxury Watches</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Sports Watches</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Smart Watches</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Vintage Collection</a>
                    </div>
                </div>
                
                <!-- Mobile Brands Section -->
                <div class="py-1">
                    <button id="mobile-brands-btn" class="flex items-center justify-between w-full text-white hover:text-purple-medium transition-colors duration-300 py-2">
                        <span class="text-base">Brands</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mobile-chevron transition-transform duration-300">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div id="mobile-brands-menu" class="mobile-menu pl-4 mt-1 space-y-1">
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Rolex</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Omega</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Seiko</a>
                        <a href="#" class="block text-purple-medium hover:text-white transition-colors duration-300 py-2">Casio</a>
                    </div>
                </div>
                
                <a href="/about" class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">About</a>
                <a href="/contact" class="block text-white hover:text-purple-medium transition-colors duration-300 py-2 text-base">Contact</a>
                
                <!-- Mobile Account Section -->
                <div class="border-t border-purple-medium border-opacity-30 pt-4 mt-4 space-y-3">
                    <a href="/sign_in" class="flex items-center space-x-3 text-white hover:text-purple-medium transition-colors duration-300 w-full py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10,17 15,12 10,7"/>
                            <line x1="15" x2="3" y1="12" y2="12"/>
                        </svg>
                        <span class="text-base">Sign In</span>
                    </a>
                    
                    <button class="flex items-center space-x-3 text-white hover:text-purple-medium transition-colors duration-300 w-full py-2">
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
    
    <!-- Main Content -->
    <div class="max-w-full mx-auto">


        {{ $body }}


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
 <script>

 // account start


    const editBtn = document.getElementById("editBtn");
    const saveBtn = document.getElementById("saveBtn");
    const cancelBtn = document.getElementById("cancelBtn");
    const photoInput = document.getElementById("photoInput");
    const profilePhoto = document.getElementById("profilePhoto");

    // Select only visible inputs & textareas (exclude file input)
    
   // New → Exclude file & hidden inputs

// const inputs = document.querySelectorAll("input:not([type=file]):not([type=hidden]), textarea");
// Select only inputs inside the form (exclude hidden & file)

const form = document.querySelector("form[action='/account_upadate']");
const inputs = form.querySelectorAll("input:not([type=file]):not([type=hidden]), textarea");



    // Save original values
    let originalValues = {};
    inputs.forEach(input => originalValues[input.id] = input.value);

    let isEditing = false;

    editBtn.addEventListener("click", () => {
      isEditing = true;
      editBtn.classList.add("hidden");
      saveBtn.classList.remove("hidden");
      cancelBtn.classList.remove("hidden");

      inputs.forEach(input => {
        // Keep Email field readonly
        if (input.id === "email") return;

        input.removeAttribute("readonly");
        input.classList.add("edit-mode");
      });
    });

    saveBtn.addEventListener("click", () => {
      inputs.forEach(input => {
        // Skip Email field
        if (input.id === "email") return;

        originalValues[input.id] = input.value;
        input.setAttribute("readonly", "true");
        input.classList.remove("edit-mode");
      });
      exitEditMode();
    });

    cancelBtn.addEventListener("click", () => {
      inputs.forEach(input => {
        // Skip Email field
        if (input.id === "email") return;

        input.value = originalValues[input.id];
        input.setAttribute("readonly", "true");
        input.classList.remove("edit-mode");
      });
      exitEditMode();
    });

    function exitEditMode() {
      isEditing = false;
      editBtn.classList.remove("hidden");
      saveBtn.classList.add("hidden");
      cancelBtn.classList.add("hidden");
    }

    // Profile photo change
    photoInput.addEventListener("change", e => {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = e => profilePhoto.src = e.target.result;
        reader.readAsDataURL(file);
      }
    });

    function resetPhoto() {
      profilePhoto.src = "https://via.placeholder.com/150";
    }



        // account end
  </script>
  
</body>
</html>