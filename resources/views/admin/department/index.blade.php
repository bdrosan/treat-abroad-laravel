@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $departments->count() }} Departments
                </span>
                <a href="{{ route("admin.departments.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create +</a>
                
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
{{--                        <th class="py-3 px-6 text-left">Image</th>--}}
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $department)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $department->id }}</td>
{{--                        <td class="py-3 px-6">--}}
{{--                            <img src="{{ "/images/". $hospital->profile_picture }}" width="50px" height="60px" alt="" />--}}
{{--                        </td>--}}
                        <td class="py-3 px-6">{{ $department->name }}</td>
                        <td class="py-3 px-6">{{ $department->details }}</td>
                        <td class="py-3 px-6">

                            <a class="bg-green-500 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.departments.edit', ['id' => $department->id]) }}">
                                Edit
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                            <a class="bg-orange-600 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.departments.show', ['id' => $department->id]) }}">
                                view
                                <i class="fa-regular fa-eye"></i>
                            </a>
                            <a class="bg-red-600 text-white p-2 py-1 d-inline-block my-1 rounded" href="{{ route('admin.departments.destroy', ['id' => $department->id]) }}">
                                Delete
                                <i class="fa-regular fa-trash-alt"></i>
                            </a>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate my-5">
                    {{ $departments->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection