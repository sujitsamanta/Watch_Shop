<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Address</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-lav1 min-h-screen py-8">
    <div class="max-w-lg mx-auto px-4">
        
        <!-- Delivery Address Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-lav2 overflow-hidden mb-6">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 bg-lav2">
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-purple-medium mr-2"></i>
                    <span class="font-medium text-side">Delivery Address</span>
                </div>
                <button class="text-purple-medium hover:text-purple-dark text-sm font-medium transition-colors">
                    Change
                </button>
            </div>

            <!-- Address Content -->
            <div class="p-4">
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-purple-medium rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                        <i class="fas fa-home text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-medium text-side text-lg">John Doe</p>
                        <p class="text-side mt-1">123 Main Street, Apt 4B</p>
                        <p class="text-side">New York, NY 10001</p>
                        <p class="text-peri text-sm mt-2">+1 (555) 123-4567</p>
                    </div>
                </div>
                
                <!-- Delivery Instructions -->
                <div class="mt-4 p-3 bg-lav1 rounded-lg">
                    <p class="text-xs font-medium text-side mb-1">Delivery Instructions:</p>
                    <p class="text-sm text-peri">Leave package at front door. Ring doorbell twice.</p>
                </div>
            </div>
        </div>

        <!-- Delivery Time Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-lav2 overflow-hidden mb-6">
            <div class="flex items-center justify-between p-4 bg-lav2">
                <div class="flex items-center">
                    <i class="fas fa-clock text-purple-medium mr-2"></i>
                    <span class="font-medium text-side">Delivery Time</span>
                </div>
                <button class="text-purple-medium hover:text-purple-dark text-sm font-medium transition-colors">
                    Change
                </button>
            </div>
            
            <div class="p-4">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-truck text-green-600 text-sm"></i>
                    </div>
                    <div>
                        <p class="font-medium text-side">Today, 2:00 PM - 4:00 PM</p>
                        <p class="text-peri text-sm">Express Delivery</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="bg-white rounded-2xl shadow-sm border border-lav2 overflow-hidden">
            <div class="p-4 bg-lav2">
                <div class="flex items-center">
                    <i class="fas fa-receipt text-purple-medium mr-2"></i>
                    <span class="font-medium text-side">Order Summary</span>
                </div>
            </div>
            
            <div class="p-4 space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-side">Subtotal</span>
                    <span class="text-side">$79.99</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-side">Delivery Fee</span>
                    <span class="text-green-600 font-medium">Free</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-side">Tax</span>
                    <span class="text-side">$6.40</span>
                </div>
                <hr class="border-lav2">
                <div class="flex justify-between items-center">
                    <span class="font-semibold text-side">Total</span>
                    <span class="font-bold text-side text-lg">$86.39</span>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex space-x-4 mt-8">
            <button class="flex-1 py-4 px-6 bg-lav2 text-side rounded-xl font-semibold hover:bg-purple-light transition-colors border border-lav2 text-lg">
                <i class="fas fa-arrow-left mr-3"></i>
                Back to Cart
            </button>
            <button class="flex-1 py-4 px-6 bg-purple-medium text-white rounded-xl font-semibold hover:bg-purple-dark transition-colors text-lg">
                Place Order
                <i class="fas fa-check ml-3"></i>
            </button>
        </div>

        <!-- Security Notice -->
        <div class="flex items-center justify-center space-x-2 mt-4 text-peri text-sm">
            <i class="fas fa-shield-alt"></i>
            <span>Secure checkout protected by SSL encryption</span>
        </div>
    </div>

    <script>
        // Simple interaction for change buttons
        document.addEventListener('DOMContentLoaded', function() {
            const changeButtons = document.querySelectorAll('button:not(.flex-1)');
            
            changeButtons.forEach(button => {
                if (button.textContent.trim() === 'Change') {
                    button.addEventListener('click', function() {
                        // Add a subtle feedback animation
                        this.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 150);
                        
                        // In a real app, this would navigate to edit page
                        console.log('Navigate to edit address/delivery time');
                    });
                }
            });

            // Place Order button
            const placeOrderBtn = document.querySelector('button:last-of-type');
            placeOrderBtn.addEventListener('click', function() {
                // Show loading state
                this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processing...';
                this.disabled = true;
                
                // Simulate order processing
                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-check mr-2"></i>Order Placed!';
                    this.className = 'flex-1 py-3 px-4 bg-green-500 text-white rounded-xl font-medium cursor-not-allowed';
                }, 2000);
            });
        });
    </script>
</body>
</html>