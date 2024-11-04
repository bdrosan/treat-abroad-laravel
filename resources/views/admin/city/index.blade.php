@extends("admin.layout.AdminLayout")


@section("main")
    <!-- Content area -->
    <main class="flex-grow p-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h5 class="text-l font-semibold flex justify-between">
                <span>
                    {{ $cities->total() }} Cities
                </span>
                <a href="{{ route("admin.cities.create") }}" class=" px-2 py-1 rounded-md bg-green-500 text-white ">Create +</a>
                
            </h5>
            <!-- Table -->
            <div class="overflow-x-auto mt-2">
                <table class="min-w-full bg-white rounded-lg shadow-md">
                    <thead>
                    <tr class="bg-gray-800 text-white text-center">
                        <th class="py-3 px-6">Id</th>
                        <th class="py-3 px-6">Image</th>
                        <th class="py-3 px-6">Name</th>
                        <th class="py-3 px-6">Country</th>
                        <th class="py-3 px-6">Total Hospitals</th>
                        <th class="py-3 px-6">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cities as $city)
                    <tr class="border-b text-center">
                        <td class=" px-6">{{ $city->id }}</td>
                        <td class=" px-6">
                            <img src="{{ "/images/". $city->image }}" width="50px" height="60px" alt="" />
                        </td>
                        <td class=" px-6">{{ $city->name }}</td>
                        <td class=" px-6">
                            {{ $city->country->name_symbol }}
                        </td>
                        <td class="text-center">
                            {{ $city->hospitals->count() }}
                        </td>
                        <td class=" px-6">
                            <a class="transition d-inline-block bg-blue-500 text-gray-50 p-2 py-1 m-1 rounded hover:shadow-md hover:bg-blue-600" href="{{ route('admin.cities.edit', ['id' => $city->id]) }}">
                                Edit
                            </a>
                            <form class="inline" action="{{ route('admin.cities.destroy', ['id' => $city->id]) }}" method="post">
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
                    {{ $cities->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection