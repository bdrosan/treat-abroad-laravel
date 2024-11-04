@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" =>"Hospitals", "route" => route("admin.hospitals.index")]
                ],
                "last" => "Edit Hospital"
            ])

            {{-- Hospital Edit Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Edit Hospital</h2>

                <form action="{{ route("admin.hospitals.update", ['id' => $hospital->id])  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Hospital Thumbnail -->
                        <div class="col-span-2">
                            <label for="picture" class="block text-gray-700 font-semibold mb-2">
                                <img id="preview-image" width="200px" height="200px" src="/images/{{ $hospital->image  }}"  alt="{{ $hospital->name }}"/>
                            </label>
                            <input style="visibility: hidden;" oninput="previewImage(this)" type="file" id="picture" name="picture" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                            <input value="{{ $hospital->name }}" type="text" id="name" name="name" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Moto -->
                        <div class="">
                            <label for="moto" class="block text-gray-700 font-semibold mb-2">Moto</label>
                            <textarea id="moto" name="moto" class="w-full p-3 border rounded-lg shadow-sm">
                                 {{ $hospital->moto }}
                            </textarea>
                        </div>


                        <!-- Zip code -->
                        <div>
                            <label for="zipcode" class="block text-gray-700 font-semibold mb-2">Zip Code</label>
                            <input  value="{{ $hospital->zipcode }}" type="number" id="zipcode" name="zipcode" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone Number</label>
                            <input value="{{ $hospital->phone }}" type="text" id="phone" name="phone" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-gray-700 font-semibold mb-2">Address</label>
                            <textarea id="address" name="address" class="w-full p-3 border rounded-lg shadow-sm">
                                 {{ $hospital->address }}
                            </textarea>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city_id" class="block text-gray-700 font-semibold mb-2">City</label>
                            <select id="city_id" name="city_id" class="w-full p-3 border rounded-lg shadow-sm">
                                <option>City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $city->id == $hospital->city->id ? "selected" : "" }} >{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Speciality -->
                        <div>
                            <label for="speciality_id" class="block text-gray-700 font-semibold mb-2">Speciality</label>
                            <select id="speciality_id" name="speciality_id" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                <option>Speciality</option>
                                @foreach($specialities as $speciality)
                                    <option value="{{ $speciality->id }}" {{ in_array($speciality->id, $hospital->specialities->map(function ($sp){return $sp->id;})->toArray()) ? "selected":"" }}>{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Lab -->
                        <div>
                            <label for="lab_id" class="block text-gray-700 font-semibold mb-2">Laboratories</label>
                            <select id="lab_id" name="lab_id" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                @foreach($labs as $lab)
                                    <option value="{{ $lab->id }}" {{ in_array($lab->id, $hospital->labs->map(function ($lab){return $lab->id;})->toArray()) ? "selected":"" }}>{{ $lab->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Update Hospital
                        </button>
                    </div>

                </form>
            </div>
            {{-- End Doctor Creating Form --}}
        </div>
    </main>

    <script type="text/javascript">
        const previewImage = (elem) => {
            const pi = document.querySelector("#preview-image");
            pi.src = URL.createObjectURL(elem.files[0]);
        }
    </script>

    <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#lab_id').select2();
            $('#speciality_id').select2();
        });
    </script>
@endsection