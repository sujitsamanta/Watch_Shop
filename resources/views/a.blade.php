<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lav1: '#F4EFFF',
                        lav2: '#E4DEFF',
                        peri: '#A9B4E6',
                        side: '#3F4673',
                        'purple-light': '#E8E2F4',
                        'purple-medium': '#C8B8E0',
                        'purple-dark': '#8B7BAD',
                        'purple-darkest': '#4A4461',
                    }
                }
            }
        }
    </script>
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
            background: #F4EFFF;
            box-shadow: -2px 0 4px rgba(0, 0, 0, 0.1);
            z-index: 11;
        }
    </style>
</head>

<body class="bg-lav1 p-8">
    <div class="container mx-auto px-4">
        <!-- Order Table Container -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
            <!-- Table Header -->
            <div class="bg-side p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-white">Order List</h2>
                    <div class="text-white/80 text-sm">
                        Total Orders: <span class="font-bold text-white">5</span>
                    </div>
                </div>
            </div>

            <!-- Table with Horizontal Scroll -->
            <div class="overflow-x-auto custom-scrollbar" style="max-height: 600px;">
                <table class="w-full min-w-max">
                    <thead class="bg-lav1 sticky top-0 z-10">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Order ID
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Customer
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Product
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Quantity
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Total Price
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Status
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                Order Date
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap min-w-[200px]">
                                Shipping Address
                            </th>
                            <th class="px-6 py-4 text-center text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap fixed-actions-header">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-lav2 bg-white">
                        <!-- Order Row 1 -->
                        <tr class="hover:bg-lav1/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">#ORD-001</div>
                                <div class="text-sm text-gray-500">Order ID: 1</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                <div class="text-sm text-gray-500">john.smith@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Apple Watch Series 9</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded text-center">2</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">$1598.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Delivered
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Oct 10, 2025</div>
                                <div class="text-sm text-gray-500">10:30 AM</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs">
                                    123 Main Street, Apt 4B, New York, NY 10001
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        View
                                    </button>
                                    <button type="button"
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Cancel
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Order Row 2 -->
                        <tr class="hover:bg-lav1/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">#ORD-002</div>
                                <div class="text-sm text-gray-500">Order ID: 2</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Sarah Johnson</div>
                                <div class="text-sm text-gray-500">sarah.j@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Samsung Galaxy Watch 6</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded text-center">1</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">$549.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                    Shipped
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Oct 11, 2025</div>
                                <div class="text-sm text-gray-500">02:15 PM</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs">
                                    456 Oak Avenue, Suite 200, Los Angeles, CA 90001
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        View
                                    </button>
                                    <button type="button"
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Cancel
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Order Row 3 -->
                        <tr class="hover:bg-lav1/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">#ORD-003</div>
                                <div class="text-sm text-gray-500">Order ID: 3</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                <div class="text-sm text-gray-500">m.brown@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rolex Submariner</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded text-center">1</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">$8500.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Processing
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Oct 12, 2025</div>
                                <div class="text-sm text-gray-500">09:45 AM</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs">
                                    789 Pine Road, Chicago, IL 60601
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        View
                                    </button>
                                    <button type="button"
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Cancel
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Order Row 4 -->
                        <tr class="hover:bg-lav1/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">#ORD-004</div>
                                <div class="text-sm text-gray-500">Order ID: 4</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">Emily Davis</div>
                                <div class="text-sm text-gray-500">emily.d@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Fitbit Sense 2</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded text-center">3</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">$897.00</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Oct 13, 2025</div>
                                <div class="text-sm text-gray-500">11:20 AM</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs">
                                    321 Maple Drive, Houston, TX 77001
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        View
                                    </button>
                                    <button type="button"
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Cancel
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Order Row 5 -->
                        <tr class="hover:bg-lav1/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">#ORD-005</div>
                                <div class="text-sm text-gray-500">Order ID: 5</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900">David Wilson</div>
                                <div class="text-sm text-gray-500">d.wilson@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Garmin Fenix 7</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded text-center">1</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-green-600">$699.99</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                    Cancelled
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Oct 13, 2025</div>
                                <div class="text-sm text-gray-500">03:55 PM</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900 max-w-xs">
                                    654 Cedar Lane, Miami, FL 33101
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                <div class="flex justify-center space-x-2">
                                    <button type="button"
                                        class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        View
                                    </button>
                                    <button type="button" disabled
                                        class="bg-gray-400 text-white px-4 py-2 rounded-lg text-sm font-medium opacity-50 cursor-not-allowed">
                                        Cancel
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Table Footer -->
            <div class="bg-gradient-to-r from-lav2 to-peri p-4 border-t border-lav2/30">
                <div class="flex justify-between items-center">
                    <div class="text-sm text-side">
                        Showing 1–5 of 5 orders
                    </div>
                    <div class="flex space-x-2">
                        <!-- Previous Button -->
                        <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                            Previous
                        </button>

                        <!-- Page Number -->
                        <button class="px-3 py-1 rounded-md text-sm font-medium bg-side text-white">
                            1
                        </button>

                        <!-- Next Button -->
                        <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>