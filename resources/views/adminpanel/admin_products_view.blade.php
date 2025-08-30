<x-admin_navbar>
    <x-slot name="body">
        <style>
            /* Custom scrollbar styling */
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

            /* Fixed action column */
            .fixed-actions {
                position: sticky;
                right: 0;
                background: white;
                box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
                z-index: 10;
            }

            .fixed-actions-header {
                position: sticky;
                right: 0;
                background: #f8fafc;
                box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
                z-index: 11;
            }
        </style>
        <div class="container mx-auto px-4">
            <!-- Product Table Container -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
                <!-- Table Header -->
                <div class="bg-side p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-white">Product List</h2>
                        <div class="text-white/80 text-sm">
                            Total Products: <span class="font-bold text-white">150</span>
                        </div>
                    </div>
                </div>

                <!-- Table with Horizontal Scroll -->
                <div class="overflow-x-auto custom-scrollbar" style="max-height: 600px;">
                    <table class="w-full min-w-max">
                        <thead class="bg-lav1 sticky top-0 z-10">
                            <tr>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Image
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Category ID
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Slug
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    SKU
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Price
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Stock
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap min-w-[300px]">
                                    Description
                                </th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap fixed-actions-header">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-lav2 bg-white">


                            <!-- Sample Product Row 2 -->
                            <tr class="hover:bg-lav1/30 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div
                                        class="h-12 w-12 rounded-full bg-lav2 flex items-center justify-center text-side font-semibold text-lg shadow-md">
                                        SM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">CAT002</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Smart Watch Pro</div>
                                    <div class="text-sm text-gray-500">Fitness Tracker</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">smart-watch-pro</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">SWP-002
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-green-600">$299.99</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        5 in stock
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs overflow-hidden">
                                        Advanced smartwatch with heart rate monitoring, GPS tracking, waterproof design,
                                        and
                                        7-day battery life. Includes fitness apps and health monitoring.
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Update
                                        </button>
                                        <button
                                            class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Sample Product Row 2 -->
                            <tr class="hover:bg-lav1/30 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div
                                        class="h-12 w-12 rounded-full bg-lav2 flex items-center justify-center text-side font-semibold text-lg shadow-md">
                                        SM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">CAT002</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Smart Watch Pro</div>
                                    <div class="text-sm text-gray-500">Fitness Tracker</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">smart-watch-pro</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">SWP-002
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-green-600">$299.99</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        5 in stock
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs overflow-hidden">
                                        Advanced smartwatch with heart rate monitoring, GPS tracking, waterproof design,
                                        and
                                        7-day battery life. Includes fitness apps and health monitoring.
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Update
                                        </button>
                                        <button
                                            class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Sample Product Row 2 -->
                            <tr class="hover:bg-lav1/30 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div
                                        class="h-12 w-12 rounded-full bg-lav2 flex items-center justify-center text-side font-semibold text-lg shadow-md">
                                        SM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">CAT002</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Smart Watch Pro</div>
                                    <div class="text-sm text-gray-500">Fitness Tracker</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">smart-watch-pro</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">SWP-002
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-green-600">$299.99</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        5 in stock
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs overflow-hidden">
                                        Advanced smartwatch with heart rate monitoring, GPS tracking, waterproof design,
                                        and
                                        7-day battery life. Includes fitness apps and health monitoring.
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Update
                                        </button>
                                        <button
                                            class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Sample Product Row 2 -->
                            <tr class="hover:bg-lav1/30 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div
                                        class="h-12 w-12 rounded-full bg-lav2 flex items-center justify-center text-side font-semibold text-lg shadow-md">
                                        SM
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">CAT002</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">Smart Watch Pro</div>
                                    <div class="text-sm text-gray-500">Fitness Tracker</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">smart-watch-pro</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">SWP-002
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-green-600">$299.99</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        5 in stock
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs overflow-hidden">
                                        Advanced smartwatch with heart rate monitoring, GPS tracking, waterproof design,
                                        and
                                        7-day battery life. Includes fitness apps and health monitoring.
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Update
                                        </button>
                                        <button
                                            class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>

                <!-- Table Footer -->
                <div class="bg-lav1 p-4 border-t border-lav2">
                    <div class="flex justify-between items-center">
                        <div class="text-sm text-purple-darkest">
                            Showing 1–4 of 150 products
                        </div>
                        <div class="flex space-x-2">
                            <!-- Previous -->
                            <button class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium"
                                disabled>
                                Previous
                            </button>

                            <!-- Page Numbers -->
                            <button class="px-3 py-1 bg-side text-white rounded-md text-sm font-medium">
                                1
                            </button>
                            <button
                                class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium hover:bg-white/70">
                                2
                            </button>
                            <button
                                class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium hover:bg-white/70">
                                3
                            </button>

                            <!-- Next -->
                            <button
                                class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium hover:bg-white/70">
                                Next
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

</x-admin_navbar>