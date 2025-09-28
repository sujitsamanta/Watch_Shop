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

        <div class="container mx-auto px-4 ">

            <!-- Customer Table Container -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
                <!-- Table Header -->
                <div class="bg-gradient-to-r from-side to-purple-darkest p-6">
                    <div class="flex justify-between items-center">
                        <h2 class="text-xl font-semibold text-white">Customer List</h2>
                        <div class="text-white/80 text-sm">
                            Total Customers: <span class="font-bold text-white">{{ $users_data->total() }}</span>
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
                                    Name
                                </th>
                                <!-- <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Products Slug
                                </th> -->
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Email
                                </th>
                                <!-- <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Category Slug
                                </th> -->
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Mobile No
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    DOB
                                </th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap">
                                    Bio
                                </th>
                                <!-- <th
                                    class="px-6 py-4 text-left text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap min-w-[300px]">
                                    Description
                                </th> -->
                                <th
                                    class="px-6 py-4 text-center text-xs font-medium text-purple-darkest uppercase tracking-wider whitespace-nowrap fixed-actions-header">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-lav2 bg-white">

                            @foreach($users_data as $user)
                            <!-- Sample Product Row 2 -->
                            <tr class="hover:bg-lav1/30 transition-all duration-200">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div
                                        class="h-12 w-12 rounded-full bg-gradient-to-br from-peri to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                        @if (!empty($user->photo))
                                        <img src="{{ url('storage/photos/' . $user->photo) }}" class="rounded-full size-full object-cover group-hover:scale-110 transition-transform duration-500">
                                        @else
                                        {{ collect(explode(' ', $user->name))->map(fn($n) => strtoupper($n[0]))->join('') }}
                                        @endif

                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->name }}</div>
                                    <div class="text-sm text-gray-500">User ID: {{ $user->id }}</div>
                                </td>
                                <!-- <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">slug</div>
                                </td> -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $user->email }}
                                        <!-- <div class="text-sm text-gray-500">Category ID: category_id</div> -->
                                    </div>
                                </td>
                                <!-- <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">slug</div>
                                </td> -->

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-mono text-gray-900 bg-gray-100 px-2 py-1 rounded">{{ $user->phone }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-semibold text-green-600">{{ $user->dob }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ">
                                        {{ $user->bio }} in stock
                                    </span>
                                </td>
                                <!-- <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 max-w-xs overflow-hidden">
                                        description
                                    </div>
                                </td> -->
                                <td class="px-6 py-4 whitespace-nowrap text-center fixed-actions">
                                    <div class="flex justify-center space-x-2">
                                        <form action="/{{ $user->id }}" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="bg-gradient-to-r from-peri to-purple-dark hover:from-purple-dark hover:to-purple-darkest text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                                Update
                                            </button>
                                        </form>
                                        <form action="/admin_user_account_delete/{{ $user->id }}" method="post">
                                            @csrf
                                            <button
                                                class="product_delete bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>


                <!-- Table Footer -->
                <div class="bg-gradient-to-r from-lav2 to-peri p-4 border-t border-lav2/30">

                    <div class="flex justify-between items-center">
                        <div class="text-sm text-side">
                            Showing {{ $users_data->firstItem() }}–{{ $users_data->lastItem() }}
                            of {{ $users_data->total() }} users
                        </div>
                        <div class="flex space-x-2">
                            {{-- Previous --}}
                            @if ($users_data->onFirstPage())
                            <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                                Previous
                            </button>
                            @else
                            <a href="{{ $users_data->previousPageUrl() }}"
                                class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium hover:bg-white/70">
                                Previous
                            </a>
                            @endif

                            {{-- Only 3 Page Numbers --}}
                            @php
                            $current = $users_data->currentPage();
                            $last = $users_data->lastPage();
                            $start = max($current - 1, 1);
                            $end = min($current + 1, $last);
                            @endphp

                            @for ($page = $start; $page <= $end; $page++)
                                <a href="{{ $users_data->url($page) }}" class="px-3 py-1 rounded-md text-sm font-medium
                                   {{ $page == $current ? 'bg-side text-white' : 'bg-white/50 text-side hover:bg-white/70' }}">
                                {{ $page }}
                                </a>
                                @endfor

                                {{-- Next --}}
                                @if ($users_data->hasMorePages())
                                <a href="{{ $users_data->nextPageUrl() }}"
                                    class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium hover:bg-white/70">
                                    Next
                                </a>
                                @else
                                <button class="px-3 py-1 bg-white/50 text-side rounded-md text-sm font-medium" disabled>
                                    Next
                                </button>
                                @endif
                        </div>
                    </div>


                    {{-- $users_data->links() --}}
                </div>
            </div>

        </div>

    </x-slot>

</x-admin_navbar>