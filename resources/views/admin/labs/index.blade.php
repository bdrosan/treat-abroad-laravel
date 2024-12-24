@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $labs->count() }} Labs
                </span>
                <a href="{{ route("admin.labs.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create +</a>
                
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
{{--                        <th class="py-3 px-6 text-left">Image</th>--}}
                        <th class="py-3 px-6 text-left">Name</th>
{{--                        <th class="py-3 px-6 text-left">Image</th>--}}
                        <th class="py-3 px-6 text-left">Description</th>
                        <th class="py-3 px-6 text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($labs as $lab)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $lab->id }}</td>
{{--                        <td class="py-3 px-6">--}}
{{--                            <img src="{{ "/images/". $hospital->profile_picture }}" width="50px" height="60px" alt="" />--}}
{{--                        </td>--}}
                        <td class="py-3 px-6">{{ $lab->name }}</td>
{{--                        <td class="py-3 px-6">--}}
{{--                            <img style="width: 60px; height:60px;" src="/images/{{ $lab->image }}" alt="">--}}
{{--                        </td>--}}
                        <td class="py-3 px-6">{{ $lab->description }}</td>
                        <td class="py-3 px-6">
                            <a class="transition text-sm bg-blue-500 text-white shadow rounded p-1 hover:shadow-md hover:bg-blue-600" href="{{ route('admin.labs.edit', ['id' => $lab->id]) }}">
                                Edit
                                <i class="fa-regular fa-pen-to-square fa-fw"></i>
                            </a>
                            <a class="transition text-sm bg-green-500 text-white shadow rounded p-1 hover:shadow-md hover:bg-green-600" href="{{ route('admin.labs.show', ['id' => $lab->id]) }}">
                                View
                            </a>
                            <form class="inline" action="{{ route('admin.labs.destroy', ['id' => $lab->id]) }}" method="post">
                                @csrf
                                <button class="transition text-sm bg-red-500 text-white shadow rounded p-1 hover:shadow-md hover:bg-red-600 d-inline" type="submit">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="paginate my-5">
                    {{ $labs->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection