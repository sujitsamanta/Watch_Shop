<x-user_navbar>
    <x-slot name="body">
        <div class="max-w-5xl mx-auto px-6 py-6">

            <!-- Header -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-side mb-2">Order Confirmation</h1>
                <p class="text-peri text-sm">Review your order details and delivery information</p>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Left Column - Address & Delivery -->
                <div class="lg:col-span-2 space-y-4">

                    <!-- Delivery Address Card -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                        <div class="flex items-center justify-between p-4 bg-lav2 border-b border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt text-purple-medium mr-2 text-sm"></i>
                                <span class="font-semibold text-side text-sm">Delivery Address</span>
                            </div>
                            @if($address)
                            <a href="/order_address_view_page" class="text-purple-medium hover:text-purple-dark text-xs font-medium transition-colors px-3 py-1 rounded-md hover:bg-purple-light">
                                Edit
                            </a>
                            @else
                             <a href="/order_address_view_page" class="text-purple-medium hover:text-purple-dark text-xs font-medium transition-colors px-3 py-1 rounded-md hover:bg-purple-light">
                                Add adress
                            </a>
                            @endif

                        </div>

                        @if($address)
                        <div class="p-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-purple-medium rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-home text-white text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="font-semibold text-side">{{ $address->full_name }}</p>
                                    <p class="text-peri text-sm mt-0.5">{{ $address->pin_number }} {{ $address->street_address }}, Apt {{ $address->apartment_unit }}</p>
                                    <p class="text-peri text-sm">{{ $address->city }}, NY {{ $address->zip_code }}</p>
                                    <p class="text-peri text-sm">{{ $address->state }}</p>
                                    <p class="text-peri text-xs mt-1">{{ $address->phone_number }}</p>
                                </div>
                            </div>

                            <div class="mt-3 p-2 bg-lav1 rounded border border-lav2">
                                <p class="text-xs font-medium text-side mb-1">Special Instructions:</p>
                                <p class="text-xs text-peri">Leave package at front door. Ring doorbell twice.</p>
                            </div>
                        </div>
                        @else
                        <div class="p-4">
                            <div class="flex items-start space-x-3">
                                <div class="w-6 h-6 bg-purple-medium rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-home text-white text-xs"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                <h1>add address</h1>
                                </div>
                            </div>

                            <div class="mt-3 p-2 bg-lav1 rounded border border-lav2">
                                <p class="text-xs font-medium text-side mb-1">Special Instructions:</p>
                                <p class="text-xs text-peri">Leave package at front door. Ring doorbell twice.</p>
                            </div>
                        </div>


                        @endif
                    </div>

                    <!-- Delivery Time Card -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                        <div class="flex items-center justify-between p-4 bg-lav2 border-b border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-clock text-purple-medium mr-2 text-sm"></i>
                                <span class="font-semibold text-side text-sm">Delivery Schedule</span>
                            </div>
                            <button class="text-purple-medium hover:text-purple-dark text-xs font-medium transition-colors px-3 py-1 rounded-md hover:bg-purple-light">
                                Change
                            </button>
                        </div>

                        <div class="p-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-truck text-green-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-side text-sm">Today, 2:00 PM - 4:00 PM</p>
                                    <p class="text-peri text-xs">Express Delivery • Free</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                        <div class="flex items-center justify-between p-4 bg-lav2 border-b border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-credit-card text-purple-medium mr-2 text-sm"></i>
                                <span class="font-semibold text-side text-sm">Payment Method</span>
                            </div>
                            <button class="text-purple-medium hover:text-purple-dark text-xs font-medium transition-colors px-3 py-1 rounded-md hover:bg-purple-light">
                                Change
                            </button>
                        </div>

                        <div class="p-4">
                            <div class="flex items-center space-x-3">
                                <!-- <div class="w-6 h-6 bg-blue-100 rounded flex items-center justify-center">
                                    <i class="fab fa-cc-visa text-blue-600 text-xs"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-side text-sm">•••• •••• •••• 4242</p>
                                    <p class="text-peri text-xs">Expires 12/26</p>
                                </div> -->
                                <p class="font-semibold text-side text-sm">Cash on Delivary</p>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden sticky top-6">
                        <div class="p-4 bg-lav2 border-b border-gray-200">
                            <div class="flex items-center">
                                <i class="fas fa-receipt text-purple-medium mr-2 text-sm"></i>
                                <span class="font-semibold text-side text-sm">Order Summary</span>
                            </div>
                        </div>

                        <div class="p-4">
                            <!-- Order Items -->

                            @foreach($cart_product as $product)
                            <div class="space-y-3 mb-4">
                                <div class="flex items-center space-x-3">
                                    <div class="w-12 h-12 bg-lav2 rounded-lg flex items-center justify-center">
                                        <!-- <i class="fas fa-box text-peri text-sm"></i> -->
                                        <img src="{{ url('storage/products_images/' . $product->product->image) }}" class="w-10 h-10 object-cover rounded" alt="{{ $product->product->name }}">

                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-side text-sm truncate">{{ $product->product->name }}</p>
                                        <p class="text-peri text-xs">Qty: {{ $product->quantity }}</p>
                                    </div>
                                    <p class="text-side font-medium text-sm">${{ $product->product->price * $product->quantity }}</p>
                                </div>
                            </div>
                            @endforeach

                            <!-- Price Breakdown -->
                            <div class="space-y-2 pb-3 border-b border-t border-gray-200 pt-4">

                                <div class="flex justify-between items-center ">
                                    <span class="text-peri text-sm">Subtotal</span>
                                    <span class="text-side text-sm">${{ $subtotal }}</span>
                                </div>

                                <div class="flex justify-between items-center border-b border-gray-200 pb-4">
                                    <span class="text-peri text-sm">Delivery</span>
                                    <!-- <span class="text-green-600 font-medium text-sm">Free</span> -->
                                    <span class="text-side text-sm">${{ $shipping }}</span>

                                </div>
                                <!-- <div class="flex justify-between items-center">
                                    <span class="text-peri text-sm">Tax</span>
                                    <span class="text-side text-sm">$6.40</span>
                                </div> -->

                                <div class="flex justify-between items-center mt-3 mb-4">
                                    <span class="font-bold text-side">Total</span>
                                    <span class="font-bold text-side text-xl">${{ $total }}</span>
                                </div>
                            </div>



                            <!-- Action Buttons -->
                            <div class="space-y-2">
                                <form action="/confirm_order/{{ $address->id }}" method="post">
                                    @csrf
                                    <button type="submit" class="confirm_order w-full py-3 px-4 bg-purple-medium text-white rounded-lg font-semibold hover:bg-purple-dark transition-colors text-sm">
                                        <i class="fas fa-check mr-2"></i>
                                        Place Order
                                    </button>

                                </form>


                                <a href="/add_to_cart_view">

                                    <button class="w-full mt-3 py-3 px-4 bg-lav2 text-side rounded-lg font-medium hover:bg-purple-light transition-colors text-sm">

                                        <i class="fas fa-arrow-left mr-2"></i>
                                        Back to Cart
                                    </button>
                                </a>


                            </div>

                            <!-- Security Notice -->
                            <div class="flex items-center justify-center space-x-2 mt-3 text-peri text-xs">
                                <i class="fas fa-shield-alt"></i>
                                <span>Secure SSL Checkout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Indicator -->
            <div class="mt-8 flex items-center justify-center space-x-4 text-xs">
                <div class="flex items-center space-x-2 text-green-600">
                    <i class="fas fa-check-circle"></i>
                    <span>Cart</span>
                </div>
                <div class="w-8 h-0.5 bg-green-600"></div>
                <div class="flex items-center space-x-2 text-purple-medium">
                    <i class="fas fa-circle"></i>
                    <span class="font-semibold">Checkout</span>
                </div>
                <div class="w-8 h-0.5 bg-lav2"></div>
                <div class="flex items-center space-x-2 text-peri">
                    <i class="far fa-circle"></i>
                    <span>Confirmation</span>
                </div>
            </div>
        </div>
    </x-slot>
</x-user_navbar>