<div class="col-lg-3 mb-3">
    <div class="card">
        <a href="{{ route('doctors.show', ['id' => $doctor->slug ?? $doctor->id ]) }}">
            <img src="/images/{{ $doctor->profile_picture }}" class="card-img-top" alt="{{ $doctor->name }}">
        </a>
        <div class="card-body">
            <a href="{{ route('doctors.show', ['id' => $doctor->slug ?? $doctor->id ]) }}">
                {{ $doctor->name }}
            </a>
            <!--@foreach($doctor->specialities as $speciality)
            <small class="d-block" style="line-height: 16px;">
                <small class="text-success">
                    <i class="fa-solid fa-circle-dot"></i>
                </small> {{ $speciality->name }}
            </small>
            @endforeach-->

            <span class="my-2 d-block" style="color: #00274f;">
                <i class="bi bi-prescription2 mr-2"></i>
                {{ $doctor->department->name ?? "" }}
            </span>
            <span class="my-2 d-block">
                <i class="bi bi-pin-map mr-2"></i>
                {{ $doctor->city->name ?? "" }}
            </span>

            <span class="my-2 d-block">
                <i class="bi bi-hospital mr-2"></i>
                {{ $doctor->hospitals[0]->name ?? "" }}
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