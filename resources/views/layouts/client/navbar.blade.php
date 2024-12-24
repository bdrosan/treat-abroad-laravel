@php
    use App\Models\Country;use App\Models\DiagnosticCenter;use App\Models\Doctor;use App\Models\Hospital;use App\Models\Service;use App\Models\Speciality;
@endphp
<div class="menu-area menu-sticky bg-primary text-white">
    <div class="container-fluid">
        <div class="main-menu" >
            <div class="row ">
                <div class="col-sm-12">
                    <a class="rs-menu-toggle px-2">
                        <i class="fa fa-bars"></i>Menu
                    </a>
                    <nav class="rs-menu">
                        <ul class="nav-menu  text-center">

                            <!--Home-->
                            <li class="menu-item-has-children">
                                <a href="{{ route('home') }}">
                                    <img style="max-height: 2em;"
                                         src="/images/{{ \App\Models\Setting::key('site_logo_url') }}" alt="Home">
                                </a>
                            </li>
                            <!--Home End-->

                            <!--Doctor-->
                            <li class="menu-item-has-children {{ Route::currentRouteName() == "doctors.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("doctors.index") }}">
                                    <i class="fa-solid fa-user-doctor"></i>
                                    {{ __("doctors") }}
                                </a>

                                <ul class="sub-menu">
                                    @foreach(Doctor::all() as $doctor)
                                        <li>
                                            <a href="{{ route('doctors.show', ['slug' => $doctor->slug]) }}">{{ $doctor->name }}</a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--Doctor End-->

                            <!--Specialties-->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "specialities.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("speciality.index") }}">
                                    <i class="fa-regular fa-building text-white"></i>
                                    {{ __("specialties") }}
                                </a>
                                <ul class="sub-menu">
                                    @foreach(Speciality::all() as $speciality)
                                        <li>
                                            <a href="{{ route('doctors.index') }}?speciality_id={{ $speciality->id }}">{{ $speciality->name }}</a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--Specialties End-->


                            <!--Diagnostic Center-->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "diagnostic-centers.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("diagnostic-centers.index") }}">
                                    <i class="fa-regular fa-building text-white"></i>
                                    {{ __("Diagnostic Center") }}
                                </a>
                                <ul class="sub-menu">
                                    @foreach(DiagnosticCenter::all() as $diagnosticCenter)
                                        <li>
                                            <a href="{{ route('diagnostic-centers.show', [ 'id' => $diagnosticCenter->id ]) }}">{{ $diagnosticCenter->name }}</a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--Diagnostic Center End-->

                            <!--Hospital-->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "hospitals.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("hospitals.index") }}">
                                    <i class="fa-regular fa-hospital text-white"></i>
                                    {{ __("hospitals") }}
                                </a>
                                <ul class="sub-menu">
                                    @foreach(Hospital::all() as $hospital)
                                        <li>
                                            <a href="{{ route('hospitals.show', ['id' => $hospital->id]) }}">
                                                {{ $hospital->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--Hospital End-->

                            <!--Services-->
                            <li class="menu-item-has-children">
                                <a href="">
                                    <i class="fa-regular fa-hospital text-white"></i>
                                    {{ __("Services") }}
                                </a>
                                <ul class="sub-menu">
                                    @foreach(Service::all() as $service)
                                        <li>
                                            <a href="{{ route('blogs.show', ['blogIdentifier' => $service->blog->slug]) }}">
                                                {{ $service->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--Services End-->

                            <!--country-->
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <i class="fa-regular fa-building text-white"></i>
                                    {{ __("Country") }}
                                </a>
                                <ul class="sub-menu">
                                    @foreach(Country::all() as $country)
                                        <li>
                                            <a href="{{ route('hospitals.index') }}?country_id={{ $country->id }}">{{ $country->name }}</a>
                                        </li>
                                    @endforeach
                                    <div class="sub-menu-close">
                                        <i class="fa fa-times" aria-hidden="true"></i>Close
                                    </div>
                                </ul>
                            </li>
                            <!--country End-->

                            <!-- Blogs -->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "blogs.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("blogs.index") }}">
                                    <i class="fa-regular fa-hospital text-white"></i>
                                    {{ __("blogs") }}
                                </a>
                            </li>
                            <!--Blogs End-->

                            <!--About Menu Start-->
                            <li class="menu-item-has-children {{ Route::currentRouteName() == "aboutus.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route('about-us') }}">
                                    <i class="fa-regular fa-address-card text-white"></i>
                                    {{ __("about_us") }}
                                </a>
                            </li>
                            <!--About Menu End-->

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>