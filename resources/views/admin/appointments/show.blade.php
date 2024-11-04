@extends("admin.layout.AdminLayout")

@section("head")
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>--}}
@endsection

@section("main")
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="container my-3 mb-b">
                <div class="row justify-content-center mb-4">
                    <div class="col-12">
                        <!-- Blog Card -->
                        <div class="card mb-4">
                            <div class="row g-0">
                                <!-- Blog Thumbnail -->
                                <div class="col-md-4">
                                    <img src="/images/{{ $blog->image }}"
                                         class="img-fluid rounded-start"
                                         alt="Blog Thumbnail">
                                </div>
                                <!-- Blog Content -->
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header text-right">
                                            <a href="{{ route('admin.blogs.edit', ['id' => $blog->id]) }}"
                                               class="px-2 py-1 rounded my-2 bg-red-600 text-white">
                                                EDIT
                                                <i class="fa-regular fa-pen-to-square"></i>

                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h2 style="font-size: x-large;" class="card-title font-weight-bold">{{ $blog->title }}</h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection