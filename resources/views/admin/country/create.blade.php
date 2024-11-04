@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [  "last" => "create new blog", "links" => [ ["route" => route('admin.countries.index'), "name" => "Countries"] ]])
            <!-- Table -->

            {{-- Hospital Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Create New Country</h2>

                <form action="{{ route("admin.countries.store")  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Hospital Thumbnail -->
                        <div class="col-span-2">
                            <label for="picture" class="block text-gray-700 font-semibold mb-2">Profile
                                Picture
                            </label>
                            <input type="file" id="picture" name="picture" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">
                                Name <sup class="text-red-500">*</sup>
                            </label>
                            <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>

                        <!-- Icon Markup -->
                        <div>
                            <label for="icon_markup" class="block text-gray-700 font-semibold mb-2">Icon Markup</label>
                            <input type="text" id="icon_markup" name="icon_markup" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>
                        <!-- End Icon Markup -->

                        <!-- Icon Symbol -->
                        <div>
                            <label for="icon_symbol" class="block text-gray-700 font-semibold mb-2">Icon Symbol</label>
                            <input type="text" id="icon_symbol" name="icon_symbol" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>
                        <!-- End Icon Symbol -->

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Create Country
                        </button>
                    </div>

                </form>
            </div>
            {{-- End Doctor Creating Form --}}
        </div>
    </main>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#lab_id').select2();
            $('#speciality_id').select2();
        });
    </script>
@endsection