<x-user_navbar>
    <x-slot name="body">
        <style>
            .radio-custom input:checked+.radio-custom .radio-dot {
                opacity: 1;
            }
        </style>


        <div class=" max-w-none mx-16 my-8">
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Header -->
                <div class="bg-gradient-to-r from-side to-purple-darkest p-4">
                    <h2 class="text-xl font-bold text-white mb-1">Shipping Address</h2>
                    <p class="text-lav2 text-sm">Please provide your delivery address details</p>
                </div>

                <!-- Form -->
                <form class="p-6 space-y-3" action="/order_add_address_form_submit" method="post">
                    @csrf
                    <!-- Address Type Selection -->
                    <div class="space-y-2">
                        <label class="block text-side font-semibold text-sm uppercase tracking-wide">Address Type</label>
                        <div class="flex gap-6">
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="address_type" value="home" class="sr-only" checked>
                                <div class="radio-custom w-4 h-4 border-2 border-peri rounded-full flex items-center justify-center mr-2">
                                    <div class="radio-dot w-2 h-2 bg-side rounded-full opacity-100"></div>
                                </div>
                                <span class="text-purple-darkest font-medium">Home</span>
                            </label>

                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="address_type" value="office" class="sr-only">
                                <div class="radio-custom w-4 h-4 border-2 border-peri rounded-full flex items-center justify-center mr-2">
                                    <div class="radio-dot w-2 h-2 bg-side rounded-full opacity-0"></div>
                                </div>
                                <span class="text-purple-darkest font-medium">Office</span>
                            </label>

                        </div>
                    </div>



                    <!-- Personal Information Row -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                        <div class="space-y-1">
                            <label for="fullName" class="block text-side font-semibold text-sm uppercase tracking-wide">Full Name *</label>
                            <input
                                type="text"
                                id="fullName"
                                name="full_name"

                                class="@error('full_name') border-red-500 @else border-purple-light @enderror
                                 w-full px-3 py-3 border-2  rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="Enter your full name"
                                value="{{ old('full_name') }}"
                                >

                            <div class="text-sm text-red-500 h-3">
                                @error('full_name')
                                {{ $message }}
                                @enderror
                            </div>
                            
                        </div>

                        <div class="space-y-1">
                            <label for="phone" class="block text-side font-semibold text-sm uppercase tracking-wide">Phone Number *</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone_number"
                                class="@error('phone_number') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="+91 12345-45678"
                            value="{{ old('phone_number') }}"
                            >

                                <div class="text-sm text-red-500 h-3">
                                @error('phone_number')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Address Information Row -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                        <div class="space-y-1 lg:col-span-2">
                            <label for="streetAddress" class="block text-side font-semibold text-sm uppercase tracking-wide">Street Address *</label>
                            <input
                                type="text"
                                id="streetAddress"
                                name="street_address"

                                class="@error('street_address') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="123 Main Street"
                            value="{{ old('street_address') }}"
                            >

                                <div class="text-sm text-red-500 h-3">
                                @error('street_address')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="apartment" class="block text-side font-semibold text-sm uppercase tracking-wide">Apartment / Unit (Optional)</label>
                            <input
                                type="text"
                                id="apartment"
                                name="apartment_unit"
                                class="@error('apartment_unit') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="Apt 4B, Unit 101, etc."
                            value="{{ old('apartment_unit') }}"
                            >
                                <div class="text-sm text-red-500 h-3">
                                @error('apartment_unit')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Location Details Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="space-y-1">
                            <label for="city" class="block text-side font-semibold text-sm uppercase tracking-wide">City *</label>
                            <input
                                type="text"
                                id="city"
                                name="city"
                                class="@error('city') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="New York"
                            value="{{ old('city') }}"
                                >

                                <div class="text-sm text-red-500 h-3">
                                @error('city')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label for="state" class="block text-side font-semibold text-sm uppercase tracking-wide">State *</label>
                            <select
                                id="state"
                                name="state"
                                class="@error('state') border-red-500 @else border-purple-light @enderror 
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest">
                                <option value="">Select State</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>

                            <div class="text-sm text-red-500 h-3">
                                @error('state')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label for="zipCode" class="block text-side font-semibold text-sm uppercase tracking-wide">ZIP Code *</label>
                            <input
                                type="text"
                                id="zipCode"
                                name="zip_code"
                                class="@error('zip_code') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="12345"
                            value="{{ old('zip_code') }}"
                                >

                                <div class="text-sm text-red-500 h-3">
                                @error('zip_code')
                                {{ $message }}
                                @enderror
                            </div>
                            <!-- pattern="[0-9]{5}(-[0-9]{4})?" -->
                        </div>
                        <div class="space-y-1">
                            <label for="pinNumber" class="block text-side font-semibold text-sm uppercase tracking-wide">PIN Number *</label>
                            <input
                                type="text"
                                id="pinNumber"
                                name="pin_number"
                                maxlength="6"
                                class="@error('pin_number') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                                placeholder="123456"
                            value="{{ old('pin_number') }}"
                                >

                                <div class="text-sm text-red-500 h-3">
                                @error('pin_number')
                                {{ $message }}
                                @enderror
                            </div>
                            <!-- pattern="[0-9]{6}" -->

                        </div>
                    </div>

                    <!-- Country Selection -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                        <div class="space-y-1">
                            <label for="country" class="block text-side font-semibold text-sm uppercase tracking-wide">Country *</label>
                            <select
                                id="country"
                                name="country"
                                class="@error('country') border-red-500 @else border-purple-light @enderror
                                w-full px-3 py-3 border-2 rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest">
                                <option value="">Select Country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="IN">India</option>
                                <option value="GB">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                                <option value="JP">Japan</option>
                                <option value="CN">China</option>
                                <option value="BR">Brazil</option>
                            </select>

                            <div class="text-sm text-red-500 h-3">
                                @error('country')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label class="block text-side font-semibold text-sm uppercase tracking-wide">Options</label>
                            <div class="flex items-center pt-3">
                                <input
                                    type="checkbox"
                                    id="is_default"
                                    name="is_default"
                                    value="1"
                                    class="w-5 h-5 text-side bg-lav1 border-2 rounded focus:ring-peri focus:ring-2"
                            value="{{ old('full_name') }}"
                                    >

                                <label for="is_default" class="ml-3 text-purple-darkest font-medium">Set as default shipping address</label>
                            </div>
                        </div>


                        <!-- Default Address -->
                        <!-- Default Address -->
                        <!-- <div class="flex items-center">
                            <input type="checkbox" id="defaultAddress" name="is_default" value="1" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
                            <label for="defaultAddress" class="ml-2 block text-sm text-gray-700">Set as default shipping address</label>
                        </div> -->
                    </div>

                    <!-- Special Instructions -->
                    <!-- <div class="space-y-2">
                        <label for="instructions" class="block text-side font-semibold text-sm uppercase tracking-wide">Special Instructions (Optional)</label>
                        <textarea
                            id="instructions"
                            name="instructions"
                            rows="3"
                            class="w-full px-3 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark resize-none"
                            placeholder="Leave at front door, ring doorbell, call upon arrival, etc."></textarea>
                    </div> -->

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-side to-purple-darkest text-white font-bold py-3 px-6 rounded-lg hover:shadow-lg transform hover:scale-[1.01] transition-all duration-200">
                            Save Address
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <script>
            const radioInputs = document.querySelectorAll('input[type="radio"]');

            radioInputs.forEach(input => {
                input.addEventListener('change', function() {
                    // Remove checked state from all radio buttons in the same group
                    const groupName = this.name;
                    const groupRadios = document.querySelectorAll(`input[name="${groupName}"]`);

                    groupRadios.forEach(radio => {
                        const dot = radio.parentElement.querySelector('.radio-dot');
                        if (dot) {
                            dot.style.opacity = radio === this ? '1' : '0';
                        }
                    });
                });
            });
        </script>

    </x-slot>
</x-user_navbar>