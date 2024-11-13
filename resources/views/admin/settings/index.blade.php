@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Loader Overlay -->
    <div id="overlay" class="hide">

    </div>
    <!-- End Loader Overlay -->



    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-3 rounded-lg shadow-md">

            {{--  Admin Whatsapp Number  --}}
            <div class="mb-3 w-50">
                <label for="admin_whatsapp" class="block text-sm font-medium text-gray-700 mb-1">
                    Admin Whatsapp <i class="fa-brands fa-whatsapp"></i>
                </label>
                <div class="flex">
                    <input type="text" id="admin_whatsapp" placeholder=""
                           value="{{ \App\Models\Setting::key('admin_whatsapp') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('admin_whatsapp', document.querySelector('#admin_whatsapp').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Admin Whatsapp Number  --}}

            <hr>


            {{--  Site Logo  --}}
            <div class="mb-3 w-50">
                <label for="sitelogo" class="block text-sm font-medium text-gray-700 mb-1">Site Logo</label>
                <div class="flex">
                    <label for="site_logo" class="m-5 cursor-pointer">
                        <img src="/images/{{ \App\Models\Setting::key('site_logo_url') }}" alt="" width="200px" height="200px">
                    </label>
                    <input style="visibility: hidden;" type="file" id="site_logo"
                           class="block px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="button"
                        onclick="updateSiteLogo('site_logo', document.querySelector('#site_logo').files[0] )"
                        class="px-8 py-2 block bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
            {{--  End Site Logo  --}}

            {{--  Homepage Banner Image  --}}
            <div class="mb-3 w-50">
                <label for="homepage_banner_image" class="block text-sm font-medium text-gray-700 mb-1">Homepage Banner Image</label>
                <div class="flex">
                    <label for="homepage_banner_image" class="m-5 cursor-pointer">
                        <img style="max-height: 800px" src="/images/{{ \App\Models\Setting::key('homepage_banner_image') }}" alt="">
                    </label>
                    <input style="visibility: hidden;" type="file" id="homepage_banner_image"
                           class="block px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <button type="button"
                        onclick="updateSiteBanner('site_banner', document.querySelector('#homepage_banner_image').files[0] )"
                        class="px-8 py-2 block bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
            {{--  End Homepage Banner Image  --}}


            {{--  Email Address  --}}
            <div class="mb-3 w-50">
                <label for="site_email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                <div class="flex">
                    <input type="email" id="site_email" placeholder="name@example.com"
                           value="{{ \App\Models\Setting::key('site_email') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('site_email', document.querySelector('#site_email').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Email Address  --}}

            {{--  Email Address 2 --}}
            <div class="mb-3 w-50">
                <label for="site_email_2" class="block text-sm font-medium text-gray-700 mb-1">Email address 2</label>
                <div class="flex">
                    <input type="email" id="site_email_2" placeholder="name@example.com"
                           value="{{ \App\Models\Setting::key('site_email_2') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('site_email_2', document.querySelector('#site_email_2').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Email Address 2 --}}

            {{--  Phone  --}}
            <div class="mb-3 w-50">
                <label for="site_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <div class="flex">
                    <input type="text" id="site_phone" placeholder="+88012891829"
                           value="{{ \App\Models\Setting::key('site_phone_number') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('site_phone_number', document.querySelector('#site_phone').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Phone  --}}

            {{--  Phone 2 --}}
            <div class="mb-3 w-50">
                <label for="site_phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number 2</label>
                <div class="flex">
                    <input type="text" id="site_phone_number_2" placeholder="+88012891829"
                           value="{{ \App\Models\Setting::key('site_phone_number_2') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('site_phone_number_2', document.querySelector('#site_phone_number_2').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Phone 2 --}}

            {{--  address  --}}
            <div class="mb-3 w-50">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                <div class="flex">
                    <input type="text" id="address" placeholder=""
                           value="{{ \App\Models\Setting::key('site_address') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('site_address', document.querySelector('#address').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End address  --}}

            <hr>

            {{--  Home Page Search Label --}}
            <div class="mb-3 w-50">
                <label for="homepage_search_field_label" class="block text-sm font-medium text-gray-700 mb-1">Homepage Search Field Label</label>
                <div class="flex">
                    <input type="email" id="homepage_search_field_label" placeholder="name@example.com"
                           value="{{ \App\Models\Setting::key('homepage_search_field_label') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('homepage_search_field_label', document.querySelector('#homepage_search_field_label').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Home Page Search Lebel --}}

            <hr>

            {{--  Homepage Top Hospital Slider Title Text --}}
            <div class="mb-3 w-50">
                <label for="homepage_top_hospital_slider_title_text" class="block text-sm font-medium text-gray-700 mb-1">Homepage Top Hospital Slider Title Text</label>
                <div class="flex">
                    <input type="email" id="homepage_top_hospital_slider_title_text" placeholder=""
                           value="{{ \App\Models\Setting::key('homepage_top_hospital_slider_title_text') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('homepage_top_hospital_slider_title_text', document.querySelector('#homepage_top_hospital_slider_title_text').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Homepage Top Hospital Slider Title Text --}}

            <hr>

            {{--  Home Page Top Doctor Text --}}
            <div class="mb-3 w-50">
                <label for="homepage_top_doctor_slider_title_text" class="block text-sm font-medium text-gray-700 mb-1">Homepage Top Doctor Slider Title Text</label>
                <div class="flex">
                    <input type="email" id="homepage_top_doctor_slider_title_text" placeholder=""
                           value="{{ \App\Models\Setting::key('homepage_top_doctor_slider_title_text') }}"
                           class="block w-full px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <button type="button"
                            onclick="updateKey('homepage_top_doctor_slider_title_text', document.querySelector('#homepage_top_doctor_slider_title_text').value)"
                            class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-r-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        UPDATE
                    </button>
                </div>
            </div>
            {{--  End Home Page Top Doctor Text --}}




