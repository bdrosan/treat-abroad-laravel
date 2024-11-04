@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-2">
        <div class="grid justify-around lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-3 bg-white p-2 rounded-lg shadow-md">
            <div class="p-2 mx-2 rounded bg-green-100 border">
                <strong class="text-lg"><i class="fa-solid fa-user-doctor"></i> Total Doctors </strong> <br>
                {{ $doctors->count() }}
            </div>
            <div class="p-2 mx-2 rounded bg-purple-50 border">
                <strong class="text-lg"><i class="fa-solid fa-hospital"></i> Total Hospital</strong> <br>
                {{ $hospitals->count() }}
            </div>
            <div class="p-2 mx-2 rounded bg-yellow-100 border">
                <strong class="text-lg"><i class="fa-brands fa-blogger"></i> Total Blogs</strong> <br>
                {{ $blogs->count() }}
            </div>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-3 bg-white p-2 rounded-lg shadow-md">
            <div class="p-2 mx-2 rounded bg-orange-100 border">
                <strong class="text-lg"><i class="fa-solid fa-flag"></i> Total Countries</strong> <br>
                {{ $countries->count() }}
            </div>
            <div class="p-2 mx-2 rounded bg-indigo-100 border">
                <strong class="text-lg"><i class="fa-solid fa-city"></i> Total Cities</strong> <br>
                {{ $cities->count() }}
            </div>
            <div class="p-2 mx-2 rounded bg-green-100 border">
                <strong class="text-lg">
                    <i class="fa-solid fa-calendar-check"></i>
                    Appointment Today
                </strong>  <br>
                <small>
                    Today: {{ $appointmentsToday->count() }}
                </small> |
                <small>
                    This Week: {{ $appointmentsThisWeek->count() }}
                </small> |
                <small>
                    This Month: {{ $appointmentsThisMonth->count() }}
                </small>
            </div>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-3 bg-white p-2 rounded-lg shadow-md">

        </div>
    </main>
@endsection