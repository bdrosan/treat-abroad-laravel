@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                Profile
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
                    <div class="flex flex-col items-center">
                        <!-- Thumbnail Image -->
                        <img src="/images/{{ $profile->thumbnail }}" alt="User Thumbnail" class="w-24 h-24 rounded-full mb-4">
                        <!-- User Name -->
                        <h2 class="text-xl font-semibold text-gray-700 mb-2">
                            {{ $profile->name }}
                        </h2>
                    </div>

                    <!-- User Details -->
                    <div class="mt-4 space-y-4">
                        <!-- Email Field -->
                        <div>
                            <label class="block text-gray-600 font-medium">Email</label>
                            <p class="text-gray-800">{{ $profile->email }}</p>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('admin.profile.edit') }}" class="w-full text-center bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-md transition duration-200">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection