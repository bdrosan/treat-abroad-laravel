@extends("layouts.client.layout")

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
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
                                    {{$hospital->address}} @if($hospital->zip) - {{  $hospital->zip }} @endif
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

                <div class="row bg-white mb-3">
                    <div class="col-lg-12">
                        {!! $hospital->moto !!}
                    </div>
                </div>

                <!-- Doctors Card -->
                <div class="card">
                    <h4 class="card-header bg-primary text-white">
                        Doctors
                    </h4>
                    <div class="card-body">
                        <div class="row justify-content-around">
                            @foreach($doctors as $doctor)
                                <a href="{{ route('doctors.show', ['id' => $doctor->id]) }}" class="col-md-3 border row p-0 pb-2 m-2 gap-3" style="background: #EEEEEE;">
                                    <div class="col-md-6">
                                        <img style="" src="/images/{{$doctor->profile_picture}}" width="70px"
                                             height="70px" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <strong>{{ $doctor->qualification .". ". $doctor->firstname }}</strong><br>
                                        <div style="line-height: 14px">
                                            @foreach($doctor->specialities as $speciality)
                                                <small style="color: #004166">{{ $speciality->name }}</small>,
                                            @endforeach
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Doctors Card -->

                <div class="row p-0 m-0 justify-content-between">
                    <!-- Specialities Section -->
                    <div class="col-lg-5 mt-4 border-right bg-white p-0 border border-warning">
                        <h4 class="bg-primary text-white p-2">Hospital Specialities</h4>
                        <ul class="list-group">
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
                        </ul>
                    </div>

                    <!-- Labs Section -->
                    <div class="col-lg-5 mt-4 bg-white p-0 border border-warning">
                        <h4 class="bg-primary text-white p-2">Tests Available</h4>
                        <ul class="list-group">
                            @foreach($hospital->labs as $lab)
                                <li class="list-group-item">
{{--                                    <img width="30px" height="30px" src="/images/{{ $lab->image }}"--}}
{{--                                         alt="{{ $speciality->name }}">--}}
                                    <strong>
                                        {{ $lab->name }}
                                    </strong> <br>
                                    <small>
                                        {{ $lab->description }}
                                    </small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection