@extends("layouts.client.layout")

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <!-- Blog Card -->
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <h1 class="text-center">Blog Not Found!!</h1>
                        <a href="{{ route("blogs.index") }}">All Blogs</a>
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