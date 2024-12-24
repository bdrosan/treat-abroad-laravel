@extends("layouts.client.layout")

@section("head")
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>--}}
    <title>
        {{ $doctor->name }}
        ,<small style="color: #2c2c2c;">{{ $doctor->qualification }}</small>
        | {{ config("app.name") }}
    </title>
@endsection

@section("main")
    <div class="container-fluid my-3">
        <!-- Doctor Card -->
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-body" style="background: #f5f5f5">
                            <div class="row justify-content-between">
                                <div class="col-7">
                                    <h1 class="h4">
                                        {{ $doctor->name }}
                                        ,<small style="color: #2c2c2c;">{{ $doctor->qualification }}</small>
                                    </h1>
                                    <div class="my-2" style="line-height: 15px;">
                                        <h4 class="underline mb-0 pb-0">Department: </h4>
                                        <small class="d-block my-0 py-0">{{ $doctor->department->name }}</small>
                                    </div>
                                    <div class="my-2" style="line-height: 15px;">
                                        <h4 class="underline mb-0 pb-0">Department: </h4>
                                        <small class="d-block my-0 py-0">{{ $doctor->department->name }}</small>
                                    </div>
                                    <div class="mt-2" style="line-height: 15px;">
                                        <h4 class="underline mb-0 pb-0">Hospitals: </h4>
                                        @foreach($doctor->hospitals as $hospital)
                                            <small class="d-block my-0 py-0">{{ $hospital->name }}</small>
                                        @endforeach
                                    </div>

                                    @if($doctor->experience_years && $doctor->experience_years > 0 )
                                        <div class="mb-3">Experience: {{ $doctor->experience_years }}+ Years</div>
                                    @endif

                                    @if( count($doctor->languages) )
                                    <div class="col-lg-12">
                                        <strong class="h6"><i class="bi bi-translate"></i> Languages:</strong>
                                        @foreach($doctor->languages as $language)
                                            <small class=" border px-1">{{ $language->name }}</small>
                                        @endforeach
                                    </div>
                                    @endif

                                    <a href="{{ route("appointments.index") }}?" type="submit" class="btn btn-success mt-3">Book
                                        Appointment</a>
                                </div>
                                <div class="col-5">
                                    <img src="/images/{{ $doctor->profile_picture }}" width="272" height="204"
                                         class="img-fluid" alt="Dr Bommana Vinay Kumar" title="Dr Bommana Vinay Kumar">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="card mb-4" style="background: #fff9f4">
                        <div class="card-body">
                            <h2 class="h5">Location</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-geo-alt"></i>
                                    <img src="{{$doctor?->city?->country?->logo_url}}" width="10px" height="7px" alt="">
                                    {{ $doctor?->city?->country?->icon_symbol ." ". $doctor?->city?->country?->name }}
                                    , {{ $doctor?->city?->name }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- About Doctor Section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h5">About Doctor: </h2>
                            <small class="text-secondary">
                                {!!  $doctor->bio !!}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
@endsection