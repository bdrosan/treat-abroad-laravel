@extends("layouts.client.layout")

@section("head")
{{--    <meta name="description" content="{{ $dc->meta_description }}">--}}

    <!-- SEO Meta Tags -->
{{--    <meta name="keywords" content="{{ $blog->meta_keywords }}">--}}
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
                            <img src="/images/{{ $dc->image }}" class="img-fluid rounded-start"
                                 alt="Blog Thumbnail">
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title">
                                    {{ $dc->name }}
                                </h2>
                                <div class="blog-content">
                                    {!! $dc->body !!}
                                </div>
                            </div>
                        </div>
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