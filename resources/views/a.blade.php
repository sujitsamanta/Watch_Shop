<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glashütte Original</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500&family=Montserrat:wght@300;400&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
        }
        
        h1, h2, h3 {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>
</head>
<body class="bg-neutral-50">
    <!-- Header Section -->
    <div class="text-center py-16 px-4 bg-white">
        <h1 class="text-5xl md:text-6xl font-light mb-4 text-neutral-900 tracking-wide">Glashütte Original</h1>
        <p class="text-xl md:text-2xl text-neutral-500 font-light tracking-wider">German Watchmaking Art since 1845</p>
    </div>

    <!-- Cards Section -->
    <section class="w-full px-6 md:px-12 lg:px-16 py-20 bg-neutral-50">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-screen-2xl mx-auto">
            <!-- Card 1: 180 years -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-sm shadow-2xl bg-black">
                    <img 
                        src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=1200&q=80" 
                        alt="Glashütte watchmaking heritage" 
                        class="w-full h-[500px] object-cover transition-all duration-700 group-hover:scale-110 group-hover:opacity-90"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent group-hover:from-black/90 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <div class="text-7xl font-light mb-2 opacity-90 group-hover:opacity-70 transition-opacity duration-500">180</div>
                        <div class="text-sm tracking-widest uppercase mb-4">Years</div>
                        <h3 class="text-2xl font-light tracking-wide mb-3 transition-all duration-500">180 years Glashütte watchmaking</h3>
                        <p class="leading-relaxed font-light text-sm max-h-0 opacity-0 overflow-hidden group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 ease-in-out">Since 1845, we have been crafting exceptional timepieces in the heart of Saxony, preserving traditional techniques while embracing innovation.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Our Expertise -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-sm shadow-2xl bg-black">
                    <img 
                        src="https://images.unsplash.com/photo-1614164185128-e4ec99c436d7?w=1200&q=80" 
                        alt="Watch dial expertise" 
                        class="w-full h-[500px] object-cover transition-all duration-700 group-hover:scale-110 group-hover:opacity-90"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent group-hover:from-black/90 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <h3 class="text-2xl font-light tracking-wide mb-3 transition-all duration-500">Our Expertise in Dials</h3>
                        <p class="leading-relaxed font-light text-sm max-h-0 opacity-0 overflow-hidden group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 ease-in-out">Every dial is a masterpiece of precision engineering, combining aesthetic beauty with functional excellence through meticulous handcrafted details.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Strong colours -->
            <div class="group cursor-pointer">
                <div class="relative overflow-hidden rounded-sm shadow-2xl bg-black">
                    <img 
                        src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?w=1200&q=80" 
                        alt="Colorful watch collection" 
                        class="w-full h-[500px] object-cover transition-all duration-700 group-hover:scale-110 group-hover:opacity-90"
                    />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent group-hover:from-black/90 transition-all duration-500"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                        <h3 class="text-2xl font-light tracking-wide mb-3 transition-all duration-500">Strong colours for true original</h3>
                        <p class="leading-relaxed font-light text-sm max-h-0 opacity-0 overflow-hidden group-hover:max-h-40 group-hover:opacity-100 transition-all duration-500 ease-in-out">Bold expressions of individuality through vibrant dial colors and unique designs, celebrating those who dare to stand out with authentic style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Information Section -->
    <section class="w-full bg-white py-16 px-6 md:px-12">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-lg text-neutral-600 leading-relaxed font-light">
                Experience the pinnacle of German precision and artistry. Each timepiece embodies our commitment to excellence, 
                combining traditional craftsmanship with innovative technology.
            </p>
        </div>
    </section>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Watch Collection</title>
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
</head>
<body class="bg-lav1">
    <!-- Section 1: Global Presence -->
    <section class="min-h-screen flex items-center justify-center px-4 py-16">
        <div class="max-w-7xl w-full">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <!-- Image -->
                <div class="order-2 lg:order-1 group">
                    <div class="relative overflow-hidden rounded-2xl shadow-2xl transition-all duration-500 hover:shadow-purple-medium/50">
                        <img src="https://images.unsplash.com/photo-1565440962783-f87efdea99fd?w=800&q=80" 
                             alt="Luxury Watch Boutique" 
                             class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-darkest/20 to-transparent group-hover:from-purple-darkest/70 transition-all duration-500"></div>
                        
                        <!-- Title overlay - shows on hover -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                            <h3 class="text-white text-4xl font-bold mb-2">Luxury Boutique</h3>
                            <p class="text-lav2 text-lg">Premium Experience</p>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="order-1 lg:order-2 bg-purple-darkest rounded-2xl p-12 shadow-xl hover:shadow-2xl hover:shadow-purple-medium/30 transition-all duration-500 group">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight group-hover:text-lav2 transition-colors duration-300">
                        German precision around the globe
                    </h2>
                    <p class="text-peri text-lg mb-8 leading-relaxed group-hover:text-white transition-colors duration-300">
                        A worldwide brand presence. Even far from the Saxon homeland, the world of Glashütte Original can be experienced up close.
                    </p>
                    <button class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-purple-darkest transition-all duration-300 font-semibold text-lg hover:scale-105 hover:shadow-lg active:scale-95">
                        Find retailer
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Craftsmanship -->
    <section class="min-h-screen flex items-center justify-center px-4 py-16">
        <div class="max-w-7xl w-full">
            <div class="grid lg:grid-cols-2 gap-8 items-center">
                <!-- Content -->
                <div class="bg-side rounded-2xl p-12 shadow-xl hover:shadow-2xl hover:shadow-peri/30 transition-all duration-500 group">
                    <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6 leading-tight group-hover:text-purple-light transition-colors duration-300">
                        In constant progress
                    </h2>
                    <p class="text-lav2 text-lg mb-8 leading-relaxed group-hover:text-white transition-colors duration-300">
                        Glashütte Original stands for innovative German watchmaking art that meets the highest demands.
                    </p>
                    <button class="border-2 border-lav2 text-lav2 px-8 py-4 rounded-lg hover:bg-lav2 hover:text-side transition-all duration-300 font-semibold text-lg hover:scale-105 hover:shadow-lg active:scale-95">
                        More about the brand Glashütte Original
                    </button>
                </div>
                
                <!-- Image -->
                <div class="relative overflow-hidden rounded-2xl shadow-2xl group transition-all duration-500 hover:shadow-peri/50">
                    <img src="https://images.unsplash.com/photo-1587836374828-4dbafa94cf0e?w=800&q=80" 
                         alt="Watchmaking Craftsmanship" 
                         class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-side/20 to-transparent group-hover:from-side/70 transition-all duration-500"></div>
                    
                    <!-- Title overlay - shows on hover -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                        <h3 class="text-white text-4xl font-bold mb-2">Master Craftsmanship</h3>
                        <p class="text-lav2 text-lg">Artisan Excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Feature Section -->
    <section class="py-20 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold text-purple-darkest mb-4 hover:text-purple-medium transition-colors duration-300">Discover Excellence</h2>
                <p class="text-xl text-side max-w-2xl mx-auto hover:text-purple-dark transition-colors duration-300">Explore our collection of meticulously crafted timepieces</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-light rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-darkest mb-3">Precision</h3>
                    <p class="text-side leading-relaxed">Every timepiece is crafted with meticulous attention to detail and accuracy.</p>
                </div>
                
                <!-- Feature Card 2 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-lav2 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-darkest mb-3">Quality</h3>
                    <p class="text-side leading-relaxed">German engineering excellence ensures lasting value and performance.</p>
                </div>
                
                <!-- Feature Card 3 -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-purple-light rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-medium" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-purple-darkest mb-3">Heritage</h3>
                    <p class="text-side leading-relaxed">A legacy of watchmaking tradition passed down through generations.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>