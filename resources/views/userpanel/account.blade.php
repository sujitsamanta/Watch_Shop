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
                     <!-- Profile Photo -->
<form action="/account_photo_update" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="text-center">
    <!-- Photo Preview -->
    <div
      class="relative w-48 h-48 mx-auto rounded-full overflow-hidden border-4 border-white shadow-xl profile-photo cursor-pointer group text-center">
      <img id="profilePhoto" src="{{ url('storage/photos/' . $user_data->photo) }}" alt="👦🏼" class="w-full h-full object-cover text-center">
      <div
        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition">
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
      <button type="submit" class="bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition shadow">
        Save Photo
      </button>
    </div>
  </div>
</form>




                
                    <!-- Account Info -->
                    <div class="lg:col-span-2">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-purple-800">Account Information</h2>

                            @if (session('alert'))
                                @if (session('alert') == 'succesful')
                                    <x-alert alert="succesful" message="Account is succesfuly updated.." />
                                @elseif(session('alert') == 'not_succesful')
                                    <x-alert alert="not_succesful" message="Account not update..." />
                                @else
                                @endif
                            @endif
                        </div>
                        <form action="/account_upadate" method="post">
                    @csrf

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Left side -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Full Name</label>
                                    <input name="name" type="text" id="fullName" value="{{ $user_data->name }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
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
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Date of
                                        Birth</label>
                                    <input name="dob" type="date" id="dob" value="{{ $user_data->dob }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                </div>
                            </div>

                            <!-- Right side -->
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Username</label>
                                    <input name="username" type="text" id="username" value="{{ $user_data->username }}"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70" readonly>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Address</label>
                                    <textarea name="address" id="address" rows="3"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70 resize-none"
                                        readonly>{{ $user_data->address }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-purple-700 mb-1">Bio</label>
                                    <textarea name="bio" id="bio" rows="3"
                                        class="w-full p-3 border border-purple-200 rounded-lg bg-white/70 resize-none"
                                        readonly>{{ $user_data->bio }}</textarea>
                                </div>
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

                        </div>
                        </form>

                    </div>

               

            </div>




        </div>



    </x-slot>
</x-user_navbar>