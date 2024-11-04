@extends("admin.layout.AdminLayout")

@section("head")
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>--}}
@endsection

@section("main")
    <div class="container mx-7">

        <!-- Doctor Card -->
        <div class="my-4">
            @include("admin.layout.breadcrumb", [
                "links" => [
                    ["name" => "Doctors", "route" => route("admin.doctors.index")]
                ],
                "last" => "Show doctor"
            ])

            <div class="grid grid-cols-1 lg:grid-cols-9 gap-4">
                <div class="lg:col-span-12">
                    <div class="bg-white shadow-md rounded-md mb-4">
                        <div class="p-6">
                            <div class="grid grid-cols-1 gap-4 justify-between">
                                <div class=" ">
                                    <h1 class="font-semibold">
                                        <a class="bg-green-50 text-green-500 shadow rounded px-1 m-2"
                                           href="{{ route('admin.doctors.edit', ['id' => $doctor->id]) }}">
                                            Edit
                                        </a>
                                        <span>
                                            {{ $doctor->name }}
                                        </span>
                                    </h1>
                                    <div class="mt-2 ">
                                        <span class="uppercase bg-blue-50 px-2 py-1 rounded-md inline-block">{{ $doctor->qualification }}</span>
                                    </div>
                                    <div class="uppercase bg-blue-50 px-2 py-1 rounded-md inline-block">
                                        {{ strtolower($doctor->gender)  }}
                                    </div>
                                    <div class="mb-3">Experience: {{ $doctor->experience_years }}+ Years</div>
                                </div>
                                <div class="md:col-span-4">
                                    <img src="/images/{{ $doctor->profile_picture }}"
                                         class="w-25 h-25 object-cover rounded-md" alt="{{ $doctor->name }}"
                                         style="width: 10rem; height: 10rem;"
                                         title="{{ $doctor->name }}">
                                </div>
                                <div class="md:col-span-12">
                                    <h3 class="text-lg font-semibold"><i class="bi bi-translate"></i> Languages:</h3>
                                    <div class="space-x-2 m-2 py-2 px-2 border space-y-1">
                                        @foreach($doctor->languages as $language)
                                            <div class="inline-block bg-gray-200 text-gray-700 px-1 py-0 rounded">{{ $language->name }}</div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="md:col-span-12">
                                    <h3 class="text-lg font-semibold">
                                        <i class="bi bi-translate"></i> Specialities:
                                    </h3>
                                    <div class="space-x-2 m-2 border space-y-1">
                                        @foreach($doctor->specialities as $speciality)
                                            <div class="inline-block bg-gray-200 text-gray-700 px-2 py-1 rounded">{{ $speciality->name }}</div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="bg-white shadow-md rounded-md mb-4">
                        <div class="p-6">
                            <h2 class="text-lg font-semibold">Location</h2>
                            <ul class="list-none">
                                <li class="flex items-center">
                                    <i class="bi bi-geo-alt"></i>
                                    <img src="{{ $doctor?->city?->country?->logo_url }}" class="ml-2 w-4 h-3" alt="">
                                    <span class="ml-2">{{ $doctor?->city?->country?->name }}, {{ $doctor?->city?->name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- About Doctor Section -->
                    <div class="bg-white shadow-md rounded-md mb-4">
                        <div class="p-6">
                            <h2 class="text-lg font-semibold">About Doctor:</h2>
                            <div>
                                {!! $doctor->bio !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection