@extends("layouts.client.layout")

@section("head")
    <title>
        Diagnostic Center
    </title>
@endsection

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <h3 class="text-center mb-2 result-doc text-black underline">
                    {{ __("Diagnostic Center") }} <small>({{ $diagnosticCenters->count() }})</small>
                </h3>
                <hr>
            </div>
            @foreach($diagnosticCenters as $diagnosticCenter)
                @include("diagnostic-center.CardSpeciality")
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection