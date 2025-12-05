<x-admin_navbar>
    <x-slot name="body">


        <!-- Stats Cards -->
        <section class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-3 sm:gap-4 mb-4 md:mb-6">
            <a href="/admin_customer_accounts_view">
                <div
                    class="rounded-xl border border-indigo-100 bg-white p-4 shadow-sm transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="text-xs text-slate-500">Total Customer</div>
                    <div class="mt-1 text-xl sm:text-2xl font-bold">{{ $users_count }}</div>
                </div>
            </a>

            <a href="/admin_products_view">
                <div
                    class="rounded-xl border border-indigo-100 bg-white p-4 shadow-sm transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="text-xs text-slate-500">Total Watches</div>
                    <div class="mt-1 text-xl sm:text-2xl font-bold">{{ $product_count }}</div>
                </div>
            </a>

            <div
                class="rounded-xl border border-indigo-100 bg-white p-4 shadow-sm transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md">
                <div class="text-xs text-slate-500">Revenue</div>
                <div class="mt-1 text-xl sm:text-2xl font-bold">{{ $total_revenue }}</div>
            </div>
            <a href="/admin_all_orders">
                <div
                    class="rounded-xl border border-indigo-100 bg-white p-4 shadow-sm transition-transform duration-200 hover:-translate-y-0.5 hover:shadow-md">
                    <div class="text-xs text-slate-500">Pending Shipments</div>
                    <div class="mt-1 text-xl sm:text-2xl font-bold">{{ $pending_orders }}</div>
                </div>
            </a>
        </section>

        <!-- Charts and Tables Section -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6">
            <!-- Sales Overview Chart -->
            <div class="rounded-xl border border-indigo-100 bg-white p-4 md:p-6 shadow-sm">
                <h3 class="mb-3 md:mb-4 text-sm font-semibold">Sales Overview</h3>
                <div
                    class="h-48 sm:h-56 md:h-64 rounded-lg bg-gradient-to-tr from-lav2 to-white relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-[repeating-linear-gradient(90deg,rgba(169,180,230,0.25)_0_2px,transparent_2px_6px)]">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center text-slate-400 text-sm">
                        Chart Placeholder
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="rounded-xl border border-indigo-100 bg-white p-4 md:p-6 shadow-sm">
                <h3 class="mb-3 md:mb-4 text-sm font-semibold">Recent Orders</h3>
                <div class="overflow-x-auto -mx-2 sm:mx-0">
                    <div class="inline-block min-w-full align-middle px-2 sm:px-0">
                        <table class="min-w-full text-left text-sm">
                            <thead class="text-slate-500 border-b border-indigo-100">
                                <tr>
                                    <th class="py-2 pr-2 text-xs sm:text-sm whitespace-nowrap">Order</th>
                                    <th class="py-2 pr-2 text-xs sm:text-sm whitespace-nowrap">Customer</th>
                                    <th class="py-2 pr-2 text-xs sm:text-sm whitespace-nowrap">Total</th>
                                    <th class="py-2 text-xs sm:text-sm">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-indigo-50 [&>tr:hover]:bg-indigo-50/60">
                                @forelse($orders as $order)
                                <tr>
                                    <td class="py-2 pr-2 text-xs sm:text-sm font-medium">#{{ $order->order_number }}</td>
                                    <td class="py-2 pr-2 text-xs sm:text-sm">{{ $order->user->name }}</td>
                                    <td class="py-2 pr-2 text-xs sm:text-sm font-semibold">₹{{ $order->total }}</td>
                                    <td class="py-2">

                                        @if($order->status == 'pending')
                                        <span
                                            class="inline-flex items-center rounded-full bg-rose-100 px-2 py-0.5 text-xs font-semibold text-rose-700">
                                            Pending
                                        </span>
                                        @elseif($order->status == 'confirmed')
                                        <span
                                            class="inline-flex items-center rounded-full bg-green-100 px-2 py-0.5 text-xs font-semibold text-green-700">
                                            Confirm
                                        </span>
                                        @elseif($order->status == 'delivered')
                                        <span
                                            class="inline-flex items-center rounded-full bg-amber-100 px-2 py-0.5 text-xs font-semibold text-amber-800">

                                            Delivered
                                        </span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center py-6 text-gray-500">No orders found.</td>
                                </tr>
                                @endforelse








                                <!-- <tr>
                                    <td class="py-2 pr-2 text-xs sm:text-sm font-medium">#HW-10229</td>
                                    <td class="py-2 pr-2 text-xs sm:text-sm">Marcus Lee</td>
                                    <td class="py-2 pr-2 text-xs sm:text-sm font-semibold">$549.00</td>
                                    <td class="py-2">
                                        <span
                                            class="inline-flex items-center rounded-full bg-rose-100 px-2 py-0.5 text-xs font-semibold text-rose-700">
                                            Refunded
                                        </span>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </x-slot>

</x-admin_navbar>