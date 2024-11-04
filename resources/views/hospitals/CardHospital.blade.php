<div class="card m-2" style="width: 18rem;">
    <img
            src="/images/{{ $hospital->image }}"
            class="card-img-top"
            alt="Hospital Image" />
    <div class="card-body p-2">
        <h5 class="card-title mb-1">{{ $hospital->name }}</h5>
        <p class="card-text mb-1">{{ $hospital->address }}</p>
        <p class="card-text mb-1">
            <strong>Contact:</strong> {{ $hospital->phone }}
        </p>
        <div class="card-text mb-1 text-sm">
            <small>
                {{ $hospital->moto }}
            </small>
        </div>
        <a href="{{ route('hospitals.show', ["id" => $hospital->slug]) }}" class="btn btn-primary">View Details</a>
    </div>
</div>