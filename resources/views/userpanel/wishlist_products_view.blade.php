<x-user_navbar>
    <x-slot name="body">
        

        <div class="max-w-6xl mx-auto my-6">
            <!-- <h2 class="text-2xl font-bold mb-4">My Wishlist</h2> -->
            <!-- Header -->
            <div class="mb-5">
                <h1 class="text-4xl font-bold text-purple-darkest">My Wishlist</h1>
                <!-- <p class="text-base text-side">Track your orders</p> -->
            </div>

            @forelse ($wishlist as $product)
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow mb-3">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('storage/products_images/' . $product->image) }}" alt="{{ $product->name }}"
                        class="w-16 h-16 rounded-lg object-cover border">
                    <div>
                        <h4 class="font-semibold text-gray-800">{{ $product->name }}</h4>
                        <p class="text-gray-500 text-sm">₹{{ number_format($product->price, 2) }}</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <a href="/single_product_view/{{ $product->id }}">
                        <button type="submit"
                            class="px-3 py-1.5 bg-purple-medium hover:bg-purple-dark text-white text-sm font-semibold rounded-lg transition">
                            Details
                        </button>
                    </a>


                    <form action="/remove_wishlist/{{ $product->id }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="product_delete bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                            Remove
                        </button>
                    </form>

                </div>

            </div>
            @empty
            <p class="text-gray-500">Your wishlist is empty.</p>
            @endforelse
        </div>
    </x-slot>
</x-user_navbar>