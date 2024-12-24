@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form action="" method="get">
                <div class="my-2 flex">
                    <div class="col-lg-6 col-span-1">
                        <input value="{{ request()->get('doctor_name', '') }}" type="text" id="doctor_name" name="doctor_name" placeholder="Enter Doctor Name" class="w-full p-2 border rounded-lg shadow-sm">
                    </div>
                    <div class="col-lg-6 col-span-1">
                        <button class="bg-orange-500 text-gray-100 p-2 rounded" type="submit">Search Doctor</button>
                    </div>
                </div>
            </form>
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $doctors->count() }} Doctors
                </span>
                <a href="{{ route("admin.doctors.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create
                    +</a>

            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Image</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">City</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr class="border-b">
                            <td class="py-3 px-6">{{ $doctor->id }}</td>
                            <td class="py-3 px-6">
                                <img src="{{ "/images/". $doctor->profile_picture }}" width="50px" height="60px"
                                     alt=""/>
                            </td>
                            <td class="py-3 px-6">{{ $doctor->name }}</td>
                            <td class="py-3 px-6">{{ $doctor?->city?->name }}</td>
                            <td class="py-3 px-6">
                                <a class="bg-orange-500 text-gray-50 p-2 m-1 rounded"
                                   href="{{ route('admin.doctors.edit', ['id' => $doctor->id]) }}">
                                    Edit
                                </a>
                                <a class="bg-blue-500 text-gray-50 p-2 m-1 rounded"
                                   href="{{ route('admin.doctors.show', ['id' => $doctor->id]) }}">
                                    View
                                </a>
                                <form class="inline"
                                      action="{{ route('admin.doctors.destroy', ['id' => $doctor->id]) }}"
                                      method="post">
                                    @csrf
                                    <button class="bg-red-500 text-gray-50 p-2 py-1 m-1 rounded" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate my-5">
                    {{ $doctors->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection