<x-admin_navbar>
    <x-slot name="body">
       
         <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-purple-darkest mb-2">Customer Management</h1>
            <p class="text-purple-darkest opacity-80">Manage your watch e-shop customers</p>
        </div>

        <!-- Customer Table Container -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
            <!-- Table Header -->
            <div class="bg-gradient-to-r from-purple-darkest to-purple-dark p-6">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-semibold text-white">Customer List</h2>
                    <div class="text-white/80 text-sm">
                        Total Customers: <span class="font-bold text-white">8</span>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-purple-medium/30">
                        <tr>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider">
                                Photo</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider">
                                Name</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider">
                                Email</th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider">
                                Phone Number</th>
                            <th
                                class="px-6 py-4 text-center text-xs font-medium text-purple-darkest uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-purple-medium/20">
                        <!-- Customer Row 1 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-medium to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    JD
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">John Doe</div>
                                <div class="text-sm text-purple-dark">Customer ID: #001</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">john.doe@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 123-4567</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 2 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-dark to-purple-darkest flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    AS
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Alice Smith</div>
                                <div class="text-sm text-purple-dark">Customer ID: #002</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">alice.smith@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 987-6543</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 3 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-medium to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    MJ
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Michael Johnson</div>
                                <div class="text-sm text-purple-dark">Customer ID: #003</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">michael.j@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 456-7890</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 4 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-dark to-purple-darkest flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    EB
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Emily Brown</div>
                                <div class="text-sm text-purple-dark">Customer ID: #004</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">emily.brown@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 321-9876</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 5 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-medium to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    DW
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">David Wilson</div>
                                <div class="text-sm text-purple-dark">Customer ID: #005</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">david.wilson@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 654-3210</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 6 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-dark to-purple-darkest flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    SM
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Sarah Miller</div>
                                <div class="text-sm text-purple-dark">Customer ID: #006</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">sarah.miller@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 789-0123</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 7 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-medium to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    RT
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Robert Taylor</div>
                                <div class="text-sm text-purple-dark">Customer ID: #007</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">robert.taylor@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 012-3456</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Update
                                    </button>
                                    <button
                                        class="bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Customer Row 8 -->
                        <tr class="hover:bg-purple-light/30 transition-all duration-200">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div
                                    class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-dark to-purple-darkest flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                    LA
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-purple-darkest">Lisa Anderson</div>
                                <div class="text-sm text-purple-dark">Customer ID: #008</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">lisa.anderson@email.com</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-purple-darkest">+1 (555) 567-8901</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <div class="flex justify-center space-x-2">
                                    <button
                                        class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
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
            <div class="bg-gradient-to-r from-purple-light to-purple-medium p-4 border-t border-purple-medium/20">
                <div class="flex justify-between items-center">
                    <div class="text-sm text-purple-darkest">
                        Showing 1-8 of 8 customers
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium hover:bg-white/70 transition-colors duration-200"
                            disabled>
                            Previous
                        </button>
                        <button class="px-3 py-1 bg-purple-darkest text-white rounded-md text-sm font-medium">
                            1
                        </button>
                        <button
                            class="px-3 py-1 bg-white/50 text-purple-darkest rounded-md text-sm font-medium hover:bg-white/70 transition-colors duration-200"
                            disabled>
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </x-slot>

</x-admin_navbar>