<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyBlog - Share Your Thoughts</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#0891b2', // cyan-600
                        'primary-dark': '#0e7490', // cyan-700
                        'secondary': '#164e63', // cyan-900
                        'light': '#f1f5f9', // slate-100
                        'medium': '#cbd5e1', // slate-300
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #f1f5f9 0%, #cbd5e1 35%, #0891b2 70%, #164e63 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(8, 145, 178, 0.15);
        }
        .sticky-sidebar {
            position: sticky;
            top: 6rem; /* 24 in Tailwind = 6rem */
            max-height: calc(100vh - 6rem);
            overflow-y: auto;
        }
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="gradient-bg min-h-screen">
    <!-- Navigation -->
    <nav class="bg-white/90 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-feather-alt text-primary text-2xl mr-2"></i>
                        <h1 class="text-xl font-bold text-secondary">BeautyBlog</h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-secondary hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="#" class="text-slate-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Explore</a>
                        <a href="#" class="text-slate-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Notifications</a>
                        <a href="#" class="text-slate-600 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Profile</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button class="text-secondary hover:text-primary">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Sidebar -->
            <div class="lg:col-span-3">
                <div class="sticky top-24 space-y-6 max-h-screen overflow-y-auto">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 card-hover floating-animation">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary to-secondary rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user text-white text-2xl"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-secondary">Sarah Johnson</h3>
                        <p class="text-slate-600 text-sm">Beauty & Lifestyle Blogger</p>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-slate-600 text-sm">Following</span>
                            <span class="text-secondary font-semibold">1.2K</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600 text-sm">Followers</span>
                            <span class="text-secondary font-semibold">8.5K</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-slate-600 text-sm">Posts</span>
                            <span class="text-secondary font-semibold">234</span>
                        </div>
                    </div>
                </div>

                <!-- Trending Topics -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 card-hover">
                    <h3 class="text-lg font-semibold text-secondary mb-4">Trending Topics</h3>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-700">#SkinCare</span>
                            <span class="text-xs text-slate-500">12.3K posts</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-700">#MakeupTips</span>
                            <span class="text-xs text-slate-500">8.9K posts</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-700">#BeautyHacks</span>
                            <span class="text-xs text-slate-500">5.4K posts</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-slate-700">#WellnessTips</span>
                            <span class="text-xs text-slate-500">3.2K posts</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="lg:col-span-6">
                <!-- Create Post -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 mb-6 card-hover">
                    <div class="flex space-x-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-user text-white"></i>
                        </div>
                        <div class="flex-1">
                            <textarea 
                                placeholder="What's on your mind about beauty today?" 
                                class="w-full p-4 text-lg placeholder-slate-400 border-none resize-none focus:outline-none bg-slate-50 rounded-xl"
                                rows="3"
                                id="postText"
                            ></textarea>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex space-x-4">
                                    <button class="text-primary hover:text-primary-dark transition-colors">
                                        <i class="fas fa-image text-xl"></i>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark transition-colors">
                                        <i class="fas fa-smile text-xl"></i>
                                    </button>
                                    <button class="text-primary hover:text-primary-dark transition-colors">
                                        <i class="fas fa-map-marker-alt text-xl"></i>
                                    </button>
                                </div>
                                <button 
                                    onclick="createPost()"
                                    class="bg-gradient-to-r from-primary to-secondary text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg transition-all duration-300 transform hover:scale-105"
                                >
                                    Share
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts Feed -->
                <div id="postsContainer">
                    <!-- Sample Post 1 -->
                    <article class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 mb-6 card-hover fade-in">
                        <div class="flex space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">EM</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <h4 class="font-semibold text-secondary">Emma Rodriguez</h4>
                                    <span class="text-slate-500 text-sm">@emma_beauty</span>
                                    <span class="text-slate-400">•</span>
                                    <span class="text-slate-500 text-sm">2h</span>
                                </div>
                                <p class="text-slate-700 mb-4">Just discovered this amazing new serum that's completely transformed my skin routine! The glow is real ✨ Who else is obsessed with vitamin C serums? #SkinCare #GlowUp</p>
                                <div class="bg-slate-100 rounded-xl p-4 mb-4">
                                    <div class="h-48 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-image text-4xl text-slate-400"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between text-slate-500">
                                    <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                        <i class="far fa-heart"></i>
                                        <span>124</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-primary transition-colors">
                                        <i class="far fa-comment"></i>
                                        <span>23</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                        <i class="fas fa-retweet"></i>
                                        <span>18</span>
                                    </button>
                                    <button class="hover:text-primary transition-colors">
                                        <i class="far fa-share-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Sample Post 2 -->
                    <article class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 mb-6 card-hover fade-in">
                        <div class="flex space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-semibold">AL</span>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <h4 class="font-semibold text-secondary">Alex Chen</h4>
                                    <span class="text-slate-500 text-sm">@alex_makeup</span>
                                    <span class="text-slate-400">•</span>
                                    <span class="text-slate-500 text-sm">4h</span>
                                </div>
                                <p class="text-slate-700 mb-4">Morning skincare routine is everything! Double cleansing + vitamin C + SPF = perfect base for any makeup look. What's your must-have morning step? 🌅</p>
                                <div class="flex items-center justify-between text-slate-500">
                                    <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                        <i class="far fa-heart"></i>
                                        <span>89</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-primary transition-colors">
                                        <i class="far fa-comment"></i>
                                        <span>15</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                        <i class="fas fa-retweet"></i>
                                        <span>12</span>
                                    </button>
                                    <button class="hover:text-primary transition-colors">
                                        <i class="far fa-share-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- Sample Post 3 -->
                    <article class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 mb-6 card-hover fade-in">
                        <div class="flex space-x-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user text-white"></i>
                            </div>
                            <div class="flex-1">
                                <div class="flex items-center space-x-2 mb-2">
                                    <h4 class="font-semibold text-secondary">Sarah Johnson</h4>
                                    <span class="text-slate-500 text-sm">@sarah_beauty</span>
                                    <span class="text-slate-400">•</span>
                                    <span class="text-slate-500 text-sm">6h</span>
                                </div>
                                <p class="text-slate-700 mb-4">PSA: Your pillowcase matters more than you think! Silk pillowcases have been a game-changer for my hair and skin. Less friction = fewer breakouts and frizz! 💤✨ #BeautyHacks #SkincareTips</p>
                                <div class="flex items-center justify-between text-slate-500">
                                    <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                        <i class="far fa-heart"></i>
                                        <span>156</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-primary transition-colors">
                                        <i class="far fa-comment"></i>
                                        <span>34</span>
                                    </button>
                                    <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                        <i class="fas fa-retweet"></i>
                                        <span>28</span>
                                    </button>
                                    <button class="hover:text-primary transition-colors">
                                        <i class="far fa-share-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="lg:col-span-3">
                <div class="sticky top-24 space-y-6 max-h-screen overflow-y-auto">
                <!-- Who to Follow -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 card-hover">
                    <h3 class="text-lg font-semibold text-secondary mb-4">Who to follow</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-pink-400 to-pink-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-semibold">MK</span>
                                </div>
                                <div>
                                    <p class="font-semibold text-secondary text-sm">Maya Kim</p>
                                    <p class="text-slate-500 text-xs">@maya_glam</p>
                                </div>
                            </div>
                            <button class="bg-primary text-white px-4 py-1 rounded-full text-sm hover:bg-primary-dark transition-colors">
                                Follow
                            </button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-semibold">JL</span>
                                </div>
                                <div>
                                    <p class="font-semibold text-secondary text-sm">Jake Liu</p>
                                    <p class="text-slate-500 text-xs">@jake_skincare</p>
                                </div>
                            </div>
                            <button class="bg-primary text-white px-4 py-1 rounded-full text-sm hover:bg-primary-dark transition-colors">
                                Follow
                            </button>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center">
                                    <span class="text-white text-sm font-semibold">LS</span>
                                </div>
                                <div>
                                    <p class="font-semibold text-secondary text-sm">Luna Smith</p>
                                    <p class="text-slate-500 text-xs">@luna_wellness</p>
                                </div>
                            </div>
                            <button class="bg-primary text-white px-4 py-1 rounded-full text-sm hover:bg-primary-dark transition-colors">
                                Follow
                            </button>
                        </div>
                    </div>
                    <button class="text-primary text-sm mt-4 hover:text-primary-dark">
                        Show more
                    </button>
                </div>

                <!-- Popular Posts -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg p-6 card-hover">
                    <h3 class="text-lg font-semibold text-secondary mb-4">Popular this week</h3>
                    <div class="space-y-4">
                        <div class="border-b border-slate-100 pb-3">
                            <p class="text-sm text-slate-700 font-medium mb-1">10-step Korean skincare routine</p>
                            <p class="text-xs text-slate-500">2.3K likes • 456 shares</p>
                        </div>
                        <div class="border-b border-slate-100 pb-3">
                            <p class="text-sm text-slate-700 font-medium mb-1">Best drugstore makeup finds</p>
                            <p class="text-xs text-slate-500">1.8K likes • 289 shares</p>
                        </div>
                        <div>
                            <p class="text-sm text-slate-700 font-medium mb-1">DIY face masks at home</p>
                            <p class="text-xs text-slate-500">1.5K likes • 234 shares</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Bottom Navigation -->
    <div class="fixed bottom-0 left-0 right-0 bg-white/90 backdrop-blur-md border-t border-slate-200 lg:hidden">
        <div class="flex justify-around items-center h-16">
            <button class="text-primary">
                <i class="fas fa-home text-xl"></i>
            </button>
            <button class="text-slate-500">
                <i class="fas fa-search text-xl"></i>
            </button>
            <button class="text-slate-500">
                <i class="fas fa-bell text-xl"></i>
            </button>
            <button class="text-slate-500">
                <i class="fas fa-envelope text-xl"></i>
            </button>
            <button class="text-slate-500">
                <i class="fas fa-user text-xl"></i>
            </button>
        </div>
    </div>

    <script>
        function createPost() {
            const textarea = document.getElementById('postText');
            const content = textarea.value.trim();
            
            if (!content) return;
            
            const postsContainer = document.getElementById('postsContainer');
            
            const newPost = document.createElement('article');
            newPost.className = 'bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 mb-6 card-hover fade-in';
            newPost.innerHTML = `
                <div class="flex space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-2 mb-2">
                            <h4 class="font-semibold text-secondary">Sarah Johnson</h4>
                            <span class="text-slate-500 text-sm">@sarah_beauty</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-slate-500 text-sm">now</span>
                        </div>
                        <p class="text-slate-700 mb-4">${content}</p>
                        <div class="flex items-center justify-between text-slate-500">
                            <button class="flex items-center space-x-2 hover:text-red-500 transition-colors">
                                <i class="far fa-heart"></i>
                                <span>0</span>
                            </button>
                            <button class="flex items-center space-x-2 hover:text-primary transition-colors">
                                <i class="far fa-comment"></i>
                                <span>0</span>
                            </button>
                            <button class="flex items-center space-x-2 hover:text-green-500 transition-colors">
                                <i class="fas fa-retweet"></i>
                                <span>0</span>
                            </button>
                            <button class="hover:text-primary transition-colors">
                                <i class="far fa-share-square"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            postsContainer.insertBefore(newPost, postsContainer.firstChild);
            textarea.value = '';
        }

        // Add interaction to like buttons
        document.addEventListener('click', function(e) {
            if (e.target.closest('.fa-heart')) {
                const button = e.target.closest('button');
                const icon = button.querySelector('.fa-heart');
                const count = button.querySelector('span');
                
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    button.classList.add('text-red-500');
                    count.textContent = parseInt(count.textContent) + 1;
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    button.classList.remove('text-red-500');
                    count.textContent = parseInt(count.textContent) - 1;
                }
            }
        });

        // Auto-resize textarea
        document.getElementById('postText').addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    </script>
</body>
</html>