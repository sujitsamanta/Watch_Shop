<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glashütte Original</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <section class="w-full px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Catalogue Card -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <img 
                    src="https://images.unsplash.com/photo-1587836374290-4f5e6b6f2c0f?w=800" 
                    alt="Watch mechanism" 
                    class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 text-white">
                    <p class="text-sm font-light mb-2">Order a catalogue</p>
                    <h2 class="text-2xl font-light mb-6">Glashütte Original catalogue</h2>
                    <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                        Order now
                    </button>
                </div>
            </div>

            <!-- Newsletter Card -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <img 
                    src="https://images.unsplash.com/photo-1609587312208-cea54be969e7?w=800" 
                    alt="Watchmaker at work" 
                    class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 text-white">
                    <p class="text-sm font-light mb-2">Receive exciting and exclusive news</p>
                    <h2 class="text-2xl font-light mb-6">Subscribe to newsletter</h2>
                    <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                        Subscribe now
                    </button>
                </div>
            </div>

            <!-- Third Card -->
            <div class="relative overflow-hidden rounded-lg shadow-lg group">
                <img 
                    src="https://images.unsplash.com/photo-1523170335258-f5ed11844a49?w=800" 
                    alt="Luxury watch" 
                    class="w-full h-96 object-cover transition-transform duration-500 group-hover:scale-110"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 left-0 p-8 text-white">
                    <p class="text-sm font-light mb-2">Explore our collection</p>
                    <h2 class="text-2xl font-light mb-6">Discover timepieces</h2>
                    <button class="px-6 py-2.5 border-2 border-white text-white font-light rounded hover:bg-white hover:text-black transition-colors duration-300">
                        View more
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>