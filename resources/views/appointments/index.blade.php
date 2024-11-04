@extends("layouts.client.layout")

@section("main")
    <div class="container-fluid mb-5" style="background: dodgerblue">
        <section style="background-color: transparent; padding: 3rem 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11" style="background: transparent;">
                        <div class="row justify-content-between" style="background: transparent;">
                            <!-- Form column first (on the left) -->
                            <div class="col-lg-6 p-3 rounded bg-white">
                                <h3 class="mb-3 py-3 bg-success text-white text-center" style="font-size: 1.5rem; font-family: Poppins,sans-serif;">
                                    {{ __("Book Doctor Appointment Online") }}
                                </h3>
                                <form action="{{ route('appointments.book') }}" class="row" method="post" id="dateForm">
                                    @csrf
                                    <div class="form-group col-lg-6">
                                        <label for="firstname" class=" font-weight-bold">
                                            <sup class="text-danger">*</sup>{{ __("First Name") }}
                                        </label>
                                        <input type="text" id="firstname" name="firstname" class="form-control form-control-sm" placeholder="{{ __("Enter name") }}" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="lastname" class=" font-weight-bold">
                                            <sup class="text-danger">*</sup>Last Name
                                        </label>
                                        <input type="text" id="lastname" name="lastname" class="form-control form-control-sm" placeholder="Enter name" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="phone" class=" font-weight-bold">
                                            <sup class="text-danger">*</sup> Your Phone Number
                                        </label>
                                        <input type="text" id="phone" name="phone" class="form-control form-control-sm" placeholder="Enter Phone Number" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="whatsapp" class=" font-weight-bold">
                                            Your Whatsapp Number <small class="text-secondary">(Optional)</small>
                                        </label>
                                        <input type="text" id="whatsapp" name="whatsapp" class="form-control form-control-sm" placeholder="Enter Whatsapp Number" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="email" class=" font-weight-bold">
                                            Your Email Address <small class="text-secondary">(Optional)</small>
                                        </label>
                                        <input type="text" id="email" name="email" class="form-control form-control-sm" placeholder="Enter Email Address" required />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="dob" class=" font-weight-bold">
                                            <sup class="text-danger">*</sup>Your Date of Birth
                                        </label>
                                        <input type="date" id="dob" name="dob" class="form-control form-control-sm" placeholder="Enter Whatsapp Number" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="text-lg font-weight-bold" for="city-selector">
                                            <sup class="text-danger">*</sup>Select City
                                        </label>
                                        <select class="custom-select mb-1 form-control-sm" id="city-selector" required>
                                            <option value="0" selected>
                                                Select City
                                            </option>
                                            @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!---- Speciality----->
                                    <div class="form-group col-lg-6">
                                        <label class="text-lg font-weight-bold" for="speciality-selector">
                                            <sup class="text-danger">*</sup>Speciality
                                        </label>
                                        <select class="custom-select form-control-sm" id="speciality-selector">
                                            <option value="0" selected>Select Speciality</option>
                                            @foreach($specialities as $speciality)
                                                <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!---- End Speciality----->

                                    <div class="form-group col-lg-12">
                                        <label for="issue" class=" font-weight-bold">
                                            <sup class="text-danger">*</sup>Your Issue
                                        </label>
                                        <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group  col-lg-12">
                                        <button type="submit" class="w-100 btn btn-primary text-white">Book</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Image column second (on the right) -->
                            <div class="col-lg-6" style="background: transparent;">
                                <figure class="mb-0" style="background: transparent;">
                                    <img src="images/doctor-removebg-preview.png" alt="Book an Appointment" class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection