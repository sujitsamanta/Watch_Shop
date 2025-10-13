<x-admin_navbar>
    <x-slot name="body">

        <style>
            /* your existing CSS exactly as before */
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
        </style>

        <!-- resources/views/adminpanel/orders/all_orders_view.blade.php -->
        <div class="container mx-auto px-4">
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
                <div class="bg-side p-6 flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-white">All Orders</h2>
                    <div class="text-white/80 text-sm">Total Orders: <span class="font-bold">{{ $orders->count() }}</span></div>
                </div>

                <div class="overflow-x-auto custom-scrollbar" style="max-height: 600px;">
                    <table class="w-full min-w-max">
                        <thead class="bg-lav1 sticky top-0 z-10">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Order ID</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase">Customer</th>
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
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $order->user->name ?? 'N/A' }}</td>
                                <td class="px-6 py-4 text-sm font-semibold text-green-600">₹{{ number_format($order->total, 2) }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                @if($order->status == 'delivered') bg-green-100 text-green-800
                                @elseif($order->status == 'pending') bg-yellow-100 text-yellow-800
                                @elseif($order->status == 'canceled') bg-red-100 text-red-800
                                @else bg-blue-100 text-blue-800 @endif">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900">{{ $order->created_at->format('M d, Y h:i A') }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 max-w-xs">
                                    {{ $order->address->street_address ?? 'No address' }},
                                    {{ $order->address->city ?? '' }},
                                    {{ $order->address->state ?? '' }},
                                    {{ $order->address->zip_code ?? '' }}
                                </td>

                                <td class="px-6 py-4 text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <!-- View Button -->
                                        <a href=""
                                            class="bg-gradient-to-r from-peri to-purple-dark text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-dark hover:to-purple-darkest transition-all">
                                            View
                                        </a>
                                        <a href=""
                                            class="bg-gradient-to-r from-peri to-purple-dark text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-dark hover:to-purple-darkest transition-all">
                                            Accepted
                                        </a>

                                        <!-- Cancel Button -->
                                        @if($order->status != 'canceled')
                                        <form action="" method="POST" onsubmit="return confirm('Cancel this order?');">
                                            @csrf
                                            <button type="submit"
                                                class="bg-gradient-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-red-600 hover:to-red-700 transition-all">
                                                Cancel
                                            </button>
                                        </form>
                                        @else
                                        <button disabled class="bg-gray-400 text-white px-4 py-2 rounded-lg text-sm font-medium opacity-50 cursor-not-allowed">
                                            Canceled
                                        </button>
                                        @endif
                                        
                                        
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-6 text-gray-500">No orders found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>







    </x-slot>

</x-admin_navbar>