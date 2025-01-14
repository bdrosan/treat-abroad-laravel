<a href="{{ route('diagnostic-centers.index') }}?dc_id={{ $diagnosticCenter->id }}"
   class="card px-1 m-2 shadow pt-2"
   style="min-width: 12rem; width: 10rem; background: #f4f4f4">
    <img src="/images/{{ $diagnosticCenter->image }}"
         style="width: 80px; height: 80px;"
         class="d-inline-block card-img-top m-auto mt-2"
         alt="{{ $diagnosticCenter->name }}">
    <div class="card-body text-center">
        <h5 class="card-title">
            {{ $diagnosticCenter->name }}
        </h5>
        <p class="card-text">
            {{ $diagnosticCenter->details }}
        </p>
    </div>
</a>