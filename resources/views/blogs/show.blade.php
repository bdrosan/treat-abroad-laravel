@extends("layouts.client.layout")

@section("head")
    <meta name="description" content="{{ $blog->meta_description }}">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="{{ $blog->meta_keywords }}">
@endsection

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <!-- Blog Card -->
                <div class="card mb-4">
                    <div class="row g-0">
                        <!-- Blog Thumbnail -->
                        <div class="col-md-4">
                            <img src="/images/{{ $blog->image }}" class="img-fluid rounded-start"
                                 alt="Blog Thumbnail">
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">{{ $blog->title }}</h2>
                                <p class="card-text text-muted">
                                    {{ $blog->description }}
                                </p>
                                <hr>
                                <div class="blog-content">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Blog Posts (Optional Section) -->
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="/images/{{ $blog->image }}" class="card-img-top" alt="Thumbnail">
                                <div class="card-body">
                                    <a href="{{ route('blogs.show', ['blogIdentifier' => $blog->slug]) }}">
                                        <h5 class="card-title">{{ $blog->title }}</h5>
                                    </a>
                                    <p class="card-text">{{ $blog->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection