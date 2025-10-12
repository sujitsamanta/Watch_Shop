<x-user_navbar>
    <x-slot name="body">
        <div class="max-w-6xl mx-auto my-5">
            <!-- Header -->
            <div class="mb-3">
                <h1 class="text-3xl font-bold text-purple-darkest">My Orders</h1>
                <p class="text-sm text-side">Track your orders</p>
            </div>

            <!-- Orders List -->
            <div class="space-y-2">
                @forelse ($orders as $order)
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <!-- Order Header -->
                    <div class="bg-gradient-to-r from-lav1 to-purple-lightest p-2 border-b border-purple-light">
                        <div class="flex justify-between items-center gap-2">
                            <div class="flex items-center gap-2 text-xs">
                                <div>
                                    <p class="text-[10px] text-side">Order</p>
                                    <p class="font-bold text-purple-darkest">{{ $order->order_number }}</p>
                                </div>
                                <div class="h-4 w-px bg-purple-light"></div>
                                <div>
                                    <p class="text-[10px] text-side">Date</p>
                                    <p class="font-semibold text-purple-dark">{{ $order->created_at->format('M d') }}</p>
                                </div>
                                <div class="h-4 w-px bg-purple-light"></div>
                                <div>
                                    <p class="text-[10px] text-side">Total</p>
                                    <p class="font-bold text-purple-medium">₹{{ number_format($order->total, 2) }}</p>
                                </div>
                            </div>
                            <div>
                                @if($order->status == 'pending')
                                <span class="px-2 py-0.5  bg-red-100 text-red-700 text-[10px] font-semibold rounded-full">Pending</span>
                                @elseif($order->status == 'confirmed')
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-[10px] font-semibold rounded-full">Confirmed</span>
                                @elseif($order->status == 'shipped')
                                <span class="px-2 py-0.5 bg-purple-light text-purple-dark text-[10px] font-semibold rounded-full">Shipped</span>
                                @elseif($order->status == 'delivered')
                                <span class="px-2 py-0.5 bg-green-100 text-green-700 text-[10px] font-semibold rounded-full">Delivered</span>
                                @elseif($order->status == 'cancelled')
                                <span class="px-2 py-0.5 bg-red-100 text-red-700 text-[10px] font-semibold rounded-full">Cancelled</span>
                                @else
                                <span class="px-2 py-0.5 bg-gray-100 text-gray-700 text-[10px] font-semibold rounded-full">{{ ucfirst($order->status) }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="p-2">
                        <div class="space-y-1.5">
                            @foreach ($order->items as $item)
                            <div class="flex gap-3 items-center">
                                <div class="w-14 h-14 bg-lav2 rounded flex items-center justify-center flex-shrink-0">
                                    <img src="{{ asset('storage/products_images/' . ($item->product->image ?? 'default.png')) }} " class="w-12 h-12 object-cover rounded" alt="{{ $item->product->name }}">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="font-semibold text-purple-darkest text-sm truncate">{{ $item->product->name }}</h3>
                                    <p class="text-xs text-side">Qty: {{ $item->quantity }} × ₹{{ number_format($item->price, 2) }}</p>
                                </div>
                                <div class="font-bold text-purple-darkest text-sm">₹{{ number_format($item->price * $item->quantity, 2) }}</div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Order Footer -->
                        <div class="mt-2 pt-2 border-t border-purple-lightest flex justify-between items-center gap-2">
                            <div class="text-[10px] text-side">
                                <span class="font-semibold text-purple-dark">Payment:</span> {{ ucfirst($order->payment_method) }}
                            </div>
                            <div class="flex gap-1.5">
                                <form action="/order_single_product_details/{{ $order->id }}" method="post">
                                    @csrf
                                    <button type="submit"  class="px-2 py-1 bg-purple-medium hover:bg-purple-dark text-white text-[10px] font-semibold rounded transition">
                                        Details
                                    </button>

                                </form>
                              
                                @if($order->status == 'delivered')
                                <button class="px-2 py-1 bg-lav2 hover:bg-purple-light text-purple-dark text-[10px] font-semibold rounded transition">
                                    Reorder
                                </button>
                                @endif
                                @if($order->status == 'confirmed' || $order->status == 'shipped')
                                <button onclick="confirmCancel()" class="px-2 py-1 bg-red-100 hover:bg-red-200 text-red-700 text-[10px] font-semibold rounded transition">
                                    Cancel
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <svg class="w-12 h-12 mx-auto text-purple-light mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <h2 class="text-lg font-bold text-purple-darkest mb-1">No Orders Yet</h2>
                    <p class="text-xs text-side mb-3">Start shopping to see your orders here</p>
                    <a href="/home" class="inline-block px-4 py-1.5 bg-purple-medium hover:bg-purple-dark text-white font-semibold rounded text-xs transition">
                        Start Shopping
                    </a>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($orders->hasPages())
            <div class="mt-4 flex items-center justify-between bg-white rounded-lg shadow px-6 py-2">
                <div class="text-xs text-side">
                    Showing {{ $orders->firstItem() }}-{{ $orders->lastItem() }} of {{ $orders->total() }} orders
                </div>
                <div class="flex gap-2">
                    @if ($orders->onFirstPage())
                    <button disabled class="px-5 py-1.5 bg-gray-200 text-gray-400 rounded-lg text-xs font-semibold cursor-not-allowed">
                        Previous
                    </button>
                    @else
                    <a href="{{ $orders->previousPageUrl() }}" class="px-5 py-1.5 bg-purple-light hover:bg-purple-medium text-purple-dark hover:text-white rounded-lg text-xs font-semibold transition">
                        Previous
                    </a>
                    @endif

                    @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                    @if ($page == $orders->currentPage())
                    <button class="px-4 py-1.5 bg-purple-medium text-white rounded-lg text-xs font-bold">
                        {{ $page }}
                    </button>
                    @else
                    <a href="{{ $url }}" class="px-4 py-1.5 bg-purple-lightest hover:bg-purple-light text-purple-dark rounded-lg text-xs font-semibold transition">
                        {{ $page }}
                    </a>
                    @endif
                    @endforeach

                    @if ($orders->hasMorePages())
                    <a href="{{ $orders->nextPageUrl() }}" class="px-5 py-1.5 bg-purple-light hover:bg-purple-medium text-purple-dark hover:text-white rounded-lg text-xs font-semibold transition">
                        Next
                    </a>
                    @else
                    <button disabled class="px-5 py-1.5 bg-gray-200 text-gray-400 rounded-lg text-xs font-semibold cursor-not-allowed">
                        Next
                    </button>
                    @endif
                </div>
            </div>
            @endif
        </div>

        <script>
            function confirmCancel(orderId) {
                if (confirm('Are you sure you want to cancel this order?')) {
                    fetch(`/orders/${orderId}/cancel`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Order cancelled successfully');
                                location.reload();
                            } else {
                                alert('Failed to cancel order');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred');
                        });
                }
            }
        </script>
    </x-slot>
</x-user_navbar>