<a href="{{ route('doctors.index') }}?speciality_id={{ $speciality->id }}"
   class="card px-1 m-2 shadow pt-2"
   style="min-width: 12rem; width: 10rem; background: #f4f4f4">
    <img src="/images/{{ $speciality->image }}"
         style="width: 80px; height: 80px;"
         class="d-inline-block card-img-top m-auto mt-2"
         alt="{{ $speciality->name }}">
    <div class="card-body text-center">
        <h5 class="card-title">
            {{ $speciality->name }}
        </h5>
        <strong class="text-left">
            {{ $speciality->doctors->count() }} doctors
        </strong>
        <p class="card-text">
            {{ $speciality->details }}
        </p>
    </div>
</a>