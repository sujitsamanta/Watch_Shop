<x-admin_navbar>
    <x-slot name="body">
     <!-- Full Width Professional Form -->
    <div class="w-full min-h-screen">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-4xl font-bold text-side mb-3">Add New Category</h1>
            <p class="text-lg text-purple-dark">Create a new product category for your e-watch store</p>
        </div>

        <!-- Professional Form Layout -->
        <form class="space-y-8" action="/admin_add_categorie_submit" method="post" >
            @csrf
            <!-- Basic Information Section -->
            <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                <h2 class="text-xl font-bold text-side mb-6 border-b border-purple-light pb-3">Category Information</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Category Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-side mb-2">
                            Category Name <span class="text-red-500">*</span>
                        </label>
                        <input value="{{ old('name') }}" type="text" id="name" name="name" placeholder="e.g., Smart Watches"
                            class="@error('name') border-red-500 @else border-primary-medium @enderror
                             w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200">
                             <div class="text-sm text-red-500 h-2">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-semibold text-side mb-2">
                            URL Slug <span class="text-red-500">*</span>
                        </label>
                        <input value="{{ old('slug') }}" type="text" id="slug" name="slug" placeholder="e.g., smart-watches"
                            class="@error('slug') border-red-500 @else border-primary-medium @enderror
                            w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200">
                             <div class="text-sm text-red-500 h-2">
                    @error('slug')
                        {{ $message }}
                    @enderror
                </div>
                        <p class="text-xs text-purple-dark mt-2">This will be used in the category URL. Auto-generated
                            from category name.</p>
                    </div>
                </div>

                <!-- Description (Full Width) -->
                <div class="mt-6">
                    <label for="description" class="block text-sm font-semibold text-side mb-2">
                        Category Description <span class="text-purple-dark">(Optional)</span>
                    </label>
                    <textarea value="{{ old('description') }}" id="description" name="description" rows="4"
                        placeholder="e.g., All types of smartwatches and wearable technology devices including fitness trackers, luxury smartwatches, and sports watches."
                        class="@error('description') border-red-500 @else border-primary-medium @enderror
                        w-full px-4 py-3 bg-lav1 border border-purple-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-peri focus:border-peri transition-all duration-200 resize-none"></textarea>

                         <div class="text-sm text-red-500 h-2">
                    @error('description')
                        {{ $message }}
                    @enderror
                </div>
                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-purple-dark">Provide a brief description of what products belong in this
                            category</p>
                        <span id="charCount" class="text-xs text-purple-dark">0 characters</span>
                    </div>
                </div>
            </div>

            <!-- Preview Section -->
            <!-- <div class="bg-white rounded-xl shadow-sm border border-purple-light p-8">
                <h2 class="text-xl font-bold text-side mb-6 border-b border-purple-light pb-3">Category Preview</h2>

                <div class="bg-lav1 rounded-lg p-6 border border-purple-medium">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-side rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 id="previewName" class="text-lg font-semibold text-side">Category Name</h3>
                            <p id="previewSlug" class="text-sm text-purple-dark">/category/category-slug</p>
                            <p id="previewDescription" class="text-sm text-purple-dark mt-1">Category description will
                                appear here</p>
                        </div>
                    </div>
                </div>
            </div> -->

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

                        <button type="button" onclick="resetForm()"
                            class="px-8 py-3 bg-lav2 text-side font-semibold rounded-lg border border-purple-medium hover:bg-purple-light transition-all duration-200">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                                </path>
                            </svg>
                            Reset
                        </button> -->
                    </div>

                    <button type="submit" 
                        class="add_category px-12 py-3 bg-side text-white font-bold rounded-lg hover:bg-purple-darkest transition-all duration-200 shadow-lg hover:shadow-xl transform hover:scale-105">
                        <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Add Category
                    </button>

                </div>
            </div>
        </form>
    </div>

<script>

  
           // Auto-generate slug from category name
        document.getElementById('name').addEventListener('input', function (e) {
            const name = e.target.value;
            const slug = name.toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('slug').value = slug;

            // Update preview
            // updatePreview();
        });


        
        // Update preview when slug changes
        // document.getElementById('slug').addEventListener('input', updatePreview);
        // document.getElementById('description').addEventListener('input', updatePreview);

        // // Update preview function
        // function updatePreview() {
        //     const name = document.getElementById('name').value || 'Category Name';
        //     const slug = document.getElementById('slug').value || 'category-slug';
        //     const description = document.getElementById('description').value || 'Category description will appear here';

        //     document.getElementById('previewName').textContent = name;
        //     document.getElementById('previewSlug').textContent = `/category/${slug}`;
        //     document.getElementById('previewDescription').textContent = description;
        // }


        // Character counter for description
        const descriptionField = document.getElementById('description');
        const charCount = document.getElementById('charCount');

        descriptionField.addEventListener('input', function (e) {
            const count = e.target.value.length;
            charCount.textContent = `${count} characters`;

            if (count > 200) {
                charCount.classList.add('text-orange-500');
            } else {
                charCount.classList.remove('text-orange-500');
            }
        });

        // Reset Form Function
        function resetForm() {
            // Reset all form fields
            document.querySelector('form').reset();

            // Clear character counter
            document.getElementById('charCount').textContent = '0 characters';
            charCount.classList.remove('text-orange-500');

            // Reset preview
            document.getElementById('previewName').textContent = 'Category Name';
            document.getElementById('previewSlug').textContent = '/category/category-slug';
            document.getElementById('previewDescription').textContent = 'Category description will appear here';

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
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function () {
                this.parentElement.classList.add('transform', 'scale-[1.01]');
                this.classList.add('shadow-lg');
            });

            input.addEventListener('blur', function () {
                this.parentElement.classList.remove('transform', 'scale-[1.01]');
                this.classList.remove('shadow-lg');
            });
        });
</script>

    </x-slot>

</x-admin_navbar>