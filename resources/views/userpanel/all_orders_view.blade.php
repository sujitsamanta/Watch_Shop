<x-user_navbar>
    <x-slot name="body">
        <div class="max-w-6xl mx-auto my-6">
            <!-- Header -->
            <div class="mb-5">
                <h1 class="text-4xl font-bold text-purple-darkest">My Orders</h1>
                <p class="text-base text-side">Track your orders</p>
            </div>

            <!-- Orders List -->
            <div class="space-y-3">
                @forelse ($orders as $order)
                <div class="bg-white rounded-xl shadow-md overflow-hidden">
                    <!-- Order Header -->
                    <div class="bg-gradient-to-r from-lav1 to-purple-lightest p-3 border-b border-purple-light">
                        <div class="flex justify-between items-center gap-3">
                            <div class="flex items-center gap-3 text-sm">
                                <div>
                                    <p class="text-xs text-side">Order</p>
                                    <p class="font-bold text-purple-darkest text-base">{{ $order->order_number }}</p>
                                </div>
                                <div class="h-5 w-px bg-purple-light"></div>
                                <div>
                                    <p class="text-xs text-side">Date</p>
                                    <p class="font-semibold text-purple-dark text-sm">{{ $order->created_at->format('M d') }}</p>
                                </div>
                                <div class="h-5 w-px bg-purple-light"></div>
                                <div>
                                    <p class="text-xs text-side">Total</p>
                                    <p class="font-bold text-purple-medium text-base">₹{{ number_format($order->total, 2) }}</p>
                                </div>
                            </div>
                            <div>
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

                    <!-- Order Items -->
                    <div class="p-4">
                        <div class="space-y-2">
                            @foreach ($order->items as $item)
                            <div class="flex gap-4 items-center">
                                <div class="w-16 h-16 bg-lav2 rounded flex items-center justify-center flex-shrink-0">
                                    <img src="{{ asset('storage/products_images/' . ($item->product->image ?? 'default.png')) }}"
                                        class="w-14 h-14 object-cover rounded"
                                        alt="{{ $item->product->name }}">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-semibold text-purple-darkest text-base truncate">{{ $item->product->name }}</h3>
                                    <p class="text-sm text-side">Qty: {{ $item->quantity }} × ₹{{ number_format($item->price, 2) }}</p>
                                </div>
                                <div class="font-bold text-purple-darkest text-base">₹{{ number_format($item->price * $item->quantity, 2) }}</div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Order Footer -->
                        <div class="mt-3 pt-3 border-t border-purple-lightest flex justify-between items-center gap-3">
                            <div class="text-sm text-side">
                                <span class="font-semibold text-purple-dark">Payment:</span> {{ ucfirst($order->payment_method) }}
                            </div>
                            <div class="flex gap-2">
                                <form action="/order_single_product_details/{{ $order->id }}" method="get">
                                    
                                    <button type="submit"
                                        class="px-3 py-1.5 bg-purple-medium hover:bg-purple-dark text-white text-sm font-semibold rounded-lg transition">
                                        Details
                                    </button>
                                </form>

                                @if($order->status == 'delivered')
                                <button class="px-3 py-1.5 bg-lav2 hover:bg-purple-light text-purple-dark text-sm font-semibold rounded-lg transition">
                                    Reorder
                                </button>
                                @endif

                                @if($order->status == 'confirmed' || $order->status == 'shipped')
                                <form action="/cancel_order/{{ $order }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="px-3 py-1.5 bg-red-100 hover:bg-red-200 text-red-700 text-sm font-semibold rounded-lg transition">
                                        Cancel
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white rounded-xl shadow p-8 text-center">
                    <svg class="w-16 h-16 mx-auto text-purple-light mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <h2 class="text-xl font-bold text-purple-darkest mb-2">No Orders Yet</h2>
                    <p class="text-sm text-side mb-4">Start shopping to see your orders here</p>
                    <a href="/home"
                        class="inline-block px-5 py-2 bg-purple-medium hover:bg-purple-dark text-white font-semibold rounded-lg text-sm transition">
                        Start Shopping
                    </a>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($orders->hasPages())
            <div class="mt-5 flex items-center justify-between bg-white rounded-xl shadow px-8 py-3">
                <div class="text-sm text-side">
                    Showing {{ $orders->firstItem() }}-{{ $orders->lastItem() }} of {{ $orders->total() }} orders
                </div>
                <div class="flex gap-3">
                    @if ($orders->onFirstPage())
                    <button disabled class="px-6 py-2 bg-gray-200 text-gray-400 rounded-lg text-sm font-semibold cursor-not-allowed">
                        Previous
                    </button>
                    @else
                    <a href="{{ $orders->previousPageUrl() }}"
                        class="px-6 py-2 bg-purple-light hover:bg-purple-medium text-purple-dark hover:text-white rounded-lg text-sm font-semibold transition">
                        Previous
                    </a>
                    @endif

                    @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                    @if ($page == $orders->currentPage())
                    <button class="px-5 py-2 bg-purple-medium text-white rounded-lg text-sm font-bold">
                        {{ $page }}
                    </button>
                    @else
                    <a href="{{ $url }}"
                        class="px-5 py-2 bg-purple-lightest hover:bg-purple-light text-purple-dark rounded-lg text-sm font-semibold transition">
                        {{ $page }}
                    </a>
                    @endif
                    @endforeach

                    @if ($orders->hasMorePages())
                    <a href="{{ $orders->nextPageUrl() }}"
                        class="px-6 py-2 bg-purple-light hover:bg-purple-medium text-purple-dark hover:text-white rounded-lg text-sm font-semibold transition">
                        Next
                    </a>
                    @else
                    <button disabled class="px-6 py-2 bg-gray-200 text-gray-400 rounded-lg text-sm font-semibold cursor-not-allowed">
                        Next
                    </button>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </x-slot>
</x-user_navbar>
