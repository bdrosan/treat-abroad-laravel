@php
    use App\Models\Country;

    $country = Country::find(request("country_id"));
    $countryName = strtolower( $country?->name );
@endphp
@extends("layouts.client.layout")

@section("main")
    <div class="container my-3 mb-b">
        <div class="row justify-content-center mb-4">
            <div class="col-12">
                <div class="my-2  rounded">
                    <div class="row justify-content-center  ">
                        <a href="{{ route('hospitals.index') }}"
                           class="col-3 m-1 bg-light border-right cursor-pointer py-1 text-center {{ $countryName == null ? "country-selected" : "" }} ">All Hospitals 🌎</a>
                        <a href="{{ route('hospitals.index', ['country_id' => $malaysia->id]) }}"
                           class="col-3 m-1 bg-light  border-right cursor-pointer py-1 text-center {{ $countryName == "malaysia" ? "country-selected" : "" }} ">{{ $malaysia->name }}
                            🇲🇾</a>
                        <a href="{{ route('hospitals.index', ['country_id' => $bangladesh->id]) }}"
                           class="col-3 m-1 bg-light  border-right cursor-pointer py-1 text-center {{ $countryName == "bangladesh" ? "country-selected" : "" }} ">{{ $bangladesh->name }}
                            🇧🇩</a>
                        <a href="{{ route('hospitals.index', ['country_id' => $india->id]) }}"
                           class="col-3 m-1 bg-light  border-right cursor-pointer py-1 text-center {{ $countryName == "india" ? "country-selected" : "" }} ">{{ $india->name }}
                            🇮🇳</a>
                        <a href="{{ route('hospitals.index', ['country_id' => $singapore->id]) }}"
                           class="col-3 m-1 bg-light  border-right cursor-pointer py-1 text-center {{ $countryName == "singapore" ? "country-selected" : "" }} ">{{ $singapore->name }}
                            🇸🇬</a>
                        <a href="{{ route('hospitals.index', ['country_id' => $thailand->id]) }}"
                           class="col-3 m-1 bg-light  border-right cursor-pointer py-1 text-center {{ $countryName == "thailand" ? "country-selected" : "" }} ">{{ $thailand->name }}
                            🇹🇭</a>
                    </div>
                </div>
                <h3 class="mb-2 text-center border-bottom mt-3 result-doc text-black underline">
                    Top Hospitals {{ request()->exists("country_id") ? "in" : "" }}
                    <strong class="text-danger text-capitalize">{{ $country?->name }}</strong>
                    ({{ $hospitals->count() }})
                </h3>
            </div>
            @foreach($hospitals as $hospital)
                @include("hospitals.CardHospital")
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection