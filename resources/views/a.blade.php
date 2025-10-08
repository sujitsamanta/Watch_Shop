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