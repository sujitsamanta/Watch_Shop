<x-user_navbar>
    <x-slot name="body">

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Sidebar Filters -->
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                        <div class="flex items-center justify-between mb-6">
                            <h2 class="text-xl font-bold text-purple-darkest">Filters</h2>
                            <button onclick="resetFilters()" class="text-sm text-purple-medium hover:text-purple-dark transition-colors">
                                Reset All
                            </button>
                        </div>

                        <!-- Sort By -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-purple-dark mb-3">Sort By</label>
                            <select id="sortBy" onchange="applyFilters()" class="w-full px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                <option value="default">Default</option>
                                <option value="price-asc">Price: Low to High</option>
                                <option value="price-desc">Price: High to Low</option>
                                <option value="name-asc">Name: A to Z</option>
                                <option value="name-desc">Name: Z to A</option>
                                <option value="newest">Newest First</option>
                                <option value="oldest">Oldest First</option>
                            </select>
                        </div>

                        <!-- Price Range -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-purple-dark mb-3">Price Range</label>
                            <div class="space-y-3">
                                <div class="flex gap-2">
                                    <input type="number" id="minPrice" placeholder="Min" onchange="applyFilters()" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                    <input type="number" id="maxPrice" placeholder="Max" onchange="applyFilters()" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                </div>
                                <div class="flex items-center justify-between text-xs text-purple-dark">
                                    <span id="minPriceDisplay">₹0</span>
                                    <span id="maxPriceDisplay">₹50,000+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-purple-dark mb-3">Minimum Rating</label>
                            <div class="space-y-2">
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="rating" value="4" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i> & up
                                    </span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="rating" value="3" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i> & up
                                    </span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="rating" value="2" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="fas fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i>
                                        <i class="far fa-star text-yellow-400"></i> & up
                                    </span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="rating" value="0" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium" checked>
                                    <span class="text-sm text-purple-darkest">All Ratings</span>
                                </label>
                            </div>
                        </div>

                        <!-- Upload Time Filter -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-purple-dark mb-3">Upload Time</label>
                            <div class="space-y-2">
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="uploadTime" value="7" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">Last 7 days</span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="uploadTime" value="30" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">Last 30 days</span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="uploadTime" value="90" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium">
                                    <span class="text-sm text-purple-darkest">Last 3 months</span>
                                </label>
                                <label class="flex items-center cursor-pointer hover:bg-lav1 p-2 rounded transition-colors">
                                    <input type="radio" name="uploadTime" value="0" onchange="applyFilters()" class="mr-2 text-purple-medium focus:ring-purple-medium" checked>
                                    <span class="text-sm text-purple-darkest">All Time</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Main Content -->
                <main class="flex-1">
                    <!-- Results Header -->
                    <div class="bg-white rounded-lg shadow-lg p-4 mb-6 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-purple-darkest">Premium Watches</h2>
                            <p class="text-sm text-purple-dark" id="resultCount">Showing all products</p>
                        </div>
                        <button onclick="toggleView()" class="px-4 py-2 bg-purple-medium text-white rounded-lg hover:bg-purple-dark transition-colors">
                            <i class="fas fa-th-large" id="viewIcon"></i>
                        </button>
                    </div>

                    <!-- Products Grid -->
                    <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">

                        <!-- Sample Product Cards for demonstration -->





                        <!-- <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6"> -->
                        @forelse($products as $product)
                        <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow cursor-pointer">
                            <a href="">
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
                        <div class="col-span-4 text-center py-16">
                            <h3 class="text-xl font-semibold text-purple-dark mb-2">No products found</h3>
                        </div>
                        @endforelse
                    </div>

                    {{ $products->withQueryString()->links() }} <!-- Pagination links -->





                    <!-- </div> -->

                    <!-- No Results Message -->
                    <div id="noResults" class="hidden text-center py-16">
                        <i class="fas fa-search text-6xl text-purple-light mb-4"></i>
                        <h3 class="text-xl font-semibold text-purple-dark mb-2">No products found</h3>
                        <p class="text-purple-dark mb-4">Try adjusting your filters</p>
                        <button onclick="resetFilters()" class="px-6 py-2 bg-purple-medium text-white rounded-lg hover:bg-purple-dark transition-colors">
                            Reset Filters
                        </button>
                    </div>
                </main>
            </div>
        </div>

        <script>
            let currentView = 'grid';

            function applyFilters() {
                // Get filter values
                const sortBy = document.getElementById('sortBy').value;
                const minPrice = document.getElementById('minPrice').value;
                const maxPrice = document.getElementById('maxPrice').value;
                const rating = document.querySelector('input[name="rating"]:checked').value;
                const uploadTime = document.querySelector('input[name="uploadTime"]:checked').value;

                // Update price display
                document.getElementById('minPriceDisplay').textContent = minPrice ? `₹${minPrice}` : '₹0';
                document.getElementById('maxPriceDisplay').textContent = maxPrice ? `₹${maxPrice}` : '₹50,000+';

                // In a real Laravel application, this would trigger an AJAX request
                // For now, we'll just show the filter is working
                console.log('Filters applied:', {
                    sortBy,
                    minPrice,
                    maxPrice,
                    rating,
                    uploadTime
                });

                // You would add this to your Laravel route:
                // window.location.href = `/products?sort=${sortBy}&min=${minPrice}&max=${maxPrice}&rating=${rating}&upload=${uploadTime}`;
            }

            function resetFilters() {
                document.getElementById('sortBy').value = 'default';
                document.getElementById('minPrice').value = '';
                document.getElementById('maxPrice').value = '';
                document.querySelector('input[name="rating"][value="0"]').checked = true;
                document.querySelector('input[name="uploadTime"][value="0"]').checked = true;
                document.getElementById('minPriceDisplay').textContent = '₹0';
                document.getElementById('maxPriceDisplay').textContent = '₹50,000+';

                // Reload or reset
                // window.location.href = '/products';
            }

            function toggleView() {
                const grid = document.getElementById('productsGrid');
                const icon = document.getElementById('viewIcon');

                if (currentView === 'grid') {
                    grid.className = 'grid grid-cols-1 gap-6';
                    icon.className = 'fas fa-th-large';
                    currentView = 'list';
                } else {
                    grid.className = 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6';
                    icon.className = 'fas fa-th-list';
                    currentView = 'grid';
                }
            }
        </script>
    </x-slot>
</x-user_navbar>