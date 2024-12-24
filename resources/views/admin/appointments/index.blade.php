@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $appointments->count() }} Appointments
                </span>
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Patient Name</th>
                        <th class="py-3 px-6 text-left">Phone</th>
                        <th class="py-3 px-6 text-left">Whatsapp</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Age</th>
                        <th class="py-3 px-6 text-left">Gender</th>
                        <th class="py-3 px-6 text-left">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $appointment->id }}</td>
                        <td class="py-3 px-6">
                            {{ $appointment->name }}
                        </td>
                        <td class="py-3 px-6">{{ $appointment->phone }}</td>
                        <td class="py-3 px-6">{{ $appointment->whatsapp }}</td>
                        <td class="py-3 px-6">{{ $appointment->email }}</td>
                        <td class="py-3 px-6">{{ $appointment->age }}</td>
                        <td class="py-3 px-6">{{ $appointment->gender }}</td>
                        <td class="py-3 px-6">
                            {{ $appointment->created_at->diffForHumans() }}
{{--                            <a class="bg-green-500 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.blogs.edit', ['id' => $blog->id]) }}">--}}
{{--                                Edit--}}
{{--                                <i class="fa-regular fa-pen-to-square"></i>--}}
{{--                            </a>--}}
{{--                            <a class="bg-orange-600 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.blogs.show', ['id' => $blog->id]) }}">--}}
{{--                                view--}}
{{--                                <i class="fa-regular fa-eye"></i>--}}
{{--                            </a>--}}
{{--                            <a class="bg-red-600 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.blogs.destroy', ['id' => $blog->id]) }}">--}}
{{--                                Delete--}}
{{--                                <i class="fa-regular fa-trash-alt"></i>--}}
{{--                            </a>--}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate my-5">
                    {{ $appointments->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection