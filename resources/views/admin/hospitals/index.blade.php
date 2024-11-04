@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <small>
                    Total {{ $hospitals->count() }} Hospitals
                </small>
                <a href="{{ route("admin.hospitals.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create +</a>
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
                    @foreach($hospitals as $hospital)
                    <tr class="border-b">
                        <td class="py-3 px-6">{{ $hospital->id }}</td>
                        <td class="py-3 px-6">
                            <img src="{{ "/images/". $hospital->image }}" width="50px" height="60px" alt="" />
                        </td>
                        <td class="py-3 px-6">
                            <a href="{{ route('admin.hospitals.show', ['id' => $hospital->id]) }}">{{ $hospital->name }}</a>
                        </td>
                        <td class="py-3 px-6">
                            {{ $hospital?->city?->name .", ". $hospital?->city?->country->name ." ". $hospital?->city?->country->icon_symbol }}
                        </td>
                        <td class="py-3 px-6">
                            <a class="bg-orange-500 text-gray-50 p-2 m-1 rounded" href="{{ route('admin.hospitals.edit', ['id' => $hospital->id]) }}">
                                Edit
                            </a>
                            <a class="bg-blue-500 text-gray-50 p-2 m-1 rounded" href="{{ route('admin.hospitals.show', ['id' => $hospital->id]) }}">
                                View
                            </a>
                            <form class="inline" action="{{ route('admin.hospitals.destroy', ['id' => $hospital->id]) }}" method="post">
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
                    {{ $hospitals->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection