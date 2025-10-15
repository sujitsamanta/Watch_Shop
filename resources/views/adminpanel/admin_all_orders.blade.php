<x-admin_navbar>
    <x-slot name="body">

        <style>
            .custom-scrollbar::-webkit-scrollbar {
                height: 8px;
            }
            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 4px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #c1c1c1;
                border-radius: 4px;
            }
            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #a8a8a8;
            }
            .fixed-actions {
                position: sticky;
                right: 0;
                background: white;
                box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
                z-index: 0;
            }
            .fixed-actions-header {
                position: sticky;
                right: 0;
                background: #F4EFFF;
                box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
                z-index: 11;
            }
            .product-table {
                width: 100%;
                border-collapse: collapse;
                height: 100;
            }
            .product-table th, .product-table td {
                padding: 6px 8px;
                text-align: left;
                font-size: 0.85rem;
                border-bottom: 1px solid #f0f0f0;
                vertical-align: middle;
            }
            .product-table th {
                background-color: #f9f6ff;
                color: #5a3e85;
                font-weight: 600;
            }
            .product-image {
                width: 40px;
                height: 40px;
                border-radius: 8px;
                object-fit: cover;
                border: 1px solid #ddd;
            }
            .user-photo {
                width: 40px;
                height: 40px;
                border-radius: 50%;
                object-fit: cover;
                margin-right: 8px;
                border: 2px solid #ddd;
            }
            .user-info {
                display: flex;
                align-items: center;
            }
        </style>

        <div class="container mx-auto px-4">
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
                <div class="bg-side p-6 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-white">All Orders</h2>
                    <div class="text-white/80 text-sm">
                        Total Orders: <span class="font-bold">{{ $orders->count() }}</span>
                    </div>
                </div>

                <div class="overflow-x-auto custom-scrollbar" style="max-height: 600px;">
                    <table class="w-full min-w-max">
                        <thead class="bg-lav1 sticky top-0 z-10">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Order ID</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Customer</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Products</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Total</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Date</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Shipping Address</th>
                                <th class="px-6 py-4 text-center text-xs font-medium text-purple-darkest uppercase fixed-actions-header">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-lav2 bg-white">
                            @forelse($orders as $order)
                                <tr class="hover:bg-lav1/30 transition-all duration-200">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">#{{ $order->order_number }}</td>

                                    <!-- Customer with photo -->
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        <div class="user-info">
                                            <img src="{{ $order->user->photo ? asset('storage/photos/' . $order->user->photo) : asset('images/default-user.png') }}"
                                                 alt="User Photo" class="user-photo">
                                            <span>{{ $order->user->name ?? 'N/A' }}</span>
                                        </div>
                                    </td>

                                    <!-- Products Column -->
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        <table class="product-table">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->items as $item)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ $item->product->image ? asset('storage/products_images/' . $item->product->image) : asset('images/default-product.png') }}"
                                                                 alt="Product Image" class="product-image">
                                                        </td>
                                                        <td>{{ $item->product->name ?? 'Deleted Product' }}</td>
                                                        <td>{{ $item->quantity }}</td>
                                                        <td>₹{{ number_format($item->product->price ?? 0, 2) }}</td>
                                                        <td>₹{{ number_format(($item->product->price ?? 0) * $item->quantity, 2) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>

                                    <!-- Order total -->
                                    <td class="px-6 py-4 text-sm font-semibold text-green-600">
                                        ₹{{ number_format($order->total, 2) }}
                                    </td>

                                    <!-- Status -->
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                            @if($order->status == 'delivered') bg-green-100 text-green-800
                                            @elseif($order->status == 'pending') bg-yellow-100 text-yellow-800
                                            @elseif($order->status == 'canceled') bg-red-100 text-red-800
                                            @else bg-blue-100 text-blue-800 @endif">
                                            {{ ucfirst($order->status) }}
                                        </span>
                                    </td>

                                    <!-- Date -->
                                    <td class="px-6 py-4 text-sm text-gray-900">
                                        {{ $order->created_at->format('M d, Y h:i A') }}
                                    </td>

                                    <!-- Shipping -->
                                    <td class="px-6 py-4 text-sm text-gray-900 max-w-xs">
                                        {{ $order->address->street_address ?? 'No address' }},
                                        {{ $order->address->city ?? '' }},
                                        {{ $order->address->state ?? '' }},
                                        {{ $order->address->zip_code ?? '' }}
                                    </td>

                                    <!-- Actions -->
                                    <td class="px-6 py-4 text-center fixed-actions">
                                        <div class="flex justify-center space-x-2">
                                            <a href=""
                                                class="bg-gradient-to-r from-peri to-purple-dark text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-dark hover:to-purple-darkest transition-all">
                                                View
                                            </a>

                                            @if($order->status == 'pending')
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="confirmed">
                                                    <button type="submit"
                                                        class="bg-gradient-to-r from-green-500 to-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-green-600 hover:to-green-700 transition-all">
                                                        Accept
                                                    </button>
                                                </form>
                                            @endif

                                            @if($order->status != 'canceled')
                                                <form action="" method="POST" >
                                                    @csrf
                                                    @method('PATCH')
                                                    <button type="submit"
                                                        class="bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-red-600 hover:to-red-700 transition-all">
                                                        Cancel
                                                    </button>
                                                </form>
                                            @else
                                                <button disabled
                                                    class="bg-gray-400 text-white px-4 py-2 rounded-lg text-sm font-medium opacity-50 cursor-not-allowed">
                                                    Canceled
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-6 text-gray-500">No orders found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </x-slot>
</x-admin_navbar>
