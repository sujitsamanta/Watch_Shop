<!-- Profile Photo -->
<div class="text-center">
    <div
        class="relative w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl profile-photo cursor-pointer group text-center">
        <img id="profilePhoto" src="https://via.placeholder.com/150" alt="👦🏼"
            class="w-full h-full object-cover cursor-pointer" onclick="openPhotoPopup()">
    </div>
</div>

<!-- Action buttons -->
<div class="flex flex-col gap-3 mt-6 w-48 mx-auto">
    <button type="button" onclick="document.getElementById('photoInput').click()"
        class="bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition shadow w-full">
        Upload New Photo
    </button>

    <form action="/account_photo_remove" method="POST" enctype="multipart/form-data">
        <button type="button" onclick="resetPhoto()"
            class="bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition shadow w-full">
            Remove Photo
        </button>
    </form>

    <form action="/account_photo_update" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Hidden file input -->
        <input name="photo" type="file" id="photoInput" accept="image/*" class="hidden mt-3">

        <button id="saveButton" type="submit"
            class="bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition shadow hidden w-full">
            Save Photo
        </button>
    </form>
</div>

<!-- Photo Popup Modal -->
<div id="photoModal"
    class="fixed inset-0 bg-black bg-opacity-70 hidden items-center justify-center z-50">
    <span onclick="closePhotoPopup()" class="absolute top-6 right-8 text-white text-3xl cursor-pointer">&times;</span>
    <img id="popupPhoto" src="" alt="Photo Preview"
        class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg border-4 border-white">
</div>

<script>
const photoInput = document.getElementById("photoInput");
const profilePhoto = document.getElementById("profilePhoto");
const saveButton = document.getElementById("saveButton");
const photoModal = document.getElementById("photoModal");
const popupPhoto = document.getElementById("popupPhoto");

photoInput.addEventListener("change", e => {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = e => {
            profilePhoto.src = e.target.result;
        };
        reader.readAsDataURL(file);
        saveButton.classList.remove("hidden"); // Show Save button
    }
});

function resetPhoto() {
    profilePhoto.src = "https://via.placeholder.com/150";
    saveButton.classList.remove("hidden"); // Show Save button
}

function openPhotoPopup() {
    popupPhoto.src = profilePhoto.src;
    photoModal.classList.remove("hidden");
    photoModal.classList.add("flex");
}

function closePhotoPopup() {
    photoModal.classList.add("hidden");
    photoModal.classList.remove("flex");
}
</script>
