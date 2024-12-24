@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" => "Cities", "route" => route("admin.cities.index")]
                ],
                "last" => "Edit City"
            ])

            {{-- Hospital Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Edit New Doctor</h2>

                <form action="{{ route("admin.cities.update", ['id' => $city->id])  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input value="{{ $city->name }}" type="text" id="name" name="name" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- code -->
                        <div>
                            <label for="code" class="block text-gray-700 font-semibold mb-2">City Code</label>
                            <input type="text" id="code" name="code" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="country_id" class="block text-gray-700 font-semibold mb-2">Country</label>
                            <select id="country_id" name="country_id" class="w-full p-3 border rounded-lg shadow-sm" required>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" {{ $city->country->id == $country->id ? "selected" : "" }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Update City
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