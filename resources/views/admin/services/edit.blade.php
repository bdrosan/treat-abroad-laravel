@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" =>"Services", "route" => route("admin.services.index")]
                ],
                "last" => "Edit Service"
            ])

            {{-- Labs Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Update Service</h2>

                <form action="{{ route("admin.services.update", ['id' => $service->id])  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Labs Thumbnail -->
                        <div class="col-span-2">
                            <label for="image" class="block text-gray-700 font-semibold mb-2">
                                Picture
                            </label>
                            <input type="file" id="image" name="image" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input value="{{ $service->name }}" type="text" id="name" name="name" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Blog -->
                        <div>
                            <label for="blog_id" class="block text-gray-700 font-semibold mb-2">
                                Blog Link
                            </label>
                            <select id="blog_id" name="blog_id" class="w-full p-3 border rounded-lg shadow-sm">
                                @foreach($blogs as $blog)
                                    <option value="{{ $blog->id }}" {{ $blog->id == $service->blog_id ? "selected" : "" }}>{{ $blog->title }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                                Update Service
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- End Doctor Creating Form --}}
        </div>
    </main>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function () {
            $('#lab_id').select2();
            $('#speciality_id').select2();
        });
    </script>
@endsection