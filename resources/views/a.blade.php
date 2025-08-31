<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details & Reviews</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'purple-light': '#E5D9FF',
                        'purple-medium': '#9333EA',
                        'purple-dark': '#7C3AED',
                        'purple-darkest': '#4C1D95',
                        'lav2': '#F3F0FF'
                    }
                }
            }
        }
    </script>
    <style>
        .reviews-container {
            max-height: 600px;
            overflow-y: auto;
        }

        .reviews-container::-webkit-scrollbar {
            width: 6px;
        }

        .reviews-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .reviews-container::-webkit-scrollbar-thumb {
            background: #9333EA;
            border-radius: 10px;
        }

        .reviews-container::-webkit-scrollbar-thumb:hover {
            background: #7C3AED;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Main Grid Layout -->
        <div class="grid lg:grid-cols-2 gap-8 max-w-7xl mx-auto"

            <!-- Left Side - Product Details -->
            <div class="bg-white rounded-xl shadow-lg p-6 border border-purple-light h-fit">
                <h2 class="text-2xl font-bold text-purple-darkest mb-6">Product Details</h2>

                <!-- Introduction Text -->
                <div class="mb-6">
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Advanced technology meets premium design. The 1.9-inch Always-On Retina display delivers exceptional clarity and vibrant colors for the ultimate smartwatch experience.
                    </p>
                </div>

                <!-- Display Specifications -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-purple-darkest mb-4">Display</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center py-2 border-b border-purple-light">
                            <span class="text-gray-700 text-sm">Display diagonal</span>
                            <span class="font-medium text-purple-darkest text-sm">1.9"</span>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-purple-light">
                            <span class="text-gray-700 text-sm">Resolution</span>
                            <span class="font-medium text-purple-darkest text-sm">484×396</span>
                        </div>

                        <div class="flex justify-between items-center py-2 border-b border-purple-light">
                            <span class="text-gray-700 text-sm">Display type</span>
                            <span class="font-medium text-purple-darkest text-sm">LTPO OLED</span>
                        </div>

                        <div class="flex justify-between items-start py-2">
                            <span class="text-gray-700 text-sm">Additionally</span>
                            <div class="text-right text-sm">
                                <div class="font-medium text-purple-darkest">Always-On display</div>
                                <div class="font-medium text-purple-darkest">1000 nits brightness</div>
                                <div class="font-medium text-purple-darkest">True Tone</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Processor Specifications -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-purple-darkest mb-4">Processor</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center py-2 border-b border-purple-light">
                            <span class="text-gray-700 text-sm">Chip</span>
                            <span class="font-medium text-purple-darkest text-sm">S9 SiP</span>
                        </div>

                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-700 text-sm">Number of cores</span>
                            <span class="font-medium text-purple-darkest text-sm">Dual-core</span>
                        </div>
                    </div>
                </div>

                <!-- View More Button -->
                <div class="text-center">
                    <button id="viewMoreBtn" onclick="toggleAdditionalSpecs()" class="px-6 py-2 border border-purple-medium text-purple-darkest rounded-lg text-sm font-medium hover:bg-lav2 transition-colors inline-flex items-center space-x-2">
                        <span id="viewMoreText">View More</span>
                        <svg id="chevronIcon" class="w-4 h-4 transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Hidden Additional Specs -->
                <div id="additionalSpecs" class="mt-6 space-y-6 hidden">
                    <!-- Health & Fitness -->
                    <div>
                        <h3 class="text-lg font-semibold text-purple-darkest mb-4">Health & Fitness</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                <span class="text-gray-700 text-sm">Health sensors</span>
                                <span class="font-medium text-purple-darkest text-sm">Heart rate, ECG, Blood oxygen</span>
                            </div>

                            <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                <span class="text-gray-700 text-sm">Water resistance</span>
                                <span class="font-medium text-purple-darkest text-sm">50 meters</span>
                            </div>

                            <div class="flex justify-between items-center py-2">
                                <span class="text-gray-700 text-sm">GPS</span>
                                <span class="font-medium text-purple-darkest text-sm">Precision dual-frequency</span>
                            </div>
                        </div>
                    </div>

                    <!-- Connectivity -->
                    <div>
                        <h3 class="text-lg font-semibold text-purple-darkest mb-4">Connectivity</h3>
                        <div class="space-y-2">
                            <div class="flex justify-between items-center py-2 border-b border-purple-light">
                                <span class="text-gray-700 text-sm">Wireless</span>
                                <span class="font-medium text-purple-darkest text-sm">Wi-Fi, Bluetooth 5.3, 4G LTE</span>
                            </div>

                            <div class="flex justify-between items-center py-2">
                                <span class="text-gray-700 text-sm">NFC</span>
                                <span class="font-medium text-purple-darkest text-sm">Apple Pay</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Reviews & Feedback -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-purple-darkest mb-6">Customer Reviews</h2>

                <!-- Rating Overview -->
                <div class="flex items-center gap-6 mb-6 p-4 bg-purple-light rounded-lg">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-darkest mb-1">4.8</div>
                        <div class="text-gray-600 text-sm mb-1">125 reviews</div>
                        <div class="flex justify-center">
                            <div class="flex text-yellow-400 text-lg">
                                ★★★★★
                            </div>
                        </div>
                    </div>

                    <!-- Rating Breakdown -->
                    <div class="flex-1">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2 text-xs">
                                <span class="text-purple-dark font-medium w-16">Excellent</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-medium h-full rounded-full transition-all duration-500" style="width: 80%"></div>
                                </div>
                                <span class="text-purple-dark font-medium w-6">100</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <span class="text-purple-dark font-medium w-16">Good</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-medium h-full rounded-full transition-all duration-500" style="width: 8.8%"></div>
                                </div>
                                <span class="text-purple-dark font-medium w-6">11</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <span class="text-purple-dark font-medium w-16">Average</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-medium h-full rounded-full transition-all duration-500" style="width: 2.4%"></div>
                                </div>
                                <span class="text-purple-dark font-medium w-6">3</span>
                            </div>
                            <div class="flex items-center gap-2 text-xs">
                                <span class="text-purple-dark font-medium w-16">Poor</span>
                                <div class="flex-1 bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-medium h-full rounded-full transition-all duration-500" style="width: 6.4%"></div>
                                </div>
                                <span class="text-purple-dark font-medium w-6">9</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Leave Comment Section -->
                <div class="mb-6">
                    <textarea
                        id="commentInput"
                        placeholder="Leave your review..."
                        class="w-full p-3 border border-gray-300 rounded-lg resize-none h-20 focus:outline-none focus:ring-2 focus:ring-purple-medium focus:border-transparent placeholder-gray-400 text-sm"></textarea>
                    <div class="flex justify-end mt-2">
                        <button
                            onclick="submitComment()"
                            class="bg-purple-medium hover:bg-purple-dark text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200 text-sm">
                            Submit Review
                        </button>
                    </div>
                </div>

                <!-- Reviews List with Scroll -->
                <div class="reviews-container">
                    <div class="space-y-4" id="reviewsList">
                        <!-- Grace Carey Review -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                    GC
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="font-semibold text-purple-darkest text-sm">Grace Carey</h4>
                                        <span class="text-gray-400 text-xs">24 Jan 2024</span>
                                    </div>
                                    <div class="flex text-yellow-400 mb-2 text-sm">
                                        ★★★★★
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-sm">
                                        I was a bit nervous to be buying a secondhand phone from Amazon, but I couldn't be happier with my purchase!! I have a pre-paid data plan so I was worried that this phone wouldn't connect with my data plan, since the new phones don't have the physical Sim tray anymore, but couldn't have been easier! I bought an Unlocked black iPhone 14 Pro Max in excellent condition and everything is PERFECT. It was super easy to set up and the phone works and looks great. It truly was in excellent condition. Highly recommend!! 🖤
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ronald Richards Review -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                    RR
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="font-semibold text-purple-darkest text-sm">Ronald Richards</h4>
                                        <span class="text-gray-400 text-xs">24 Jan 2024</span>
                                    </div>
                                    <div class="flex text-yellow-400 mb-2 text-sm">
                                        ★★★★★
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-sm">
                                        This phone has fast storage and is durable. Plus all the new iPhones have a C port! Apple is phasing out the current ones! (All about the Benjamins) So if you want a phone that's going to last grab an iPhone 14 pro max and get several cords and plugs.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Darcy King Review -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                    DK
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="font-semibold text-purple-darkest text-sm">Darcy King</h4>
                                        <span class="text-gray-400 text-xs">24 Jan 2024</span>
                                    </div>
                                    <div class="flex text-yellow-400 mb-2 text-sm">
                                        ★★★★☆
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-sm mb-3">
                                        I might be the only one to say this but the camera is a little funky. Hoping it will change with a software update; otherwise, love this phone! Came in great condition
                                    </p>
                                    <!-- Product Images -->
                                    <div class="flex gap-2">
                                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                            <span class="text-gray-500 text-xs">📱</span>
                                        </div>
                                        <div class="w-16 h-16 bg-gray-200 rounded-lg flex items-center justify-center">
                                            <span class="text-gray-500 text-xs">📱</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Sample Reviews -->
                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                    MJ
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="font-semibold text-purple-darkest text-sm">Mike Johnson</h4>
                                        <span class="text-gray-400 text-xs">22 Jan 2024</span>
                                    </div>
                                    <div class="flex text-yellow-400 mb-2 text-sm">
                                        ★★★★★
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-sm">
                                        Amazing smartwatch! The battery life is incredible and the health tracking features are spot on. The always-on display is a game changer for quick glances throughout the day.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="border-b border-gray-100 pb-4">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                                    SA
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between items-start mb-1">
                                        <h4 class="font-semibold text-purple-darkest text-sm">Sarah Anderson</h4>
                                        <span class="text-gray-400 text-xs">20 Jan 2024</span>
                                    </div>
                                    <div class="flex text-yellow-400 mb-2 text-sm">
                                        ★★★★☆
                                    </div>
                                    <p class="text-gray-700 leading-relaxed text-sm">
                                        Great build quality and the display is gorgeous. Only complaint is that some apps can be a bit slow to load, but overall very satisfied with the purchase.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- View More Button -->
                    <div class="text-center mt-6">
                        <button
                            onclick="loadMoreReviews()"
                            class="border border-purple-medium text-purple-dark hover:bg-purple-light px-6 py-2 rounded-lg font-medium transition-colors duration-200 flex items-center gap-2 mx-auto text-sm">
                            View More Reviews
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="col-span-full mt-12">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-purple-darkest mb-8">Related Products</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- iPhone 14 Pro 512GB Gold -->
                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                        <div class="relative mb-4">
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <div class="h-32 bg-gradient-to-br from-yellow-200 to-yellow-400 rounded-lg flex items-center justify-center">
                                <div class="text-4xl">📱</div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-purple-darkest text-sm mb-1">Apple iPhone 14 Pro 512GB Gold (MQ233)</h3>
                        <div class="text-xl font-bold text-purple-darkest mb-3">$1437</div>
                        <button class="w-full bg-black text-white py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors text-sm">
                            Buy Now
                        </button>
                    </div>

                    <!-- AirPods Max Silver -->
                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                        <div class="relative mb-4">
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <div class="h-32 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg flex items-center justify-center">
                                <div class="text-4xl">🎧</div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-purple-darkest text-sm mb-1">AirPods Max Silver Starlight Aluminium</h3>
                        <div class="text-xl font-bold text-purple-darkest mb-3">$549</div>
                        <button class="w-full bg-black text-white py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors text-sm">
                            Buy Now
                        </button>
                    </div>

                    <!-- Apple Watch Series 9 -->
                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                        <div class="relative mb-4">
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <div class="h-32 bg-gradient-to-br from-blue-200 to-blue-400 rounded-lg flex items-center justify-center">
                                <div class="text-4xl">⌚</div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-purple-darkest text-sm mb-1">Apple Watch Series 9 GPS 41mm Starlight Aluminium</h3>
                        <div class="text-xl font-bold text-purple-darkest mb-3">$399</div>
                        <button class="w-full bg-black text-white py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors text-sm">
                            Buy Now
                        </button>
                    </div>

                    <!-- iPhone 14 Pro 1TB Gold -->
                    <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-shadow duration-300">
                        <div class="relative mb-4">
                            <button class="absolute top-2 right-2 text-gray-400 hover:text-red-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <div class="h-32 bg-gradient-to-br from-blue-300 to-blue-500 rounded-lg flex items-center justify-center">
                                <div class="text-4xl">📱</div>
                            </div>
                        </div>
                        <h3 class="font-semibold text-purple-darkest text-sm mb-1">Apple iPhone 14 Pro 1TB Gold (MQ2V3)</h3>
                        <div class="text-xl font-bold text-purple-darkest mb-3">$1499</div>
                        <button class="w-full bg-black text-white py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors text-sm">
                            Buy Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAdditionalSpecs() {
            const additionalSpecs = document.getElementById('additionalSpecs');
            const chevronIcon = document.getElementById('chevronIcon');
            const viewMoreText = document.getElementById('viewMoreText');

            if (additionalSpecs.classList.contains('hidden')) {
                additionalSpecs.classList.remove('hidden');
                chevronIcon.style.transform = 'rotate(180deg)';
                viewMoreText.textContent = 'View Less';
            } else {
                additionalSpecs.classList.add('hidden');
                chevronIcon.style.transform = 'rotate(0deg)';
                viewMoreText.textContent = 'View More';
            }
        }

        function submitComment() {
            const commentInput = document.getElementById('commentInput');
            const comment = commentInput.value.trim();

            if (comment === '') {
                alert('Please enter a review before submitting.');
                return;
            }

            // Create new review element
            const reviewsList = document.getElementById('reviewsList');
            const newReview = document.createElement('div');
            newReview.className = 'border-b border-gray-100 pb-4';
            newReview.innerHTML = `
                <div class="flex items-start gap-3">
                    <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                        YU
                    </div>
                    <div class="flex-1">
                        <div class="flex justify-between items-start mb-1">
                            <h4 class="font-semibold text-purple-darkest text-sm">You</h4>
                            <span class="text-gray-400 text-xs">Just now</span>
                        </div>
                        <div class="flex text-yellow-400 mb-2 text-sm">
                            ★★★★★
                        </div>
                        <p class="text-gray-700 leading-relaxed text-sm">
                            ${comment}
                        </p>
                    </div>
                </div>
            `;

            // Insert at the top of reviews list
            reviewsList.insertBefore(newReview, reviewsList.firstChild);

            // Clear the input
            commentInput.value = '';

            // Show success message
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = 'Review Added!';
            button.classList.remove('bg-purple-medium', 'hover:bg-purple-dark');
            button.classList.add('bg-green-500');

            setTimeout(() => {
                button.textContent = originalText;
                button.classList.remove('bg-green-500');
                button.classList.add('bg-purple-medium', 'hover:bg-purple-dark');
            }, 2000);
        }

        function loadMoreReviews() {
            const additionalReviews = [{
                    name: "Alex Thompson",
                    initials: "AT",
                    date: "18 Jan 2024",
                    rating: "★★★★★",
                    comment: "Exceptional build quality and the health monitoring features are incredibly accurate. Best smartwatch I've owned!"
                },
                {
                    name: "Lisa Chen",
                    initials: "LC",
                    date: "15 Jan 2024",
                    rating: "★★★★☆",
                    comment: "Love the design and functionality. Battery could be better but overall very happy with this purchase."
                }
            ];

            const reviewsList = document.getElementById('reviewsList');

            additionalReviews.forEach(review => {
                const reviewElement = document.createElement('div');
                reviewElement.className = 'border-b border-gray-100 pb-4';
                reviewElement.innerHTML = `
                    <div class="flex items-start gap-3">
                        <div class="w-10 h-10 bg-purple-light rounded-full flex items-center justify-center text-purple-darkest font-bold text-sm">
                            ${review.initials}
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between items-start mb-1">
                                <h4 class="font-semibold text-purple-darkest text-sm">${review.name}</h4>
                                <span class="text-gray-400 text-xs">${review.date}</span>
                            </div>
                            <div class="flex text-yellow-400 mb-2 text-sm">
                                ${review.rating}
                            </div>
                            <p class="text-gray-700 leading-relaxed text-sm">
                                ${review.comment}
                            </p>
                        </div>
                    </div>
                `;
                reviewsList.appendChild(reviewElement);
            });

            // Hide the "View More" button after loading
            event.target.style.display = 'none';
        }

        // Add enter key support for comment submission
        document.getElementById('commentInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && e.ctrlKey) {
                submitComment();
            }
        });
    </script>
</body>

</html>