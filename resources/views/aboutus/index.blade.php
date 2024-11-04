@extends("layouts.client.layout")

@section("head")
    <link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section("main")
    <br>
    <div class="container bg-white mt-6 p-2 mb-5" id="search-section">
        {!! \App\Models\Setting::key("aboutus_page_content") !!}
    </div>
    <br><br><br>
@endsection