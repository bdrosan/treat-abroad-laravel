@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="w-full max-w-lg bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Edit Profile</h2>

            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Thumbnail Upload -->
                <div class="flex flex-col items-center mb-6">
                    <img src="https://via.placeholder.com/150" alt="User Thumbnail" class="w-24 h-24 rounded-full mb-4">
                    <input type="file" id="thumbnail" name="thumbnail" class="text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-100" />
                </div>

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your name" value="John Doe">
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" value="johndoe@example.com">
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- RePassword Field -->
                <div class="mb-4">
                    <label for="repassword" class="block text-gray-600 text-sm font-medium mb-2">Confirm Password</label>
                    <input type="repassword" id="repassword" name="repassword" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>


                <!-- Actions -->
                <div class="flex justify-between mt-6">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-md transition duration-200">Save Changes</button>
                </div>
            </form>
        </div>
    </main>
@endsection