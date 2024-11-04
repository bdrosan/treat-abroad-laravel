@extends("layouts.client.layout")

@section("head")
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>--}}
@endsection

@section("main")
    <div class="container-fluid my-3">
        <!-- Doctor Card -->
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-body"  style="background: #f5f5f5">
                            <div class="row justify-content-between">
                                <div class="col-7">
                                    <h1 class="h4">{{ $doctor->name }}</h1>
                                    <div>{{ $doctor->qualification }}</div>
                                    <div class="uppercase badge badge-primary">
                                        {{ $doctor->gender }}
                                    </div>
                                    <div class="mb-3">Experience: {{ $doctor->experience_years }}+ Years</div>

                                    <div class="col-lg-12">
                                        <h3 class="h6"><i class="bi bi-translate"></i> Languages:</h3>
                                        @foreach($doctor->languages as $language)
                                            <div class="badge">{{ $language->name }}</div>
                                        @endforeach
                                    </div>
                                    <a href="{{ route("appointments.index") }}" type="submit" class="btn btn-success">Book Appointment</a>
                                </div>
                                <div class="col-5">
                                    <img src="/images/{{ $doctor->profile_picture }}" width="272" height="204"
                                         class="img-fluid" alt="Dr Bommana Vinay Kumar" title="Dr Bommana Vinay Kumar">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Card -->
                    <div class="card mb-4"style="background: #fff9f4">
                        <div class="card-body">
                            <h2 class="h5">Location</h2>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="bi bi-geo-alt"></i>
                                    <img src="{{$doctor?->city?->country?->logo_url}}" width="10px" height="7px" alt="">
                                    {{ $doctor?->city?->country?->icon_symbol ." ". $doctor?->city?->country?->name }}, {{ $doctor?->city?->name }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- About Doctor Section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h5">About Doctor: </h2>
                            <small class="text-secondary">
                                {{ $doctor->bio }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
@endsection