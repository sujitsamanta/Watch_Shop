<x-user_navbar>
    <x-slot name="body">
        <!-- Main Content -->
        <div id="mainContent" class="max-w-5xl mx-auto content-hidden my-5">
            <!-- Main Card -->
            <div class="bg-white rounded-xl shadow-lg p-4">
                <!-- Success Header -->
                <div class="flex items-center gap-4 mb-3 pb-3 border-b border-purple-light">
                    <div class="flex-shrink-0">
                        <!-- <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#9D8DF1" stroke-width="2" />
                            <path fill="none" stroke="#9D8DF1" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg> -->

                        @if($order->status == 'pending')
                        <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#fc6831" stroke-width="2" />
                            <path fill="none" stroke="#fc6831" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg>
                        @elseif($order->status == 'confirmed')
                        <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#2388f9" stroke-width="2" />
                            <path fill="none" stroke="#2388f9" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg>
                        @elseif($order->status == 'shipped')
                        <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#2388f9" stroke-width="2" />
                            <path fill="none" stroke="#2388f9" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg>
                        @elseif($order->status == 'delivered')
                        <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#519d2b" stroke-width="2" />
                            <path fill="none" stroke="#519d2b" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg>
                        @elseif($order->status == 'canceled')
                        <svg class="w-12 h-12" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="25" fill="none" stroke="#fc6831" stroke-width="2" />
                            <path fill="none" stroke="#fc6831" stroke-width="3" d="M14 27l7 7 16-16" />
                        </svg>

                        @endif


                    </div>
                    <div class="flex-1">


                        <div class="my-2">
                            @if($order->status == 'pending')
                            <h1 class="text-red-700  text-2xl font-bold">Order Pending</h1>
                            @elseif($order->status == 'confirmed')
                            <h1 class=" text-blue-700 text-2xl font-bold">Order Confirmed</h1>
                            @elseif($order->status == 'shipped')
                            <h1 class="text-purple-dark text-2xl font-bold">Order Shipped</h1>
                            @elseif($order->status == 'delivered')
                            <h1 class=" text-green-700 text-2xl font-bold ">Order Delivered</h1>
                            @elseif($order->status == 'canceled')
                            <h1 class=" text-red-700 text-2xl font-bold">Order Cancelled</h1>
                            @else
                            <h1 class=" text-gray-700 text-2xl font-bold">Order {{ ucfirst($order->status) }}</h1>
                            @endif
                        </div>


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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
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
                                <img src="{{ $item->product->photo_url }}" class="w-10 h-10 object-cover rounded" alt="{{ $item->product->name }}">
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

                        <div class="my-2">
                            @if($order->status == 'pending')
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Pending</span>
                            @elseif($order->status == 'confirmed')
                            <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">Confirmed</span>
                            @elseif($order->status == 'shipped')
                            <span class="px-3 py-1 bg-purple-light text-purple-dark text-xs font-semibold rounded-full">Shipped</span>
                            @elseif($order->status == 'delivered')
                            <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">Delivered</span>
                            @elseif($order->status == 'cancelled')
                            <span class="px-3 py-1 bg-red-100 text-red-700 text-xs font-semibold rounded-full">Cancelled</span>
                            @else
                            <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">{{ ucfirst($order->status) }}</span>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- Actions -->
                <div class="flex gap-3">
                    <a href="/all_orders_view" class="flex-1 bg-purple-medium hover:bg-purple-dark text-white font-semibold py-2.5 rounded-lg transition text-center">
                        View All Orders
                    </a>
                    <a href="/home" class="flex-1 bg-lav2 hover:bg-purple-light text-purple-dark font-semibold py-2.5 rounded-lg transition text-center">
                        Continue Shopping
                    </a>
                </div>

                <!-- Email Notice -->
                <p class="text-center text-xs text-side mt-2">Confirmation sent to {{ $order->user->email ?? 'your email' }}</p>
            </div>
        </div>
    </x-slot>
</x-user_navbar>