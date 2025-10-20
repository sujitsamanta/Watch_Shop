<div class="container mx-auto px-4">
    <!-- Section Header -->
    <div class="text-center my-8">
        <h2 class="text-3xl md:text-4xl font-bold text-side mb-4">Featured Products</h2>
        <p class="text-side/70 text-lg">Discover our curated collection of premium timepieces</p>
    </div>

    <!-- Mobile Scrollable -->
    <div class="overflow-x-auto md:overflow-visible">
        <div class="flex md:grid md:grid-cols-2 lg:grid-cols-4 gap-4 snap-x snap-mandatory">

            @foreach($products_data->take(4) as $product)
            <a href="/single_product_view/{{ $product->id }}">
                <div
                    class="m-2 rounded-xl 
                    min-w-[160px] sm:min-w-[200px] md:min-w-[220px] lg:min-w-[240px] 
                    bg-gradient-to-br from-lav2 via-white to-white p-5 
                    flex flex-col border border-gray-200 
                    hover:shadow-xl hover:-translate-y-2 transition-all duration-300 
                    group cursor-pointer relative overflow-hidden snap-start">

                    <!-- Product Image -->
                    <div class="relative overflow-hidden rounded-xl">
                        <img src="{{ url('storage/products_images/' . $product->image) }}"
                            alt="{{ $product->name }}"
                            class="h-56 w-full object-cover mb-4 rounded-xl group-hover:scale-110 transition-all duration-500">
                    </div>

                    <!-- Product Name -->
                    <h3 class="text-lg font-semibold truncate group-hover:text-transparent group-hover:bg-gradient-to-r group-hover:from-purple-600 group-hover:to-blue-600 group-hover:bg-clip-text">
                        {{ $product->name }}
                    </h3>

                    <!-- Product Category or Brand -->
                    <p class="text-xs text-gray-500 mt-1">
                        {{ $product->category ?? '' }} <!-- or $product->brand -->
                    </p>

                    <!-- Product Price -->
                    <p class="text-sm font-bold text-purple-700 mt-2">
                        ₹{{ number_format($product->price, 2) }}
                    </p>

                    <!-- Button -->
                    <button
                        class="mt-4 px-4 py-2 text-sm rounded-md border border-purple-medium 
                               hover:border-purple-dark group-hover:bg-gradient-to-r 
                               group-hover:from-purple-600 group-hover:to-blue-600 
                               group-hover:text-white transition-all duration-300">
                        Shop Now
                    </button>
                </div>
            </a>
            @endforeach

        </div>
    </div>
</div>