<x-user_navbar>
    <x-slot name="body">
        @php
        $user = Auth::user();
        @endphp

        <!-- Main Single Product view -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                <!-- Product Images -->
                <div class="space-y-4">
                    <!-- Main Image -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-purple-light">
                        <div class="aspect-square bg-gradient-to-br from-lav1 to-purple-light rounded-xl flex items-center justify-center relative overflow-hidden">
                            <!-- Watch Face -->
                            <div class="relative">

                                <img src="{{ url('storage/products_images/' . $product_details->image) }}" class="w-70 h-70 object-cover group-hover:scale-110 transition-transform duration-500">

                            </div>
                        </div>

                    </div>

                    <!-- Thumbnail Images -->
                    <!-- <div class="flex space-x-3">
                        <div class="w-20 h-20 bg-white rounded-lg border-2 border-purple-medium p-2 cursor-pointer hover:border-purple-dark transition-colors">
                            <div class="w-full h-full bg-gradient-to-br from-purple-dark to-purple-darkest rounded-lg"></div>
                        </div>
                        <div class="w-20 h-20 bg-white rounded-lg border border-purple-light p-2 cursor-pointer hover:border-purple-medium transition-colors">
                            <div class="w-full h-full bg-gradient-to-br from-lav2 to-purple-light rounded-lg"></div>
                        </div>
                        <div class="w-20 h-20 bg-white rounded-lg border border-purple-light p-2 cursor-pointer hover:border-purple-medium transition-colors">
                            <div class="w-full h-full bg-gradient-to-br from-red-400 to-red-600 rounded-lg"></div>
                        </div>
                        <div class="w-20 h-20 bg-white rounded-lg border border-purple-light p-2 cursor-pointer hover:border-purple-medium transition-colors">
                            <div class="w-full h-full bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg"></div>
                        </div>
                    </div> -->
                </div>

                <!-- Product Info -->
                <div class="space-y-6">


                    <div class="flex justify-between">

                        <div>
                            <p class="text-4xl font-bold text-purple-darkest mb-2">{{ $product_details->name }}</p>
                            <p class="text-gray-700 leading-relaxed">
                                {{ $product_details->description }}
                            </p>
                            <div class="flex items-center space-x-4">
                                <span class="text-3xl font-bold text-purple-dark">${{ $product_details->price }}</span>
                                <span class="text-xl text-gray-500 line-through">$499</span>
                            </div>
                        </div>




                        <!-- Wishlist Button -->
                        @if($isInWishlist)

                        <form action="/remove_wishlist/{{ $product_details->id }}" method="POST" class="">
                            @csrf
                            <button type="submit" class="w-12 h-12 bg-white/50 hover:bg-white hover:text-red-500 rounded-full flex items-center justify-center transition-all duration-200 text-xl">
                                {{-- Check if product is in wishlist --}}
                                <i class=" fa-solid fa-heart text-red-500"></i> {{-- Filled heart --}}
                            </button>

                        </form>

                        @else
                        <form action="/add_wishlist/{{ $product_details->id }}" method="POST" class="">
                            @csrf
                            <button type="submit" class="w-12 h-12 bg-white/50 hover:bg-white hover:text-red-500 rounded-full flex items-center justify-center transition-all duration-200 text-xl">
                                {{-- Check if product is in wishlist --}}
                                <i class="fa-regular fa-heart "></i> {{-- Empty heart --}}
                            </button>

                        </form>

                        @endif

                    </div>

                    <!-- Color Selection -->
                    <!-- <div>
                    <h3 class="text-lg font-medium text-purple-darkest mb-3">Select color:</h3>
                    <div class="flex space-x-3">
                        <button class="w-8 h-8 bg-purple-darkest rounded-full border-2 border-purple-dark shadow-md hover:scale-110 transition-transform"></button>
                        <button class="w-8 h-8 bg-purple-medium rounded-full border-2 border-transparent hover:border-purple-dark shadow-md hover:scale-110 transition-transform"></button>
                        <button class="w-8 h-8 bg-red-500 rounded-full border-2 border-transparent hover:border-red-600 shadow-md hover:scale-110 transition-transform"></button>
                        <button class="w-8 h-8 bg-blue-500 rounded-full border-2 border-transparent hover:border-blue-600 shadow-md hover:scale-110 transition-transform"></button>
                        <button class="w-8 h-8 bg-gray-300 rounded-full border-2 border-transparent hover:border-gray-400 shadow-md hover:scale-110 transition-transform"></button>
                    </div>
                </div> -->

                    <!-- Size Selection -->
                    <!-- <div>
                    <h3 class="text-lg font-medium text-purple-darkest mb-3">Case Size:</h3>
                    <div class="grid grid-cols-3 gap-3">
                        <button class="px-4 py-3 border border-purple-light rounded-lg text-center hover:border-purple-medium hover:bg-lav2 transition-colors">
                            <div class="text-sm font-medium text-purple-darkest">40mm</div>
                        </button>
                        <button class="px-4 py-3 bg-purple-medium text-white rounded-lg text-center shadow-md">
                            <div class="text-sm font-medium">44mm</div>
                        </button>
                        <button class="px-4 py-3 border border-purple-light rounded-lg text-center hover:border-purple-medium hover:bg-lav2 transition-colors">
                            <div class="text-sm font-medium text-purple-darkest">49mm</div>
                        </button>
                    </div>
                </div> -->

                    <!-- Storage Selection -->
                    <!-- <div>
                    <h3 class="text-lg font-medium text-purple-darkest mb-3">Storage:</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="px-4 py-3 bg-purple-medium text-white rounded-lg text-center shadow-md">
                            <div class="text-sm font-medium">32GB</div>
                        </button>
                        <button class="px-4 py-3 border border-purple-light rounded-lg text-center hover:border-purple-medium hover:bg-lav2 transition-colors">
                            <div class="text-sm font-medium text-purple-darkest">64GB</div>
                        </button>
                    </div>
                </div> -->

                    <!-- Features -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-center p-4 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-medium rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-purple-darkest">Screen size</div>
                            <div class="text-sm text-gray-600">1.9"</div>
                        </div>

                        <div class="text-center p-4 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-medium rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-purple-darkest">Apple A16 Bionic</div>
                        </div>

                        <div class="text-center p-4 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-medium rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div class="text-xs font-medium text-purple-darkest">Water resistance</div>
                            <div class="text-sm text-gray-600">50m</div>
                        </div>
                    </div>

                    <!-- Features Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-light rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-purple-darkest">Battery capacity</div>
                                <div class="text-xs text-gray-600">18-24 Hours</div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-light rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-purple-darkest">OS version</div>
                                <div class="text-xs text-gray-600">watchOS 11</div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-light rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-purple-darkest">Connectivity</div>
                                <div class="text-xs text-gray-600">Wi-Fi + Cellular</div>
                            </div>
                        </div>

                        <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-purple-light">
                            <div class="w-8 h-8 bg-purple-light rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-purple-darkest">Health sensors</div>
                                <div class="text-xs text-gray-600">Heart Rate + ECG</div>
                            </div>
                        </div>
                    </div>







                    <!-- Action Buttons -->
                    <div class="flex space-x-4 ">

                        <a href="/by_now/{{ $product_details->id }}">

                        <button class="flex-1 bg-purple-darkest text-white py-3 px-6 rounded-lg font-medium hover:bg-purple-dark transition-colors shadow-lg">
                            By Now
                        </button>
                        </a>


                        <a href="/add_to_cart/{{ $product_details->id }}">
                            <button type="submit" class="flex-1 bg-white border-2 border-purple-medium text-purple-darkest py-3 px-6 rounded-lg font-medium hover:bg-lav2 transition-colors">

                                Add to Cart
                            </button>
                        </a>
                    </div>

                    <!-- Delivery Info -->
                    <div class="grid grid-cols-3 gap-4 pt-4 border-t border-purple-light">
                        <div class="text-center">
                            <div class="w-10 h-10 bg-purple-light rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-purple-darkest">Free Delivery</div>
                            <div class="text-xs text-gray-600">1-2 day</div>
                        </div>

                        <div class="text-center">
                            <div class="w-10 h-10 bg-purple-light rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-purple-darkest">In Stock</div>
                            <div class="text-xs text-gray-600">Today</div>
                        </div>

                        <div class="text-center">
                            <div class="w-10 h-10 bg-purple-light rounded-full mx-auto mb-2 flex items-center justify-center">
                                <svg class="w-5 h-5 text-purple-dark" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="text-sm font-medium text-purple-darkest">Guaranteed</div>
                            <div class="text-xs text-gray-600">1 year</div>
                        </div>
                    </div>


                    <!-- Description -->
                    <!-- <div class="bg-white rounded-lg p-6 border border-purple-light">
                        <p class="text-gray-700 leading-relaxed">
                            Enhanced capabilities thanks to innovative design and cutting-edge technology.
                            Incredible health tracking features, seamless connectivity, and all-day battery life.
                            Experience the future of wearable technology with advanced health monitoring,
                            fitness tracking, and smart notifications.
                            <span class="text-purple-medium font-medium cursor-pointer hover:text-purple-dark"> more...</span>
                        </p>
                    </div> -->







                </div>
            </div>

            <!-- Additional Features Section -->
            <div class="mt-16 bg-white rounded-2xl p-8 border border-purple-light">
                <h2 class="text-2xl font-bold text-purple-darkest mb-6 text-center">Key Features</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center space-y-3">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-light to-purple-medium rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-purple-darkest">Health Monitoring</h3>
                        <p class="text-sm text-gray-600">Advanced heart rate tracking, ECG readings, and comprehensive health insights</p>
                    </div>

                    <div class="text-center space-y-3">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-light to-purple-medium rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-purple-darkest">Fitness Tracking</h3>
                        <p class="text-sm text-gray-600">Track workouts, monitor activity rings, and achieve your fitness goals</p>
                    </div>

                    <div class="text-center space-y-3">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-light to-purple-medium rounded-full mx-auto flex items-center justify-center">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <h3 class="font-semibold text-purple-darkest">Smart Notifications</h3>
                        <p class="text-sm text-gray-600">Stay connected with calls, messages, and app notifications on your wrist</p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto px-4 py-8">
                <!-- Main Grid Layout -->
                <div class="grid lg:grid-cols-2 gap-8 max-w-7xl mx-auto">

                    <!-- Left Side - Product Details -->
                    <div class="bg-white rounded-xl shadow-lg p-6 border border-purple-light h-fit">
                        <h2 class="text-2xl font-bold text-purple-darkest mb-6">Product Details</h2>

                        <!-- Introduction Text -->
                        <div class="mb-6">
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Advanced technology meets premium design. The 1.9-inch Always-On Retina display delivers
                                exceptional clarity and vibrant colors for the ultimate smartwatch experience.
                            </p>
                        </div>

                        <!-- Display Specifications -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-purple-darkest mb-4">Display</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                    <span class="text-gray-700 text-sm">Display diagonal</span>
                                    <span class="font-medium text-purple-darkest text-sm">1.9"</span>
                                </div>

                                <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                    <span class="text-gray-700 text-sm">Resolution</span>
                                    <span class="font-medium text-purple-darkest text-sm">484×396</span>
                                </div>

                                <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                    <span class="text-gray-700 text-sm">Display type</span>
                                    <span class="font-medium text-purple-darkest text-sm">LTPO OLED</span>
                                </div>

                                <div class="flex justify-between items-start py-2">
                                    <span class="text-gray-700 text-sm">Additionally</span>
                                    <div class="text-right text-sm">
                                        <div class="font-medium text-purple-darkest">Always-On display</div>
                                        <div class="font-medium text-purple-darkest">1000 nits brightness</div>
                                        <div class="font-medium text-purple-darkest">True Tone</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Processor Specifications -->
                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-purple-darkest mb-4">Processor</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                    <span class="text-gray-700 text-sm">Chip</span>
                                    <span class="font-medium text-purple-darkest text-sm">S9 SiP</span>
                                </div>

                                <div class="flex justify-between items-center py-2">
                                    <span class="text-gray-700 text-sm">Number of cores</span>
                                    <span class="font-medium text-purple-darkest text-sm">Dual-core</span>
                                </div>
                            </div>
                        </div>

                       

                        <!-- Hidden Additional Specs -->
                        <div id="additionalSpecs" class="mt-6 space-y-6 ">
                            <!-- Health & Fitness -->
                            <div>
                                <h3 class="text-lg font-semibold text-purple-darkest mb-4">Health & Fitness</h3>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                        <span class="text-gray-700 text-sm">Health sensors</span>
                                        <span class="font-medium text-purple-darkest text-sm">Heart rate, ECG, Blood
                                            oxygen</span>
                                    </div>

                                    <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                        <span class="text-gray-700 text-sm">Water resistance</span>
                                        <span class="font-medium text-purple-darkest text-sm">50 meters</span>
                                    </div>

                                    <div class="flex justify-between items-center py-2">
                                        <span class="text-gray-700 text-sm">GPS</span>
                                        <span class="font-medium text-purple-darkest text-sm">Precision dual-frequency</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Connectivity -->
                            <div>
                                <h3 class="text-lg font-semibold text-purple-darkest mb-4">Connectivity</h3>
                                <div class="space-y-2">
                                    <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                        <span class="text-gray-700 text-sm">Wireless</span>
                                        <span class="font-medium text-purple-darkest text-sm">Wi-Fi, Bluetooth 5.3, 4G
                                            LTE</span>
                                    </div>

                                    <div class="flex justify-between items-center py-2">
                                        <span class="text-gray-700 text-sm">NFC</span>
                                        <span class="font-medium text-purple-darkest text-sm">Apple Pay</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Reviews & Feedback -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-2xl font-bold text-purple-darkest mb-6">Customer Reviews</h2>

                        <!-- Rating Overview -->
                        @php
                            $totalReviews = $reviews->count();
                            $averageRating = $totalReviews > 0 ? $reviews->avg('rating') : 0;
                            $ratingCounts = [5 => 0, 4 => 0, 3 => 0, 2 => 0, 1 => 0];
                            foreach($reviews as $review) {
                                $ratingCounts[$review->rating]++;
                            }
                        @endphp
                        <div class="flex items-center gap-6 mb-6 p-4 bg-purple-light rounded-lg">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-purple-darkest mb-1">{{ number_format($averageRating, 1) }}</div>
                                <div class="text-gray-600 text-sm mb-1">{{ $totalReviews }} reviews</div>
                                <div class="flex justify-center">
                                    <div class="flex text-yellow-400 text-lg">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= round($averageRating))
                                                ★
                                            @else
                                                ☆
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <!-- Rating Breakdown -->
                            <div class="flex-1">
                                <div class="space-y-1">
                                    <div class="flex items-center gap-2 text-xs">
                                        <span class="text-purple-dark font-medium w-16">5 Stars</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-medium h-full rounded-full transition-all duration-500"
                                                style="width: {{ $totalReviews > 0 ? ($ratingCounts[5] / $totalReviews) * 100 : 0 }}%"></div>
                                        </div>
                                        <span class="text-purple-dark font-medium w-6">{{ $ratingCounts[5] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs">
                                        <span class="text-purple-dark font-medium w-16">4 Stars</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-medium h-full rounded-full transition-all duration-500"
                                                style="width: {{ $totalReviews > 0 ? ($ratingCounts[4] / $totalReviews) * 100 : 0 }}%"></div>
                                        </div>
                                        <span class="text-purple-dark font-medium w-6">{{ $ratingCounts[4] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs">
                                        <span class="text-purple-dark font-medium w-16">3 Stars</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-medium h-full rounded-full transition-all duration-500"
                                                style="width: {{ $totalReviews > 0 ? ($ratingCounts[3] / $totalReviews) * 100 : 0 }}%"></div>
                                        </div>
                                        <span class="text-purple-dark font-medium w-6">{{ $ratingCounts[3] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs">
                                        <span class="text-purple-dark font-medium w-16">2 Stars</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-medium h-full rounded-full transition-all duration-500"
                                                style="width: {{ $totalReviews > 0 ? ($ratingCounts[2] / $totalReviews) * 100 : 0 }}%"></div>
                                        </div>
                                        <span class="text-purple-dark font-medium w-6">{{ $ratingCounts[2] }}</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs">
                                        <span class="text-purple-dark font-medium w-16">1 Star</span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-purple-medium h-full rounded-full transition-all duration-500"
                                                style="width: {{ $totalReviews > 0 ? ($ratingCounts[1] / $totalReviews) * 100 : 0 }}%"></div>
                                        </div>
                                        <span class="text-purple-dark font-medium w-6">{{ $ratingCounts[1] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>



                        

                        <!-- Leave Comment Section -->
                        @if($canReview)
                        <div class="mb-6">
                            <form action="/submit_review/{{ $product_details->id }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="block text-sm font-medium text-purple-darkest mb-2">Rating</label>
                                    <div class="flex space-x-1 star-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                        <input type="radio" name="rating" value="{{ $i }}" id="star{{ $i }}" class="hidden" required>
                                        <label for="star{{ $i }}" class="cursor-pointer text-gray-300 text-2xl star" data-rating="{{ $i }}">★</label>
                                        @endfor
                                    </div>
                                </div>
                                <textarea name="review" id="commentInput" placeholder="Leave your review..."
                                    class="w-full p-3 border border-gray-300 rounded-lg resize-none h-20 focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent placeholder-gray-400 text-sm" required></textarea>
                                <div class="flex justify-end mt-2">
                                    <button type="submit"
                                        class="bg-purple-medium hover:bg-purple-dark text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200 text-sm">
                                        Submit Review
                                    </button>
                                </div>
                            </form>
                        </div>
                        @else
                        <div class="mb-6 p-4 bg-gray-100 rounded-lg">
                            <p class="text-gray-600 text-sm">You can only review products you have successfully ordered and received.</p>
                        </div>
                        @endif

                        <!-- Reviews List with Scroll -->
                        <div class="reviews-container">
                            <div class="space-y-4" id="reviewsList">
                                @forelse($reviews as $review)
                                <div class="border-b border-gray-100 pb-4">
                                    <div class="flex items-start gap-3">
                                        <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                            {{ substr($review->user->name, 0, 2) }}
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-start mb-1">
                                                <h4 class="font-semibold text-purple-darkest text-sm">{{ $review->user->name }}</h4>
                                                <span class="text-gray-400 text-xs">{{ $review->created_at->format('d M Y') }}</span>
                                            </div>
                                            <div class="flex text-yellow-400 mb-2 text-sm">
                                                @for($i = 1; $i <= 5; $i++)
                                                    @if($i <= $review->rating)
                                                        ★
                                                    @else
                                                        ☆
                                                    @endif
                                                @endfor
                                            </div>
                                            <p class="text-gray-700 leading-relaxed text-sm">
                                                {{ $review->review }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                              


                                <div class="border-b border-gray-100 pb-4">
                                    <div class="flex items-start gap-3">
                                        <div
                                            class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                            SA
                                        </div>
                                        <div class="flex-1">
                                           <h1>not</h1>
                                        </div>
                                    </div>
                                </div>
                                @endforelse
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>

            <!-- releted pproducts -->
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-purple-darkest">
                            Releted product's
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






                <!-- Product Grid: 2 columns on mobile, 3 on tablet, 4 on desktop -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">

                    @foreach($related_products->take(10) as $item)
                    <!-- Product Card -->
                    <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 relative group border border-gray-100">

                        {{-- ✅ Wishlist Button --}}
                        @if($user && $user->wishlist()->where('product_id', $item->id)->exists())
                        <form action="/remove_wishlist/{{ $item->id }}" method="POST" class="absolute right-3 top-3 z-10">
                            @csrf
                            <button type="submit"
                                class="w-10 h-10 flex items-center justify-center bg-white/90 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                                <i class="fa-solid fa-heart text-red-500 text-lg"></i>
                            </button>
                        </form>
                        @else
                        <form action="/add_wishlist/{{ $item->id }}" method="POST" class="absolute right-3 top-3 z-10">
                            @csrf
                            <button type="submit"
                                class="w-10 h-10 flex items-center justify-center bg-white/80 rounded-full backdrop-blur-md shadow hover:scale-105 transition">
                                <i class="fa-regular fa-heart text-lg group-hover:text-red-500 transition"></i>
                            </button>
                        </form>
                        @endif

                        {{-- Product Info --}}
                        <a href="/single_product_view/{{ $item->id }}">
                            <div class="p-4">
                                {{-- Product Image --}}
                                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                                    <img src="{{ url('storage/products_images/' . $item->image) }}"
                                        alt="{{ $item->name }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                </div>

                                {{-- Product Name --}}
                                <p class="text-sm font-semibold text-gray-900 mt-3 truncate">
                                    {{ $item->name }}
                                </p>

                                {{-- Product Description (short & trimmed) --}}
                                <p class="text-xs text-gray-500 mt-1 line-clamp-2">
                                    {{ \Illuminate\Support\Str::limit($item->description, 60, '...') }}
                                </p>

                                {{-- Product Price --}}
                                <p class="text-sm font-bold text-purple-700 mt-2">
                                    ₹{{ number_format($item->price, 2) }}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>

            <!-- Grab the best deal start  -->
            <div class="max-w-7xl mx-auto my-10">
                <!-- Header -->
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-purple-darkest">
                            Mix product's
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

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5"> -->
                    @foreach($all_products as $item)
                    <!-- Product 1: Galaxy S22 Ultra -->
                    <a href="/single_product_view/{{ $item->id }}">
                        <div class="product-card bg-white rounded-2xl shadow-lg p-6 hover:shadow-xl transition-shadow">
                            <div class="relative mb-4">
                                <div class="discount-badge absolute top-2 right-2 text-white text-xs font-bold px-2 py-1 rounded-md z-10">
                                    56% OFF
                                </div>
                                <div class="phone-image w-full h-48 flex items-center justify-center">
                                    <img src="{{ url('storage/products_images/' . $item->image) }}" alt="Luxury Watch" class="h-56 mb-6 rounded-xl object-cover w-full group-hover:scale-110 group-hover:rotate-2 transition-all duration-700">
                                </div>
                            </div>
                            <p class="font-semibold text-gray-800 mb-2">{{ $item->name }}</p>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl font-bold text-gray-900">₹ {{ $item->price }}</span>
                                <span class="text-sm text-gray-500 line-through">₹ {{ $item->price+700 }}</span>
                            </div>
                            <p class="text-green-600 text-sm font-medium">Save - ₹700</p>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>

        </div>



        <section class="w-full px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Catalogue Card -->
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img
                        src="../images/w11.jpg"
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
                        src="../images/w12.jpg"
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
                        src="../images/w13.jpg"
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


        <script>
            // Details and rating and feed back section start
            function toggleAdditionalSpecs() {
                const additionalSpecs = document.getElementById('additionalSpecs');
                const chevronIcon = document.getElementById('chevronIcon');
                const viewMoreText = document.getElementById('viewMoreText');

                if (additionalSpecs.classList.contains('hidden')) {
                    additionalSpecs.classList.remove('hidden');
                    chevronIcon.style.transform = 'rotate(180deg)';
                    viewMoreText.textContent = 'View Less';
                } else {
                    additionalSpecs.classList.add('hidden');
                    chevronIcon.style.transform = 'rotate(0deg)';
                    viewMoreText.textContent = 'View More';
                }
            }

            
                
    

            // Star rating functionality
            document.addEventListener('DOMContentLoaded', function() {
                const stars = document.querySelectorAll('.star-rating .star');
                const radioButtons = document.querySelectorAll('.star-rating input[type="radio"]');

                stars.forEach(star => {
                    star.addEventListener('click', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        // Update visual feedback
                        stars.forEach((s, index) => {
                            if (index < rating) {
                                s.classList.add('text-yellow-400');
                                s.classList.remove('text-gray-300');
                            } else {
                                s.classList.add('text-gray-300');
                                s.classList.remove('text-yellow-400');
                            }
                        });
                        // Check the corresponding radio button
                        document.getElementById('star' + rating).checked = true;
                    });

                    star.addEventListener('mouseover', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        stars.forEach((s, index) => {
                            if (index < rating) {
                                s.classList.add('text-yellow-400');
                                s.classList.remove('text-gray-300');
                            } else {
                                s.classList.add('text-gray-300');
                                s.classList.remove('text-yellow-400');
                            }
                        });
                    });

                    star.addEventListener('mouseout', function() {
                        // Reset to checked state or default
                        const checkedRadio = document.querySelector('.star-rating input[type="radio"]:checked');
                        if (checkedRadio) {
                            const rating = parseInt(checkedRadio.value);
                            stars.forEach((s, index) => {
                                if (index < rating) {
                                    s.classList.add('text-yellow-400');
                                    s.classList.remove('text-gray-300');
                                } else {
                                    s.classList.add('text-gray-300');
                                    s.classList.remove('text-yellow-400');
                                }
                            });
                        } else {
                            stars.forEach(s => {
                                s.classList.add('text-gray-300');
                                s.classList.remove('text-yellow-400');
                            });
                        }
                    });
                });

                // Initialize on page load
                const checkedRadio = document.querySelector('.star-rating input[type="radio"]:checked');
                if (checkedRadio) {
                    const rating = parseInt(checkedRadio.value);
                    stars.forEach((s, index) => {
                        if (index < rating) {
                            s.classList.add('text-yellow-400');
                            s.classList.remove('text-gray-300');
                        }
                    });
                }
            });

            // Add enter key support for comment submission (removed as form handles it now)

            // Details and rating and feed back section end
        </script>




    </x-slot>
</x-user_navbar>