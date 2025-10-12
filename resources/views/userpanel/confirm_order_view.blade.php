<x-user_navbar>
    <x-slot name="body">
        <style>
            @keyframes checkmark {
                0% {
                    stroke-dashoffset: 100;
                }

                100% {
                    stroke-dashoffset: 0;
                }
            }

            .checkmark-circle {
                stroke-dasharray: 166;
                stroke-dashoffset: 166;
                animation: checkmark 0.6s ease-in-out forwards;
            }

            .checkmark-check {
                stroke-dasharray: 48;
                stroke-dashoffset: 48;
                animation: checkmark 0.3s 0.3s ease-in-out forwards;
            }

            @keyframes scaleIn {
                0% {
                    transform: scale(0);
                    opacity: 0;
                }

                50% {
                    transform: scale(1.1);
                }

                100% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes confetti {
                0% {
                    transform: translateY(-100%) rotate(0deg);
                    opacity: 1;
                }

                100% {
                    transform: translateY(100vh) rotate(720deg);
                    opacity: 0;
                }
            }

            .success-animation {
                animation: scaleIn 0.6s ease-out forwards;
            }

            .content-hidden {
                opacity: 0;
            }

            .content-show {
                animation: fadeInUp 0.6s ease-out forwards;
            }

            .confetti {
                position: fixed;
                width: 10px;
                height: 10px;
                border-radius: 50%;
                animation: confetti 3s ease-out forwards;
            }

            #animationOverlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #F4EFFF 0%, #F3F0FF 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1000;
                transition: opacity 0.5s ease-out;
            }

            #animationOverlay.hide {
                opacity: 0;
                pointer-events: none;
            }
        </style>

        <!-- Animation Overlay -->
        <div id="animationOverlay">
            <div class="text-center">
                <div class="success-animation inline-flex items-center justify-center w-32 h-32 rounded-full bg-white shadow-2xl mb-6">
                    <svg class="w-20 h-20" viewBox="0 0 52 52">
                        <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" stroke="#9D8DF1" stroke-width="2" />
                        <path class="checkmark-check" fill="none" stroke="#9D8DF1" stroke-width="3" d="M14 27l7 7 16-16" />
                    </svg>
                </div>
                <h1 class="text-4xl font-bold text-purple-darkest mb-2 success-animation" style="animation-delay: 0.3s;">Success!</h1>
                <p class="text-xl text-side success-animation" style="animation-delay: 0.5s;">Your order has been placed</p>
            </div>
        </div>

        <!-- Main Content -->
    <div id="mainContent" class="max-w-5xl mx-auto content-hidden mt-5">
        <!-- Main Card -->
        <div class="bg-white rounded-xl shadow-lg p-4">
            <!-- Success Header -->
            <div class="flex items-center gap-4 mb-3 pb-3 border-b border-purple-light">
                <div class="flex-shrink-0">
                    <svg class="w-12 h-12" viewBox="0 0 52 52">
                        <circle cx="26" cy="26" r="25" fill="none" stroke="#9D8DF1" stroke-width="2"/>
                        <path fill="none" stroke="#9D8DF1" stroke-width="3" d="M14 27l7 7 16-16"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-purple-darkest">Order Confirmed!</h1>
                    <p class="text-side text-sm">Order #{{ $order->order_number }}</p>
                </div>
                <div class="text-right">
                    <p class="text-xs text-side">Order Date</p>
                    <p class="font-semibold text-purple-dark">{{ $order->created_at->format('M d, Y') }}</p>
                </div>
            </div>

            <!-- Delivery Info -->
            <div class="bg-lav1 rounded-lg p-2.5 mb-3">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                        </svg>
                        <div>
                            <p class="text-xs text-side">Estimated Delivery</p>
                            <p class="font-bold text-purple-darkest">{{ now()->addDays(5)->format('M d') }} - {{ now()->addDays(7)->format('M d') }}</p>
                        </div>
                    </div>
                    <button class="text-purple-medium text-sm font-semibold hover:text-purple-dark">Track</button>
                </div>
            </div>

            <!-- Order Items -->
            <div class="mb-2">
                <h2 class="text-sm font-bold text-purple-darkest mb-1.5">Items Ordered</h2>
                
                <div class="space-y-1.5">
                    @foreach ($order->items as $item)
                    <div class="flex gap-3">
                        <div class="w-14 h-14 bg-lav2 rounded flex items-center justify-center flex-shrink-0">
                            <img src="{{ url('storage/products_images/' . $item->product->image) }}" class="w-10 h-10 object-cover rounded" alt="{{ $item->product->name }}">
                        </div>
                        <div class="flex-1 min-w-0">
                            <h3 class="font-semibold text-sm text-purple-darkest">{{ $item->product->name }}</h3>
                            <p class="text-xs text-side">Qty: {{ $item->quantity }}</p>
                        </div>
                        <div class="font-bold text-purple-darkest">₹{{ number_format($item->price * $item->quantity, 2) }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Order Summary -->
            <div class="bg-lav1 rounded-lg p-2.5 mb-2">
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between text-side">
                        <span>Subtotal</span>
                        <span>₹{{ number_format($order->subtotal, 2) }}</span>
                    </div>
                    <div class="flex justify-between text-side">
                        <span>Shipping</span>
                        <span>₹{{ number_format($order->shipping_cost, 2) }}</span>
                    </div>
                    <div class="border-t border-purple-light pt-2 flex justify-between items-center">
                        <span class="font-bold text-purple-darkest">Total</span>
                        <span class="text-xl font-bold text-purple-medium">₹{{ number_format($order->total, 2) }}</span>
                    </div>
                </div>
            </div>

            <!-- Info Grid -->
            <div class="grid grid-cols-2 gap-4 mb-2">
                <div>
                    <p class="text-xs text-side mb-1">Shipping To</p>
                    @if ($default_address)
                    <p class="text-sm font-semibold text-purple-dark">{{ $default_address->full_name }}</p>
                    <p class="text-xs text-side">
                        {{ $default_address->street_address }},
                        @if ($default_address->apartment_unit)
                        {{ $default_address->apartment_unit }},
                        @endif
                        {{ $default_address->city }}, {{ $default_address->state }} - {{ $default_address->zip_code }}
                    </p>
                    <p class="text-xs text-side">PIN: {{ $default_address->pin_number }}</p>
                    <p class="text-xs text-side">Phone: {{ $default_address->phone_number }}</p>
                    <p class="text-xs text-side">{{ $default_address->country }}</p>
                    @else
                    <p class="text-xs text-red-500">No default address set.</p>
                    @endif
                </div>
                <div>
                    <p class="text-xs text-side mb-1">Payment</p>
                    <p class="text-sm font-semibold text-purple-dark">{{ strtoupper($order->payment_method) }}</p>
                    <p class="text-xs text-green-600">✓ {{ $order->status }}</p>
                </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-3">
                <a href="/orders" class="flex-1 bg-purple-medium hover:bg-purple-dark text-white font-semibold py-2.5 rounded-lg transition text-center">
                    View All Orders
                </a>
                <a href="/home" class="flex-1 bg-lav2 hover:bg-purple-light text-purple-dark font-semibold py-2.5 rounded-lg transition text-center">
                    Continue Shopping
                </a>
            </div>

            <!-- Email Notice -->
            <p class="text-center text-xs text-side mt-2">Confirmation sent to {{ $order->user->email ?? 'your email' }}</p>
        </div>


        <!-- Progress Indicator -->
        <div class="my-8 flex items-center justify-center space-x-4 text-xs">
            <div class="flex items-center space-x-2 text-green-600">
                <i class="fas fa-check-circle"></i>
                <span>Cart</span>
            </div>
            <div class="w-8 h-0.5 bg-green-600"></div>
            <div class="flex items-center space-x-2 text-green-600">
                <i class="fas fa-check-circle"></i>
                <span class="font-semibold">Checkout</span>
            </div>
            <div class="w-8 h-0.5 bg-green-600"></div>
            <div class="flex items-center space-x-2 text-green-600">
                <i class="fas fa-check-circle"></i>
                <span>Confirmation</span>
            </div>
        </div>

        <script>
            // Create confetti particles
            function createConfetti() {
                const colors = ['#9D8DF1', '#E2D8FF', '#A9B4E6', '#F3F0FF'];
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.animationDelay = Math.random() * 0.5 + 's';
                    confetti.style.animationDuration = (Math.random() * 2 + 2) + 's';
                    document.body.appendChild(confetti);

                    // Remove confetti after animation
                    setTimeout(() => confetti.remove(), 3000);
                }
            }

            // Start animation sequence
            window.addEventListener('load', function() {
                // Trigger confetti after checkmark animation
                setTimeout(() => {
                    createConfetti();
                }, 800);

                // Hide overlay and show main content
                setTimeout(() => {
                    const overlay = document.getElementById('animationOverlay');
                    const mainContent = document.getElementById('mainContent');

                    overlay.classList.add('hide');
                    mainContent.classList.remove('content-hidden');
                    mainContent.classList.add('content-show');

                    // Remove overlay from DOM after fade out
                    setTimeout(() => {
                        overlay.remove();
                    }, 500);
                }, 2500);
            });
        </script>
    </x-slot>
</x-user_navbar>