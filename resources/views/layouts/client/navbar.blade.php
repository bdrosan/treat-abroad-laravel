<div class="menu-area menu-sticky bg-primary text-white">
    <div class="container">
        <div class="main-menu " >
            <div class="row">
                <div class="col-sm-12">
                    <a class="rs-menu-toggle">
                        <i class="fa fa-bars"></i>Menu
                    </a>
                    <nav class="rs-menu">
                        <ul class="nav-menu">
                            <!-- Home -->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "home" ? "nav-selected" : "" }} ">
                                <a href="/" class="home text-white">
                                    <i class="fa-solid fa-house  text-white"></i>
                                    {{ __("home") }}
                                </a>
                            </li>
                            <!-- End Home -->

                            <!--Doctor-->
                            <li class="menu-item-has-children {{ Route::currentRouteName() == "doctors.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("doctors.index") }}">
                                    <i class="fa fa-user-md text-white" aria-hidden="true"></i>
                                    {{ __("doctors") }}
                                </a>
                            </li>
                            <!--Doctor End-->

                            <!--Specialties-->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "specialities.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("speciality.index") }}">
                                    <i class="fa-regular fa-building text-white"></i>
                                    {{ __("specialties") }}
                                </a>
                            </li>
                            <!--Specialties End-->

                            <!--Hospital-->
                            <li class="menu-item-has-children  {{ Route::currentRouteName() == "hospitals.index" ? "nav-selected" : "" }} ">
                                <a href="{{ route("hospitals.index") }}">
                                    <i class="fa-regular fa-hospital text-white"></i>
                                    {{ __("hospitals") }}
                                </a>
                            </li>
                            <!--Hospital End-->

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