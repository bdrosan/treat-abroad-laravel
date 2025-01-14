@extends("layouts.client.layout")
@section("title","Doctors")
@section("main")
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
    <div class="breadcrumbs-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-title">Doctors</h1>
                    <ul>
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                        <li>Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- .breadcrumbs-inner end -->
</div>
<div class="container sec-spacer">
    <div class="px-2 mt-5">
        <form action="{{ route('doctors.index') }}">
            <div class="card p-3 rounded" id="search-doctor-card">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label class="text-lg font-weight-bold" for="city-selector">Country</label>
                            <select class="custom-select" name="country_id" id="city-selector">
                                <option value="-1" selected>All Country</option>
                                @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ $country->id == request()->get("country_id", null) ? "selected" : "" }}>
                                    {{ $country->name }} - {{ $country->doctors->count() }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label class="text-lg font-weight-bold" for="department-selector">Department</label>
                            <select class="custom-select" name="department_id" id="department-selector">
                                <option value="-1" selected>All Department</option>
                                @foreach(\App\Models\Department::all() as $department)
                                <option value="{{ $department->id }}" {{ $department->id == request()->get("department_id", null) ? "selected" : "" }}>
                                    {{ $department->name }} - {{ $department->doctors->count() }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-3">
                            <label class="text-lg font-weight-bold" for="hospital-selector">Hospital</label>
                            <select class="custom-select" name="hospital_id" id="hospital-selector">
                                <option value="-1" selected>All Hospitals</option>
                                @foreach($hospitals as $hospital)
                                <option value="{{ $hospital->id }}" {{ $hospital->id == request()->get("hospital_id", null) ? "selected" : "" }}>
                                    {{ $hospital->name }} - {{ $hospital->doctors->count() }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class=" border-0 row justify-content-center">
                            <button type="submit" class="btn btn-primary mx-2 col-lg-5"><i class="bi bi-funnel"></i> Filter</button>
                        </div>
                    </div>
                </div>


                {{-- <div class="form-group mb-3">--}}
                {{-- <label class="text-lg font-weight-bold" for="speciality-selector">Speciality</label>--}}
                {{-- <select class="custom-select" name="speciality_id" id="speciality-selector">--}}
                {{-- <option value="-1" selected>All Speciality</option>--}}
                {{-- @foreach($specialities as $speciality)--}}
                {{-- <option value="{{ $speciality->id }}" {{ $speciality->id == request()->get("speciality_id", null) ? "selected" : "" }}>--}}
                {{-- {{ $speciality->name }} - {{ $speciality->doctors->count() }}--}}
                {{-- </option>--}}
                {{-- @endforeach--}}
                {{-- </select>--}}
                {{-- </div>--}}





                {{-- <div class="form-group mb-3">--}}
                {{-- <label class="text-lg font-weight-bold" for="gender-selector">Gender</label>--}}
                {{-- <select class="custom-select" name="gender" id="gender-selector">--}}
                {{-- <option value="male" {{ "male" == request()->get("gender", null) ? "selected" : "" }}>--}}
                {{-- Male ♂--}}
                {{-- </option>--}}
                {{-- <option value="female" {{ "female" == request()->get("gender", null) ? "selected" : "" }}>--}}
                {{-- Female ♀--}}
                {{-- </option>--}}
                {{-- <option selected--}}
                {{-- value="all" {{ "all" == request()->get("gender", null) ? "selected" : "" }}>--}}
                {{-- All--}}
                {{-- </option>--}}
                {{-- </select>--}}
                {{-- </div>--}}


            </div>
        </form>
    </div>
    <div class="mt-4">
        <h3>
            Doctors ({{ $doctors->count() }} found)
        </h3>
    </div>
    <div class="row">
        @foreach($doctors as $doctor)
        @include("doctors.DoctorCard")
        @endforeach
    </div>
    <div class="col-lg-10 row justify-content-center">
        {{ $doctors->links("vendor.pagination.bootstrap-5") }}
    </div>
</div>
<br><br><br><br>


<script>
    $(document).ready(function() {
        $('#city-selector').select2();
    });
</script>
@endsection