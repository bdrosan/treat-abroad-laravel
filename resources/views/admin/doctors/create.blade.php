@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" => "Doctors", "route" => route("admin.doctors.index")]
                ],
                "last" => "create new doctor"
            ])
            <!-- Table -->

            {{-- Doctor Creating Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Create New Doctor</h2>
                <div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form action="{{ route("admin.doctors.store")  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Profile Picture -->
                        <div class="col-span-2">
                            <label for="profile_picture" class="block text-gray-700 font-semibold mb-2">Profile
                                Picture
                            </label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                   class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- First Name -->
                        <div>
                            <label for="firstname" class="block text-gray-700 font-semibold mb-2">First Name<sup class="text-red-500">*</sup> </label>
                            <input type="text" id="firstname" name="firstname"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="lastname" class="block text-gray-700 font-semibold mb-2">Last Name<sup class="text-red-500">*</sup></label>
                            <input type="text" id="lastname" name="lastname"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Speciality -->
                        <div>
                            <label for="speciality_ids" class="block text-gray-700 font-semibold mb-2">Speciality<sup class="text-red-500">*</sup></label>
                            <select id="speciality_ids" name="speciality_ids[]" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                @foreach($specialities as $speciality)
                                    <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Department -->
                        <div>
                            <label for="department_id" class="block text-gray-700 font-semibold mb-2">Department<sup class="text-red-500">*</sup></label>
                            <select id="department_id" name="department_id" class="w-full p-3 border rounded-lg shadow-sm" required>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Hospitals -->
                        <div>
                            <label for="hospital_id" class="block text-gray-700 font-semibold mb-2">Hospital<sup class="text-red-500">*</sup></label>
                            <select id="hospital_id" name="hospital_id" class="w-full p-3 border rounded-lg shadow-sm" required>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email <small class="text-gray-500">(optional)</small> </label>
                            <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-gray-700 font-semibold mb-2">Phone Number <small class="text-gray-500">(optional)</small> </label>
                            <input type="text" id="phone_number" name="phone_number"
                                   class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- License Number -->
                        <div>
                            <label for="license_number" class="block text-gray-700 font-semibold mb-2">License Number <small class="text-gray-500">(optional)</small> </label>
                            <input type="text" id="license_number" name="license_number" class="w-full p-3 border rounded-lg shadow-sm" >
                        </div>

                        <!-- Qualification -->
                        <div>
                            <label for="qualification" class="block text-gray-700 font-semibold mb-2">Qualification <small class="text-gray-500">(optional)</small> </label>
                            <input value="" type="text" id="qualification" name="qualification" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Experience Years -->
                        <div>
                            <label for="experience_years" class="block text-gray-700 font-semibold mb-2">Years of Experience <small class="text-gray-500">(optional)</small> </label>
                            <input type="number" id="experience_years" name="experience_years" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-gray-700 font-semibold mb-2">Address <small class="text-gray-500">(optional)</small> </label>
                            <textarea id="address" name="address" class="w-full p-3 border rounded-lg shadow-sm"></textarea>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="dob" class="block text-gray-700 font-semibold mb-2">Date of Birth <small class="text-gray-500">(optional)</small> </label>
                            <input type="date" id="dob" name="dob" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Gender -->
                        <div>
                            <label for="gender" class="block text-gray-700 font-semibold mb-2">Gender <small class="text-gray-500">(optional)</small> </label>
                            <select id="gender" name="gender" class="w-full p-3 border rounded-lg shadow-sm" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Languages Spoken -->
                        <div>
                            <label for="languages_spoken" class="block text-gray-700 font-semibold mb-2" multiple>
                                Languages Spoken <small class="text-gray-500">(optional)</small>
                            </label>
                            <select id="languages_spoken" name="languages_spoken"
                                    class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Consultation Fee -->
                        <div>
                            <label for="consultation_fee" class="block text-gray-700 font-semibold mb-2">Consultation Fee  <small class="text-gray-500">(optional)</small> </label>
                            <input type="number" step="0.01" id="consultation_fee" name="consultation_fee"
                                   class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- Working Hours -->
                        <div>
                            <label for="working_hours" class="block text-gray-700 font-semibold mb-2">
                                Working Hours (JSON format) <small class="text-gray-500">(optional)</small> </label>
                            <textarea id="working_hours" name="working_hours"
                                      class="w-full p-3 border rounded-lg shadow-sm"
                                      placeholder='e.g., {"monday": "9:00-17:00", "tuesday": "9:00-17:00"}'></textarea>
                        </div>

                        <!-- Country -->
                        <div>
                            <label for="country_id" class="block text-gray-700 font-semibold mb-2">Country <small class="text-gray-500">(optional)</small> </label>
                            <select onchange="setCities()" id="country_id" name="country_id" class="w-full p-3 border rounded-lg shadow-sm">
                                <option>Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <script>
                                const setCities = () => {

                                }
                            </script>
                        </div>

                        <!-- City -->
                        <div>
                            <label for="city_id" class="block text-gray-700 font-semibold mb-2">City <small class="text-gray-500">(optional)</small> </label>
                            <select id="city_id" name="city_id" class="w-full p-3 border rounded-lg shadow-sm">
                                <option value>City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bio -->
                        <div class="col-span-2">
                            <label for="bio" class="block text-gray-700 font-semibold mb-2">Bio<sup class="text-red-500">*</sup> </label>
                            <textarea id="bio" name="bio" class="w-full p-3 border rounded-lg shadow-sm"></textarea>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                                class="w-full bg-blue-500 text-white p-3 rounded-lg font-semibold hover:bg-blue-600">
                            Create Doctor
                        </button>
                    </div>

                </form>
            </div>
            {{-- End Doctor Creating Form --}}
        </div>
    </main>


    <script>
        tinymce.init({
            selector: 'textarea#bio',
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