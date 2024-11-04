@extends("layouts.client.layout")

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <h3 class="mb-2 result-doc text-black underline">
                    Total ({{ $blogs->count() }})
                </h3>
            </div>
            @foreach($blogs as $blog)
                @include("blogs.CardBlog")
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection