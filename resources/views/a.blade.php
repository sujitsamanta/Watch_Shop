<!-- Profile Photo -->
<form action="{{ route('account.photo.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="text-center">

        <!-- Photo Preview -->
        <div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl profile-photo cursor-pointer group text-center">
            <img id="profilePhoto" src="{{ $user_data->photo ?? 'https://via.placeholder.com/150' }}" 
                 alt="👦🏼" class="w-full h-full object-cover text-center">
            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
                <span class="text-white font-semibold">Change Photo</span>
            </div>
        </div>

        <!-- Hidden file input -->
        <input name="photo" type="file" id="photoInput" accept="image/*" class="hidden mt-3">

        <!-- Action buttons -->
        <div class="flex flex-col gap-3 mt-6">
            <button type="button" onclick="document.getElementById('photoInput').click()" 
                    class="bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition shadow">
                Upload New Photo
            </button>

            <button type="button" onclick="resetPhoto()" 
                    class="bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition shadow">
                Remove Photo
            </button>

            <!-- Submit button -->
            <button type="submit" 
                    class="bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition shadow">
                Save Photo
            </button>
        </div>
    </div>
</form>

<script>
    // Preview selected photo
    document.getElementById("photoInput").addEventListener("change", e => {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = e => document.getElementById("profilePhoto").src = e.target.result;
            reader.readAsDataURL(file);
        }
    });

    // Reset to placeholder
    function resetPhoto() {
        document.getElementById("profilePhoto").src = "https://via.placeholder.com/150";
        document.getElementById("photoInput").value = ""; // Clear file input
    }
</script>
