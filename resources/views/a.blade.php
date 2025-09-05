<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - TechStore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lucide/0.263.1/umd/lucide.js"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Breadcrumb -->
      

        <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16">
            <!-- Cart Items -->
            <div class="lg:col-span-7">
                <div class="bg-white rounded-lg shadow-sm">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-900">Shopping Cart (3 items)</h2>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <!-- Product 1 -->
                        <div class="p-6 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-20 h-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=200&h=200&fit=crop" alt="iPhone 14 Pro Max">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-gray-900">Apple iPhone 14 Pro Max</h3>
                                <p class="text-sm text-gray-500">128GB Deep Purple</p>
                                <p class="text-sm text-gray-500">#25139526913984</p>
                                <div class="mt-2 flex items-center space-x-4">
                                    <button class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Edit</button>
                                    <button class="text-sm text-red-600 hover:text-red-500 font-medium remove-item">Remove</button>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-gray-300 rounded-md">
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="decrease">
                                        <i data-lucide="minus" class="w-4 h-4"></i>
                                    </button>
                                    <span class="px-4 py-2 border-x border-gray-300 quantity-display">1</span>
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="increase">
                                        <i data-lucide="plus" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-medium text-gray-900">$1,399</p>
                                </div>
                                <button class="text-gray-400 hover:text-red-500 remove-item">
                                    <i data-lucide="x" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="p-6 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-20 h-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1484704849700-f032a568e944?w=200&h=200&fit=crop" alt="AirPods Max">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-gray-900">AirPods Max Silver</h3>
                                <p class="text-sm text-gray-500">Wireless Headphones</p>
                                <p class="text-sm text-gray-500">#53459358345</p>
                                <div class="mt-2 flex items-center space-x-4">
                                    <button class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Edit</button>
                                    <button class="text-sm text-red-600 hover:text-red-500 font-medium remove-item">Remove</button>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-gray-300 rounded-md">
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="decrease">
                                        <i data-lucide="minus" class="w-4 h-4"></i>
                                    </button>
                                    <span class="px-4 py-2 border-x border-gray-300 quantity-display">1</span>
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="increase">
                                        <i data-lucide="plus" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-medium text-gray-900">$549</p>
                                </div>
                                <button class="text-gray-400 hover:text-red-500 remove-item">
                                    <i data-lucide="x" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="p-6 flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-20 h-20 rounded-lg object-cover" src="https://images.unsplash.com/photo-1434494878577-86c23bcb06b9?w=200&h=200&fit=crop" alt="Apple Watch">
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-medium text-gray-900">Apple Watch Series 9</h3>
                                <p class="text-sm text-gray-500">GPS 41mm Starlight Aluminium</p>
                                <p class="text-sm text-gray-500">#63632324</p>
                                <div class="mt-2 flex items-center space-x-4">
                                    <button class="text-sm text-indigo-600 hover:text-indigo-500 font-medium">Edit</button>
                                    <button class="text-sm text-red-600 hover:text-red-500 font-medium remove-item">Remove</button>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center border border-gray-300 rounded-md">
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="decrease">
                                        <i data-lucide="minus" class="w-4 h-4"></i>
                                    </button>
                                    <span class="px-4 py-2 border-x border-gray-300 quantity-display">1</span>
                                    <button class="p-2 hover:bg-gray-100 quantity-btn" data-action="increase">
                                        <i data-lucide="plus" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-medium text-gray-900">$399</p>
                                </div>
                                <button class="text-gray-400 hover:text-red-500 remove-item">
                                    <i data-lucide="x" class="w-5 h-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Actions -->
                    <div class="px-6 py-4 border-t border-gray-200 flex justify-between items-center">
                        <button class="text-indigo-600 hover:text-indigo-500 font-medium flex items-center">
                            <i data-lucide="arrow-left" class="w-4 h-4 mr-2"></i>
                            Continue Shopping
                        </button>
                        <button class="text-gray-600 hover:text-gray-500 font-medium">Clear Cart</button>
                    </div>
                </div>
            </div>

            <!-- Order Summary -->
            <div class="mt-10 lg:mt-0 lg:col-span-5">
                <div class="bg-white rounded-lg shadow-sm sticky top-6">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-xl font-semibold text-gray-900">Order Summary</h2>
                    </div>

                    <div class="p-6">
                        <!-- Discount Code -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Discount code / Promo code</label>
                            <div class="flex space-x-3">
                                <input type="text" placeholder="Enter code" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 font-medium">Apply</button>
                            </div>
                        </div>

                        <!-- Bonus Card -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Your bonus card number</label>
                            <div class="flex space-x-3">
                                <input type="text" placeholder="Enter Card Number" class="flex-1 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <button class="px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-50 font-medium">Apply</button>
                            </div>
                        </div>

                        <!-- Order Totals -->
                        <div class="space-y-4">
                            <div class="flex justify-between text-base">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-medium subtotal">$2,347</span>
                            </div>
                            <div class="flex justify-between text-base">
                                <span class="text-gray-600">Estimated Tax</span>
                                <span class="font-medium">$50</span>
                            </div>
                            <div class="flex justify-between text-base">
                                <span class="text-gray-600">Estimated shipping & Handling</span>
                                <span class="font-medium">$29</span>
                            </div>
                            <div class="border-t border-gray-200 pt-4">
                                <div class="flex justify-between text-lg font-semibold">
                                    <span>Total</span>
                                    <span class="total">$2,426</span>
                                </div>
                            </div>
                        </div>

                        <!-- Checkout Button -->
                        <button class="w-full mt-6 bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 font-medium text-lg transition-colors">
                            Checkout
                        </button>

                        <!-- Payment Methods -->
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <h3 class="text-sm font-medium text-gray-700 mb-3">We accept</h3>
                            <div class="flex space-x-3">
                                <div class="w-12 h-8 bg-blue-600 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">VISA</span>
                                </div>
                                <div class="w-12 h-8 bg-red-500 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">MC</span>
                                </div>
                                <div class="w-12 h-8 bg-blue-500 rounded flex items-center justify-center">
                                    <span class="text-white text-xs font-bold">AMEX</span>
                                </div>
                                <div class="w-12 h-8 bg-yellow-400 rounded flex items-center justify-center">
                                    <span class="text-gray-900 text-xs font-bold">PP</span>
                                </div>
                            </div>
                        </div>

                        <!-- Security Badge -->
                        <div class="mt-4 flex items-center text-sm text-gray-500">
                            <i data-lucide="shield-check" class="w-4 h-4 mr-2 text-green-500"></i>
                            SSL secured checkout
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </div>

   

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Quantity controls
        document.querySelectorAll('.quantity-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const action = this.dataset.action;
                const quantityDisplay = this.parentNode.querySelector('.quantity-display');
                let quantity = parseInt(quantityDisplay.textContent);

                if (action === 'increase') {
                    quantity += 1;
                } else if (action === 'decrease' && quantity > 1) {
                    quantity -= 1;
                }

                quantityDisplay.textContent = quantity;
                updateTotals();
            });
        });

        // Remove item functionality
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function() {
                const cartItem = this.closest('.p-6');
                if (confirm('Are you sure you want to remove this item?')) {
                    cartItem.remove();
                    updateTotals();
                    updateCartCount();
                }
            });
        });

        // Update totals (simplified calculation)
        function updateTotals() {
            // This would normally calculate based on actual quantities and prices
            // For demo purposes, showing static values
            console.log('Updating totals...');
        }

        // Update cart count
        function updateCartCount() {
            const cartItems = document.querySelectorAll('.p-6').length - 1; // -1 for actions row
            document.querySelector('.absolute.-top-2.-right-2').textContent = Math.max(0, cartItems);
        }

        // Promo code and bonus card functionality
        document.querySelectorAll('button').forEach(btn => {
            if (btn.textContent === 'Apply') {
                btn.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    if (input.value.trim()) {
                        alert('Code applied successfully!');
                        input.value = '';
                    }
                });
            }
        });
    </script>
</body>

</html>