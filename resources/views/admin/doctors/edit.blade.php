@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">

            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" => "Doctors", "route" => route("admin.doctors.index")]
                ],
                "last" => "Edit doctor"
            ])

            {{-- Doctor Edit Form --}}
            <div class="mx-auto bg-white mt-3 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6">Edit Doctor</h2>
                <form action="{{ route("admin.doctors.update", ['id' => $doctor->id])  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- Profile Picture -->
                        <div class="col-span-2">
                            <label for="profile_picture" class="cursor-pointer block text-gray-700 font-semibold mb-2">
                                <img id="preview-image" width="200px" height="200px" src="/images/{{ $doctor->profile_picture  }}"  alt="{{ $doctor->firstname }}"/>
                            </label>
                            <input oninput="previewImage(this)" style="visibility: hidden" type="file" id="profile_picture" name="profile_picture"
                                   class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- First Name -->
                        <div>
                            <label for="firstname" class="block text-gray-700 font-semibold mb-2">First Name<sup class="text-red-500">*</sup> </label>
                            <input value="{{ $doctor->firstname }}" type="text" id="firstname" name="firstname"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>

                        <!-- Last Name -->
                        <div>
                            <label for="lastname" class="block text-gray-700 font-semibold mb-2">Last Name<sup class="text-red-500">*</sup></label>
                            <input value="{{ $doctor->lastname }}" type="text" id="lastname" name="lastname"
                                   class="w-full p-3 border rounded-lg shadow-sm" required>
                        </div>


                        <!-- Speciality -->
                        <div>
                            <label for="speciality_ids" class="block text-gray-700 font-semibold mb-2">Speciality<sup class="text-red-500">*</sup></label>
                            <select id="speciality_ids" name="speciality_ids[]" class="w-full p-3 border rounded-lg shadow-sm" multiple>
                                @foreach($specialities as $speciality)
                                    <option value="{{ $speciality->id }}" {{ in_array($speciality->id, $doctor->specialities->map(function ($sp){return $sp->id;})->toArray()) ? "selected":"" }}>{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Department -->
                        <div>
                            <label for="department_id" class="block text-gray-700 font-semibold mb-2">Department<sup class="text-red-500">*</sup></label>
                            <select id="department_id" name="department_id" class="w-full p-3 border rounded-lg shadow-sm" required>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ $department->id == $doctor?->department?->id ? "selected" : "" }}>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Hospitals -->
                        <div>
                            <label for="hospital_ids" class="block text-gray-700 font-semibold mb-2">Hospital<sup class="text-red-500">*</sup></label>
                            <select id="hospital_ids" name="hospital_ids[]" class="w-full p-3 border rounded-lg shadow-sm" required multiple>
                                @foreach($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}" {{ in_array($hospital->id, $doctor->hospitals->map(function ($sp){return $sp->id;})->toArray()) ? "selected":"" }}>{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->email }}" type="email" id="email" name="email" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone_number" class="block text-gray-700 font-semibold mb-2">Phone Number <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->phone_number }}" type="text" id="phone_number" name="phone_number" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- License Number -->
                        <div>
                            <label for="license_number" class="block text-gray-700 font-semibold mb-2">License Number <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->license_number }}" type="text" id="license_number" name="license_number" class="w-full p-3 border rounded-lg shadow-sm" >
                        </div>

                        <!-- Qualification -->
                        <div>
                            <label for="qualification" class="block text-gray-700 font-semibold mb-2">Qualification <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->qualification }}" type="text" id="qualification" name="qualification" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Experience Years -->
                        <div>
                            <label for="experience_years" class="block text-gray-700 font-semibold mb-2">Years of Experience <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->experience_years }}" type="number" id="experience_years" name="experience_years" class="w-full p-3 border rounded-lg shadow-sm">
                        </div>

                        <!-- Address -->
                        <div>
                            <label for="address" class="block text-gray-700 font-semibold mb-2">Address <small class="text-gray-500">(optional)</small> </label>
                            <textarea id="address" name="address" class="w-full p-3 border rounded-lg shadow-sm">{{ $doctor->address }}</textarea>
                        </div>

                        <!-- Date of Birth -->
                        <div>
                            <label for="dob" class="block text-gray-700 font-semibold mb-2">Date of Birth <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->dob }}" type="date" id="dob" name="dob" class="w-full p-3 border rounded-lg shadow-sm">
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
                                    <option value="{{ $language->id }}" {{ in_array($language->id, $doctor->languages->map(function ($sp){return $sp->id;})->toArray()) ? "selected":"" }}>
                                        {{ $language->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Consultation Fee -->
                        <div>
                            <label for="consultation_fee" class="block text-gray-700 font-semibold mb-2">Consultation Fee  <small class="text-gray-500">(optional)</small> </label>
                            <input value="{{ $doctor->consultation_fee }}" type="number" step="0.01" id="consultation_fee" name="consultation_fee"
                                   class="w-full p-3 border rounded-lg shadow-sm">
                        </div>


                        <!-- Working Hours -->
                        <div>
                            <label for="working_hours" class="block text-gray-700 font-semibold mb-2">
                                Working Hours (JSON format)<small class="text-gray-500">(optional)</small> <br>
                                <small class="bg-gray-900 text-gray-50 rounded py-.5 px-1">example: {"monday": "9:00-17:00", "tuesday": "9:00-17:00"}</small>
                            </label>
                            <textarea id="working_hours" name="working_hours"
                                      class="w-full p-3 border rounded-lg shadow-sm"
                                      placeholder='e.g., {"monday": "9:00-17:00", "tuesday": "9:00-17:00"}'>{{ $doctor->working_hours }}</textarea>
                        </div>


                        <!-- City -->
                        <div>
                            <label for="city_id" class="block text-gray-700 font-semibold mb-2">City <small class="text-gray-500">(optional)</small> </label>
                            <select id="city_id" name="city_id" class="w-full p-3 border rounded-lg shadow-sm">
                                <option value>City</option>
                                @foreach($cities as $city)
                                    <option value="{{ $city->id }}" {{ $city->id == $doctor->city_id ? "selected" : "" }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bio -->
                        <div class="col-span-2">
                            <label for="bio" class="block text-gray-700 font-semibold mb-2">Bio<sup class="text-red-500">*</sup> </label>
                            <textarea id="bio" name="bio" class="w-full p-3 border rounded-lg shadow-sm">
                                {{ $doctor->bio }}
                            </textarea>
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


    <script type="text/javascript">
        const previewImage = (elem) => {
            const pi = document.querySelector("#preview-image");
            pi.src = URL.createObjectURL(elem.files[0]);
        }
    </script>



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