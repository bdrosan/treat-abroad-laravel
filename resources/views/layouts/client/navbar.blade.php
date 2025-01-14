@php
use App\Models\Country;use App\Models\DiagnosticCenter;use App\Models\Doctor;use App\Models\Hospital;use App\Models\Service;use App\Models\Speciality;
@endphp

<nav class="rs-menu">
    <ul class="nav-menu">

        <!--Home-->
        <li class="menu-item-has-children">
            <a href="{{ route('home') }}">Home </a>
        </li>
        <!--Home End-->

        <!--Doctor-->
        <li class="{{ Route::currentRouteName() == 'doctors.index' ? 'nav-selected' : '' }} ">
            <a href="{{ route('doctors.index') }}">
                {{ __('doctors') }}
            </a>
        </li>
        <!--Doctor End-->

        <!--Hospital-->
        <li class="menu-item-has-children  {{ Route::currentRouteName() == "hospitals.index" ? "nav-selected" : "" }} ">
            <a href="{{ route('hospitals.index') }}">
                {{ __('hospitals') }}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="/hospitals?country_id=5">
                        {{ __('Thailand') }}
                    </a>
                    <a href="/hospitals?country_id=2">
                        {{ __('Malaysia') }}
                    </a>
                    <a href="/hospitals?country_id=4">
                        {{ __('India') }}
                    </a>
                    <a href="/hospitals?country_id=1">
                        {{ __('Bangladesh') }}
                    </a>
                </li>
                <div class="sub-menu-close">
                    <i class="fa fa-times" aria-hidden="true"></i>Close
                </div>
            </ul>
        </li>
        <!--Hospital End-->

        <!--Diagnostic Center-->
        <li class="menu-item-has-children  {{ Route::currentRouteName() == "diagnostic-centers.index" ? "nav-selected" : "" }} ">
            <a href="{{ route('diagnostic-centers.index') }}">
                {{ __('Diagnostic Center') }}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">{{ __('Diagnostic 1') }}</a>
                    <a href="#">{{ __('Diagnostic 2') }}</a>
                    <a href="#">{{ __('Diagnostic 3') }}</a>
                    <a href="#">{{ __('Diagnostic 4') }}</a>
                    <a href="#">{{ __('Diagnostic 5') }}</a>
                </li>
                <div class="sub-menu-close">
                    <i class="fa fa-times" aria-hidden="true"></i>Close
                </div>
            </ul>
        </li>
        <!--Diagnostic Center End-->

        <!--Services-->
        <li class="menu-item-has-children">
            <a href=" #">
                {{ __('Medical Visa') }}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        {{ __('Thailand') }}
                    </a>
                    <a href="#">
                        {{ __('India') }}
                    </a>
                    <a href="#">
                        {{ __('Singapore') }}
                    </a>
                    <a href="#">
                        {{ __('Malaysia') }}
                    </a>
                </li>
                <div class="sub-menu-close">
                    <i class="fa fa-times" aria-hidden="true"></i>Close
                </div>
            </ul>
        </li>
        <!--Services End-->

        <!--Services-->
        <li class="menu-item-has-children">
            <a href=" #">
                {{ __('Services') }}
            </a>
            <ul class="sub-menu">
                <li>
                    <a href="#">
                        {{ __('Online consultation') }}
                    </a>
                    <a href="#">
                        {{ __('Hotel booking') }}
                    </a>
                    <a href="#">
                        {{ __('Tickets booking') }}
                    </a>
                    <a href="#">
                        {{ __('Airport pickup') }}
                    </a>
                    <a href="#">
                        {{ __('Medicine Order') }}
                    </a>
                    <a href="#">
                        {{ __('Physiotherapy @ home') }}
                    </a>
                    <a href="#">
                        {{ __('Medical equipment') }}
                    </a>
                    <a href="#">
                        {{ __('Hospital admission') }}
                    </a>
                </li>
                <div class="sub-menu-close">
                    <i class="fa fa-times" aria-hidden="true"></i>Close
                </div>
            </ul>
        </li>
        <!--Services End-->

        <!-- Blogs -->
        <li class="{{ Route::currentRouteName() == "blogs.index" ? "nav-selected" : "" }} ">
            <a href="{{ route('blogs.index') }}">
                {{ __('blogs') }}
            </a>
        </li>
        <!--Blogs End-->

        <!--About Menu Start-->
        <li class="{{ Route::currentRouteName() == "aboutus.index" ? "nav-selected" : "" }} ">
            <a href="{{ route('about-us') }}">
                {{ __('about_us') }}
            </a>
        </li>
        <!--About Menu End-->

        <!--Contant Menu Start-->
        <li>
            <a href="{{ route('contact') }}">
                {{ __('Contact') }}
            </a>
        </li>
        <!--Contact Menu End-->

    </ul>
</nav>