@extends("admin.layout.AdminLayout")

@section("title")
    <title>HOSPITAL::CREATE</title>
@endsection

@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" =>"Hospitals", "route" => route("admin.hospitals.index")]
                ],
                "last" => "create new hospital"
            ])

            {{-- Hospital Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Create New Hospital</h2>

                <form action="{{ route("admin.hospitals.store")  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Hospital Thumbnail -->
                        <div class="col-span-2">
                            <label for="picture" class="block text-gray-700 font-semibold mb-2">
                                Profile Picture
                            </label>
                            <input type="file" id="picture" name="picture" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Name<sup class="text-red-500">*</sup></label>
                            <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>

                        <!-- Zip code -->
                        <div>
                            <label for="zipcode" class="block text-gray-700 font-semibold mb-2">Zip Code <small class="text-gray-500">(optional)</small></label>
                            <input type="number" id="zipcode" name="zipcode" class="w-full p-3 border rounded-lg shadow-sm" >
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-gray-700 font-semibold mb-2">Phone Number <small class="text-gray-500">(optional)</small></label>
                            <input type="text" id="phone_number" name="phone" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-gray-700 font-semibold mb-2">Address <small class="text-gray-500">(optional)</small></label>
                            <textarea id="address" name="address" class="w-full p-3 border rounded-lg shadow-sm"></textarea>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city_id" class="block text-gray-700 font-semibold mb-2">City <small class="text-gray-500">(optional)</small></label>
                            <select id="city_id" name="city_id" class="w-full p-3 border rounded-lg shadow-sm">
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Speciality -->
                        <div>
                            <label for="speciality_ids" class="block text-gray-700 font-semibold mb-2">Speciality <small class="text-gray-500">(optional)</small></label>
                            <select id="speciality_ids" name="speciality_ids[]" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                <option>Speciality</option>
                                @foreach($specialities as $speciality)
                                    <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Lab -->
                        <div>
                            <label for="lab_ids" class="block text-gray-700 font-semibold mb-2">Laboratories <small class="text-gray-500">(optional)</small></label>
                            <select id="lab_ids" name="lab_ids[]" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                @foreach($labs as $lab)
                                    <option value="{{ $lab->id }}">{{ $lab->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Moto -->
                        <div class="col-span-2">
                            <label for="moto" class="block text-gray-700 font-semibold mb-2">Moto <small class="text-gray-500">(optional)</small></label>
                            <textarea id="moto" name="moto" class="w-full p-3 border rounded-lg shadow-sm"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Create Hospital
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

    <script>
        tinymce.init({
            selector: 'textarea#moto',
            height: 500,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'link image | undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            automatic_uploads: true,
            file_picker_types: 'image',
            file_picker_callback: (cb, value, meta) => {
                const input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                input.addEventListener('change', (e) => {
                    const file = e.target.files[0];

                    const reader = new FileReader();
                    reader.addEventListener('load', () => {
                        /*
                          Note: Now we need to register the blob in TinyMCEs image blob
                          registry. In the next release this part hopefully won't be
                          necessary, as we are looking to handle it internally.
                        */
                        const id = 'blobid' + (new Date()).getTime();
                        const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        const base64 = reader.result.split(',')[1];
                        const blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        /* call the callback and populate the Title field with the file name */
                        cb(blobInfo.blobUri(), {title: file.name});
                    });
                    reader.readAsDataURL(file);
                });

                input.click();
            },
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
        });
    </script>
@endsection