@extends("layouts.client.layout")

@section("main")
<div class="container my-5">
    <!-- Hospital Card -->
    <div class="card mb-3">
        <div class="row g-0">
            <!-- Hospital Image -->
            <div class="col-md-4">
                <img src="/images/{{ $hospital->image }}" class="img-fluid rounded-start"
                    alt="Hospital Image">
            </div>
            <!-- Hospital Info -->
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title text-dark">
                        {{ $hospital->name }}
                    </h2>
                    <h3>
                        <span class="badge bg-success text-white">
                            {{ $hospital->type }} Hospital
                        </span>
                    </h3>
                    <p class="card-text mb-0">
                        <strong>
                            Address <i class="fa-solid fa-map-location-dot text-danger"></i>:
                        </strong>
                        {{$hospital->address}} @if($hospital->zip) - {{ $hospital->zip }} @endif
                    </p>
                    <p class="card-text mb-0">
                        <strong>
                            City <i class="fa-solid fa-city"></i>:
                        </strong>
                        {{$hospital->city->name}}
                    </p>
                    <p class="card-text mb-0">
                        <strong>
                            Phone <i class="fa-solid fa-phone-volume text-success"></i> :
                        </strong>
                        {{$hospital->phone}} @if($hospital->phone_2), {{$hospital->phone_2}} @endif
                    </p>
                </div>
            </div>
        </div>
    </div>


    {!! $hospital->moto !!}


    <!-- Doctors Card -->
    <h4> Doctors </h4>

    <div class="row">
        @foreach($doctors as $doctor)
        <div class="col-lg-3 mb-3">
            <div class="card">
                <a href="{{ route('doctors.show', ['id' => $doctor->slug ?? $doctor->id ]) }}">
                    <img src="/images/{{ $doctor->profile_picture }}" class="card-img-top" alt="{{ $doctor->name }}">
                </a>
                <div class="card-body">
                    <a href="{{ route('doctors.show', ['id' => $doctor->slug ?? $doctor->id ]) }}">
                        {{ $doctor->name }}
                    </a>
                    <span class="my-2 d-block" style="color: #00274f;">
                        <i class="bi bi-prescription2 mr-2"></i>
                        {{ $doctor->department->name ?? "" }}
                    </span>
                    <span class="my-2 d-block">
                        <i class="bi bi-pin-map mr-2"></i>
                        {{ $doctor->city->name ?? "" }}
                    </span>
                    @if($doctor->experience_years)
                    <span class="d-block" style="color: black">
                        <i class="bi bi-briefcase mr-2"></i>
                        Exp: {{ $doctor->experience_years }}+ years
                    </span>
                    @endif
                    <div class="text-center">
                        <a href="{{ route('appointments.index') }}" class="btn btn-outline-primary mt-3">
                            <i class="fa-regular fa-calendar-check"></i>
                            Take Appointment
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Doctors Card -->

    <!-- Specialities Section -->
    <h4>Hospital Specialities</h4>
    <ul class="list-group">
        @if(count($hospital->specialities))
        @foreach($hospital->specialities as $speciality)
        <li class="list-group-item">
            <img width="30px" height="30px" src="/images/{{ $speciality->image }}"
                alt="{{ $speciality->name }}">
            <strong>
                {{ $speciality->name }}
            </strong>
            <small>
                {{ $speciality->details }}
            </small>
        </li>
        @endforeach
        @else
        <div class="alert alert-warning">
            No data found
        </div>
        @endif
    </ul>

    <!-- Labs Section -->
    <h4>Tests Available</h4>
    <ul class="list-group">
        @if(count($hospital->labs))
        @foreach($hospital->labs as $lab)
        <li class="list-group-item">
            {{-- <img width="30px" height="30px" src="/images/{{ $lab->image }}"--}}
            {{-- alt="{{ $speciality->name }}">--}}
            <strong>
                {{ $lab->name }}
            </strong> <br>
            <small>
                {{ $lab->description }}
            </small>
        </li>
        @endforeach
        @else
        <div class="alert alert-warning">
            No data found
        </div>
        @endif
    </ul>

</div>
<div class="pt-50"></div>

@endsection