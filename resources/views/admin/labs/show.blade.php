@extends("admin.layout.AdminLayout")

@section("head")
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>--}}
@endsection

@section("main")
    <div class="container mx-7">
        <br>
        @include("admin.layout.breadcrumb", [
            "links" => [
                ["name" =>"Labs", "route" => route("admin.labs.index")]
            ],
            "last" => "Edit Lab"
        ])

        <!-- Speciality Card -->
        <div class="my-4">
            <div class="grid grid-cols-1 lg:grid-cols-8 gap-5">
                <div class="lg:col-span-10 md:col-span-10">
                    <div class="bg-white shadow-md rounded-md mb-4">
                        <div class="p-6">
                            <div class="grid grid-cols-1 gap-4 justify-between">
                                <div class=" ">
                                    <h1 class="text-xl font-semibold">
                                        <a class="bg-green-50 text-green-500 shadow rounded p-.5 px-1 border m-2" href="{{ route('admin.labs.edit', ['id' => $lab->id]) }}">
                                            Edit
                                        </a>
                                        <strong>
                                            {{ $lab->name }}
                                        </strong>
                                        <br>
                                        <small class="text-gray-400">
                                            {{ $lab->details }}
                                        </small>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection