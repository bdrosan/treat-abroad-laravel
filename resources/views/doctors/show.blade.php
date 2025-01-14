@extends("layouts.client.layout")
@section("main")
<!-- Doctor Card -->
<div class="container my-4">
    <div class="card mb-4">
        <div class="card-body" style="background: #f5f5f5">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <img src="/images/{{ $doctor->profile_picture }}"
                        class="img-fluid" alt="{{ $doctor->name }}" title="{{ $doctor->name }}">
                </div>
                <div class="col-md-6">
                    <h1 class="h4">{{ $doctor->name }}</h1>
                    <div class="badge badge-primary">{{ $doctor->qualification }}</div>
                    <div class="my-2">
                        <h4 class="mb-0">Department: </h4>
                        <div>{{ $doctor->department->name }}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <h4 class="mb-0">Hospitals: </h4>
                            @foreach($doctor->hospitals as $hospital)
                            {{ $hospital->name }}<br>
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-0">Location</h2>
                                <!--<img src="{{$doctor?->city?->country?->logo_url}}" width="10px" height="7px" alt="">-->
                                {{ $doctor?->city?->country?->icon_symbol ." ". $doctor?->city?->country?->name }} , {{ $doctor?->city?->name }}
                        </div>
                    </div>

                    @if($doctor->experience_years && $doctor->experience_years > 0 )
                    <h4 class="mt-2 mb-0">Experience: {{ $doctor->experience_years }}+ Years</h4>
                    @endif

                    @if( count($doctor->languages) )
                    <div class="mt-2">
                        <h5 class="mb-0">Languages:</h5>
                        @foreach($doctor->languages as $language)
                        {{ $language->name }}
                        @endforeach
                    </div>
                    @endif

                </div>
                <div class="col-md-3 align-self-center">
                    <a href="{{ route('appointments.index') }}?" type="submit" class="btn btn-lg btn-success"> <i class="bi bi-calendar3"></i> Book Appointment</a>
                </div>

            </div>
        </div>
    </div>
    @if($doctor->working_hours)
    <h5 class="mb-1">Working Hours</h5>
    @foreach(json_decode($doctor->working_hours) as $working_hours)
    <div>{{ $working_hours->day??'' }}: {{ $working_hours->time??''}} in {{ $working_hours->location??""}}</div>
    @endforeach
    @endif

    <!-- About Doctor Section -->
    <div class="pb-70 mt-4">{!! $doctor->bio !!}</div>

</div>

@endsection