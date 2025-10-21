<x-user_navbar>
    <x-slot name="body">
        <style>
            #category-list::-webkit-scrollbar {
                width: 6px;
            }

            #category-list::-webkit-scrollbar-thumb {
                background-color: #C4B5FD;
                /* Light purple */
                border-radius: 3px;
            }
        </style>

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-6">

                <!-- Sidebar Filters -->
                <aside class="lg:w-64 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                        <div class="flex items-center justify-between mb-6">
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
                                        <!-- <input type="number" name="min" placeholder="Min" value="{{ request('min') }}" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1">
                                        <input type="number" name="max" placeholder="Max" value="{{ request('max') }}" class="w-1/2 px-3 py-2 border border-purple-light rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-medium bg-lav1"> -->

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
                                                @if($i <=$rate)
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
                        <div class="col-span-4 text-center py-10">
                            <img src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png" class="w-24 mx-auto mb-4 opacity-70">
                            <h2 class="text-xl font-semibold text-purple-darkest">No Products Found</h2>
                            <p class="text-gray-600">Try changing category or filters to see more items.</p>
                        </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $products->withQueryString()->links() }}
                    </div>
                </main>
            </div>
        </div>


        <script>
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
        </script>
    </x-slot>
</x-user_navbar>