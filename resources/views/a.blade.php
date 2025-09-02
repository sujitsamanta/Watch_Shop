<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Products Showcase</title>
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
        .heart-icon {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .heart-icon:hover {
            fill: #ef4444;
            transform: scale(1.2) rotate(10deg);
            filter: drop-shadow(0 4px 8px rgba(239, 68, 68, 0.3));
        }
        
        .product-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .product-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(77, 75, 124, 0.25), 
                        0 0 0 1px rgba(157, 141, 241, 0.1),
                        0 0 20px rgba(157, 141, 241, 0.2);
        }
        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.6s;
        }
        .product-card:hover::before {
            left: 100%;
        }
        
        .buy-btn {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .buy-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: linear-gradient(45deg, #9D8DF1, #A9B4E6);
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            transform: translate(-50%, -50%);
            z-index: 0;
        }
        .buy-btn:hover::before {
            width: 300%;
            height: 300%;
        }
        .buy-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(45, 42, 74, 0.4);
            color: white;
        }
        .buy-btn span {
            position: relative;
            z-index: 1;
        }
        
        .product-image {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .product-card:hover .product-image {
            transform: scale(1.05) rotate(2deg);
        }
        
        .price {
            transition: all 0.3s ease;
        }
        .product-card:hover .price {
            color: #9D8DF1;
            transform: scale(1.05);
        }
        
        .product-title {
            transition: all 0.3s ease;
        }
        .product-card:hover .product-title {
            color: #4C4B7C;
        }
        
        /* Shimmer effect for cards */
        .product-card {
            background: linear-gradient(145deg, #ffffff, #f8fafc);
        }
        .product-card:hover {
            background: linear-gradient(145deg, #ffffff, #F4EFFF);
        }
        
        /* Floating animation for heart */
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-3px) rotate(2deg); }
        }
        .heart-icon:hover {
            animation: float 0.6s ease-in-out;
        }
        
        /* Pulse effect for prices */
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Glow effect */
        .product-card:hover {
            background: radial-gradient(circle at center, rgba(244, 239, 255, 0.8), white);
        }
    </style>
</head>
<body class="bg-lav1 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-purple-darkest mb-12">Related Products</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- iPhone 14 Pro 512GB Gold -->
            <div class="product-card bg-white rounded-2xl p-6 shadow-lg relative">
                <div class="absolute top-4 right-4">
                    <svg class="heart-icon w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                
                <div class="flex justify-center mb-6">
                    <div class="w-32 h-40 bg-gradient-to-br from-yellow-300 via-orange-400 to-orange-500 rounded-3xl flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-2 bg-black rounded-2xl"></div>
                        <div class="absolute top-3 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-black rounded-full"></div>
                        <div class="absolute top-3 left-4 w-2 h-2 bg-gray-800 rounded-full"></div>
                        <div class="absolute top-3 right-4 w-2 h-2 bg-gray-800 rounded-full"></div>
                        <div class="absolute top-3 right-8 w-2 h-2 bg-gray-800 rounded-full"></div>
                    </div>
                </div>
                
                <div class="text-center">
                    <h3 class="text-purple-darkest font-semibold text-sm mb-2">Apple iPhone 14 Pro 512GB Gold (MQ233)</h3>
                    <p class="text-2xl font-bold text-purple-darkest mb-4">$1437</p>
                    <button class="buy-btn w-full bg-black text-white py-3 rounded-xl font-medium">Buy Now</button>
                </div>
            </div>

            <!-- AirPods Max Silver -->
            <div class="product-card bg-white rounded-2xl p-6 shadow-lg relative">
                <div class="absolute top-4 right-4">
                    <svg class="heart-icon w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                
                <div class="flex justify-center mb-6">
                    <div class="w-32 h-40 flex items-center justify-center">
                        <div class="relative">
                            <div class="w-24 h-6 bg-gray-300 rounded-full mb-2"></div>
                            <div class="flex justify-between">
                                <div class="w-10 h-12 bg-gray-200 rounded-2xl"></div>
                                <div class="w-10 h-12 bg-gray-200 rounded-2xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <h3 class="text-purple-darkest font-semibold text-sm mb-2">AirPods Max Silver Starlight Aluminium</h3>
                    <p class="text-2xl font-bold text-purple-darkest mb-4">$549</p>
                    <button class="buy-btn w-full bg-black text-white py-3 rounded-xl font-medium">Buy Now</button>
                </div>
            </div>

            <!-- Apple Watch Series 9 GPS -->
            <div class="product-card bg-white rounded-2xl p-6 shadow-lg relative">
                <div class="absolute top-4 right-4">
                    <svg class="heart-icon w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                
                <div class="flex justify-center mb-6">
                    <div class="w-32 h-40 flex items-center justify-center">
                        <div class="relative">
                            <div class="w-20 h-24 bg-gray-300 rounded-2xl flex items-center justify-center">
                                <div class="w-16 h-20 bg-black rounded-xl relative">
                                    <div class="absolute inset-1 bg-gradient-to-br from-red-500 via-yellow-400 to-green-500 rounded-lg"></div>
                                </div>
                            </div>
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-3 bg-gray-400 rounded-full"></div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center">
                    <h3 class="text-purple-darkest font-semibold text-sm mb-2">Apple Watch Series 9 GPS 41mm Starlight Aluminium</h3>
                    <p class="text-2xl font-bold text-purple-darkest mb-4">$399</p>
                    <button class="buy-btn w-full bg-black text-white py-3 rounded-xl font-medium">Buy Now</button>
                </div>
            </div>

            <!-- iPhone 14 Pro 1TB Gold -->
            <div class="product-card bg-white rounded-2xl p-6 shadow-lg relative">
                <div class="absolute top-4 right-4">
                    <svg class="heart-icon w-6 h-6 text-gray-300 cursor-pointer" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                
                <div class="flex justify-center mb-6">
                    <div class="w-32 h-40 bg-gradient-to-br from-blue-400 via-blue-600 to-blue-800 rounded-3xl flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-2 bg-black rounded-2xl"></div>
                        <div class="absolute top-3 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-black rounded-full"></div>
                        <div class="absolute top-3 left-4 w-2 h-2 bg-gray-800 rounded-full"></div>
                        <div class="absolute top-3 right-4 w-2 h-2 bg-gray-800 rounded-full"></div>
                        <div class="absolute top-3 right-8 w-2 h-2 bg-gray-800 rounded-full"></div>
                    </div>
                </div>
                
                <div class="text-center">
                    <h3 class="text-purple-darkest font-semibold text-sm mb-2">Apple iPhone 14 Pro 1TB Gold (MQ2V3)</h3>
                    <p class="text-2xl font-bold text-purple-darkest mb-4">$1499</p>
                    <button class="buy-btn w-full bg-black text-white py-3 rounded-xl font-medium">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>