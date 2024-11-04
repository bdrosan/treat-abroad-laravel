@extends("layouts.client.layout")

@section("head")
    <title>
        Cities
    </title>
@endsection

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-around mb-4">
            <div class="col-12 row">
                <h3 class="mb-2 col-lg-6 result-doc text-black underline">
                    Total ({{ $cities->count() }})
                </h3>
                <div class="form-group col-lg-6">
                    <form method="get" action="{{ route("cities.index") }}">
                        <select
                                onchange="this.parentElement.submit()"
                                name="country_id"
                                class="custom-select mb-1 form-control-sm"
                                id="city-selector"
                                required>
                            <option value="0" selected>
                                All Country
                            </option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ request()->get("country_id") == $country->id ? "selected" : "" }}>
                                    {{ $country->name }} - {{ $country->cities->count() }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
            @if(request()->exists("country_id"))
                <div class="col-12 flex justify-content-end">
                    <img
                            style="max-width: 100px;"
                            width="100px"
                            height="80px"
                            src="/country-images/"{{ $country->logo_url }}  />
                </div>
            @endif
            <div class="col-lg-12 row justify-content-start">
                @foreach($cities as $city)
                    @include("city.CardCity")
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection