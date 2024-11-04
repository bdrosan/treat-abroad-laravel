@extends("layouts.client.layout")

@section("head")
    <link rel="stylesheet" type="text/css" href="{{ asset('css/doctor.css') }}"/>
@endsection

@section("main")
    <div class="container-fluid my-3">
        <div class="row g-3 doc_list_cnt mb-4">
            <div class="col-lg-3 px-2 mt-5">
                <form action="{{ route('doctors.index') }}">
                    <div class="card p-3 rounded" id="search-doctor-card">
                    <div class="form-group mb-3">
                        <label class="text-lg font-weight-bold" for="city-selector">Country</label>
                        <select class="custom-select" name="country_id" id="city-selector">
                            <option value="-1" selected>All Country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}"  {{ $country->id == request()->get("country_id", null) ? "selected" : "" }}>
                                    {{ $country->name }} - {{ $country->doctors->count() }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label class="text-lg font-weight-bold" for="speciality-selector">Speciality</label>
                        <select class="custom-select" name="speciality_id" id="speciality-selector">
                            <option value="-1" selected>All Speciality</option>
                            @foreach($specialities as $speciality)
                                <option value="{{ $speciality->id }}" {{ $speciality->id == request()->get("speciality_id", null) ? "selected" : "" }}>
                                    {{ $speciality->name }} - {{ $speciality->doctors->count() }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                        <div class="form-group mb-3">
                            <label class="text-lg font-weight-bold" for="language-selector">Language</label>
                            <select class="custom-select" name="language_id" id="language-selector">
                                <option value="-1" selected>All Language</option>
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}" {{ $language->id == request()->get("language_id", null) ? "selected" : "" }}>
                                        {{ $language->name }} - {{ $language->doctors->count() }}
                                    </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group mb-3">
                            <label class="text-lg font-weight-bold" for="gender-selector">Gender</label>
                            <select class="custom-select" name="gender" id="gender-selector">
                                <option value="male" {{ "male" == request()->get("gender", null) ? "selected" : "" }}>
                                    Male ♂
                                </option>
                                <option value="female" {{ "female" == request()->get("gender", null) ? "selected" : "" }}>
                                    Female ♀
                                </option>
                                <option selected value="all" {{ "all" == request()->get("gender", null) ? "selected" : "" }}>
                                    All
                                </option>
                            </select>
                        </div>

                    <div class=" border-0 row justify-content-center">
                        <a href="{{ route("doctors.index") }}" class="btn mx-2 col-lg-5" style="color: #f24e15;">Clear All</a>
                        <button type="submit" class="btn btn-success mx-2 col-lg-5">Search</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-lg-8 row">
                <div class="col-12">
                    <h3 class="mb-2 result-doc text-black underline">
                        {{ $doctors->count() }} Doctor(s)
                    </h3>
                </div>
                @foreach($doctors as $doctor)
                    @include("doctors.DoctorCard")
                @endforeach
            </div>
        </div>
    </div>
    <br><br><br><br>


    <script>
        $(document).ready(function() {
            $('#city-selector').select2();
        });
    </script>
@endsection