<x-admin_navbar>
    <x-slot name="body">
        <!-- Full Width Professional Form -->
        <div class="w-full min-h-screen    ">
            <!-- Page Header -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-side mb-3">Update Product</h1>
                <p class="text-lg text-purple-dark">Update and modify product information for your e-watch store</p>
            </div>

            <!-- Professional Form Layout -->
            <form class="space-y-8" method="post" action="/admin_update_product_submit/{{ $product->id }}" enctype="multipart/form-data">
                @csrf

                <!-- Basic Information Section -->
                <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                    <h2 class="text-xl font-bold text-side mb-6 border-b border-purple-light pb-3">Basic Information
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">


                        <!-- Product Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-side mb-2">
                                Product Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" placeholder="Apple Watch Series 9" value="{{ $product->name }}"
                                class="@error('name') border-red-500 @else border-primary-medium @enderror
                                w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200">
                            <div class="text-sm text-red-500 h-2">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <!-- SKU -->
                        <div>
                            <label for="sku" class="block text-sm font-semibold text-side mb-2">
                                SKU <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="sku" name="sku" placeholder="AW9-001" value="{{ $product->sku }}"
                                class="@error('sku') border-red-500 @else border-primary-medium @enderror
                                w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200">
                            <div class="text-sm text-red-500 h-2">
                                @error('sku')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Slug (Full Width) -->
                    <div class="mt-6">
                        <label for="slug" class="block text-sm font-semibold text-side mb-2">
                            URL Slug <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="slug" name="slug" placeholder="apple-watch-series-9" value="{{ $product->slug }}"
                            class="@error('slug') border-red-500 @else border-primary-medium @enderror
                            w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200">
                        <div class="text-sm text-red-500 h-2">
                            @error('slug')
                            {{ $message }}
                            @enderror
                        </div>
                        <p class="text-xs text-purple-dark mt-2">This will be used in the product URL. Auto-generated
                            from
                            product name.</p>
                    </div>
                </div>

                <!-- Pricing & Inventory Section -->
                <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                    <h2 class="text-xl font-bold text-side mb-6 border-b border-purple-light pb-3">Pricing & Inventory
                    </h2>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-semibold text-side mb-2">
                                Selling Price <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span
                                    class="absolute left-4 top-1/2 transform -translate-y-1/2 text-purple-dark font-medium">$</span>
                                <input type="number" id="price" name="price" step="0.01" min="0"
                                    placeholder="799.00" value="{{ $product->price }}"
                                    class="@error('price') border-red-500 @else border-primary-medium @enderror
                                    w-full pl-10 pr-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200 text-lg">
                                <div class="text-sm text-red-500 h-2">
                                    @error('price')
                                    {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Stock -->
                        <div>
                            <label for="stock" class="block text-sm font-semibold text-side mb-2">
                                Stock Quantity <span class="text-red-500">*</span>
                            </label>
                            <input type="number" id="stock" name="stock" min="0" placeholder="50" value="{{ $product->stock }}"
                                class="@error('stock') border-red-500 @else border-primary-medium @enderror
                                w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200 text-lg">
                            <div class="text-sm text-red-500 h-2">
                                @error('stock')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                    <h2 class="text-xl font-bold text-side mb-6 border-b border-purple-light pb-3">Product Details</h2>

                    <!-- Description -->
                    <div class="mb-8">
                        <label for="description" class="block text-sm font-semibold text-side mb-2">
                            Product Description <span class="text-red-500">*</span>
                        </label>
                        <textarea id="description" name="description" rows="6"
                            class="@error('description') border-red-500 @else border-primary-medium @enderror
                            w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200 resize-none">{{ $product->description }}</textarea>

                        <div class="text-sm text-red-500 h-2">
                            @error('description')
                            {{ $message }}
                            @enderror
                        </div>

                        <div class="flex justify-between items-center mt-2">
                            <p class="text-xs text-purple-dark">Provide detailed product information for customers</p>
                            <span id="charCount" class="text-xs text-purple-dark">0 characters</span>
                        </div>
                    </div>

                    <!-- Current Image Section -->
                    @if($product->photo_url)
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-side mb-2">Current Product Image:</label>
                        <div class="flex items-center space-x-4 p-6 bg-lav1 rounded-xl border border-purple-medium">
                            <img src="{{ $product->photo_url }}" 
                                 alt="Current Product Image" 
                                 class="w-32 h-32 object-cover rounded-lg border-2 border-purple-medium shadow-md">
                            <div class="text-left">
                                <div class="flex items-center mb-2">
                                    <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-side font-semibold">Current Image</span>
                                </div>
                                <p class="text-purple-dark font-medium">📂 {{ $product->photo_url }}</p>
                                <p class="text-sm text-purple-dark">This is the current product image</p>
                                <p class="text-xs text-purple-dark mt-2">Upload a new image below to replace this one</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Image Upload -->
                    <div>
                        <label class="block text-sm font-semibold text-side mb-2">
                            @if($product->photo_url)
                                Upload New Product Image
                            @else
                                Product Image <span class="text-red-500">*</span>
                            @endif
                        </label>
                        <div
                            class="@error('image') border-red-500 @else border-primary-medium @enderror
                            border-2 border-dashed border-purple-medium rounded-xl bg-lav2 hover:bg-purple-light transition-all duration-200">
                            <input type="file" id="image" accept="image/*" class="hidden" name="image">
                            <!-- hidden field for filename -->
                            <input type="hidden" id="image_name">
                            <div class="p-12 text-center cursor-pointer"
                                onclick="document.getElementById('image').click()">
                                <div id="uploadContent">
                                    <svg class="w-16 h-16 text-purple-dark mx-auto mb-4" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    <h3 class="text-lg font-semibold text-side mb-2">
                                        @if($product->photo_url)
                                            Upload New Product Image
                                        @else
                                            Upload Product Image
                                        @endif
                                    </h3>
                                    <p class="text-purple-dark mb-4">
                                        @if($product->photo_url)
                                            Drag and drop your new image here, or click to browse
                                        @else
                                            Drag and drop your image here, or click to browse
                                        @endif
                                    </p>
                                    <div
                                        class="inline-flex items-center px-6 py-3 bg-side text-white rounded-lg hover:bg-purple-darkest transition-colors">
                                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                            </path>
                                        </svg>
                                        Choose File
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-sm text-red-500 h-2">
                            @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="flex justify-between items-center mt-3">
                            <p class="text-xs text-purple-dark">Supported formats: PNG, JPG, JPEG • Max size: 10MB •
                                Saved
                                to: /storage/products/</p>
                            <p class="text-xs text-purple-dark font-medium">Recommended: 800x800px</p>
                        </div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <!-- <button type="button"
                            class="px-8 py-3 bg-purple-light text-side font-semibold rounded-lg border border-purple-medium hover:bg-purple-medium transition-all duration-200">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Cancel
                        </button>
                        <button type="button"
                            class="px-8 py-3 bg-lav2 text-side font-semibold rounded-lg border border-purple-medium hover:bg-purple-light transition-all duration-200">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            Save as Draft
                        </button> -->
                            <button type="button" onclick="resetForm()"
                                class="px-8 py-3 bg-lav2 text-side font-semibold rounded-lg border border-purple-medium hover:bg-purple-light transition-all duration-200">
                                <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                    </path>
                                </svg>
                                Reset
                            </button>
                        </div>

                        <button type="submit"
                            class="update_product px-12 py-3 bg-side text-white font-bold rounded-lg hover:bg-purple-darkest transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Update Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <script>
            //admin_add_product_form start

            document.getElementById('name').addEventListener('input', function(e) {
                const name = e.target.value;
                const slug = name.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-')
                    .replace(/^-+|-+$/g, '');
                document.getElementById('slug').value = slug;
            });


            // Character counter for description
            const descriptionField = document.getElementById('description');
            const charCount = document.getElementById('charCount');

            descriptionField.addEventListener('input', function(e) {
                const count = e.target.value.length;
                charCount.textContent = `${count} characters`;

                if (count > 500) {
                    charCount.classList.add('text-orange-500');
                } else {
                    charCount.classList.remove('text-orange-500');
                }
            });

            // Enhanced file upload with preview
            document.getElementById('image').addEventListener('change', function(e) {
                const file = e.target.files[0];
                const uploadContent = document.getElementById('uploadContent');

                if (file) {
                    // ✅ store file name into hidden input
                    document.getElementById('image_name').value = file.name;

                    // Validate file size (10MB)
                    if (file.size > 10 * 1024 * 1024) {
                        alert('File size must be less than 10MB');
                        return;
                    }

                    // Validate file type
                    if (!['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
                        alert('Please select a valid image file (PNG, JPG, JPEG)');
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function(ev) {
                        uploadContent.innerHTML = `
                <div class="flex items-center justify-center space-x-6">
                    <img src="${ev.target.result}" alt="Preview" class="w-24 h-24 object-cover rounded-lg border-2 border-purple-medium">
                    <div class="text-left">
                        <div class="flex items-center mb-2">
                            <svg class="w-6 h-6 text-green-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-side font-semibold">File Selected</span>
                        </div>
                        <p class="text-purple-dark font-medium">📂 ${file.name}</p>
                        <p class="text-sm text-purple-dark">${(file.size / 1024 / 1024).toFixed(2)} MB</p>
                        <button type="button" onclick="clearImage()" class="text-sm text-red-500 hover:text-red-700 mt-2 underline">Remove</button>
                    </div>
                </div>
            `;
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Reset function also clear hidden input
            function clearImage() {
                document.getElementById('image').value = '';
                document.getElementById('image_name').value = ''; // ✅ clear filename
                document.getElementById('uploadContent').innerHTML = `
        <svg class="w-16 h-16 text-purple-dark mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <h3 class="text-lg font-semibold text-side mb-2">Upload Product Image</h3>
        <p class="text-purple-dark mb-4">Drag and drop your image here, or click to browse</p>
        <div class="inline-flex items-center px-6 py-3 bg-side text-white rounded-lg hover:bg-purple-darkest transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
            </svg>
            Choose File
        </div>
    `;
            }


            // Reset Form Function
            function resetForm() {
                // Reset all form fields
                document.querySelector('form').reset();

                // Clear character counter
                document.getElementById('charCount').textContent = '0 characters';

                // Reset image upload area
                clearImage();

                // Remove any validation styling
                const labels = document.querySelectorAll('label');
                labels.forEach(label => {
                    label.classList.remove('text-green-600');
                    label.classList.add('text-side');
                });

                // Show reset confirmation
                const resetDiv = document.createElement('div');
                resetDiv.className = 'fixed top-4 right-4 bg-blue-500 text-white px-6 py-4 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300';
                resetDiv.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span class="font-semibold">Form has been reset!</span>
                </div>
            `;
                document.body.appendChild(resetDiv);

                setTimeout(() => {
                    resetDiv.classList.remove('translate-x-full');
                }, 100);

                setTimeout(() => {
                    resetDiv.classList.add('translate-x-full');
                    setTimeout(() => resetDiv.remove(), 300);
                }, 2000);
            }

            // Professional input interactions
            const inputs = document.querySelectorAll('input, select, textarea');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('transform', 'scale-[1.01]');
                    this.classList.add('shadow-lg');
                });

                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('transform', 'scale-[1.01]');
                    this.classList.remove('shadow-lg');
                });
            });

            // // Real-time validation indicators
            // const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');
            // requiredFields.forEach(field => {
            //     field.addEventListener('input', function () {
            //         const label = this.parentElement.querySelector('label');
            //         if (this.value.trim()) {
            //             label.classList.add('text-green-600');
            //             label.classList.remove('text-side');
            //         } else {
            //             label.classList.remove('text-green-600');
            //             label.classList.add('text-side');
            //         }
            //     });
            // });

            //admin_add_product_form end
        </script>

    </x-slot>

</x-admin_navbar>