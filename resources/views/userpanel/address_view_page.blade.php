<x-user_navbar>
    <x-slot name="body">
        <!-- Main Content -->
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 my-16 ">
            <!-- Address Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Address Card 1 -->
                <!-- <div class="address-card bg-white rounded-xl shadow-lg border border-lav2 p-6 relative">

                    <div class="absolute top-4 right-4">
                        <span class="default-badge bg-purple-medium text-white px-3 py-1 rounded-full text-sm font-medium">
                            Default
                        </span>
                    </div>


                    <div class="mb-4">
                        <span class="bg-lav2 text-purple-dark px-3 py-1 rounded-full text-sm font-medium uppercase">
                            Office
                        </span>
                    </div>


                    <h3 class="text-lg font-semibold text-purple-darkest mb-2">Sujit</h3>


                    <div class="space-y-2 text-side mb-4">
                        <p class="text-sm">
                            <span class="font-medium">Apartment:</span> ABC
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">Street:</span> Depal
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">City:</span> Medinipur East
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">State:</span> KS
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">ZIP:</span> 721453
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">PIN:</span> 721453
                        </p>
                        <p class="text-sm">
                            <span class="font-medium">Country:</span> IN
                        </p>
                    </div>


                    <div class="mb-4">
                        <p class="text-sm text-side">
                            <span class="font-medium">Phone:</span> +919907246586
                        </p>
                    </div>


                    <div class="flex space-x-2">
                        <button class="flex-1 bg-lav2 hover:bg-purple-light text-purple-dark px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                            Edit
                        </button>
                        <button class="flex-1 bg-purple-light hover:bg-purple-medium text-purple-dark hover:text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                            View
                        </button>
                        <button class="px-4 py-2 text-red-500 hover:bg-red-50 rounded-lg text-sm font-medium transition-colors duration-200">
                            Delete
                        </button>
                    </div>


                    <div class="mt-4 pt-4 border-t border-lav2">
                        <div class="text-xs text-peri space-y-1">
                            <p>Created: Sept 19, 2025 at 10:17 AM</p>
                            <p>Updated: Sept 19, 2025 at 10:17 AM</p>
                        </div>
                    </div>
                </div> -->

                @foreach ($addresses as $address)
                <div class="address-card bg-white rounded-xl  border border-lav2 p-2 relative max-w-md">

                    @if($address->is_default)
                    <div class="absolute top-3 right-3">
                        <span class="default-badge bg-purple-medium text-white px-2 py-1 rounded-full text-xs font-medium">
                            Default
                        </span>
                    </div>
                    @endif

                    <div class="mb-2">
                        <span class="bg-lav2 text-purple-dark px-2 py-1 rounded-full text-xs font-medium uppercase">
                            {{ $address->address_type }}
                        </span>
                    </div>

                    <h3 class="text-lg font-semibold text-purple-darkest mb-2">Sujit</h3>

                    <!-- Compact address in two columns -->
                    <div class="grid grid-cols-2 gap-x-3 gap-y-1 text-xs text-side mb-3">
                        <p><span class="font-medium">Apt:</span> {{ $address->apartment_unit }}</p>
                        <p><span class="font-medium">ZIP:</span> {{ $address->zip_code }}</p>
                        <p><span class="font-medium">Street:</span> {{ $address->street_address }}</p>
                        <p><span class="font-medium">PIN:</span> {{ $address->pin_number }}</p>
                        <p><span class="font-medium">City:</span> {{ $address->city }}</p>
                        <p><span class="font-medium">Country:</span> {{ $address->country }}</p>
                        <p><span class="font-medium">State:</span> {{ $address->state }}</p>
                        <p><span class="font-medium">Phone:</span> {{ $address->phone_number }}</p>
                    </div>

                    <div class="flex space-x-2 mb-3">
                        <button class="flex-1 bg-lav2 hover:bg-purple-light text-purple-dark px-3 py-1.5 rounded-lg text-xs font-medium transition-colors duration-200">
                            Edit
                        </button>

                        <button class="flex-1 px-3 py-1.5 text-red-500 hover:bg-red-100 bg-red-50  rounded-lg text-xs font-medium transition-colors duration-200">
                            Delete
                        </button>
                    </div>

                        <form action="/addresses_set_default/{{ $address->id }}" method="post">
                            @csrf

                    <div class="flex space-x-2 mb-3">

                            <button class="flex-1 bg-purple-dark hover:bg-purple-light text-white hover:text-black px-3 py-1.5 rounded-lg text-xs font-medium transition-colors duration-200">
                                Create Default Address
                            </button>
                    </div>
                        </form>




                    <div class="pt-2 border-t border-lav2">
                        <div class="text-xs text-peri">
                            <p>Created: {{ $address->created_at }} • Updated: {{ $address->updated_at }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- Add New Address Card -->

                <a href="/add_address_form">
                    <div class="address-card bg-gradient-to-br from-lav1 to-lav2 rounded-xl border-2 border-dashed border-peri p-16 flex flex-col items-center justify-center max-w-md hover:border-purple-medium cursor-pointer">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-purple-light rounded-full flex items-center justify-center mb-5 mx-auto">
                                <svg class="w-8 h-8 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-purple-dark mb-2">Add New Address</h3>
                            <p class="text-side text-sm">Click to add a new delivery address</p>
                        </div>
                    </div>

                </a>

            </div>

            <!-- Address Statistics -->
            <!-- <div class="mt-12 bg-white rounded-xl shadow-lg border border-lav2 p-6">
                <h2 class="text-xl font-semibold text-purple-darkest mb-6">Address Summary</h2>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="bg-lav1 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-purple-medium">2</div>
                        <div class="text-sm text-side">Total Addresses</div>
                    </div>
                    <div class="bg-lav1 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-purple-medium">1</div>
                        <div class="text-sm text-side">Home Addresses</div>
                    </div>
                    <div class="bg-lav1 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-purple-medium">1</div>
                        <div class="text-sm text-side">Office Addresses</div>
                    </div>
                    <div class="bg-lav1 rounded-lg p-4 text-center">
                        <div class="text-2xl font-bold text-purple-medium">1</div>
                        <div class="text-sm text-side">Default Address</div>
                    </div>
                </div>
            </div> -->


        </main>



    </x-slot>
</x-user_navbar>