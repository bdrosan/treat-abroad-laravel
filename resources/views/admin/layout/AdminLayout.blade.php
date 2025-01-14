@php use App\Models\Setting;use Illuminate\Support\Facades\Route; @endphp
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <title>Dashboard Layout</title>--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="icon" href="/images/icons/dashboard.ico">

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
            integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.4.1/tinymce.min.js"
            integrity="sha512-TDS3vtbiUCZzBBZO8LFud171Hw+ykrQgkrvjwV+i+XsI0LC46PR4affO+9VbgcR79KreoN7J0HKup9mrle4gRA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset("css/admin/style.css") }}">
    <script>
        $(document).ready(function () {
            // Apply Select2 with custom options to select elements with class 'custom-select'
            $('select').select2();
        });
    </script>
    @yield("title")
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex h-screen">
    <aside class="w-64 h-100 bg-blue-900 text-white flex flex-col">
        <div class="p-4 text-2xl bg-blue-950 text-center font-bold border-b mb-4">
            {{ Setting::key("site_name")  }}
        </div>
        <nav class="flex-grow">
            <ul>
                <li class="px-4 py-2 {{ Route::is('admin.dashboard.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.dashboard.index') }}">
                        <i class="fa-solid fa-gauge-high mr-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.appointments.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.appointments.index') }}">
                        <i class="fa-solid fa-user-doctor mr-2"></i>
                        Appointments
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.doctors.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.doctors.index') }}">
                        <i class="fa-solid fa-user-doctor mr-2"></i>
                        Doctors
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.hospitals.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.hospitals.index') }}">
                        <i class="fa-regular fa-hospital mr-2"></i>
                        Hospitals
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.labs.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.labs.index') }}">
                        <i class="fa-solid fa-flask-vial mr-2"></i>
                        Labs
                    </a>
                </li>

                <li class="px-4 py-2 {{ Route::is('admin.departments.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.departments.index') }}">
                        <i class="fa-solid fa-medal mr-2"></i>
                        Departments
                    </a>
                </li>

                <li class="px-4 py-2 {{ Route::is('admin.specialities.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.specialities.index') }}">
                        <i class="fa-solid fa-medal mr-2"></i>
                        Specialities
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.blogs.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.blogs.index') }}">
                        <i class="fa-brands fa-blogger-b mr-2"></i>
                        Blogs
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.services.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.services.index') }}">
                        <i class="fa-brands fa-blogger-b mr-2"></i>
                        Services
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.cities.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.cities.index') }}">
                        <i class="fa-solid fa-tree-city mr-2"></i>
                        Cities
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.countries.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.countries.index') }}">
                        <i class="fa-solid fa-earth-americas mr-2"></i>
                        Countries
                    </a>
                </li>
                <li class="px-4 py-2 {{ Route::is('admin.aboutus.*') ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route('admin.aboutus.index') }}">
                        <i class="fa-solid fa-circle-info mr-2"></i>
                        About Up Page
                    </a>
                </li>
{{--                <li class="px-4 py-2 {{ Route::is("admin.settings.*") ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">--}}
{{--                    <a class="block w-full" href="{{ route("admin.settings.index") }}">--}}
{{--                        <i class="fa-solid fa-gears mr-2"></i>--}}
{{--                        Home Hero Slider--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="px-4 py-2 {{ Route::is("admin.settings.*") ? 'bg-indigo-950 text-white' : ' hover:bg-blue-700' }}">
                    <a class="block w-full" href="{{ route("admin.settings.index") }}">
                        <i class="fa-solid fa-gears mr-2"></i>
                        Settings
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
        <!-- Topbar -->
        <header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-md bg-orange-500 text-white rounded px-2 py-1 ">Visit App</a>
            <div class="relative">
                <button id="profileButton" class="focus:outline-none flex items-center space-x-2">
                    <img class="w-8 h-8 rounded-full" src="{{ "/images/" . auth()->user()?->thumbnail ?? "-" }}"
                         alt="Profile">
                    <span class="hidden md:block">{{ auth()->user()->name ?? "-" }}</span>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-lg">
                    <a href="{{ route("admin.profile.index") }}"
                       class="block px-4 py-2 text-gray-800 hover:bg-gray-100">
                        <i class="fa-solid fa-user"></i>
                        Profile
                    </a>
                    <form action="{{ route('admin.logout.post') }}" method="post">
                        @csrf
                        <button type="submit"
                                class="block w-full d-block text-left px-4 py-2 text-gray-800 hover:bg-gray-100">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        @yield("main")
    </div>
</div>

<script>
    const profileButton = document.getElementById('profileButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    profileButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    window.addEventListener('click', (e) => {
        if (!profileButton.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });


</script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: '#da373d',
                }
            }
        }
    }
</script>
</body>
</html>
