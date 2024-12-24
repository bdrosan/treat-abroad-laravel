@extends("admin.layout.AdminLayout")


@section("title")
    <title>HOSPITAL::SHOW</title>
@endsection

@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        @include("admin.layout.breadcrumb", [
            "links" => [
                ["name" =>"Hospitals", "route" => route("admin.hospitals.index")]
            ],
            "last" => $hospital->name
        ])

        <div class="container mx-auto my-8">
            <!-- Hospital Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                <div class="flex flex-wrap md:flex-nowrap">
                    <!-- Hospital Image -->
                    <div class="md:w-1/3">
                        <img src="/images/{{ $hospital->image }}" class="w-full h-full object-cover rounded-l-lg"
                             alt="Hospital Image">
                    </div>
                    <!-- Hospital Info -->
                    <div class="md:w-2/3 p-6">
                        <h2 class="text-2xl font-semibold text-gray-800">
                            <a href="{{ route("admin.hospitals.edit", ['id' => $hospital->id]) }}">
                                <small class="bg-red-100 rounded border text-sm px-1 py-0 text-red-500" >Edit</small>
                            </a>
                            {{ $hospital->name }}
                        </h2>
                        <h3 class="my-2">
                    <span class="bg-green-500 text-white text-sm font-medium py-1 px-3 rounded-full">
                        {{ $hospital->type }} Hospital
                    </span>
                        </h3>
                        <p class="text-gray-700 mt-4">
                            {{ $hospital->moto }}
                        </p>
                        <p class="text-gray-600 mt-2">
                            <strong>Address <i class="fa-solid fa-map-location-dot text-red-500"></i>:</strong>
                            {{$hospital->address}}
                        </p>
                        <p class="text-gray-600 mt-2">
                            <strong>City <i class="fa-solid fa-city"></i>:</strong>
                            {{$hospital?->city?->name}}
                        </p>
                        <p class="text-gray-600 mt-2">
                            <strong>Zipcode <i class="fa-solid fa-signs-post"></i>:</strong>
                            {{$hospital->zip}}
                        </p>
                        <p class="text-gray-600 mt-2">
                            <strong>Phone <i class="fa-solid fa-phone-volume text-green-500"></i>:</strong>
                            {{$hospital->phone}}, {{$hospital->phone_2}}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Specialities and Labs Section -->
            <div class="flex flex-wrap -mx-4">

                <!-- Doctors Section -->
                <div class="w-full md:w-1/2 px-4">
                    <div class="bg-white border border-yellow-500 rounded-lg shadow-lg">
                        <h4 class="bg-blue-600 text-white text-lg font-semibold py-3 px-4">Doctors</h4>
                        <ul class="list-none p-4" style="max-height: 320px; overflow-y: auto;">
                            @foreach($hospital->doctors as $doctor)
                                <li class="flex items-center py-2 border-b border-gray-200 last:border-none">
                                    <img src="/images/{{ $doctor->profile_picture }}" width="30" height="30" class="mr-3"
                                         alt="{{ $doctor->name }}">
                                    <div>
                                        <strong class="text-gray-800">{{ $doctor->name }}</strong>
                                        <small class="block text-gray-500">{{ $doctor->description }}</small>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Specialities Section -->
                <div class="w-full md:w-1/2 px-4 mb-8 md:mb-0">
                    <div class="bg-white border border-yellow-500 rounded-lg shadow-lg" >
                        <h4 class="bg-blue-600 text-white text-lg font-semibold py-3 px-4">Hospital Specialities</h4>
                        <ul class="list-none p-4 text-left" style="max-height: 320px; overflow-y: auto;">
                            @foreach($hospital->specialities as $speciality)
                                <li class="flex items-center py-2 border-b border-gray-200 last:border-none">
                                    <img src="/images/{{ $speciality->image }}" width="30" height="30" class="mr-3"
                                         alt="{{ $speciality->name }}">
                                    <div>
                                        <strong class="text-gray-800">{{ $speciality->name }}</strong>
                                        <small class="block text-gray-500">{{ $speciality->details }}</small>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Labs Section -->
                <div class="w-full md:w-1/2 px-4">
                    <div class="bg-white border border-yellow-500 rounded-lg shadow-lg">
                        <h4 class="bg-blue-600 text-white text-lg font-semibold py-3 px-4">Associated Labs</h4>
                        <ul class="list-none p-4" style="max-height: 320px; overflow-y: auto;">
                            @foreach($hospital->labs as $lab)
                                <li class="flex items-center py-2 border-b border-gray-200 last:border-none">
{{--                                    <img src="/images/{{ $lab->image }}" width="30" height="30" class="mr-3"--}}
{{--                                         alt="{{ $lab->name }}">--}}
                                    <div>
                                        <strong class="text-gray-800">{{ $lab->name }}</strong>
                                        <small class="block text-gray-500">{{ $lab->description }}</small>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection