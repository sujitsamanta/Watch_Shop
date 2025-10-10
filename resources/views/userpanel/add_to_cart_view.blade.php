<x-user_navbar>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 my-12">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Shopping Cart</h1>
                <p class="text-gray-600 mt-2">Review your items before checkout</p>
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-x-6 lg:items-start xl:gap-x-6">
                <!-- Cart Items with Fixed Height and Scroll -->
                <div class="lg:col-span-6">
                    <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="px-6 py-4 border-b border-gray-200 sticky top-0 bg-white z-10">
                            <h2 class="text-xl font-semibold text-gray-900">Shopping Cart (<span id="item-count"></span> items)</h2>

                        </div>

                        <!-- Scrollable Products Container -->
                        <div class=" overflow-y-auto custom-scrollbar">
                            <div class="divide-y divide-gray-200" id="products-container">
                                @if ($cart_product->isNotEmpty())

                                @foreach($cart_product as $product)
                                <!-- Product 1 - iPhone -->
                                <a href="/single_product_view/{{ $product->product->id }}">

                                    <div class="p-6 flex items-center space-x-4 product-item" data-price="{{ $product->product->price }}">
                                        <div class="flex-shrink-0">
                                            <img class="w-20 h-20 rounded-lg object-cover" src="{{ url('storage/products_images/' . $product->product->image) }}" class="w-70 h-70 object-cover group-hover:scale-110 transition-transform duration-500">

                                            <!-- <img class="w-20 h-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=200&h=200&fit=crop" alt="iPhone 14 Pro Max"> -->
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <h3 class="text-lg font-medium text-gray-900">{{ $product->product->name }}</h3>
                                            <p class="text-sm text-gray-500">{{ $product->product->description }}</p>

                                            <!-- <p class="text-sm text-gray-500">#25139526913984</p> -->

                                            <!-- <div class="mt-2 flex items-center space-x-4">
                                            <button class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Edit</button>
                                            <button class="text-sm text-red-600 hover:text-red-500 font-medium remove-item">Remove</button>
                                        </div> -->
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <div class="flex items-center border border-gray-300 rounded-md">
                                                <form action="/add_to_cart_decrease_product_quantity" method="post">
                                                    @csrf
                                                    <button id="ajaxBtn" class="p-2 hover:bg-gray-100 quantity-btn" data-action="decrease" type="submit">
                                                        <i class="fa-solid fa-minus text-xs"></i>
                                                    </button>
                                                    <input type="text" value="{{ $product->product->id }}" name="product_id" hidden>
                                                </form>
                                                <span class="px-4 py-2 border-x border-gray-300 quantity-display">{{ $product->quantity }}</span>
                                                <form action="/add_to_cart_increash_product_quantity" method="post">
                                                    @csrf
                                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="increase">
                                                        <i class="fa-solid fa-plus text-xs"></i>
                                                    </button>
                                                    <input type="text" value="{{ $product->product->id }}" name="product_id" hidden>
                                                </form>
                                            </div>
                                            <div class="text-right">
                                                <p class="text-lg font-medium text-gray-900 item-price">{{ $product->product->price * $product->quantity }}</p>
                                            </div>
                                            <form action="/add_to_cart_delete_product" method="post">
                                                @csrf
                                                <button class="text-gray-400 hover:text-red-500 remove-item">
                                                    <i class="fa-solid fa-times w-5 h-5"></i>
                                                </button>
                                                <input type="text" value="{{ $product->product->id }}" name="product_id" hidden>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                                @endforeach

                                @else
                                <h1 class="text-center p-5 text-lg font-medium text-gray-500">Ples add to cart product</h1>

                                @endif

                            </div>
                        </div>

                        <!-- Cart Actions -->
                        <div class="px-6 py-4 border-t border-gray-200 flex justify-between items-center bg-white">
                            <a href="/home">
                                <button class="text-indigo-600 hover:text-indigo-500 font-medium flex items-center transition-colors">
                                    <i class="fa-solid fa-arrow-left w-4 h-4 mr-2"></i>
                                    Continue Shopping
                                </button>
                            </a>
                            <form action="/add_to_cart_clear_all_product" method="post">
                                @csrf
                                <button class="add_to_cart_cler_all_products text-gray-600 hover:text-gray-500 font-medium transition-colors" id="clear-cart">Clear Cart</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->

                @if ($cart_product->isNotEmpty())
                <div class="mt-10 lg:mt-0 lg:col-span-6">
                    <div class="bg-white rounded-lg shadow-sm sticky top-6">
                        <div class="px-6 py-4 border-b border-gray-200">
                            <h2 class="text-xl font-semibold text-gray-900">Order Summary</h2>
                        </div>

                        <div class="p-6">
                            <!-- Discount Code -->
                            <!-- <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Discount code / Promo code</label>
                                <div class="flex space-x-3">
                                    <input type="text" id="discount-code" placeholder="Enter code" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <button id="apply-discount" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 font-medium transition-colors">Apply</button>
                                </div>
                                <div id="discount-message" class="mt-2 text-sm hidden"></div>
                            </div> -->

                            <!-- Bonus Card -->
                            <!-- <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Your bonus card number</label>
                                <div class="flex space-x-3">
                                    <input type="text" id="bonus-card" placeholder="Enter Card Number" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    <button id="apply-bonus" class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 font-medium transition-colors">Apply</button>
                                </div>
                                <div id="bonus-message" class="mt-2 text-sm hidden"></div>
                            </div> -->
                            <div class="border-b border-gray-200 pb-4">

                                @foreach($cart_product as $product)
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">{{ $product->product->name }} ({{ $product->quantity }})</span>
                                    <!-- <span class="text-gray-600"></span> -->
                                    <span class="font-medium" id="subtotal">{{ $product->product->price * $product->quantity }}</span>
                                </div>
                                @endforeach
                            </div>


                            <!-- Order Totals -->
                            <div class="space-y-4">
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Subtotal</span>
                                    <span class="font-medium" id="subtotal">{{ $subtotal }}</span>
                                </div>

                                <!-- <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Discount</span>
                                    <span class="font-medium text-green-600" id="discount">-$0</span>
                                </div>
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Estimated Tax</span>
                                    <span class="font-medium" id="tax">$942</span>
                                </div> -->

                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Estimated shipping</span>
                                    <span class="font-medium" id="shipping">{{ $shipping }}</span>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between text-lg font-semibold">
                                        <span>Total</span>
                                        <span id="total">{{ $total }}</span>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="space-y-4">
                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Subtotal</span>
                                    <span class="font-medium">{{ $subtotal }}</span>
                                </div>

                                <div class="flex justify-between text-base">
                                    <span class="text-gray-600">Estimated shipping</span>
                                    <span class="font-medium">{{ $shipping }}</span>
                                </div>

                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between text-lg font-semibold">
                                        <span>Total</span>
                                        <span>{{ $total }}</span>
                                    </div>
                                </div>
                            </div> -->


                            <!-- Checkout Button -->
                            <form action="/order_checkout" method="get">

                                <button id="checkout-btn" class="w-full mt-6 bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 font-medium text-lg transition-colors duration-200 transform hover:scale-105">
                                    Proceed to Checkout
                                </button>
                            </form>


                            <!-- Payment Methods -->
                            <!-- <div class="mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-700 mb-3">We accept</h3>
                            <div class="flex space-x-3">
                                <div class="w-12 h-8 bg-blue-600 rounded flex items-center justify-center shadow-sm">
                                    <span class="text-white text-xs font-bold">VISA</span>
                                </div>
                                <div class="w-12 h-8 bg-red-500 rounded flex items-center justify-center shadow-sm">
                                    <span class="text-white text-xs font-bold">MC</span>
                                </div>
                                <div class="w-12 h-8 bg-blue-500 rounded flex items-center justify-center shadow-sm">
                                    <span class="text-white text-xs font-bold">AMEX</span>
                                </div>
                                <div class="w-12 h-8 bg-yellow-400 rounded flex items-center justify-center shadow-sm">
                                    <span class="text-gray-900 text-xs font-bold">PP</span>
                                </div>
                            </div>
                        </div> -->

                            <!-- Security Badge -->
                            <div class="mt-4 flex items-center text-sm text-gray-500">
                                <i class="fa-solid fa-shield-halved w-4 h-4 mr-2 text-green-500"></i>
                                SSL secured checkout
                            </div>
                        </div>
                    </div>

                </div>

                @endif

            </div>

        </div>
        <!-- Progress Indicator -->
        <div class="mt-8 flex items-center justify-center space-x-4 text-xs p-10">
            <!-- <div class="flex items-center space-x-2 text-green-600">
                    <i class="fas fa-check-circle"></i>
                    <span>Cart</span>
                </div>
                <div class="w-8 h-0.5 bg-green-600"></div> -->
            <div class="flex items-center space-x-2 text-purple-medium">
                <i class="fas fa-circle"></i>
                <span class="font-semibold">Cart</span>
            </div>
            <div class="w-8 h-0.5 bg-lav2"></div>
            <div class="flex items-center space-x-2 text-peri">
                <i class="far fa-circle"></i>
                <span>Checkout</span>
            </div>
            <div class="w-8 h-0.5 bg-lav2"></div>
            <div class="flex items-center space-x-2 text-peri">
                <i class="far fa-circle"></i>
                <span>Confirmation</span>
            </div>
        </div>

        <script>
            // Initialize Lucide icons
            lucide.createIcons();

            // Variables to track totals
            let subtotal = 0;
            let discount = 0;
            const tax = 942;
            const shipping = 29;

            // Calculate initial totals
            function calculateSubtotal() {
                subtotal = 0;
                document.querySelectorAll('.product-item').forEach(item => {
                    const price = parseInt(item.dataset.price);
                    const quantity = parseInt(item.querySelector('.quantity-display').textContent);
                    subtotal += price * quantity;
                });
                updateDisplay();
            }

            // Update display
            // function updateDisplay() {
            //     document.getElementById('subtotal').textContent = `${subtotal.toLocaleString()}`;
            //     document.getElementById('discount').textContent = `-${discount.toLocaleString()}`;
            //     document.getElementById('tax').textContent = `${tax.toLocaleString()}`;
            //     document.getElementById('shipping').textContent = `${shipping.toLocaleString()}`;

            //     const total = subtotal - discount + tax + shipping;
            //     document.getElementById('total').textContent = `${total.toLocaleString()}`;
            // }

            // Update item count

            // function updateItemCount() {
            //     let totalItems = 0;
            //     document.querySelectorAll('.product-item').forEach(item => {
            //         const quantity = parseInt(item.querySelector('.quantity-display').textContent);
            //         totalItems += quantity;
            //     });
            //     // document.getElementById('item-count').textContent = totalItems;
            // }

            // Update item price display
            function updateItemPrice(item) {
                const price = parseInt(item.dataset.price);
                const quantity = parseInt(item.querySelector('.quantity-display').textContent);
                const totalPrice = price * quantity;
                item.querySelector('.item-price').textContent = `${totalPrice.toLocaleString()}`;
            }

            // Quantity controls

            // document.querySelectorAll('.quantity-btn').forEach(btn => {
            //     btn.addEventListener('click', function() {
            //         const action = this.dataset.action;
            //         const quantityDisplay = this.parentNode.querySelector('.quantity-display');
            //         const productItem = this.closest('.product-item');
            //         let quantity = parseInt(quantityDisplay.textContent);

            //         if (action === 'increase') {
            //             quantity += 1;
            //         } else if (action === 'decrease' && quantity > 1) {
            //             quantity -= 1;
            //         }

            //         quantityDisplay.textContent = quantity;
            //         updateItemPrice(productItem);
            //         calculateSubtotal();
            //         updateItemCount();

            //         // Add animation effect

            //          productItem.style.transform = 'scale(1.02)';
            //          setTimeout(() => {
            //              productItem.style.transform = 'scale(1)';
            //          }, 150);

            //     });
            // });

            // Remove item functionality
            // document.querySelectorAll('.remove-item').forEach(btn => {
            //     btn.addEventListener('click', function() {
            //         const cartItem = this.closest('.product-item');
            //         if (confirm('Are you sure you want to remove this item from your cart?')) {
            //             cartItem.style.transform = 'translateX(-100%)';
            //             cartItem.style.opacity = '0';
            //             cartItem.style.transition = 'all 0.3s ease-out';

            //             setTimeout(() => {
            //                 cartItem.remove();
            //                 calculateSubtotal();
            //                 updateItemCount();
            //             }, 300);
            //         }
            //     });
            // });


            // Clear cart functionality

            // document.getElementById('clear-cart').addEventListener('click', function() {
            //     if (confirm('Are you sure you want to clear all items from your cart?')) {
            //         const container = document.getElementById('products-container');
            //         container.style.opacity = '0';
            //         container.style.transition = 'opacity 0.3s ease-out';

            //         setTimeout(() => {
            //             container.innerHTML = '<div class="p-8 text-center text-gray-500">Your cart is empty</div>';
            //             container.style.opacity = '1';
            //             calculateSubtotal();
            //             updateItemCount();
            //         }, 300);
            //     }
            // });

            // Discount code functionality
            document.getElementById('apply-discount').addEventListener('click', function() {
                const input = document.getElementById('discount-code');
                const message = document.getElementById('discount-message');
                const code = input.value.trim().toUpperCase();

                if (code) {
                    message.classList.remove('hidden');

                    // Simulate discount codes
                    const discountCodes = {
                        'SAVE10': 0.10,
                        'WELCOME15': 0.15,
                        'TECH20': 0.20
                    };

                    if (discountCodes[code]) {
                        discount = Math.round(subtotal * discountCodes[code]);
                        message.textContent = `Discount code "${code}" applied successfully!`;
                        message.className = 'mt-2 text-sm text-green-600';
                        input.value = '';
                        updateDisplay();
                    } else {
                        message.textContent = 'Invalid discount code. Please try again.';
                        message.className = 'mt-2 text-sm text-red-600';
                    }
                }
            });

            // Bonus card functionality
            document.getElementById('apply-bonus').addEventListener('click', function() {
                const input = document.getElementById('bonus-card');
                const message = document.getElementById('bonus-message');
                const cardNumber = input.value.trim();

                if (cardNumber) {
                    message.classList.remove('hidden');

                    if (cardNumber.length >= 8) {
                        message.textContent = 'Bonus card applied! You\'ll earn 2x points on this purchase.';
                        message.className = 'mt-2 text-sm text-green-600';
                        input.value = '';
                    } else {
                        message.textContent = 'Invalid card number. Please enter a valid bonus card number.';
                        message.className = 'mt-2 text-sm text-red-600';
                    }
                }
            });

            // Checkout button functionality
            document.getElementById('checkout-btn').addEventListener('click', function() {
                this.innerHTML = '<i class="fa-solid fa-spinner fa-spin mr-2"></i>Processing...';
                this.disabled = true;

                setTimeout(() => {
                    alert('Redirecting to checkout...');
                    this.innerHTML = 'Proceed to Checkout';
                    this.disabled = false;
                }, 2000);
            });

            // Enter key support for input fields
            document.getElementById('discount-code').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    document.getElementById('apply-discount').click();
                }
            });

            document.getElementById('bonus-card').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    document.getElementById('apply-bonus').click();
                }
            });

            // Initialize calculations
            calculateSubtotal();
            updateItemCount();

            // Add smooth scrolling behavior
            document.querySelectorAll('.product-item').forEach((item, index) => {
                item.style.transition = 'all 0.3s ease';
            });
        </script>


    </x-slot>
</x-user_navbar>