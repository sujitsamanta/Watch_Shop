<x-user_navbar>
    <x-slot name="body">
        <style>
            #category-list::-webkit-scrollbar {
                width: 6px;
            }

            #category-list::-webkit-scrollbar-thumb {
                background-color: #C4B5FD;
                border-radius: 3px;
            }

            /* Mobile Filter Overlay */
            #filterOverlay {
                display: none;
            }

            #filterOverlay.active {
                display: block;
            }

            /* Smooth transitions */
            #filterSidebar {
                transition: transform 0.3s ease-in-out;
            }

            /* Prevent body scroll when sidebar is open */
            body.filter-open {
                overflow: hidden;
            }
        </style>

        <div class="container mx-auto px-4 py-8">
            <!-- Mobile Filter Toggle Button (Sticky below navbar) -->
            <div class="lg:hidden sticky top-16 z-30 bg-white shadow-md mb-4 -mx-4 px-4 py-3">
                <button id="filterToggle" class="w-full bg-purple-medium text-white py-3 px-4 rounded-lg font-semibold flex items-center justify-center gap-2 hover:bg-purple-dark transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                    </svg>
                    Filters & Sort
                </button>
            </div>

            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Overlay for mobile -->
                <div id="filterOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"></div>

                <!-- Sidebar Filters -->
                <aside id="filterSidebar" class="fixed lg:static top-0 left-0 h-full lg:h-auto w-80 lg:w-64 bg-white z-50 lg:z-auto transform -translate-x-full lg:translate-x-0 flex-shrink-0 overflow-y-auto lg:overflow-visible">
                    <div class="bg-white rounded-none lg:rounded-lg shadow-lg p-6 lg:sticky lg:top-24 h-full lg:h-auto">
                        <!-- Mobile Header -->
                        <div class="flex items-center justify-between mb-6 lg:hidden">
                            <h2 class="text-xl font-bold text-purple-darkest">Filters</h2>
                            <button id="closeFilter" class="text-purple-dark hover:text-purple-darkest">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Desktop Header -->
                        <div class="hidden lg:flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-purple-darkest">Filters</h2>
                            <a href="/all_products_view_page_filter" class="text-sm text-purple-medium hover:text-purple-dark transition-colors">
                                Reset All
                            </a>
                        </div>

                        <form id="filtersForm" method="GET" action="/all_products_view_page_filter">

                            <!-- Category Filter -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-purple-dark mb-3">Category</label>

                                <div id="category-list" class="space-y-2 max-h-40 overflow-y-auto pr-2">
                                    @foreach($categories as $category)
                                    <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                        <input type="radio" name="category" value="{{ $category->id }}"
                                            onchange="this.form.submit()"
                                            class="mr-2 text-purple-medium focus:ring-purple-medium"
                                            {{ request('category') == $category->id ? 'checked' : '' }}>
                                        <span class="text-sm text-purple-darkest">{{ $category->name }}</span>
                                    </label>
                                    @endforeach
                                </div>

                                <!-- Show More / Less Button -->
                                @if($categories->count() > 6)
                                <button type="button" id="toggle-category"
                                    class="mt-2 text-purple-medium text-sm hover:underline focus:outline-none">
                                    Show More
                                </button>
                                @endif
                            </div>

                            <!-- Sort By -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-purple-dark mb-3">Sort By</label>
                                <select name="sort" onchange="this.form.submit()" class="w-full px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                    <option value="default" {{ request('sort') == 'default' ? 'selected' : '' }}>Default</option>
                                    <option value="price-asc" {{ request('sort') == 'price-asc' ? 'selected' : '' }}>Price: Low to High</option>
                                    <option value="price-desc" {{ request('sort') == 'price-desc' ? 'selected' : '' }}>Price: High to Low</option>
                                    <option value="name-asc" {{ request('sort') == 'name-asc' ? 'selected' : '' }}>Name: A to Z</option>
                                    <option value="name-desc" {{ request('sort') == 'name-desc' ? 'selected' : '' }}>Name: Z to A</option>
                                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest First</option>
                                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                                </select>
                            </div>

                            <!-- Price Range -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-purple-dark mb-3">Price Range</label>
                                <div class="space-y-3">
                                    <div class="flex gap-2">
                                        <input type="number" name="min" placeholder="Min" value="{{ request('min') }}" onchange="this.form.submit()" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                        <input type="number" name="max" placeholder="Max" value="{{ request('max') }}" onchange="this.form.submit()" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                    </div>
                                    <div class="flex items-center justify-between text-xs text-purple-dark">
                                        <span>₹{{ request('min') ?? '0' }}</span>
                                        <span>₹{{ request('max') ?? '50,000+' }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Rating Filter -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-purple-dark mb-3">Minimum Rating</label>
                                <div class="space-y-2">
                                    @foreach([4,3,2,0] as $rate)
                                    <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                        <input type="radio" name="rating" value="{{ $rate }}" onchange="this.form.submit()" class="mr-2 text-purple-medium focus:ring-purple-medium" {{ request('rating') == $rate || ($rate==0 && !request('rating')) ? 'checked' : '' }}>
                                        <span class="text-sm text-purple-darkest">
                                            @for($i=1; $i<=5; $i++)
                                                @if($i <= $rate)
                                                    <i class="fas fa-star text-yellow-400"></i>
                                                @elseif($i == ceil($rate)+1 && $rate < $i)
                                                    <i class="far fa-star text-yellow-400"></i>
                                                @else
                                                    <i class="far fa-star text-yellow-400"></i>
                                                @endif
                                            @endfor
                                            @if($rate!=0) & up @else All Ratings @endif
                                        </span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Upload Time Filter -->
                            <div class="mb-6">
                                <label class="block text-sm font-semibold text-purple-dark mb-3">Upload Time</label>
                                @foreach([7=>'Last 7 days', 30=>'Last 30 days', 90=>'Last 3 months', 0=>'All Time'] as $days => $label)
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="upload" value="{{ $days }}" onchange="this.form.submit()" class="mr-2 text-purple-medium focus:ring-purple-medium" {{ request('upload') == $days || ($days==0 && !request('upload')) ? 'checked' : '' }}>
                                    <span class="text-sm text-purple-darkest">{{ $label }}</span>
                                </label>
                                @endforeach
                            </div>

                            <!-- Mobile Apply Button -->
                            <div class="lg:hidden mt-6 pt-4 border-t border-purple-light">
                                <a href="/all_products_view_page_filter" class="block w-full text-center bg-gray-200 text-purple-darkest py-2 px-4 rounded-lg font-semibold mb-2 hover:bg-gray-300 transition-colors">
                                    Reset All
                                </a>
                            </div>
                        </form>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="flex-1">
                    <!-- Results Header -->
                    <div class="bg-white rounded-lg shadow-lg p-4 mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-purple-darkest">Premium Watches</h2>
                            <p class="text-sm text-purple-dark" id="resultCount">Showing {{ $products->total() }} products</p>
                        </div>
                    </div>

                    <!-- Product Grid Section -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @forelse($products as $product)
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow cursor-pointer">
                            <a href="/single_product_view/{{ $product->id }}">
                                <div class="p-4">
                                    <div class="aspect-square bg-gray-100 rounded-lg mb-3 flex items-center justify-center overflow-hidden">
                                        <img src="{{ url('storage/products_images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-900 mb-1">{{ $product->name }}</h3>
                                    <p class="text-sm font-semibold text-gray-900">₹{{ number_format($product->price, 2) }}</p>
                                </div>
                            </a>
                        </div>
                        @empty
                        <!-- If no product exists in any category / filter -->
                        <div class="col-span-2 md:col-span-3 lg:col-span-4 text-center py-10">
                            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" class="w-24 mx-auto mb-4 opacity-70">
                            <h2 class="text-xl font-semibold text-purple-darkest">No Products Found</h2>
                            <p class="text-gray-600">Try changing category or filters to see more items.</p>
                        </div>
                        @endforelse
                    </div>

                </main>
            </div>
        </div>

        <script>
            // Category toggle functionality
            const categoryList = document.getElementById('category-list');
            const toggleBtn = document.getElementById('toggle-category');

            if (toggleBtn) {
                toggleBtn.addEventListener('click', () => {
                    if (categoryList.classList.contains('max-h-40')) {
                        categoryList.classList.remove('max-h-40', 'overflow-y-auto');
                        toggleBtn.textContent = 'Show Less';
                    } else {
                        categoryList.classList.add('max-h-40', 'overflow-y-auto');
                        toggleBtn.textContent = 'Show More';
                    }
                });
            }

            // Mobile filter sidebar functionality
            const filterToggle = document.getElementById('filterToggle');
            const filterSidebar = document.getElementById('filterSidebar');
            const filterOverlay = document.getElementById('filterOverlay');
            const closeFilter = document.getElementById('closeFilter');

            function openFilter() {
                filterSidebar.classList.remove('-translate-x-full');
                filterOverlay.classList.add('active');
                document.body.classList.add('filter-open');
            }

            function closeFilterFunc() {
                filterSidebar.classList.add('-translate-x-full');
                filterOverlay.classList.remove('active');
                document.body.classList.remove('filter-open');
            }

            if (filterToggle) {
                filterToggle.addEventListener('click', openFilter);
            }

            if (closeFilter) {
                closeFilter.addEventListener('click', closeFilterFunc);
            }

            if (filterOverlay) {
                filterOverlay.addEventListener('click', closeFilterFunc);
            }

            // Close filter on window resize to desktop
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 1024) {
                    closeFilterFunc();
                }
            });
        </script>
    </x-slot>
</x-user_navbar>