<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Form</title>
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
        .radio-custom input:checked + .radio-custom .radio-dot {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-lav1 min-h-screen py-8 px-4">
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-side to-purple-darkest p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Shipping Address</h2>
                <p class="text-lav2 text-sm">Please provide your delivery address details</p>
            </div>

            <!-- Form -->
            <form class="p-8 space-y-6">
                <!-- Address Type Selection -->
                <div class="space-y-3">
                    <label class="block text-side font-semibold text-sm uppercase tracking-wide">Address Type</label>
                    <div class="flex gap-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="addressType" value="home" class="sr-only">
                            <div class="radio-custom w-5 h-5 border-2 border-peri rounded-full flex items-center justify-center mr-3 transition-all duration-200">
                                <div class="radio-dot w-2.5 h-2.5 bg-side rounded-full opacity-0 transition-opacity duration-200"></div>
                            </div>
                            <span class="text-purple-darkest font-medium">Home</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="addressType" value="office" class="sr-only">
                            <div class="radio-custom w-5 h-5 border-2 border-peri rounded-full flex items-center justify-center mr-3 transition-all duration-200">
                                <div class="radio-dot w-2.5 h-2.5 bg-side rounded-full opacity-0 transition-opacity duration-200"></div>
                            </div>
                            <span class="text-purple-darkest font-medium">Office</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="addressType" value="other" class="sr-only">
                            <div class="radio-custom w-5 h-5 border-2 border-peri rounded-full flex items-center justify-center mr-3 transition-all duration-200">
                                <div class="radio-dot w-2.5 h-2.5 bg-side rounded-full opacity-0 transition-opacity duration-200"></div>
                            </div>
                            <span class="text-purple-darkest font-medium">Other</span>
                        </label>
                    </div>
                </div>

                <!-- Full Name -->
                <div class="space-y-2">
                    <label for="fullName" class="block text-side font-semibold text-sm uppercase tracking-wide">Full Name *</label>
                    <input 
                        type="text" 
                        id="fullName" 
                        name="fullName"
                        required
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                        placeholder="Enter your full name"
                    >
                </div>

                <!-- Phone Number -->
                <div class="space-y-2">
                    <label for="phone" class="block text-side font-semibold text-sm uppercase tracking-wide">Phone Number *</label>
                    <input 
                        type="tel" 
                        id="phone" 
                        name="phone"
                        required
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                        placeholder="+1 (555) 123-4567"
                    >
                </div>

                <!-- Street Address -->
                <div class="space-y-2">
                    <label for="streetAddress" class="block text-side font-semibold text-sm uppercase tracking-wide">Street Address *</label>
                    <input 
                        type="text" 
                        id="streetAddress" 
                        name="streetAddress"
                        required
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                        placeholder="123 Main Street"
                    >
                </div>

                <!-- Apartment/Unit -->
                <div class="space-y-2">
                    <label for="apartment" class="block text-side font-semibold text-sm uppercase tracking-wide">Apartment / Unit (Optional)</label>
                    <input 
                        type="text" 
                        id="apartment" 
                        name="apartment"
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                        placeholder="Apt 4B, Unit 101, etc."
                    >
                </div>

                <!-- City, State, ZIP, PIN Row -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="space-y-2">
                        <label for="city" class="block text-side font-semibold text-sm uppercase tracking-wide">City *</label>
                        <input 
                            type="text" 
                            id="city" 
                            name="city"
                            required
                            class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                            placeholder="New York"
                        >
                    </div>
                    <div class="space-y-2">
                        <label for="state" class="block text-side font-semibold text-sm uppercase tracking-wide">State *</label>
                        <select 
                            id="state" 
                            name="state"
                            required
                            class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest"
                        >
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
                    </div>
                    <div class="space-y-2">
                        <label for="zipCode" class="block text-side font-semibold text-sm uppercase tracking-wide">ZIP Code *</label>
                        <input 
                            type="text" 
                            id="zipCode" 
                            name="zipCode"
                            required
                            pattern="[0-9]{5}(-[0-9]{4})?"
                            class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                            placeholder="12345"
                        >
                    </div>
                    <div class="space-y-2">
                        <label for="pinNumber" class="block text-side font-semibold text-sm uppercase tracking-wide">PIN Number *</label>
                        <input 
                            type="text" 
                            id="pinNumber" 
                            name="pinNumber"
                            required
                            pattern="[0-9]{6}"
                            maxlength="6"
                            class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark"
                            placeholder="123456"
                        >
                    </div>
                </div>

                <!-- Country -->
                <div class="space-y-2">
                    <label for="country" class="block text-side font-semibold text-sm uppercase tracking-wide">Country *</label>
                    <select 
                        id="country" 
                        name="country"
                        required
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest"
                    >
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
                </div>

                <!-- Special Instructions -->
                <div class="space-y-2">
                    <label for="instructions" class="block text-side font-semibold text-sm uppercase tracking-wide">Special Instructions (Optional)</label>
                    <textarea 
                        id="instructions" 
                        name="instructions"
                        rows="3"
                        class="w-full px-4 py-3 border-2 border-purple-light rounded-lg focus:border-peri focus:outline-none transition-colors duration-200 bg-lav1 text-purple-darkest placeholder-purple-dark resize-none"
                        placeholder="Leave at front door, ring doorbell, etc."
                    ></textarea>
                </div>

                <!-- Set as Default Address Checkbox -->
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="defaultAddress" 
                        name="defaultAddress"
                        class="w-5 h-5 text-side bg-lav1 border-2 border-purple-light rounded focus:ring-peri focus:ring-2"
                    >
                    <label for="defaultAddress" class="ml-3 text-purple-darkest font-medium">Set as default shipping address</label>
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-side to-purple-darkest text-white font-bold py-4 px-6 rounded-lg hover:shadow-lg transform hover:scale-[1.02] transition-all duration-200"
                    >
                        Save Address
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Custom radio button functionality
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

        // PIN number validation - only allow digits
        const pinInput = document.getElementById('pinNumber');
        pinInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        // ZIP code validation
        const zipInput = document.getElementById('zipCode');
        zipInput.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9-]/g, '');
        });
    </script>
</body>
</html>