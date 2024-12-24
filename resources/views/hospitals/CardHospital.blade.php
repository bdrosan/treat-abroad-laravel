<div class="card m-2 p-1" style="width: 18rem;">
    <img
        src="/images/{{ $hospital->image }}"
        class="card-img-top"
        alt="Hospital Image"
        style="height: 180px; object-fit: contain;"
    />
    <div class="card-body p-2">
        <h5 class="card-title mb-1">
            <div>{{ $hospital->name }}</div>
            <span class="badge bg-success text-white">
                {{ $hospital->type }} Hospital
            </span>
        </h5>
        <small class="card-text mb-0">{{ $hospital->address }}</small>
        <p class="card-text mb-0">
            <strong>Contact:</strong> {{ $hospital->phone }}
        </p>
        <a href="{{ route('hospitals.show', ["id" => $hospital->slug]) }}" class="btn btn-primary">View Details</a>
    </div>
</div>