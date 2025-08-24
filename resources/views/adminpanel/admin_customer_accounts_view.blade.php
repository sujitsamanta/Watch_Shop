<x-admin_navbar>
    <x-slot name="body">

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

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-lav2/50">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-medium text-side uppercase tracking-wider">
                                    Photo</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-side uppercase tracking-wider">
                                    Name</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-side uppercase tracking-wider">
                                    Email</th>
                                <th class="px-6 py-4 text-left text-xs font-medium text-side uppercase tracking-wider">
                                    Phone Number</th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-medium text-side uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-lav2/30">

                            @foreach($users_data as $user)
                                <!-- Customer Row 1 -->
                                <tr class="hover:bg-lav1/50 transition-all duration-200">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div
                                            class="h-12 w-12 rounded-full bg-gradient-to-br from-peri to-purple-dark flex items-center justify-center text-white font-semibold text-lg shadow-md">
                                            JD
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-side">{{ $user->name }}</div>
                                        <div class="text-sm text-purple-dark">Customer ID: {{ $user->username }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-side">{{ $user->email }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-side">{{ $user->phone }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
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
                                <!-- <p>{{ $user->name }} - {{ $user->email }}</p> -->
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