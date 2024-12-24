<div class="col-lg-4 mb-3">
    <div class="doc_bx transition p-2">
        <div class="info">
            <div class="doc-title-card">
                <a href="{{ route('doctors.show', ["id" => $doctor->slug ?? $doctor->id ]) }}">
                    {{ $doctor->name }}
                </a>
            </div>
            @foreach($doctor->specialities as $speciality)
                <small class="d-block" style="line-height: 16px;">
                    <small class="text-success">
                        <i class="fa-solid fa-circle-dot"></i>
                    </small> {{ $speciality->name }}
                </small>
            @endforeach
            <span class="my-2 d-block">
                <i class="fa fa-map-marker-alt text-danger mr-2"></i>
                {{ $doctor->city->name ?? "" }}
            </span>

            <span class="my-2 d-block" style="text-decoration: underline; color: #00274f; font-weight: bold;">
{{--                <i class="fa fa-map-marker-alt text-danger mr-2"></i>--}}
                {{ $doctor->department->name ?? "" }}
            </span>

            @if($doctor->experience_years)
            <span class="d-block" style="color: black">
                <i class="fa-solid text-dark fa-business-time mr-2"></i>
                Exp: <small>{{ $doctor->experience_years }}+ years</small>
            </span>
            @endif
        </div>
        <figure style="background: none;">
            <img class="img-fluid" alt="{{ $doctor->name }}"
                 src="/images/{{ $doctor->profile_picture }}"
                 style="height: 100%" loading="lazy">
        </figure>
        <div class="btns mt-1">
            <a href="{{ route('appointments.index') }}" class="btn book-btn">
                <i class="fa-regular fa-calendar-check"></i>
                Take Appointment
            </a>
        </div>
    </div>
</div>