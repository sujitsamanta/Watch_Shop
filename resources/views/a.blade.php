<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Addresses</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-lightest': '#F3F0FF',
                        'purple-light': '#E2D8FF',
                        'purple-medium': '#9D8DF1',
                        'purple-dark': '#4C4B7C',
                        'purple-darkest': '#2D2A4A',
                        'lav1': '#F4EFFF',
                        'lav2': '#E4DEFF',
                        'peri': '#A9B4E6',
                        'side': '#3F4673',
                    }
                }
            }
        }
    </script>
    <style>
        .address-card {
            transition: all 0.3s ease;
        }
        .address-card:hover {
            transform: translateY(-2px);
        }
        .default-badge {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="bg-lav1 min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm border-b border-lav2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-purple-darkest">My Addresses</h1>
                <button class="bg-purple-medium hover:bg-purple-dark text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                    + Add New Address
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Address Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Address Card 1 -->
            <div class="address-card bg-white rounded-xl shadow-lg border border-lav2 p-6 relative">
                <!-- Default Badge -->
                <div class="absolute top-4 right-4">
                    <span class="default-badge bg-purple-medium text-white px-3 py-1 rounded-full text-sm font-medium">
                        Default
                    </span>
                </div>
                
                <!-- Address Type -->
                <div class="mb-4">
                    <span class="bg-lav2 text-purple-dark px-3 py-1 rounded-full text-sm font-medium uppercase">
                        Office
                    </span>
                </div>

                <!-- Name -->
                <h3 class="text-lg font-semibold text-purple-darkest mb-2">Sujit</h3>

                <!-- Address Details -->
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

                <!-- Phone Number -->
                <div class="mb-4">
                    <p class="text-sm text-side">
                        <span class="font-medium">Phone:</span> +919907246586
                    </p>
                </div>

                <!-- Action Buttons -->
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

                <!-- Timestamps -->
                <div class="mt-4 pt-4 border-t border-lav2">
                    <div class="text-xs text-peri space-y-1">
                        <p>Created: Sept 19, 2025 at 10:17 AM</p>
                        <p>Updated: Sept 19, 2025 at 10:17 AM</p>
                    </div>
                </div>
            </div>

            <!-- Sample Additional Address Cards -->
            <div class="address-card bg-white rounded-xl shadow-lg border border-lav2 p-6 relative">
                <!-- Address Type -->
                <div class="mb-4">
                    <span class="bg-lav2 text-purple-dark px-3 py-1 rounded-full text-sm font-medium uppercase">
                        Home
                    </span>
                </div>

                <!-- Name -->
                <h3 class="text-lg font-semibold text-purple-darkest mb-2">Sujit</h3>

                <!-- Address Details -->
                <div class="space-y-2 text-side mb-4">
                    <p class="text-sm">
                        <span class="font-medium">Apartment:</span> 12B
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">Street:</span> Park Street
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">City:</span> Kolkata
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">State:</span> WB
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">ZIP:</span> 700016
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">PIN:</span> 700016
                    </p>
                    <p class="text-sm">
                        <span class="font-medium">Country:</span> IN
                    </p>
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <p class="text-sm text-side">
                        <span class="font-medium">Phone:</span> +919907246586
                    </p>
                </div>

                <!-- Action Buttons -->
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

                <!-- Set Default Button -->
                <div class="mt-4">
                    <button class="w-full bg-purple-medium hover:bg-purple-dark text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                        Set as Default
                    </button>
                </div>

                <!-- Timestamps -->
                <div class="mt-4 pt-4 border-t border-lav2">
                    <div class="text-xs text-peri space-y-1">
                        <p>Created: Sept 15, 2025 at 2:30 PM</p>
                        <p>Updated: Sept 16, 2025 at 9:15 AM</p>
                    </div>
                </div>
            </div>

            <!-- Add New Address Card -->
            <div class="address-card bg-gradient-to-br from-lav1 to-lav2 rounded-xl border-2 border-dashed border-peri p-6 flex flex-col items-center justify-center min-h-[400px] hover:border-purple-medium cursor-pointer">
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-light rounded-full flex items-center justify-center mb-4 mx-auto">
                        <svg class="w-8 h-8 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-purple-dark mb-2">Add New Address</h3>
                    <p class="text-side text-sm">Click to add a new delivery address</p>
                </div>
            </div>
        </div>

        <!-- Address Statistics -->
        <div class="mt-12 bg-white rounded-xl shadow-lg border border-lav2 p-6">
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
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-lav2 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="text-center text-side text-sm">
                <p>© 2025 Address Management. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Handle set default button clicks
            const setDefaultButtons = document.querySelectorAll('button:contains("Set as Default")');
            
            // Handle add new address card click
            const addAddressCard = document.querySelector('.bg-gradient-to-br');
            if (addAddressCard) {
                addAddressCard.addEventListener('click', function() {
                    alert('Add new address functionality would be implemented here');
                });
            }

            // Add hover effects for cards
            const addressCards = document.querySelectorAll('.address-card');
            addressCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)';
                });
            });

            // Handle button clicks
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function(e) {
                    if (this.textContent.includes('Edit')) {
                        e.preventDefault();
                        alert('Edit address functionality would be implemented here');
                    } else if (this.textContent.includes('View')) {
                        e.preventDefault();
                        alert('View address details functionality would be implemented here');
                    } else if (this.textContent.includes('Delete')) {
                        e.preventDefault();
                        if (confirm('Are you sure you want to delete this address?')) {
                            alert('Delete functionality would be implemented here');
                        }
                    } else if (this.textContent.includes('Set as Default')) {
                        e.preventDefault();
                        alert('Set as default functionality would be implemented here');
                    }
                });
            });
        });
    </script>
</body>
</html>