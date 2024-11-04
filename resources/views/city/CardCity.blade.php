<div class="card m-3  rounded inner-shadow" style="min-width: 180px">
    <div class="card-body p-1">
        <div class="">
            {{ $city->name }}
        </div>
        <a href="{{ route('doctors.index') }}?city_id={{$city->id}}">
            Doctors <span class="rounded px-1 text-white bg-primary">{{ $city->doctors->count() }}</span>
        </a>
    </div>
</div>