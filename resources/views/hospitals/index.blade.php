@php
use App\Models\Country;

$country = Country::find(request("country_id"));
$countryName = strtolower( $country?->name );
@endphp
@extends("layouts.client.layout")

@section("main")
<div class="container my-3 mb-70">
    <div class="my-5">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ route('hospitals.index') }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == null ? "country-selected" : "" }} ">All Hospitals 🌎</a>
            </div>
            <div class="col-md-2"><a href="{{ route('hospitals.index', ['country_id' => $malaysia->id]) }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == "malaysia" ? "country-selected" : "" }} ">{{ $malaysia->name }}
                    🇲🇾</a></div>
            <div class="col-md-2"><a href="{{ route('hospitals.index', ['country_id' => $bangladesh->id]) }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == "bangladesh" ? "country-selected" : "" }} ">{{ $bangladesh->name }}
                    🇧🇩</a></div>
            <div class="col-md-2"><a href="{{ route('hospitals.index', ['country_id' => $india->id]) }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == "india" ? "country-selected" : "" }} ">{{ $india->name }}
                    🇮🇳</a></div>
            <div class="col-md-2"><a href="{{ route('hospitals.index', ['country_id' => $singapore->id]) }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == "singapore" ? "country-selected" : "" }} ">{{ $singapore->name }}
                    🇸🇬</a></div>
            <div class="col-md-2"><a href="{{ route('hospitals.index', ['country_id' => $thailand->id]) }}"
                    class="bg-light d-block d-block m-1 text-center {{ $countryName == "thailand" ? "country-selected" : "" }} ">{{ $thailand->name }}
                    🇹🇭</a></div>
        </div>
    </div>
    <h3 class="text-center my-3">
        Top Hospitals {{ request()->exists("country_id") ? "in" : "" }}
        <strong class="text-danger text-capitalize">{{ $country?->name }}</strong>
        ({{ $hospitals->count() }})
    </h3>
    <div class="row">
        @foreach($hospitals as $hospital)
        @include("hospitals.CardHospital")
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{$hospitals->links("vendor.pagination.bootstrap-4")}}
    </div>
</div>
<div class="pt-100"></div>
@endsection