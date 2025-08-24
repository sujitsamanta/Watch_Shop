<x-user_navbar>
    <x-slot name="body">
        <div class="max-w-5xl mx-auto glass bg-white/30 rounded-3xl shadow-2xl p-8 border border-white/20 my-12">

            <!-- Header -->
            <!-- <div class="text-center mb-8">
      <h1 class="text-4xl font-bold text-purple-800">My Account</h1>
      <p class="text-purple-600">Manage your profile and personal information</p>
    </div> -->



            <div class="grid lg:grid-cols-3 gap-10">

                <!-- Profile Photo -->
                <div class="text-center">

                    <!-- Profile Photo -->
                    <div class="text-center">
                        <div
                            class="relative w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl profile-photo cursor-pointer group text-center">
                            <img id="profilePhoto" src="{{ url('storage/photos/' . $user_data->photo) }}" alt="👦🏼"
                                class="w-full h-full object-cover cursor-pointer" onclick="openPhotoPopup()">
                        </div>
                    </div>

                    <form action="/account_photo_update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Action buttons -->
                        <div class="flex flex-col gap-3 mt-6 w-48 mx-auto">
                            <button type="button" onclick="document.getElementById('photoInput').click()"
                                class="bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition shadow w-full">
                                Upload New Photo
                            </button>


                            <!-- Hidden file input -->
                            <input name="photo" type="file" id="photoInput" accept="image/*" class="hidden mt-3">

                            <button type="button" onclick="resetPhoto()"
                                class="bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition shadow w-full">
                                Remove Photo
                            </button>


                            <button id="saveButton" type="submit"
                                class="bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition shadow hidden w-full">
                                Save Photo
                            </button>

                        </div>
                    </form>

                    <!-- Photo Popup Modal -->
                    <div id="photoModal"
                        class="fixed inset-5 bg-black bg-opacity-50 hidden items-center justify-center z-50 rounded-xl">
                        <span onclick="closePhotoPopup()"
                            class="absolute top-2 right-7 text-white text-3xl cursor-pointer">&times;</span>
                        <img id="popupPhoto" src="" alt="Photo Preview"
                            class="max-w-[90%] max-h-[90%] rounded-lg shadow-lg border-4 border-white">
                    </div>

                </div>


                <!-- Account Info -->
                <div class="lg:col-span-2">
                    @if (session('alert'))
                        @if (session('alert') == 'succesful')
                            <x-alert alert="succesful" message="Account is succesfuly updated.." />
                        @elseif(session('alert') == 'not_succesful')
                            <x-alert alert="not_succesful" message="Account not update..." />
                        @else
                        @endif
                    @endif
                    <form action="/account_upadate" method="post">
                        @csrf
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-purple-800">Account Information</h2>

                            <div class="flex gap-3">
                                <button id="editBtn" type="button"
                                    class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition shadow">
                                    Update Profile
                                </button>
                                <button id="saveBtn" type="submit"
                                    class="hidden bg-green-500 text-white px-6 py-2 rounded-lg hover:bg-green-600 transition shadow">
                                    Save
                                </button>
                                <button id="cancelBtn" type="button"
                                    class="hidden bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition shadow">
                                    Cancel
                                </button>
                            </div>

                        </div>



                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Left side -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Full Name</label>
                                    <input name="name" type="text" id="fullName" value="{{ $user_data->name }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Email</label>
                                    <input name="email" type="email" id="email" value="{{ $user_data->email }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Phone</label>
                                    <input name="phone" type="text" id="phone" value="{{ $user_data->phone }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Date of
                                        Birth</label>
                                    <input name="dob" type="date" id="dob" value="{{ $user_data->dob }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('dob')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Right side -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Username</label>
                                    <input name="username" type="text" id="username" value="{{ $user_data->username }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Address</label>
                                    <textarea name="address" id="address" rows="3"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70 resize-none"
                                        readonly>{{ $user_data->address }}</textarea>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Bio</label>
                                    <textarea name="bio" id="bio" rows="3"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70 resize-none"
                                        readonly>{{ $user_data->bio }}</textarea>
                                    <div class="text-sm text-red-500 h-2">
                                        @error('bio')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>


                                <div class="flex justify-end gap-3">
                                    <!-- <form action="/loout" method="post">

                                    </form> -->
                                    <a href="/logout">
                                         <button id="editBtn" type="button"
                                        class="logout_link bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition shadow">
                                        Log out
                                    </button>
                                    </a>
                                   
                                    
                                </div>


                            </div>

                        </div>
                    </form>

                </div>

            </div>




        </div>



    </x-slot>
</x-user_navbar>