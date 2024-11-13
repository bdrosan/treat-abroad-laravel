<div class="col-lg-5 mr-4 pl-0 mb-4 shadow shadow-lg">
    <div class="row bg-white g-0 border-1">
        <div class="col-5 px-0 mx-0">
            <img  src="/images/{{ $blog->image }}" class="img-fluid rounded-start" alt="Thumbnail Image">
        </div>
        <div class="col-7 px-0 mx-0">
            <div class="card-body pt-1">
                <h4 class="card-title mb-0">
                    <a href="{{ route('blogs.show', ['blogIdentifier' => $blog->slug]) }}">{{ $blog->title }}</a>
                </h4>
                <small class="card-text mb-1">
                    {{ $blog->description }}
                </small>
                <p class="card-text mt-0">
                    <small class="text-muted">
                        {{ $blog->updated_at }}
                    </small>
                </p>
            </div>
        </div>
    </div>
</div>