{{--            <div class="grid grid-cols-12 gap-4">--}}
{{--                <!-- Service 1 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option1" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option1" class="text-gray-700 font-medium">Option 1</label>--}}
{{--                </div>--}}

{{--                <!-- Service 1 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option2" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option2" class="text-gray-700 font-medium">Option 2</label>--}}
{{--                </div>--}}

{{--                <!-- Service 1 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option3" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option3" class="text-gray-700 font-medium">Option 3</label>--}}
{{--                </div>--}}

{{--                <!-- Service 1 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option4" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option4" class="text-gray-700 font-medium">Option 4</label>--}}
{{--                </div>--}}

{{--                <!-- Service 1 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option5" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option5" class="text-gray-700 font-medium">Option 5</label>--}}
{{--                </div>--}}

{{--                <!-- Checkbox Field 6 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option6" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option6" class="text-gray-700 font-medium">Option 6</label>--}}
{{--                </div>--}}

{{--                <!-- Checkbox Field 7 -->--}}
{{--                <div class="col-span-3 flex items-center space-x-2">--}}
{{--                    <input type="checkbox" id="option7" class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">--}}
{{--                    <label for="option7" class="text-gray-700 font-medium">Option 7</label>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </main>


    <script type="text/javascript">

        async function updateSiteBanner(siteBanner, element) {
            const payload = new FormData();
            console.log(siteBanner, element)
            payload.append(siteBanner, element);
            toggleOverlay();
            let res = await fetch("{{ route('admin.settings.updateSiteBanner') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    "Accept": "application/json",
                    // "Content-Type": "application/x-www-form-urlencoded",
                },
                body: payload
            }).then(r => r.json());

            toggleOverlay();
            if ( res.message === "success" ) {
                window.location.reload();
            } else {
                alert("Failed");
            }
        }

        async function updateSiteLogo(siteLogo, element) {
            const payload = new FormData();
            console.log(siteLogo, element)
            payload.append(siteLogo, element);
            payload.append("x", "element");
            toggleOverlay();
            let res = await fetch("{{ route('admin.settings.updateSiteLogo') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    "Accept": "application/json",
                    // "Content-Type": "application/x-www-form-urlencoded",
                },
                body: payload
            }).then(r => r.json());

            toggleOverlay();
            if ( res.message === "success" ) {
                window.location.reload();
            } else {
                alert("Failed");
            }
        }

        const updateKey = async (key, value) => {

            toggleOverlay();
            let res = await fetch("{{ route('admin.settings.update') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}",
                    "Accept": "application/json",
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    "key": key,
                    "value": value
                })
            }).then(r => r.json());

            console.log(res)
            toggleOverlay();
            if ( res.message === "success" ) {
                window.location.reload();
            } else {
                alert("Failed");
            }
        }

        const toggleOverlay = () => {
            const overlay =  document.querySelector("#overlay");
            overlay.classList.toggle("hide");
        }
    </script>
@endsection