   <!-- Search functionality -->
    <script>
        function handleSuggestionClick(url) {
            window.location.href = url;
        }
        // Mobile search toggle
        function toggleMobileSearch() {
            const mobileSearch = document.getElementById('mobileSearch');
            const isHidden = mobileSearch.classList.contains('hidden');

            if (isHidden) {
                mobileSearch.classList.remove('hidden');
                document.getElementById('mobileSearchInput').focus();
            } else {
                mobileSearch.classList.add('hidden');
            }
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            const isOpen = !mobileMenu.classList.contains('-translate-x-full');

            if (isOpen) {
                // Close menu
                mobileMenu.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                // Open menu
                mobileMenu.classList.remove('-translate-x-full');
                mobileOverlay.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        }

        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-focus search on mobile when opened
            const mobileSearchInput = document.getElementById('mobileSearchInput');
            const desktopSearchInput = document.getElementById('desktopSearchInput');
            const mobileSearchSuggestions = document.getElementById('mobileSearchSuggestions');
            const desktopSearchSuggestions = document.getElementById('desktopSearchSuggestions');
            const mobileSuggestionsContent = document.getElementById('mobileSuggestionsContent');
            const desktopSuggestionsContent = document.getElementById('desktopSuggestionsContent');

            // Handle Enter key in search inputs
            [mobileSearchInput, desktopSearchInput].forEach(input => {
                if (input) {
                    input.addEventListener('keypress', function(e) {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            const form = this.closest('form');
                            if (form) {
                                form.submit();
                            }
                        }
                    });

                    // Add input event listeners for suggestions
                    input.addEventListener('input', function() {
                        currentSearchInput = this;
                        if (this === desktopSearchInput) {
                            showSearchSuggestions(this, desktopSearchSuggestions, desktopSuggestionsContent);
                        } else if (this === mobileSearchInput) {
                            showSearchSuggestions(this, mobileSearchSuggestions, mobileSuggestionsContent);
                        }
                    });

                    // Hide suggestions when input loses focus
                    input.addEventListener('blur', function() {
                        setTimeout(() => {
                            if (this === desktopSearchInput) {
                                hideSuggestions(desktopSearchSuggestions);
                            } else if (this === mobileSearchInput) {
                                hideSuggestions(mobileSearchSuggestions);
                            }
                        }, 200); // Small delay to allow clicking on suggestions
                    });

                    // Clear search field on Escape key
                    input.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            clearSearchField(this);
                            if (this === desktopSearchInput) {
                                hideSuggestions(desktopSearchSuggestions);
                            } else if (this === mobileSearchInput) {
                                hideSuggestions(mobileSearchSuggestions);
                            }
                            this.blur(); // Remove focus from input
                        }
                    });
                }
            });

            // Auto-hide mobile search when clicking outside
            document.addEventListener('click', function(e) {
                const mobileSearch = document.getElementById('mobileSearch');
                const searchButton = e.target.closest('button[onclick="toggleMobileSearch()"]');

                if (!mobileSearch.contains(e.target) && !searchButton && !mobileSearch.classList.contains('hidden')) {
                    mobileSearch.classList.add('hidden');
                }

                // Hide suggestions and clear search values when clicking outside
                if (!e.target.closest('#desktopSearchSuggestions') && !e.target.closest('#desktopSearchInput')) {
                    hideSuggestions(desktopSearchSuggestions);
                    // Clear desktop search input
                    if (desktopSearchInput && desktopSearchInput.value.trim() !== '') {
                        clearSearchField(desktopSearchInput);
                    }
                }
                if (!e.target.closest('#mobileSearchSuggestions') && !e.target.closest('#mobileSearchInput')) {
                    hideSuggestions(mobileSearchSuggestions);
                    // Clear mobile search input
                    if (mobileSearchInput && mobileSearchInput.value.trim() !== '') {
                        clearSearchField(mobileSearchInput);
                    }
                }
            });
        });

        // Search suggestions functionality
        let searchTimeout;
        let currentSearchInput = null;
        let suggestionsCache = new Map(); // Cache for suggestions

        function showSearchSuggestions(input, suggestionsContainer, contentContainer) {
            const query = input.value.trim();

            if (query.length < 2) {
                suggestionsContainer.classList.add('hidden');
                return;
            }

            // Show loading state immediately
            contentContainer.innerHTML = `
                <div class="flex items-center justify-center p-4">
                    <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-purple-medium"></div>
                    <span class="ml-2 text-purple-medium">Searching...</span>
                </div>
            `;
            suggestionsContainer.classList.remove('hidden');

            // Clear previous timeout
            if (searchTimeout) {
                clearTimeout(searchTimeout);
            }

            // Check cache first
            if (suggestionsCache.has(query)) {
                const cachedSuggestions = suggestionsCache.get(query);
                if (cachedSuggestions.length > 0) {
                    displaySuggestions(cachedSuggestions, contentContainer);
                    suggestionsContainer.classList.remove('hidden');
                } else {
                    contentContainer.innerHTML = `
                        <div class="flex items-center justify-center p-4 text-gray-500">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            No suggestions found
                        </div>
                    `;
                    suggestionsContainer.classList.remove('hidden');
                }
                return;
            }

            // Set new timeout for debouncing
            searchTimeout = setTimeout(() => {
                console.log('Fetching suggestions for:', query);
                fetch(`/search-suggestions?q=${encodeURIComponent(query)}`)
                    .then(response => {
                        console.log('Response status:', response.status);
                        return response.json();
                    })
                    .then(suggestions => {
                        console.log('Suggestions received:', suggestions);
                        // Cache the results
                        suggestionsCache.set(query, suggestions);

                        if (suggestions.length > 0) {
                            displaySuggestions(suggestions, contentContainer);
                            suggestionsContainer.classList.remove('hidden');
                        } else {
                            contentContainer.innerHTML = `
                                <div class="flex items-center justify-center p-4 text-gray-500">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    No suggestions found
                                </div>
                            `;
                            suggestionsContainer.classList.remove('hidden');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching suggestions:', error);
                        contentContainer.innerHTML = `
                            <div class="flex items-center justify-center p-4 text-red-500">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Error loading suggestions
                            </div>
                        `;
                        suggestionsContainer.classList.remove('hidden');
                    });
            }, 150); // 150ms debounce for faster response
        }

        function displaySuggestions(suggestions, container) {
            console.log('Displaying suggestions:', suggestions);
            let html = '';

            suggestions.forEach(suggestion => {
                console.log('Processing suggestion:', suggestion);
                if (suggestion.type === 'product') {
                    html += `
                        <a onclick="handleSuggestionClick('${suggestion.url}')"  class="flex items-center p-3 hover:bg-lav1 transition-colors duration-200 border-b border-lav2 last:border-b-0" onclick="handleSuggestionClick(event)">
                            <div class="w-12 h-12 bg-lav2 rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                <img src="storage/products_images/${suggestion.image}" alt="${suggestion.name}" class="w-10 h-10 object-cover rounded-lg" onerror="this.style.display='none'">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="font-medium text-purple-dark truncate">${suggestion.name}</div>
                                <div class="text-sm text-purple-medium">${suggestion.category}</div>
                                <div class="text-sm font-semibold text-purple-medium">₹${parseFloat(suggestion.price).toFixed(2)}</div>
                            </div>
                            <div class="ml-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    `;
                } else if (suggestion.type === 'category') {
                    html += `
                        <a onclick="handleSuggestionClick('${suggestion.url}')" class="flex items-center p-3 hover:bg-lav1 transition-colors duration-200 border-b border-lav2 last:border-b-0" onclick="handleSuggestionClick(event)">
                            <div class="w-12 h-12 bg-purple-lightest rounded-lg flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="font-medium text-purple-dark">${suggestion.name}</div>
                                <div class="text-sm text-purple-medium">Category</div>
                            </div>
                            <div class="ml-2">
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </a>
                    `;
                }
            });

            // Add "View all results" option
            if (suggestions.length > 0) {
                html += `
                    <div class="border-t border-lav2">
                        <a href="/search?q=${encodeURIComponent(currentSearchInput.value)}" class="flex items-center justify-center p-3 text-purple-medium hover:bg-lav1 transition-colors duration-200 font-medium" onclick="handleSuggestionClick(event)">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            View all results for "${currentSearchInput.value}"
                        </a>
                    </div>
                `;
            }

            container.innerHTML = html;
        }

        // Simple click handler for suggestions
        function handleSuggestionClick(event) {
            // Hide suggestions immediately
            const desktopSuggestions = document.getElementById('desktopSearchSuggestions');
            const mobileSuggestions = document.getElementById('mobileSearchSuggestions');

            if (desktopSuggestions) {
                desktopSuggestions.classList.add('hidden');
            }
            if (mobileSuggestions) {
                mobileSuggestions.classList.add('hidden');
            }
        }

        function hideSuggestions(suggestionsContainer) {
            suggestionsContainer.classList.add('hidden');
        }

        function clearSearchField(input) {
            input.value = '';
            // Clear cache for this input
            suggestionsCache.clear();
        }
    </script>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Hand Watch Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/user_style.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

        h1, h2, h3 {
            font-family: 'Cormorant Garamond', serif;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-lav1">
    <!-- Main Navbar -->
    <nav class="bg-purple-lightest shadow-card sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Top Row: Logo, Search, Icons -->
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/home" class="text-xl font-bold text-purple-medium hover:text-purple-dark transition-colors duration-200">
                        ShopHub
                    </a>
                </div>

                <!-- Desktop Search Bar -->
                <div class="hidden md:flex flex-1 max-w-xl mx-12">
                    <form action="/search" method="GET" class="relative w-full">
                        <input
                            type="text"
                            name="q"
                            value="{{ $query }}"
                            placeholder="Search for products, brands and more..."
                            class="w-full px-5 py-3 bg-lav2 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200 placeholder:text-purple-dark/50" />
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-purple-medium text-white px-4 py-2 rounded-lg hover:bg-purple-dark transition-colors duration-200">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                    </form>
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

                    $wishlistCount = 0;
                    if (Auth::check()) {
                        $wishlistCount = Auth::user()->wishlist()->count();
                    }

                    $orderCount = 0;
                    if (Auth::check()) {
                        $orderCount = Auth::user()->orders()->count();
                    }
                    @endphp

                    @if(Auth::check())
                    <a href="/account" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="text-xs font-medium">Account</span>
                    </a>

                    <a href="/wishlist_products_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="text-xs font-medium">Wishlist</span>
                        @if ($wishlistCount)
                        <span class="absolute -top-1 -right-1 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $wishlistCount }}
                        </span>
                        @endif
                    </a>

                    <a href="/add_to_cart_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="text-xs font-medium">Cart</span>
                        @if ($productCount)
                        <span class="absolute -top-1 -right-3 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $productCount }}
                        </span>
                        @endif
                    </a>

                    <a href="/all_orders_view" class="flex flex-col items-center text-side hover:text-purple-medium transition-colors duration-200 relative group">
                        <i class="fa-solid fa-bag-shopping text-xl"></i>
                        <span class="text-xs font-medium">Order</span>
                        @if ($orderCount)
                        <span class="absolute -top-1 -right-2 bg-purple-medium text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-semibold">
                            {{ $orderCount }}
                        </span>
                        @endif
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
                <form action="/search" method="GET" class="relative">
                    <input
                        type="text"
                        name="q"
                        value="{{ $query }}"
                        placeholder="Search products..."
                        class="w-full px-4 py-3 bg-lav1 border border-lav2 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent transition-all duration-200" />
                    <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-purple-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </form>
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
                </div>
                <a href="/home" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Home</a>
                <a href="/about" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">About</a>
                <a href="/contact" class="text-side hover:text-purple-medium font-medium transition-colors duration-200">Contact</a>
                <a href="#deals" class="text-purple-medium hover:text-purple-dark font-bold transition-colors duration-200 flex items-center gap-1">
                    <span class="text-lg">🔥</span> Hot Deals
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="min-h-screen bg-lav1">
        <div class="max-w-7xl mx-auto px-6 py-8">
            <!-- Search Header -->
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <h1 class="text-3xl font-bold text-purple-dark mb-2">
                            @if($query)
                                Search Results for "{{ $query }}"
                            @else
                                Search Products
                            @endif
                        </h1>
                        @if($query && $products->count() > 0)
                            <p class="text-purple-medium">{{ $products->total() }} product(s) found</p>
                        @endif
                    </div>
                </div>
            </div>

            @if($query && $products->count() > 0)
                <!-- Products Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    @foreach($products as $product)
                        <div class="bg-white rounded-xl shadow-card hover:shadow-lg transition-all duration-300 group overflow-hidden">
                            <!-- Product Image -->
                            <div class="relative overflow-hidden">
                                <img 
                                    src="{{ url('storage/products_images/' . $product->image) }}" 
                                    alt="{{ $product->name }}"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                />
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300"></div>
                                
                                <!-- Wishlist Button -->
                                <form action="/add_wishlist/{{ $product->id }}" method="POST" class="absolute top-3 right-3">
                                    @csrf
                                    <button type="submit" class="w-8 h-8 bg-white/80 hover:bg-white rounded-full flex items-center justify-center transition-all duration-200 group">
                                        <svg class="w-4 h-4 text-gray-600 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <i class="text-gray-600 group-hover:text-red-500 fa-regular fa-heart "></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Product Info -->
                            <div class="p-4">
                                <div class="mb-2">
                                    <span class="text-xs text-purple-medium bg-purple-lightest px-2 py-1 rounded-full">
                                        {{ $product->category->name }}
                                    </span>
                                </div>
                                
                                <h3 class="text-lg font-semibold text-purple-dark mb-2 line-clamp-2">
                                    {{ $product->name }}
                                </h3>
                                
                                <p class="text-sm text-gray-600 mb-3 line-clamp-2">
                                    {{ Str::limit($product->description, 80) }}
                                </p>
                                
                                <div class="flex items-center justify-between mb-3">
                                    <span class="text-2xl font-bold text-purple-medium">
                                        ₹{{ number_format($product->price, 2) }}
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        SKU: {{ $product->sku }}
                                    </span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-gray-600">
                                        Stock: {{ $product->stock }}
                                    </span>
                                    
                                    <div class="flex gap-2">
                                        <a href="/single_product_view/{{ $product->id }}" 
                                           class="px-3 py-1 text-sm bg-purple-lightest text-purple-medium rounded-lg hover:bg-purple-medium hover:text-white transition-colors duration-200">
                                            View
                                        </a>
                                        <a href="/add_to_cart/{{ $product->id }}" 
                                           class="px-3 py-1 text-sm bg-purple-medium text-white rounded-lg hover:bg-purple-dark transition-colors duration-200">
                                            Add to Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <div class="flex justify-center">
                        {{ $products->links() }}
                    </div>
                @endif

            @elseif($query && $products->count() == 0)
                <!-- No Results -->
                <div class="text-center py-16">
                    <div class="mb-6">
                        <svg class="w-24 h-24 text-purple-light mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <h3 class="text-2xl font-semibold text-purple-dark mb-2">No products found</h3>
                        <p class="text-purple-medium mb-6">We couldn't find any products matching "{{ $query }}"</p>
                    </div>
                    
                    <div class="space-y-4">
                        <p class="text-gray-600">Try these suggestions:</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Check your spelling</li>
                            <li>• Try different keywords</li>
                            <li>• Use more general terms</li>
                            <li>• Browse our categories</li>
                        </ul>
                        
                        <div class="pt-4">
                            <a href="/all_products_view_page_filter" 
                               class="inline-flex items-center px-6 py-3 bg-purple-medium text-white rounded-lg hover:bg-purple-dark transition-colors duration-200">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                Browse All Products
                            </a>
                        </div>
                    </div>
                </div>

            @else
                <!-- Empty Search State -->
                <div class="text-center py-16">
                    <div class="mb-6">
                        <svg class="w-24 h-24 text-purple-light mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <h3 class="text-2xl font-semibold text-purple-dark mb-2">Search Products</h3>
                        <p class="text-purple-medium mb-6">Enter a search term to find products</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-purple-darkest text-white relative bottom-0 main-w-full">
        <div class="mx-auto px-6 py-12 main-w-full">
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
                        more than traditional design services.
                    </p>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 pt-4">
                        <a href="#" class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-twitter text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-facebook-f text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-tiktok text-peri group-hover:text-white transition-colors"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-side rounded-lg flex items-center justify-center hover:bg-purple-medium transition-all duration-300 group">
                            <i class="fab fa-instagram text-peri group-hover:text-white transition-colors"></i>
                        </a>
                    </div>
                </div>

                <!-- Services Column -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-purple-light mb-6">Services</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Bonus program
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Gift cards
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Credit and payment
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Service contracts
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Non-cash account
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Payment
                        </a></li>
                    </ul>
                </div>

                <!-- Customer Support Column -->
                <div class="space-y-4">
                    <h4 class="text-lg font-semibold text-purple-light mb-6">Assistance to the buyer</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Find an order
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Terms of delivery
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Exchange and return of goods
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Guarantee
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Frequently asked questions
                        </a></li>
                        <li><a href="#" class="text-peri hover:text-purple-light transition-colors duration-300 flex items-center group">
                            <i class="fas fa-chevron-right text-xs mr-2 text-purple-medium group-hover:translate-x-1 transition-transform"></i>
                            Terms of use of the site
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile search toggle
        function toggleMobileSearch() {
            const mobileSearch = document.getElementById('mobileSearch');
            const isHidden = mobileSearch.classList.contains('hidden');
            
            if (isHidden) {
                mobileSearch.classList.remove('hidden');
                document.querySelector('#mobileSearch input[name="q"]').focus();
            } else {
                mobileSearch.classList.add('hidden');
            }
        }

        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileOverlay = document.getElementById('mobileOverlay');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            
            const isOpen = !mobileMenu.classList.contains('-translate-x-full');
            
            if (isOpen) {
                // Close menu
                mobileMenu.classList.add('-translate-x-full');
                mobileOverlay.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                // Open menu
                mobileMenu.classList.remove('-translate-x-full');
                mobileOverlay.classList.remove('hidden');
                menuIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>